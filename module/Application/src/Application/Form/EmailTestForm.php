<?php

namespace Application\Form;

use Zend\Form\Element;
use Zend\Form\Element\Email;
use Zend\Form\Form;


class EmailTestForm  extends Form
{

    public function init()
    {

        $this->add([
            'name' => 'email',
            'type' => Email::class,
            'options' => [
                'label' => _( "" ),
                'help-block' => _( "" ),
            ],
            'attributes' => [
                'maxlength' => 254,
            ],
        ]);

    }

}