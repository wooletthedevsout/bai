<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitiateNewPaymentViaOtpRequestResponse StructType
 * @subpackage Structs
 */
class InitiateNewPaymentViaOtpRequestResponse extends ResponseBase
{
    /**
     * The confirmationUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $confirmationUrl = null;
    /**
     * The operationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $operationId = null;
    /**
     * Constructor method for InitiateNewPaymentViaOtpRequestResponse
     * @uses InitiateNewPaymentViaOtpRequestResponse::setConfirmationUrl()
     * @uses InitiateNewPaymentViaOtpRequestResponse::setOperationId()
     * @param string $confirmationUrl
     * @param int $operationId
     */
    public function __construct(?string $confirmationUrl = null, ?int $operationId = null)
    {
        $this
            ->setConfirmationUrl($confirmationUrl)
            ->setOperationId($operationId);
    }
    /**
     * Get confirmationUrl value
     * @return string|null
     */
    public function getConfirmationUrl(): ?string
    {
        return $this->confirmationUrl;
    }
    /**
     * Set confirmationUrl value
     * @param string $confirmationUrl
     * @return \StructType\InitiateNewPaymentViaOtpRequestResponse
     */
    public function setConfirmationUrl(?string $confirmationUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationUrl) && !is_string($confirmationUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationUrl, true), gettype($confirmationUrl)), __LINE__);
        }
        $this->confirmationUrl = $confirmationUrl;
        
        return $this;
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
     * @return \StructType\InitiateNewPaymentViaOtpRequestResponse
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
