<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateNewMobilePaymentCaptiveRequestFromMerchant
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateNewMobilePaymentCaptiveRequestFromMerchant
 * @subpackage Structs
 */
class GenerateNewMobilePaymentCaptiveRequestFromMerchant extends AbstractStructBase
{
    /**
     * The customerMsisdn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerMsisdn = null;
    /**
     * The estimatedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $estimatedAmount = null;
    /**
     * The maxAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $maxAmount = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The shoppingCart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\ShoppingCart|null
     */
    protected ?\BancoBai\Client\Struct\ShoppingCart $shoppingCart = null;
    /**
     * The externalReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The apiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apiKey = null;
    /**
     * Constructor method for generateNewMobilePaymentCaptiveRequestFromMerchant
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setCustomerMsisdn()
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setEstimatedAmount()
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setMaxAmount()
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setCurrency()
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setShoppingCart()
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setExternalReference()
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setDescription()
     * @uses GenerateNewMobilePaymentCaptiveRequestFromMerchant::setApiKey()
     * @param string $customerMsisdn
     * @param float $estimatedAmount
     * @param float $maxAmount
     * @param string $currency
     * @param \BancoBai\Client\Struct\ShoppingCart $shoppingCart
     * @param string $externalReference
     * @param string $description
     * @param string $apiKey
     */
    public function __construct(?string $customerMsisdn = null, ?float $estimatedAmount = null, ?float $maxAmount = null, ?string $currency = null, ?\BancoBai\Client\Struct\ShoppingCart $shoppingCart = null, ?string $externalReference = null, ?string $description = null, ?string $apiKey = null)
    {
        $this
            ->setCustomerMsisdn($customerMsisdn)
            ->setEstimatedAmount($estimatedAmount)
            ->setMaxAmount($maxAmount)
            ->setCurrency($currency)
            ->setShoppingCart($shoppingCart)
            ->setExternalReference($externalReference)
            ->setDescription($description)
            ->setApiKey($apiKey);
    }
    /**
     * Get customerMsisdn value
     * @return string|null
     */
    public function getCustomerMsisdn(): ?string
    {
        return $this->customerMsisdn;
    }
    /**
     * Set customerMsisdn value
     * @param string $customerMsisdn
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
     */
    public function setCustomerMsisdn(?string $customerMsisdn = null): self
    {
        // validation for constraint: string
        if (!is_null($customerMsisdn) && !is_string($customerMsisdn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMsisdn, true), gettype($customerMsisdn)), __LINE__);
        }
        $this->customerMsisdn = $customerMsisdn;
        
        return $this;
    }
    /**
     * Get estimatedAmount value
     * @return float|null
     */
    public function getEstimatedAmount(): ?float
    {
        return $this->estimatedAmount;
    }
    /**
     * Set estimatedAmount value
     * @param float $estimatedAmount
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
     */
    public function setEstimatedAmount(?float $estimatedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($estimatedAmount) && !(is_float($estimatedAmount) || is_numeric($estimatedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($estimatedAmount, true), gettype($estimatedAmount)), __LINE__);
        }
        $this->estimatedAmount = $estimatedAmount;
        
        return $this;
    }
    /**
     * Get maxAmount value
     * @return float|null
     */
    public function getMaxAmount(): ?float
    {
        return $this->maxAmount;
    }
    /**
     * Set maxAmount value
     * @param float $maxAmount
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
     */
    public function setMaxAmount(?float $maxAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($maxAmount) && !(is_float($maxAmount) || is_numeric($maxAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxAmount, true), gettype($maxAmount)), __LINE__);
        }
        $this->maxAmount = $maxAmount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get shoppingCart value
     * @return \BancoBai\Client\Struct\ShoppingCart|null
     */
    public function getShoppingCart(): ?\BancoBai\Client\Struct\ShoppingCart
    {
        return $this->shoppingCart;
    }
    /**
     * Set shoppingCart value
     * @param \BancoBai\Client\Struct\ShoppingCart $shoppingCart
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
     */
    public function setShoppingCart(?\BancoBai\Client\Struct\ShoppingCart $shoppingCart = null): self
    {
        $this->shoppingCart = $shoppingCart;
        
        return $this;
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentCaptiveRequestFromMerchant
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
