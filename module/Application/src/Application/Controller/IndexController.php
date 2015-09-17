<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Form\EmailTestForm;

class IndexController extends AbstractActionController
{
    public function testAction()
    {
        $form = $this->getServiceLocator()->get('FormElementManager')->get( EmailTestForm::class );
	    $form->setData([
		    'email' => 'fsfsf'
	    ]);

	    if( !$form->isValid() )
	    {
		    var_dump( $form->getMessages() );
	    }
    }
}
