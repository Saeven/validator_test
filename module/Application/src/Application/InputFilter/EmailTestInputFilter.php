<?php

namespace Application\InputFilter;

use Zend\Filter\StringTrim;
use Zend\I18n\Validator\IsFloat;
use Zend\InputFilter\InputFilter;
use Zend\Form\Element;
use Zend\Validator\Between;
use Zend\Validator\Digits;
use Zend\Validator\EmailAddress;
use Zend\Validator\Hostname;
use Zend\Validator\Ip;
use Zend\Validator\StringLength;

class EmailTestInputFilter extends InputFilter
{
    public function init()
    {

        $this->add([
            'name' => 'email',
            'required' => true,
            'filters' => [
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => EmailAddress::class,
                    'options' => [
                        'useMxCheck'        => true,
                        'useDeepMxCheck'    => true,
                        'useDomainCheck'    => true,
                        'message'           => _( "That email address has a typo in it, or its domain can't be checked" ),
                    ],
                ],
            ],
        ]);

    }


}