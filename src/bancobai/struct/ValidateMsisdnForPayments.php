<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validateMsisdnForPayments StructType
 * Meta information extracted from the WSDL
 * - type: tns:validateMsisdnForPayments
 * @subpackage Structs
 */
class ValidateMsisdnForPayments extends AbstractStructBase
{
    /**
     * The msisdn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $msisdn = null;
    /**
     * The apiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apiKey = null;
    /**
     * Constructor method for validateMsisdnForPayments
     * @uses ValidateMsisdnForPayments::setMsisdn()
     * @uses ValidateMsisdnForPayments::setApiKey()
     * @param string $msisdn
     * @param string $apiKey
     */
    public function __construct(?string $msisdn = null, ?string $apiKey = null)
    {
        $this
            ->setMsisdn($msisdn)
            ->setApiKey($apiKey);
    }
    /**
     * Get msisdn value
     * @return string|null
     */
    public function getMsisdn(): ?string
    {
        return $this->msisdn;
    }
    /**
     * Set msisdn value
     * @param string $msisdn
     * @return \StructType\ValidateMsisdnForPayments
     */
    public function setMsisdn(?string $msisdn = null): self
    {
        // validation for constraint: string
        if (!is_null($msisdn) && !is_string($msisdn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msisdn, true), gettype($msisdn)), __LINE__);
        }
        $this->msisdn = $msisdn;
        
        return $this;
    }
    /**
     * Get apiKey value
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }
    /**
     * Set apiKey value
     * @param string $apiKey
     * @return \StructType\ValidateMsisdnForPayments
     */
    public function setApiKey(?string $apiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($apiKey) && !is_string($apiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiKey, true), gettype($apiKey)), __LINE__);
        }
        $this->apiKey = $apiKey;
        
        return $this;
    }
}
