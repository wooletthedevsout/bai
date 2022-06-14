<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelMobilePaymentCaptiveRequestFromMerchantResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelMobilePaymentCaptiveRequestFromMerchantResponse
 * @subpackage Structs
 */
class CancelMobilePaymentCaptiveRequestFromMerchantResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse|null
     */
    protected ?\BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse $return = null;
    /**
     * Constructor method for cancelMobilePaymentCaptiveRequestFromMerchantResponse
     * @uses CancelMobilePaymentCaptiveRequestFromMerchantResponse::setReturn()
     * @param \BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse $return
     */
    public function __construct(?\BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse|null
     */
    public function getReturn(): ?\BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse $return
     * @return \BancoBai\Client\Struct\CancelMobilePaymentCaptiveRequestFromMerchantResponse
     */
    public function setReturn(?\BancoBai\Client\Struct\CancelPaymentCaptiveRequestResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
