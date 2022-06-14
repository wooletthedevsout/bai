<?php

namespace BancoBai\Client;
use WsdlToPhp\PackageBase\AbstractSoapClientBase as Soap;

/**
 * Class which returns the class map definition
 */
class Client
{
    private $options = [];

    public function __construct()
    {
        $this->options = $this->getOptions();
    }

    private function getOptions()
    {
        
    }
}