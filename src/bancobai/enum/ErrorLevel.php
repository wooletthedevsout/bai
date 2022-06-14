<?php

declare(strict_types=1);

namespace BancoBai\Client\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for errorLevel EnumType
 * @subpackage Enumerations
 */
class ErrorLevel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INFO'
     * @return string 'INFO'
     */
    const VALUE_INFO = 'INFO';
    /**
     * Constant for value 'WARNING'
     * @return string 'WARNING'
     */
    const VALUE_WARNING = 'WARNING';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Return allowed values
     * @uses self::VALUE_INFO
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_ERROR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INFO,
            self::VALUE_WARNING,
            self::VALUE_ERROR,
        ];
    }
}
