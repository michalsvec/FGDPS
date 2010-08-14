<?php



class ReferencesPresenter extends BasePresenter
{


	private $model;
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


	/********************* view default *********************/
	public function renderDefault()
	{

		if(empty($this->category))
			$this->category = 'Webdesign';

		$this->template->references = $this->model->findByCategory('Webdesign');

	}

	public function renderView($id) {

		$model->findByCategory('Webdesign');
//		$this->template->id = $id;

		return true;
	}

	public function renderCategory($category) {
		// workaround, because I don't know how to set routes properly
		$this->category = $category;
		$this->setView('default');
		$this->renderDefault();
	}
}
