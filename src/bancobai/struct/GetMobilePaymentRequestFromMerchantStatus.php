<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMobilePaymentRequestFromMerchantStatus StructType
 * Meta information extracted from the WSDL
 * - type: tns:getMobilePaymentRequestFromMerchantStatus
 * @subpackage Structs
 */
class GetMobilePaymentRequestFromMerchantStatus extends AbstractStructBase
{
    /**
     * The externalReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The paymentId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $paymentId = null;
    /**
     * The apiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apiKey = null;
    /**
     * Constructor method for getMobilePaymentRequestFromMerchantStatus
     * @uses GetMobilePaymentRequestFromMerchantStatus::setExternalReference()
     * @uses GetMobilePaymentRequestFromMerchantStatus::setPaymentId()
     * @uses GetMobilePaymentRequestFromMerchantStatus::setApiKey()
     * @param string $externalReference
     * @param int $paymentId
     * @param string $apiKey
     */
    public function __construct(?string $externalReference = null, ?int $paymentId = null, ?string $apiKey = null)
    {
        $this
            ->setExternalReference($externalReference)
            ->setPaymentId($paymentId)
            ->setApiKey($apiKey);
    }
    /**
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \StructType\GetMobilePaymentRequestFromMerchantStatus
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get paymentId value
     * @return int|null
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }
    /**
     * Set paymentId value
     * @param int $paymentId
     * @return \StructType\GetMobilePaymentRequestFromMerchantStatus
     */
    public function setPaymentId(?int $paymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentId) && !(is_int($paymentId) || ctype_digit($paymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentId, true), gettype($paymentId)), __LINE__);
        }
        $this->paymentId = $paymentId;
        
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
     * @return \StructType\GetMobilePaymentRequestFromMerchantStatus
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
