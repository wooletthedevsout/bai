<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateMsisdnForPaymentResponse StructType
 * @subpackage Structs
 */
class ValidateMsisdnForPaymentResponse extends ResponseBase
{
    /**
     * The valid
     * @var bool|null
     */
    protected ?bool $valid = null;
    /**
     * Constructor method for ValidateMsisdnForPaymentResponse
     * @uses ValidateMsisdnForPaymentResponse::setValid()
     * @param bool $valid
     */
    public function __construct(?bool $valid = null)
    {
        $this
            ->setValid($valid);
    }
    /**
     * Get valid value
     * @return bool|null
     */
    public function getValid(): ?bool
    {
        return $this->valid;
    }
    /**
     * Set valid value
     * @param bool $valid
     * @return \StructType\ValidateMsisdnForPaymentResponse
     */
    public function setValid(?bool $valid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valid) && !is_bool($valid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valid, true), gettype($valid)), __LINE__);
        }
        $this->valid = $valid;
        
        return $this;
    }
}
