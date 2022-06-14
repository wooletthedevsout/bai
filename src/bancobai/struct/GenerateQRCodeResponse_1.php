<?php

declare(strict_types=1);

namespace BancoBai\Client\Struct;

use \InvalidArgumentException as InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateQRCodeResponse StructType
 * @subpackage Structs
 */
class GenerateQRCodeResponse_1 extends ResponseBase
{
    /**
     * The image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $image = null;
    /**
     * The imageExtension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $imageExtension = null;
    /**
     * Constructor method for GenerateQRCodeResponse
     * @uses GenerateQRCodeResponse_1::setImage()
     * @uses GenerateQRCodeResponse_1::setImageExtension()
     * @param string $image
     * @param string $imageExtension
     */
    public function __construct(?string $image = null, ?string $imageExtension = null)
    {
        $this
            ->setImage($image)
            ->setImageExtension($imageExtension);
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \StructType\GenerateQRCodeResponse_1
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->image = $image;
        
        return $this;
    }
    /**
     * Get imageExtension value
     * @return string|null
     */
    public function getImageExtension(): ?string
    {
        return $this->imageExtension;
    }
    /**
     * Set imageExtension value
     * @param string $imageExtension
     * @return \StructType\GenerateQRCodeResponse_1
     */
    public function setImageExtension(?string $imageExtension = null): self
    {
        // validation for constraint: string
        if (!is_null($imageExtension) && !is_string($imageExtension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageExtension, true), gettype($imageExtension)), __LINE__);
        }
        $this->imageExtension = $imageExtension;
        
        return $this;
    }
}
