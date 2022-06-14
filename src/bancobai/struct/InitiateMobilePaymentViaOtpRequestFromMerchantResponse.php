<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for initiateMobilePaymentViaOtpRequestFromMerchantResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:initiateMobilePaymentViaOtpRequestFromMerchantResponse
 * @subpackage Structs
 */
class InitiateMobilePaymentViaOtpRequestFromMerchantResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse|null
     */
    protected ?\BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse $return = null;
    /**
     * Constructor method for initiateMobilePaymentViaOtpRequestFromMerchantResponse
     * @uses InitiateMobilePaymentViaOtpRequestFromMerchantResponse::setReturn()
     * @param \BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse $return
     */
    public function __construct(?\BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse|null
     */
    public function getReturn(): ?\BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse $return
     * @return \BancoBai\Client\Struct\InitiateMobilePaymentViaOtpRequestFromMerchantResponse
     */
    public function setReturn(?\BancoBai\Client\Struct\InitiateNewPaymentViaOtpRequestResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
