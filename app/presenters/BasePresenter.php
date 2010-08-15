<?php


/**
 * base presenter. Parent for each presenter in application
 *
 * @author     Michal Švec
 * @copyright  Copyright (c) 2010 Michal Švec
 * @license    New BSD License
 * @link       http://michalsvec.cz/
 * @version    0.1
 */
abstract class BasePresenter extends Presenter
{
	public $oldLayoutMode = FALSE;

	/** @persitent */
	public $lang = 'en';

	/** @vat SimpleXML configuration file */
	private $config;

	protected function startup() {
		parent::startup();

		$this->config = simplexml_load_file(XML_DIR.'/config.xml');
	}



	protected function beforeRender()
	{
		// menu structure
		$this->template->menuItems = array(
			'About:' => 'About me',
			'References:' => 'References',
			'Getintouch:' => 'Get in touch',
		);
		
		$this->template->lang = $this->lang;


	}

}
