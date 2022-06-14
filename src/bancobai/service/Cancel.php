<?php

declare(strict_types=1);

namespace BancoBai\Client\Service;

use \SoapFault as SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use BancoBai\Client\Struct\CancelMobilePaymentCaptiveRequestFromMerchant;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * cancelMobilePaymentCaptiveRequestFromMerchant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \BancoBai\Client\Struct\CancelMobilePaymentCaptiveRequestFromMerchant $parameters
     * @return \BancoBai\Client\Struct\CancelMobilePaymentCaptiveRequestFromMerchantResponse|bool
     */
    public function cancelMobilePaymentCaptiveRequestFromMerchant(CancelMobilePaymentCaptiveRequestFromMerchant $parameters)
    {
        try {
            $this->setResult($resultCancelMobilePaymentCaptiveRequestFromMerchant = $this->getSoapClient()->__soapCall('cancelMobilePaymentCaptiveRequestFromMerchant', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelMobilePaymentCaptiveRequestFromMerchant;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \BancoBai\Client\Struct\CancelMobilePaymentCaptiveRequestFromMerchantResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
