<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMobilePaymentRequestFromMerchantStatusResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:getMobilePaymentRequestFromMerchantStatusResponse
 * @subpackage Structs
 */
class GetMobilePaymentRequestFromMerchantStatusResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1|null
     */
    protected ?\BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1 $return = null;
    /**
     * Constructor method for getMobilePaymentRequestFromMerchantStatusResponse
     * @uses GetMobilePaymentRequestFromMerchantStatusResponse::setReturn()
     * @param \BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1 $return
     */
    public function __construct(?\BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1|null
     */
    public function getReturn(): ?\BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1 $return
     * @return \BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse
     */
    public function setReturn(?\BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
