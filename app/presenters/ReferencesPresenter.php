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
		
		$this->model = new ReferencesModel();
	}



	protected function beforeRender() {
		parent::beforeRender();

		$this->template->submenuItems = $this->model->getCategoryList();
	}



	/**
	 * Renders selected category
	 */
	public function renderDefault()
	{

		if(empty($this->category))
			$this->category = 'Webdesign';

		$this->template->references = $this->model->findByCategory('Webdesign');

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
	public function renderCategory($category) {
		$this->category = $category;
		$this->setView('default');
		$this->renderDefault();
	}
}
