<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validateMsisdnForPaymentsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:validateMsisdnForPaymentsResponse
 * @subpackage Structs
 */
class ValidateMsisdnForPaymentsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse|null
     */
    protected ?\BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse $return = null;
    /**
     * Constructor method for validateMsisdnForPaymentsResponse
     * @uses ValidateMsisdnForPaymentsResponse::setReturn()
     * @param \BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse $return
     */
    public function __construct(?\BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse|null
     */
    public function getReturn(): ?\BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse $return
     * @return \BancoBai\Client\Struct\ValidateMsisdnForPaymentsResponse
     */
    public function setReturn(?\BancoBai\Client\Struct\ValidateMsisdnForPaymentResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
