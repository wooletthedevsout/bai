<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shoppingCartItemDetails StructType
 * @subpackage Structs
 */
class ShoppingCartItemDetails extends AbstractStructBase
{
    /**
     * The amountPerItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amountPerItem = null;
    /**
     * The count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The discount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $discount = null;
    /**
     * The metadata
     * @var \BancoBai\Client\Struct\Metadata|null
     */
    protected ?\BancoBai\Client\Struct\Metadata $metadata = null;
    /**
     * The totalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * Constructor method for shoppingCartItemDetails
     * @uses ShoppingCartItemDetails::setAmountPerItem()
     * @uses ShoppingCartItemDetails::setCount()
     * @uses ShoppingCartItemDetails::setDescription()
     * @uses ShoppingCartItemDetails::setDiscount()
     * @uses ShoppingCartItemDetails::setMetadata()
     * @uses ShoppingCartItemDetails::setTotalAmount()
     * @param float $amountPerItem
     * @param int $count
     * @param string $description
     * @param float $discount
     * @param \BancoBai\Client\Struct\Metadata $metadata
     * @param float $totalAmount
     */
    public function __construct(?float $amountPerItem = null, ?int $count = null, ?string $description = null, ?float $discount = null, ?\BancoBai\Client\Struct\Metadata $metadata = null, ?float $totalAmount = null)
    {
        $this
            ->setAmountPerItem($amountPerItem)
            ->setCount($count)
            ->setDescription($description)
            ->setDiscount($discount)
            ->setMetadata($metadata)
            ->setTotalAmount($totalAmount);
    }
    /**
     * Get amountPerItem value
     * @return float|null
     */
    public function getAmountPerItem(): ?float
    {
        return $this->amountPerItem;
    }
    /**
     * Set amountPerItem value
     * @param float $amountPerItem
     * @return \BancoBai\Client\Struct\ShoppingCartItemDetails
     */
    public function setAmountPerItem(?float $amountPerItem = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPerItem) && !(is_float($amountPerItem) || is_numeric($amountPerItem))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPerItem, true), gettype($amountPerItem)), __LINE__);
        }
        $this->amountPerItem = $amountPerItem;
        
        return $this;
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \BancoBai\Client\Struct\ShoppingCartItemDetails
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
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
     * @return \BancoBai\Client\Struct\ShoppingCartItemDetails
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
     * Get discount value
     * @return float|null
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }
    /**
     * Set discount value
     * @param float $discount
     * @return \BancoBai\Client\Struct\ShoppingCartItemDetails
     */
    public function setDiscount(?float $discount = null): self
    {
        // validation for constraint: float
        if (!is_null($discount) && !(is_float($discount) || is_numeric($discount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discount, true), gettype($discount)), __LINE__);
        }
        $this->discount = $discount;
        
        return $this;
    }
    /**
     * Get metadata value
     * @return \BancoBai\Client\Struct\Metadata|null
     */
    public function getMetadata(): ?\BancoBai\Client\Struct\Metadata
    {
        return $this->metadata;
    }
    /**
     * Set metadata value
     * @param \BancoBai\Client\Struct\Metadata $metadata
     * @return \BancoBai\Client\Struct\ShoppingCartItemDetails
     */
    public function setMetadata(?\BancoBai\Client\Struct\Metadata $metadata = null): self
    {
        $this->metadata = $metadata;
        
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
     * @return \BancoBai\Client\Struct\ShoppingCartItemDetails
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
}
