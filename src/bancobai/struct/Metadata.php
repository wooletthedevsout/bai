<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for metadata StructType
 * @subpackage Structs
 */
class Metadata extends AbstractStructBase
{
    /**
     * The entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \BancoBai\Client\Struct\Entry[]
     */
    protected ?array $entry = null;
    /**
     * Constructor method for metadata
     * @uses Metadata::setEntry()
     * @param \BancoBai\Client\Struct\Entry[] $entry
     */
    public function __construct(?array $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get entry value
     * @return \BancoBai\Client\Struct\Entry[]
     */
    public function getEntry(): ?array
    {
        return $this->entry;
    }
    /**
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $metadataEntryItem) {
            // validation for constraint: itemType
            if (!$metadataEntryItem instanceof \BancoBai\Client\Struct\Entry) {
                $invalidValues[] = is_object($metadataEntryItem) ? get_class($metadataEntryItem) : sprintf('%s(%s)', gettype($metadataEntryItem), var_export($metadataEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entry property can only contain items of type \BancoBai\Client\Struct\Entry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set entry value
     * @throws InvalidArgumentException
     * @param \BancoBai\Client\Struct\Entry[] $entry
     * @return \BancoBai\Client\Struct\Metadata
     */
    public function setEntry(?array $entry = null): self
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        $this->entry = $entry;
        
        return $this;
    }
    /**
     * Add item to entry value
     * @throws InvalidArgumentException
     * @param \BancoBai\Client\Struct\Entry $item
     * @return \BancoBai\Client\Struct\Metadata
     */
    public function addToEntry(\BancoBai\Client\Struct\Entry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BancoBai\Client\Struct\Entry) {
            throw new InvalidArgumentException(sprintf('The entry property can only contain items of type \BancoBai\Client\Struct\Entry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entry[] = $item;
        
        return $this;
    }
}
