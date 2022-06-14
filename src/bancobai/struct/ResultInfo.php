<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultInfo StructType
 * @subpackage Structs
 */
class ResultInfo extends AbstractStructBase
{
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorLevel = null;
    /**
     * The inDegradedMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $inDegradedMode = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for resultInfo
     * @uses ResultInfo::setErrorCode()
     * @uses ResultInfo::setErrorLevel()
     * @uses ResultInfo::setInDegradedMode()
     * @uses ResultInfo::setMessage()
     * @param string $errorCode
     * @param string $errorLevel
     * @param bool $inDegradedMode
     * @param string $message
     */
    public function __construct(?string $errorCode = null, ?string $errorLevel = null, ?bool $inDegradedMode = null, ?string $message = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorLevel($errorLevel)
            ->setInDegradedMode($inDegradedMode)
            ->setMessage($message);
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
     * @return \StructType\ResultInfo
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
     * Get errorLevel value
     * @return string|null
     */
    public function getErrorLevel(): ?string
    {
        return $this->errorLevel;
    }
    /**
     * Set errorLevel value
     * @uses \BancoBai\Client\Enum\ErrorLevel::valueIsValid()
     * @uses \BancoBai\Client\Enum\ErrorLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $errorLevel
     * @return \StructType\ResultInfo
     */
    public function setErrorLevel(?string $errorLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\BancoBai\Client\Enum\ErrorLevel::valueIsValid($errorLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \BancoBai\Client\Enum\ErrorLevel', is_array($errorLevel) ? implode(', ', $errorLevel) : var_export($errorLevel, true), implode(', ', \BancoBai\Client\Enum\ErrorLevel::getValidValues())), __LINE__);
        }
        $this->errorLevel = $errorLevel;
        
        return $this;
    }
    /**
     * Get inDegradedMode value
     * @return bool|null
     */
    public function getInDegradedMode(): ?bool
    {
        return $this->inDegradedMode;
    }
    /**
     * Set inDegradedMode value
     * @param bool $inDegradedMode
     * @return \StructType\ResultInfo
     */
    public function setInDegradedMode(?bool $inDegradedMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inDegradedMode) && !is_bool($inDegradedMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inDegradedMode, true), gettype($inDegradedMode)), __LINE__);
        }
        $this->inDegradedMode = $inDegradedMode;
        
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
     * @return \StructType\ResultInfo
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
}
