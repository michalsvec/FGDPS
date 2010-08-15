<?php

/**
 * Saves information from contact form to a file and sends it to mail
 *
 * @author     Michal Švec
 * @copyright  Copyright (c) 2010 Michal Švec
 * @license    New BSD License
 * @link       http://michalsvec.cz/
 * @version    0.1
 */

/**
 * Converts SimpleXML objects into associative array
 *
 *	@link http://www.php.net/manual/en/book.simplexml.php#97555
 *	@param SimpleXML XML object
 *	@return array
 */
function objectsIntoArray($arrObjData, $arrSkipIndices = array())
{
    $arrData = array();
    
    // if input is object, convert into array
    if (is_object($arrObjData)) {
        $arrObjData = get_object_vars($arrObjData);
    }
    
    if (is_array($arrObjData)) {
        foreach ($arrObjData as $index => $value) {
            if (is_object($value) || is_array($value)) {
                $value = objectsIntoArray($value, $arrSkipIndices); // recursive call
            }
            if (in_array($index, $arrSkipIndices)) {
                continue;
            }
            $arrData[$index] = $value;
        }
    }
    return $arrData;
}

class ContactFormModel extends Object
{

	/** @var SimpleXML */
	private $config;
	
	/** @var string file for logging contact info */
	private $logFile;



	public function __construct() {

		$this->config = objectsIntoArray(simplexml_load_file(XML_DIR.'/config.xml'));
		$this->logFile = WWW_DIR."/".$this->config['log_file'];
	}



	/**
	 * Sends data from contact form to email
	 *
	 *	@param array data from form
	 */
	public function sendContactMail($body) {

		$mail = new Mail;
		$mail->setFrom($this->config['contact_from']);
		$mail->addTo($this->config['contact_to']);
		$mail->setSubject($this->config['contact_subject']);
		$mail->setBody($body);
		
		$mail->send();
	}



	/**
	 * Saves data from form to a log file and sends it to owner's email
	 *
	 *	@param  array input data
	 */
	public function saveFormData($data) {
		$text = date("Y.m.d H:i:s")."\nname: ".$data['name']."\ne-mail:  ".$data['email']."\nsubject: ".$data['subject']."\n\n".$data['text'].
				"\n\n-------------------------------------------------------------------------------------\n\n";
				
		file_put_contents($this->logFile, $text, FILE_APPEND);
		
		$this->sendContactMail($text);
	}
}