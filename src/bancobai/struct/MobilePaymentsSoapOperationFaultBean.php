<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mobilePaymentsSoapOperationFaultBean StructType
 * @subpackage Structs
 */
class MobilePaymentsSoapOperationFaultBean extends AbstractStructBase
{
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The responseCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $responseCode = null;
    /**
     * Constructor method for mobilePaymentsSoapOperationFaultBean
     * @uses MobilePaymentsSoapOperationFaultBean::setErrorCode()
     * @uses MobilePaymentsSoapOperationFaultBean::setMessage()
     * @uses MobilePaymentsSoapOperationFaultBean::setResponseCode()
     * @param string $errorCode
     * @param string $message
     * @param string $responseCode
     */
    public function __construct(?string $errorCode = null, ?string $message = null, ?string $responseCode = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setMessage($message)
            ->setResponseCode($responseCode);
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \StructType\MobilePaymentsSoapOperationFaultBean
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \StructType\MobilePaymentsSoapOperationFaultBean
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get responseCode value
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }
    /**
     * Set responseCode value
     * @uses \BancoBai\Client\Enum\ResponseCode::valueIsValid()
     * @uses \BancoBai\Client\Enum\ResponseCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $responseCode
     * @return \StructType\MobilePaymentsSoapOperationFaultBean
     */
    public function setResponseCode(?string $responseCode = null): self
    {
        // validation for constraint: enumeration
        if (!\BancoBai\Client\Enum\ResponseCode::valueIsValid($responseCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \BancoBai\Client\Enum\ResponseCode', is_array($responseCode) ? implode(', ', $responseCode) : var_export($responseCode, true), implode(', ', \BancoBai\Client\Enum\ResponseCode::getValidValues())), __LINE__);
        }
        $this->responseCode = $responseCode;
        
        return $this;
    }
}
