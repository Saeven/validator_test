<?php

namespace Application\Factory\InputFilter;

use Application\InputFilter\EmailTestInputFilter;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\MutableCreationOptionsInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class EmailTestInputFilterFactory implements FactoryInterface, MutableCreationOptionsInterface
{

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

    public function createService( ServiceLocatorInterface $serviceLocator )
    {
        return new EmailTestInputFilter();
    }
}