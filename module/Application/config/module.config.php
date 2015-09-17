<?php

namespace Application;


use Application\Form\EmailTestForm;
use Application\Factory\Form\EmailTestFormFactory;
use Application\InputFilter\EmailTestInputFilter;
use Application\Factory\InputFilter\EmailTestInputFilterFactory;

return [

    'console' => [
        'router' => [
            'routes' => [

                'test_form' => [
                    'options' => [
                        'route' => 'test form',
                        'defaults' => [
                            'controller' => 'Application\Controller\Index',
                            'action' => 'test',
                        ],
                    ],
                ],
            ],
        ],
    ],


    'service_manager' => [
	    'abstract_factories' => [


	    ],
	    'invokables' => [

	    ],

	    'factories' => [

	    ],
    ],

    'form_elements' => [
	    'factories' => [
			EmailTestForm::class => EmailTestFormFactory::class,
	    ],
    ],

    'input_filters' => [
		'factories' => [
			EmailTestInputFilter::class => EmailTestInputFilterFactory::class,
		],
    ],

    'controllers' => [
        'invokables' => [
            'Application\Controller\Index'                => 'Application\Controller\IndexController',
        ],
    ],
];