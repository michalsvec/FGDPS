<?php

/**
 * Translator loads data from configuration XML files
 *
 * @author     Michal Švec
 * @copyright  Copyright (c) 2010 Michal Švec
 * @license    New BSD License
 * @link       http://michalsvec.cz/
 * @version    0.1
 */

class XML_Translator implements ITranslator
{
	/** @var string translated presenter */
	private $presenter;

	/** @var string chosen language */
	private $lang;

	/** @var string presenter specific translation XML file */
	private $xml_pres;

	/** @var string common translation XML file */
	private $xml_common;



	/**
	 *	@param	string	presenter name for detecting language file
	 *	@param	string	language code
	 */
	function __construct($presenter, $lang) {
	
		$this->presenter = $presenter;
		$this->lang = $lang;
		
		// translation file for presenter
		$this->xml_pres = $this->load_translation_file(XML_DIR.'/lang_'.$this->lang.'_'.$this->presenter.'.xml');
		// common translation file
		$this->xml_common = $this->load_translation_file(XML_DIR.'/lang_'.$this->lang.'_common.xml');
	}



	/**
	 * Translates the given string.
	 * TODO: plural count
	 *
	 * @param  string   message
	 * @param  int      plural count
	 * @return string
	 */
	function translate($message, $count = NULL) {
		$string = $this->xml_pres->xpath('//item[@str="'.$message.'"]');
		if(empty($string))
			$string = $this->xml_common->xpath('/strings/item[str="'.$message.'"]');

		return (string) $string[0];
	}



	/**
	 *	Loads xml file
	 *
	 *	@param	string           path to file
	 *	@return SimpleXMLObject  loaded XML from file
	 */
	function load_translation_file($filename) {
		if(file_exists($filename)) {
			$xml = simplexml_load_file($filename,'SimpleXMLElement',LIBXML_NOCDATA);
		}
		return $xml;
	}


}
