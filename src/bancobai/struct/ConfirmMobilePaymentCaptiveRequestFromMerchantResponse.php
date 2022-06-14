<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmMobilePaymentCaptiveRequestFromMerchantResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:confirmMobilePaymentCaptiveRequestFromMerchantResponse
 * @subpackage Structs
 */
class ConfirmMobilePaymentCaptiveRequestFromMerchantResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse|null
     */
    protected ?\BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse $return = null;
    /**
     * Constructor method for confirmMobilePaymentCaptiveRequestFromMerchantResponse
     * @uses ConfirmMobilePaymentCaptiveRequestFromMerchantResponse::setReturn()
     * @param \BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse $return
     */
    public function __construct(?\BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse|null
     */
    public function getReturn(): ?\BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse $return
     * @return \BancoBai\Client\Struct\ConfirmMobilePaymentCaptiveRequestFromMerchantResponse
     */
    public function setReturn(?\BancoBai\Client\Struct\ConfirmPaymentCaptiveRequestResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
