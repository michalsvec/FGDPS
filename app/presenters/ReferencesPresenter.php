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

class ReferencesPresenter extends BasePresenter
{
	/** @var string XML_ReferencesModel model */
	private $model;

	/** @var string selected category */
	private $category;



	protected function startup()
	{
		parent::startup();

		// sets the translator for actual presenter
		$translator = new XML_Translator("References", $this->lang);
		$this->template->setTranslator($translator);

		
		$this->model = new ReferencesModel();
	
		if(!$this->getParam('id'))
			$this->category = 'Webdesign';
		else
			$this->category = $this->getParam('id');
		
	}



	protected function beforeRender() {
		parent::beforeRender();

		$this->template->submenuItems = $this->model->getCategoryList($this->category);
	}



	/**
	 * Renders selected category
	 */
	public function renderDefault()
	{
		$this->template->references = $this->model->findByCategory($this->category);
	}



	/**
	 * unused - there wont be full view
	 */
	public function renderView($id) {

		$model->findByCategory('Webdesign');
//		$this->template->id = $id;

		return true;
	}



	/**
	 *	Workaround because of URL. In fact, everything is done by renderDefault().
	 *	I don't know how to set routes properly. 
	 *
	 *	TODO: set routes and delete this method
	 *
	 *	@param string selected category
	 */
	public function renderCategory($id) {
		$this->category = $id;
		$this->setView('default');
		$this->renderDefault();
	}
}
