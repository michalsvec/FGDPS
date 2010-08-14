<?php



class AboutPresenter extends BasePresenter
{
	protected function startup()
	{
		parent::startup();
		
		// sets the translator for actual presenter
		$translator = new XML_Translator("About", $this->lang);
		$this->template->setTranslator($translator);
	}



	/********************* view default *********************/
	public function renderDefault()
	{
		$model = new ReferencesModel();
		$this->template->references = $model->findLatest(3);

		


	}





}
