<?php

/**
 * Loads references from XML file
 *
 * @author     Michal Švec
 * @copyright  Copyright (c) 2010 Michal Švec
 * @license    New BSD License
 * @link       http://michalsvec.cz/
 * @version    0.1
 */

class ReferencesModel extends Object
{
	/** @var string */
	private $xml_file;
	
	/** @var string */
	private $xml;



	public function __construct() {
		$this->xml_file = XML_DIR.'/references.xml';
	
		$this->xml = simplexml_load_file($this->xml_file);
	}



	/**
	 *	Transforms the reference SimpleXML object to array with all required parameters
	 *
	 *	@param  SimpleXML category obejct
	 *	@param  SimpleXML reference object
	 *	@return array     array with reference parameters
	 */
	private function referenceXMLToArr($category, $item) {
		$ref = array();

		$preview_a = $item->xpath('preview[@type="about"]');
		$preview_ref = $item->xpath('preview[@type="references"]');

		$ref['id'] = (string) $item->attributes()->id;
		$ref['category'] = (string) $category->name;
		$ref['added'] = (string) $item->attributes()->added;
		$ref['name'] = (string) $item->name;
		$ref['description'] = (string) $item->description;
		foreach($item->image as $image) {
			$ref['image_'.(string) $image->attributes()->type] = (string) $image;
		}

		return $ref;
	}



	/**
	 *	Returns limited count of latest references. 
	 *
	 *	@param	int	limit count
	 *	@return array	list od references
	 */
	public function findLatest($limit) {
	
		$references = array();

		// creates key-value array with date as a key
		foreach($this->xml as $category) {
			foreach($category as $item) {
				$references[(string) $item->attributes()->added][] = $this->referenceXMLToArr($category, $item);
			}
		}

		// sorts the array by the key
		krsort($references);

		// selects only limited count of references
		$out = array();
		$cnt = 0;
		foreach($references as $date) {
			foreach($date as $item) {
				if($cnt < $limit) {
					$out[] = $item;
					$cnt++;
				}
				else 
					break;
			}
			if($cnt >= $limit)
				break;
		}

		return $out;
	}



	/**
	 *	Returns references from one category
	 *
	 *	@param string category id
	 *	@return array reference list
	 */
	public function findByCategory($category) {
		$references = array();
		$category = $this->xml->xpath('//category[name="'.$category.'"]');

		foreach($category[0]->reference as $reference) {
			$references[(string) $reference->attributes()->added] = $this->referenceXMLToArr($category[0], $reference);
		}
		
		return $references;
	}



	/**
	 *	Finds all categories in XML file
	 *
	 *	TODO: add pager
	 *	
	 *	@return array category list 
	 */
	public function getCategoryList() {
		$categories = $this->xml->xpath('//category');
		
		$out = array();
		foreach($categories as $category) {
			$out[strip_tags((string) $category->name)] = (string) $category->name;
		}
		
		return $out;
	}	
}