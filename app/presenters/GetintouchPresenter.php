<?php



class GetintouchPresenter extends BasePresenter
{

	protected function startup()
	{
		parent::startup();
	}



	/********************* view default *********************/
	public function renderDefault()
	{
		$this->template->nadpis = "ahojky";
	}





}
