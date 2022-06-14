<?php

declare(strict_types=1);

namespace BancoBai\Client\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for responseCode EnumType
 * @subpackage Enumerations
 */
class ResponseCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'FATAL'
     * @return string 'FATAL'
     */
    const VALUE_FATAL = 'FATAL';
    /**
     * Constant for value 'INVALID_PARAMETERS'
     * @return string 'INVALID_PARAMETERS'
     */
    const VALUE_INVALID_PARAMETERS = 'INVALID_PARAMETERS';
    /**
     * Constant for value 'INVALID_API_KEY'
     * @return string 'INVALID_API_KEY'
     */
    const VALUE_INVALID_API_KEY = 'INVALID_API_KEY';
    /**
     * Constant for value 'INVALID_CURRENCY'
     * @return string 'INVALID_CURRENCY'
     */
    const VALUE_INVALID_CURRENCY = 'INVALID_CURRENCY';
    /**
     * Constant for value 'CORE_BANKING_UNAVAILABLE'
     * @return string 'CORE_BANKING_UNAVAILABLE'
     */
    const VALUE_CORE_BANKING_UNAVAILABLE = 'CORE_BANKING_UNAVAILABLE';
    /**
     * Constant for value 'CUSTOMER_NOT_FOUND_FOR_MSISDN'
     * @return string 'CUSTOMER_NOT_FOUND_FOR_MSISDN'
     */
    const VALUE_CUSTOMER_NOT_FOUND_FOR_MSISDN = 'CUSTOMER_NOT_FOUND_FOR_MSISDN';
    /**
     * Constant for value 'MAX_FAILED_RETRIES_REACHED'
     * @return string 'MAX_FAILED_RETRIES_REACHED'
     */
    const VALUE_MAX_FAILED_RETRIES_REACHED = 'MAX_FAILED_RETRIES_REACHED';
    /**
     * Constant for value 'EXISTING_EXTERNAL_REFERENCE'
     * @return string 'EXISTING_EXTERNAL_REFERENCE'
     */
    const VALUE_EXISTING_EXTERNAL_REFERENCE = 'EXISTING_EXTERNAL_REFERENCE';
    /**
     * Constant for value 'INVALID_MSISDN'
     * @return string 'INVALID_MSISDN'
     */
    const VALUE_INVALID_MSISDN = 'INVALID_MSISDN';
    /**
     * Constant for value 'INVALID_EXTERNAL_REFERENCE'
     * @return string 'INVALID_EXTERNAL_REFERENCE'
     */
    const VALUE_INVALID_EXTERNAL_REFERENCE = 'INVALID_EXTERNAL_REFERENCE';
    /**
     * Constant for value 'UNAUTHORIZED'
     * @return string 'UNAUTHORIZED'
     */
    const VALUE_UNAUTHORIZED = 'UNAUTHORIZED';
    /**
     * Constant for value 'INVALID_MSISDN_FORMAT'
     * @return string 'INVALID_MSISDN_FORMAT'
     */
    const VALUE_INVALID_MSISDN_FORMAT = 'INVALID_MSISDN_FORMAT';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_FATAL
     * @uses self::VALUE_INVALID_PARAMETERS
     * @uses self::VALUE_INVALID_API_KEY
     * @uses self::VALUE_INVALID_CURRENCY
     * @uses self::VALUE_CORE_BANKING_UNAVAILABLE
     * @uses self::VALUE_CUSTOMER_NOT_FOUND_FOR_MSISDN
     * @uses self::VALUE_MAX_FAILED_RETRIES_REACHED
     * @uses self::VALUE_EXISTING_EXTERNAL_REFERENCE
     * @uses self::VALUE_INVALID_MSISDN
     * @uses self::VALUE_INVALID_EXTERNAL_REFERENCE
     * @uses self::VALUE_UNAUTHORIZED
     * @uses self::VALUE_INVALID_MSISDN_FORMAT
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OK,
            self::VALUE_FATAL,
            self::VALUE_INVALID_PARAMETERS,
            self::VALUE_INVALID_API_KEY,
            self::VALUE_INVALID_CURRENCY,
            self::VALUE_CORE_BANKING_UNAVAILABLE,
            self::VALUE_CUSTOMER_NOT_FOUND_FOR_MSISDN,
            self::VALUE_MAX_FAILED_RETRIES_REACHED,
            self::VALUE_EXISTING_EXTERNAL_REFERENCE,
            self::VALUE_INVALID_MSISDN,
            self::VALUE_INVALID_EXTERNAL_REFERENCE,
            self::VALUE_UNAUTHORIZED,
            self::VALUE_INVALID_MSISDN_FORMAT,
            self::VALUE_UNKNOWN,
        ];
    }
}
