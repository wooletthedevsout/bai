<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMobilePaymentRequestFromMerchantStatusResponse
 * StructType
 * @subpackage Structs
 */
class GetMobilePaymentRequestFromMerchantStatusResponse_1 extends ResponseBase
{
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView|null
     */
    protected ?\BancoBai\Client\Struct\MobilePaymentViaPartnerApiView $payment = null;
    /**
     * Constructor method for GetMobilePaymentRequestFromMerchantStatusResponse
     * @uses GetMobilePaymentRequestFromMerchantStatusResponse_1::setPayment()
     * @param \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView $payment
     */
    public function __construct(?\BancoBai\Client\Struct\MobilePaymentViaPartnerApiView $payment = null)
    {
        $this
            ->setPayment($payment);
    }
    /**
     * Get payment value
     * @return \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView|null
     */
    public function getPayment(): ?\BancoBai\Client\Struct\MobilePaymentViaPartnerApiView
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView $payment
     * @return \BancoBai\Client\Struct\GetMobilePaymentRequestFromMerchantStatusResponse_1
     */
    public function setPayment(?\BancoBai\Client\Struct\MobilePaymentViaPartnerApiView $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
}
