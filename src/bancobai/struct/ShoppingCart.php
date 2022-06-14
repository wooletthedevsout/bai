<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShoppingCart StructType
 * @subpackage Structs
 */
class ShoppingCart extends AbstractStructBase
{
    /**
     * The items
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \BancoBai\Client\Struct\ShoppingCartItem[]
     */
    protected ?array $items = null;
    /**
     * Constructor method for ShoppingCart
     * @uses ShoppingCart::setItems()
     * @param \BancoBai\Client\Struct\ShoppingCartItem[] $items
     */
    public function __construct(?array $items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \BancoBai\Client\Struct\ShoppingCartItem[]
     */
    public function getItems(): ?array
    {
        return isset($this->items) ? $this->items : null;
    }
    /**
     * This method is responsible for validating the values passed to the setItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemsForArrayConstraintsFromSetItems(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shoppingCartItemsItem) {
            // validation for constraint: itemType
            if (!$shoppingCartItemsItem instanceof \BancoBai\Client\Struct\ShoppingCartItem) {
                $invalidValues[] = is_object($shoppingCartItemsItem) ? get_class($shoppingCartItemsItem) : sprintf('%s(%s)', gettype($shoppingCartItemsItem), var_export($shoppingCartItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The items property can only contain items of type \BancoBai\Client\Struct\ShoppingCartItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \BancoBai\Client\Struct\ShoppingCartItem[] $items
     * @return \BancoBai\Client\Struct\ShoppingCart
     */
    public function setItems(?array $items = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemsArrayErrorMessage = self::validateItemsForArrayConstraintsFromSetItems($items))) {
            throw new InvalidArgumentException($itemsArrayErrorMessage, __LINE__);
        }
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->items);
        } else {
            $this->items = $items;
        }
        
        return $this;
    }
    /**
     * Add item to items value
     * @throws InvalidArgumentException
     * @param \BancoBai\Client\Struct\ShoppingCartItem $item
     * @return \BancoBai\Client\Struct\ShoppingCart
     */
    public function addToItems(\BancoBai\Client\Struct\ShoppingCartItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BancoBai\Client\Struct\ShoppingCartItem) {
            throw new InvalidArgumentException(sprintf('The items property can only contain items of type \BancoBai\Client\Struct\ShoppingCartItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->items[] = $item;
        
        return $this;
    }
}
