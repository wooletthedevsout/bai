<?php

declare(strict_types=1);

namespace BancoBai\Client\Service;

use \SoapFault as SoapFault;
use BancoBai\Client\Struct\ConfirmMobilePaymentCaptiveRequestFromMerchant;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Confirm ServiceType
 * @subpackage Services
 */
class Confirm extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * confirmMobilePaymentCaptiveRequestFromMerchant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConfirmMobilePaymentCaptiveRequestFromMerchant $parameters
     * @return \StructType\ConfirmMobilePaymentCaptiveRequestFromMerchantResponse|bool
     */
    public function confirmMobilePaymentCaptiveRequestFromMerchant(ConfirmMobilePaymentCaptiveRequestFromMerchant $parameters)
    {
        try {
            $this->setResult($resultConfirmMobilePaymentCaptiveRequestFromMerchant = $this->getSoapClient()->__soapCall('confirmMobilePaymentCaptiveRequestFromMerchant', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConfirmMobilePaymentCaptiveRequestFromMerchant;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ConfirmMobilePaymentCaptiveRequestFromMerchantResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
