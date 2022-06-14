<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for responseBase StructType
 * @subpackage Structs
 */
class ResponseBase extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The context
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $context = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for responseBase
     * @uses ResponseBase::setCode()
     * @uses ResponseBase::setContext()
     * @uses ResponseBase::setMessage()
     * @param string $code
     * @param string $context
     * @param string $message
     */
    public function __construct(?string $code = null, ?string $context = null, ?string $message = null)
    {
        $this
            ->setCode($code)
            ->setContext($context)
            ->setMessage($message);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @uses \BancoBai\Client\Enum\ResponseCode::valueIsValid()
     * @uses \BancoBai\Client\Enum\ResponseCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $code
     * @return \StructType\ResponseBase
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: enumeration
        if (!\BancoBai\Client\Enum\ResponseCode::valueIsValid($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \BancoBai\Client\Enum\ResponseCode', is_array($code) ? implode(', ', $code) : var_export($code, true), implode(', ', \BancoBai\Client\Enum\ResponseCode::getValidValues())), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get context value
     * @return string|null
     */
    public function getContext(): ?string
    {
        return $this->context;
    }
    /**
     * Set context value
     * @param string $context
     * @return \StructType\ResponseBase
     */
    public function setContext(?string $context = null): self
    {
        // validation for constraint: string
        if (!is_null($context) && !is_string($context)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($context, true), gettype($context)), __LINE__);
        }
        $this->context = $context;
        
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
     * @return \StructType\ResponseBase
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
