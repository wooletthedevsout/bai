<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateNewMobilePaymentRequestFromMerchant StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateNewMobilePaymentRequestFromMerchant
 * @subpackage Structs
 */
class GenerateNewMobilePaymentRequestFromMerchant extends AbstractStructBase
{
    /**
     * The customerMsisdn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerMsisdn = null;
    /**
     * The totalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $totalAmount = null;
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
     * Constructor method for generateNewMobilePaymentRequestFromMerchant
     * @uses GenerateNewMobilePaymentRequestFromMerchant::setCustomerMsisdn()
     * @uses GenerateNewMobilePaymentRequestFromMerchant::setTotalAmount()
     * @uses GenerateNewMobilePaymentRequestFromMerchant::setCurrency()
     * @uses GenerateNewMobilePaymentRequestFromMerchant::setShoppingCart()
     * @uses GenerateNewMobilePaymentRequestFromMerchant::setExternalReference()
     * @uses GenerateNewMobilePaymentRequestFromMerchant::setDescription()
     * @uses GenerateNewMobilePaymentRequestFromMerchant::setApiKey()
     * @param string $customerMsisdn
     * @param float $totalAmount
     * @param string $currency
     * @param \BancoBai\Client\Struct\ShoppingCart $shoppingCart
     * @param string $externalReference
     * @param string $description
     * @param string $apiKey
     */
    public function __construct(?string $customerMsisdn = null, ?float $totalAmount = null, ?string $currency = null, ?\BancoBai\Client\Struct\ShoppingCart $shoppingCart = null, ?string $externalReference = null, ?string $description = null, ?string $apiKey = null)
    {
        $this
            ->setCustomerMsisdn($customerMsisdn)
            ->setTotalAmount($totalAmount)
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant
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
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant
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
     * @return \BancoBai\Client\Struct\GenerateNewMobilePaymentRequestFromMerchant
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
