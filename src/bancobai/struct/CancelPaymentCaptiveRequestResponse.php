<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPaymentCaptiveRequestResponse StructType
 * @subpackage Structs
 */
class CancelPaymentCaptiveRequestResponse extends ResponseBase
{
    /**
     * The operationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $operationId = null;
    /**
     * Constructor method for CancelPaymentCaptiveRequestResponse
     * @uses CancelPaymentCaptiveRequestResponse::setOperationId()
     * @param int $operationId
     */
    public function __construct(?int $operationId = null)
    {
        $this
            ->setOperationId($operationId);
    }
    /**
     * Get operationId value
     * @return int|null
     */
    public function getOperationId(): ?int
    {
        return $this->operationId;
    }
    /**
     * Set operationId value
     * @param int $operationId
     * @return \StructType\CancelPaymentCaptiveRequestResponse
     */
    public function setOperationId(?int $operationId = null): self
    {
        // validation for constraint: int
        if (!is_null($operationId) && !(is_int($operationId) || ctype_digit($operationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($operationId, true), gettype($operationId)), __LINE__);
        }
        $this->operationId = $operationId;
        
        return $this;
    }
}
