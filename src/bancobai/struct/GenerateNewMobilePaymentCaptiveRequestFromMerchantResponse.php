<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateNewMobilePaymentCaptiveRequestFromMerchantResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateNewMobilePaymentCaptiveRequestFromMerchantResponse
 * @subpackage Structs
 */
class GenerateNewMobilePaymentCaptiveRequestFromMerchantResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse|null
     */
    protected ?\BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse $return = null;
    /**
     * Constructor method for
     * generateNewMobilePaymentCaptiveRequestFromMerchantResponse
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchantResponse::setReturn()
     * @param \BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse $return
     */
    public function __construct(?\BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse|null
     */
    public function getReturn(): ?\BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse $return
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchantResponse
     */
    public function setReturn(?\BancoBai\Client\Struct\GenerateNewPaymentCaptiveRequestResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
