<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateNewMobilePaymentRequestFromMerchantResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateNewMobilePaymentRequestFromMerchantResponse
 * @subpackage Structs
 */
class GenerateNewMobilePaymentRequestFromMerchantResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\GenerateNewPaymentRequestResponse|null
     */
    protected ?\BancoBai\Client\Struct\GenerateNewPaymentRequestResponse $return = null;
    /**
     * Constructor method for generateNewMobilePaymentRequestFromMerchantResponse
     * @uses GenerateNewMobilePaymentRequestFromMerchantResponse::setReturn()
     * @param \BancoBai\Client\Struct\GenerateNewPaymentRequestResponse $return
     */
    public function __construct(?\BancoBai\Client\Struct\GenerateNewPaymentRequestResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \BancoBai\Client\Struct\GenerateNewPaymentRequestResponse|null
     */
    public function getReturn(): ?\BancoBai\Client\Struct\GenerateNewPaymentRequestResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \BancoBai\Client\Struct\GenerateNewPaymentRequestResponse $return
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchantResponse
     */
    public function setReturn(?\BancoBai\Client\Struct\GenerateNewPaymentRequestResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
