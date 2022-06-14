<?php

declare(strict_types=1);

namespace BancoBai\Client\Service;

use \SoapFault as SoapFault;
use BancoBai\Client\Struct\ValidateMsisdnForPayments;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named validateMsisdnForPayments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateMsisdnForPayments $parameters
     * @return \StructType\ValidateMsisdnForPaymentsResponse|bool
     */
    public function validateMsisdnForPayments(ValidateMsisdnForPayments $parameters)
    {
        try {
            $this->setResult($resultValidateMsisdnForPayments = $this->getSoapClient()->__soapCall('validateMsisdnForPayments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateMsisdnForPayments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ValidateMsisdnForPaymentsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
