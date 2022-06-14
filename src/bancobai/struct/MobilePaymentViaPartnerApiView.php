<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mobilePaymentViaPartnerApiView StructType
 * @subpackage Structs
 */
class MobilePaymentViaPartnerApiView extends MobilePaymentView
{
    /**
     * The callbackResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $callbackResult = null;
    /**
     * The externalReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The msisdn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $msisdn = null;
    /**
     * The nonce
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nonce = null;
    /**
     * The shoppingCart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\ShoppingCartDetails|null
     */
    protected ?\BancoBai\Client\Struct\ShoppingCartDetails $shoppingCart = null;
    /**
     * The signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $signature = null;
    /**
     * Constructor method for mobilePaymentViaPartnerApiView
     * @uses MobilePaymentViaPartnerApiView::setCallbackResult()
     * @uses MobilePaymentViaPartnerApiView::setExternalReference()
     * @uses MobilePaymentViaPartnerApiView::setMsisdn()
     * @uses MobilePaymentViaPartnerApiView::setNonce()
     * @uses MobilePaymentViaPartnerApiView::setShoppingCart()
     * @uses MobilePaymentViaPartnerApiView::setSignature()
     * @param string $callbackResult
     * @param string $externalReference
     * @param string $msisdn
     * @param string $nonce
     * @param \BancoBai\Client\Struct\ShoppingCartDetails $shoppingCart
     * @param string $signature
     */
    public function __construct(?string $callbackResult = null, ?string $externalReference = null, ?string $msisdn = null, ?string $nonce = null, ?\BancoBai\Client\Struct\ShoppingCartDetails $shoppingCart = null, ?string $signature = null)
    {
        $this
            ->setCallbackResult($callbackResult)
            ->setExternalReference($externalReference)
            ->setMsisdn($msisdn)
            ->setNonce($nonce)
            ->setShoppingCart($shoppingCart)
            ->setSignature($signature);
    }
    /**
     * Get callbackResult value
     * @return string|null
     */
    public function getCallbackResult(): ?string
    {
        return $this->callbackResult;
    }
    /**
     * Set callbackResult value
     * @param string $callbackResult
     * @return \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView
     */
    public function setCallbackResult(?string $callbackResult = null): self
    {
        // validation for constraint: string
        if (!is_null($callbackResult) && !is_string($callbackResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callbackResult, true), gettype($callbackResult)), __LINE__);
        }
        $this->callbackResult = $callbackResult;
        
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
     * @return \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView
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
     * @return \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView
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
     * Get nonce value
     * @return string|null
     */
    public function getNonce(): ?string
    {
        return $this->nonce;
    }
    /**
     * Set nonce value
     * @param string $nonce
     * @return \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView
     */
    public function setNonce(?string $nonce = null): self
    {
        // validation for constraint: string
        if (!is_null($nonce) && !is_string($nonce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nonce, true), gettype($nonce)), __LINE__);
        }
        $this->nonce = $nonce;
        
        return $this;
    }
    /**
     * Get shoppingCart value
     * @return \BancoBai\Client\Struct\ShoppingCartDetails|null
     */
    public function getShoppingCart(): ?\BancoBai\Client\Struct\ShoppingCartDetails
    {
        return $this->shoppingCart;
    }
    /**
     * Set shoppingCart value
     * @param \BancoBai\Client\Struct\ShoppingCartDetails $shoppingCart
     * @return \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView
     */
    public function setShoppingCart(?\BancoBai\Client\Struct\ShoppingCartDetails $shoppingCart = null): self
    {
        $this->shoppingCart = $shoppingCart;
        
        return $this;
    }
    /**
     * Get signature value
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param string $signature
     * @return \BancoBai\Client\Struct\MobilePaymentViaPartnerApiView
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->signature = $signature;
        
        return $this;
    }
}
