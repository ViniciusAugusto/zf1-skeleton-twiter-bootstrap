<?php

class Default_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$this->view->form = new Default_Form_Example;
			
		if($this->_request->isPost())
		{
			$this->view->form->isValid($this->_getAllParams());
		}
    }


}

