<?php

/**
 *	Translator loads data from configuration XML files
 *
 *	
 */
class XML_Translator implements ITranslator
{
	private $presenter;
	private $lang;
	private $xml_pres;
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
	 *	@param	filename	path to file
	 */
	function load_translation_file($filename) {
		if(file_exists($filename)) {
			$xml = simplexml_load_file($filename,'SimpleXMLElement',LIBXML_NOCDATA);
		}
		return $xml;
	}


}
