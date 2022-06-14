<?php

declare(strict_types=1);

namespace BancoBai\Client\Service;

use \SoapFault as SoapFault;
use BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatus;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * getMobilePaymentRequestFromMerchantStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMobilePaymentRequestFromMerchantStatus $parameters
     * @return \StructType\GetMobilePaymentRequestFromMerchantStatusResponse|bool
     */
    public function getMobilePaymentRequestFromMerchantStatus(GetMobilePaymentRequestFromMerchantStatus $parameters)
    {
        try {
            $this->setResult($resultGetMobilePaymentRequestFromMerchantStatus = $this->getSoapClient()->__soapCall('getMobilePaymentRequestFromMerchantStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMobilePaymentRequestFromMerchantStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetMobilePaymentRequestFromMerchantStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
