<?php

namespace Application\Factory\Form;

use Application\Form\EmailTestForm;
use Application\InputFilter\EmailTestInputFilter;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\MutableCreationOptionsInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;


class EmailTestFormFactory implements FactoryInterface, MutableCreationOptionsInterface
{

    /**
     * @var array
     */
    protected $options;

     /**
     * Set creation options
     *
     * @param  array $options
     * @return void
     */
    public function setCreationOptions( array $options )
    {
        $this->options = $options;
    }


    /**
     * {@inheritdoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var \Zend\Form\FormElementManager       $serviceLocator
         * @var \Zend\ServiceManager\ServiceManager $serviceManager
         * @var \Application\Form\EmailTestForm               $form
         */
        $serviceManager = $serviceLocator->getServiceLocator();
        try
        {
	        $form      = new EmailTestForm('EmailTest');
            $form->setHydrator( new ClassMethods() );
            $form->setInputFilter( $serviceManager->get('InputFilterManager')->get( EmailTestInputFilter::class, $this->options ) );
            
        }
        catch( \Exception $x )
        {
            die( $x->getMessage() );
        }

        return $form;
    }
}