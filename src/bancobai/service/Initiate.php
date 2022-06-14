<?php

declare(strict_types=1);

namespace BancoBai\Client\Service;

use \SoapFault as SoapFault;
use BancoBai\Client\Struct\InitiateMobilePaymentViaOtpRequestFromMerchant;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Initiate ServiceType
 * @subpackage Services
 */
class Initiate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * initiateMobilePaymentViaOtpRequestFromMerchant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InitiateMobilePaymentViaOtpRequestFromMerchant $parameters
     * @return \StructType\InitiateMobilePaymentViaOtpRequestFromMerchantResponse|bool
     */
    public function initiateMobilePaymentViaOtpRequestFromMerchant(InitiateMobilePaymentViaOtpRequestFromMerchant $parameters)
    {
        try {
            $this->setResult($resultInitiateMobilePaymentViaOtpRequestFromMerchant = $this->getSoapClient()->__soapCall('initiateMobilePaymentViaOtpRequestFromMerchant', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultInitiateMobilePaymentViaOtpRequestFromMerchant;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\InitiateMobilePaymentViaOtpRequestFromMerchantResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
