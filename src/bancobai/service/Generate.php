<?php

declare(strict_types=1);

namespace BancoBai\Client\Service;

use \SoapFault as SoapFault;
use BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant;
use BancoBai\Client\Struct\GenerateQRCode;
use BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 */
class Generate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * generateNewMobilePaymentRequestFromMerchant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GenerateNewMobilePaymentRequestFromMerchant $parameters
     * @return \StructType\GenerateNewMobilePaymentRequestFromMerchantResponse|bool
     */
    public function generateNewMobilePaymentRequestFromMerchant(GenerateNewMobilePaymentRequestFromMerchant $parameters)
    {
        try {
            $this->setResult($resultGenerateNewMobilePaymentRequestFromMerchant = $this->getSoapClient()->__soapCall('generateNewMobilePaymentRequestFromMerchant', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateNewMobilePaymentRequestFromMerchant;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateQRCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GenerateQRCode $parameters
     * @return \StructType\GenerateQRCodeResponse|bool
     */
    public function generateQRCode(GenerateQRCode $parameters)
    {
        try {
            $this->setResult($resultGenerateQRCode = $this->getSoapClient()->__soapCall('generateQRCode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateQRCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * generateNewMobilePaymentCaptiveRequestFromMerchant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GenerateNewMobilePaymentCaptiveRequestFromMerchant $parameters
     * @return \StructType\GenerateNewMobilePaymentCaptiveRequestFromMerchantResponse|bool
     */
    public function generateNewMobilePaymentCaptiveRequestFromMerchant(GenerateNewMobilePaymentCaptiveRequestFromMerchant $parameters)
    {
        try {
            $this->setResult($resultGenerateNewMobilePaymentCaptiveRequestFromMerchant = $this->getSoapClient()->__soapCall('generateNewMobilePaymentCaptiveRequestFromMerchant', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateNewMobilePaymentCaptiveRequestFromMerchant;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GenerateNewMobilePaymentCaptiveRequestFromMerchantResponse|\StructType\GenerateNewMobilePaymentRequestFromMerchantResponse|\StructType\GenerateQRCodeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
