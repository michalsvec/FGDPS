<?php

/**
 * /getintouch presenter
 * Includes contact form and links
 *
 * @author     Michal Švec
 * @copyright  Copyright (c) 2010 Michal Švec
 * @license    New BSD License
 * @link       http://michalsvec.cz/
 * @version    0.1
 */
class GetintouchPresenter extends BasePresenter
{

	protected function startup()
	{
		parent::startup();
	}



	/**
	 * default (and the only) view
	 */
	public function renderDefault()
	{
		$this->template->nadpis = "get in touch";
	}

}
