<?php



abstract class BasePresenter extends Presenter
{
	public $oldLayoutMode = FALSE;

	/** @persitent */
	public $lang = 'en';

	protected function beforeRender()
	{
		$this->template->menuItems = array(
			'About:' => 'About me',
			'References:' => 'References',
			'Getintouch:' => 'Get in touch',
		);
		
		$this->template->lang = $this->lang;

	}

}
