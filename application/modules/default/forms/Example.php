<?php

class Default_Form_Example extends Twitter_Bootstrap_Form_Inline
{

	public function init()
	{

		$this->setIsArray(true);
        $this->setElementsBelongTo('bootstrap');

        $this->_addClassNames('well');

        $this->addElement('text', 'nome', array(
            'placeholder'   => 'E-mail',
            'prepend'       => '@',
            'class'         => 'focused'
        ));

        $this->addElement('password', 'senha', array(
            'placeholder' => 'Password'
        ));

        $this->addElement('button', 'submit', array(
            'label'         => 'Login',
            'type'          => 'submit',
            'buttonType'    => 'success',
            'icon'          => 'ok',
            'escape'        => false
        ));
    
	}


}

