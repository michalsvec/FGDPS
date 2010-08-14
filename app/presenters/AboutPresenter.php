<?php

/**
 * /about presenter
 *
 * @author     Michal Švec
 * @copyright  Copyright (c) 2010 Michal Švec
 * @license    New BSD License
 * @link       http://michalsvec.cz/
 * @version    0.1
 */

class AboutPresenter extends BasePresenter
{
	protected function startup()
	{
		parent::startup();
		
		// sets the translator for actual presenter
		$translator = new XML_Translator("About", $this->lang);
		$this->template->setTranslator($translator);
	}



	/**
	 * Renders default (and the only one) view
	 *
	 */
	public function renderDefault()
	{
		$model = new ReferencesModel();
		$this->template->references = $model->findLatest(3);
	}

}
