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

	/** @var XML_Translator */
	private $translator;

	protected function startup()
	{
		parent::startup();

		// sets the translator for actual presenter
		$this->translator = new XML_Translator("Getintouch", $this->lang);
		$this->template->setTranslator($this->translator);
	}



	/**
	 * default (and the only) view
	 */
	public function renderDefault()
	{
		$this->template->nadpis = "get in touch";
	}



	public function createComponentContactForm() {
		$form = new AppForm;

		// removes the label, because it is in the input
		$renderer = $form->getRenderer();
		$renderer->wrappers['label']['container'] = NULL;

		
		$form->setTranslator($this->translator);

		$form->addText('name')->addRule(Form::FILLED, 'Please, enter your name!')->setEmptyValue('Your name');
		$form->addText('email')->addRule(Form::EMAIL, 'Invalid e-mail address!')->setEmptyValue('Your e-mail address (required)');
		$form->addText('subject')->setEmptyValue('Subject');
		$form->addTextarea('text')->addRule(Form::FILLED, 'Please, enter some text!')->setEmptyValue('Anything to say?');

		$form->addSubmit('create', 'SEND MESSAGE')->onClick[] = array($this, 'contactFormSubmit');
		
		
		
		
		return $form;
	}


	
	public function contactFormSubmit(SubmitButton $button) {
		$form = $button->getForm();
		$data = $form->getValues();

		$model = new ContactFormModel();
		$model->saveFormData($data);

		$this->redirect('Getintouch:default');
    }


}
