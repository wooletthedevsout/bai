<?php

namespace BancoBai\Client;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'getMobilePaymentRequestFromMerchantStatus' => '\\BancoBai\\Client\\Struct\\GetMobilePaymentRequestFromMerchantStatus',
            'getMobilePaymentRequestFromMerchantStatusResponse' => '\\BancoBai\\Client\\Struct\\GetMobilePaymentRequestFromMerchantStatusResponse',
            'GetMobilePaymentRequestFromMerchantStatusResponse' => '\\BancoBai\\Client\\Struct\\GetMobilePaymentRequestFromMerchantStatusResponse_1',
            'responseBase' => '\\BancoBai\\Client\\Struct\\ResponseBase',
            'mobilePaymentViaPartnerApiView' => '\\BancoBai\\Client\\Struct\\MobilePaymentViaPartnerApiView',
            'mobilePaymentView' => '\\BancoBai\\Client\\Struct\\MobilePaymentView',
            'shoppingCartDetails' => '\\BancoBai\\Client\\Struct\\ShoppingCartDetails',
            'shoppingCartItemDetails' => '\\BancoBai\\Client\\Struct\\ShoppingCartItemDetails',
            'metadata' => '\\BancoBai\\Client\\Struct\\Metadata',
            'entry' => '\\BancoBai\\Client\\Struct\\Entry',
            'channel' => '\\BancoBai\\Client\\Struct\\Channel',
            'customerOperation' => '\\BancoBai\\Client\\Struct\\CustomerOperation',
            'result' => '\\BancoBai\\Client\\Struct\\Result',
            'bankMovement' => '\\BancoBai\\Client\\Struct\\BankMovement',
            'mOperationTypology' => '\\BancoBai\\Client\\Struct\\MOperationTypology',
            'channelOperation' => '\\BancoBai\\Client\\Struct\\ChannelOperation',
            'customerOperationParameter' => '\\BancoBai\\Client\\Struct\\CustomerOperationParameter',
            'customerOperationStatus' => '\\BancoBai\\Client\\Struct\\CustomerOperationStatus',
            'resultInfo' => '\\BancoBai\\Client\\Struct\\ResultInfo',
            'mobilePaymentsMerchantView' => '\\BancoBai\\Client\\Struct\\MobilePaymentsMerchantView',
            'mobilePaymentsSoapOperationFaultBean' => '\\BancoBai\\Client\\Struct\\MobilePaymentsSoapOperationFaultBean',
            'cancelMobilePaymentCaptiveRequestFromMerchant' => '\\BancoBai\\Client\\Struct\\CancelMobilePaymentCaptiveRequestFromMerchant',
            'cancelMobilePaymentCaptiveRequestFromMerchantResponse' => '\\BancoBai\\Client\\Struct\\CancelMobilePaymentCaptiveRequestFromMerchantResponse',
            'CancelPaymentCaptiveRequestResponse' => '\\BancoBai\\Client\\Struct\\CancelPaymentCaptiveRequestResponse',
            'generateNewMobilePaymentRequestFromMerchant' => '\\BancoBai\\Client\\Struct\\GenerateNewMobilePaymentRequestFromMerchant',
            'ShoppingCart' => '\\BancoBai\\Client\\Struct\\ShoppingCart',
            'ShoppingCartItem' => '\\BancoBai\\Client\\Struct\\ShoppingCartItem',
            'generateNewMobilePaymentRequestFromMerchantResponse' => '\\BancoBai\\Client\\Struct\\GenerateNewMobilePaymentRequestFromMerchantResponse',
            'GenerateNewPaymentRequestResponse' => '\\BancoBai\\Client\\Struct\\GenerateNewPaymentRequestResponse',
            'initiateMobilePaymentViaOtpRequestFromMerchant' => '\\BancoBai\\Client\\Struct\\InitiateMobilePaymentViaOtpRequestFromMerchant',
            'initiateMobilePaymentViaOtpRequestFromMerchantResponse' => '\\BancoBai\\Client\\Struct\\InitiateMobilePaymentViaOtpRequestFromMerchantResponse',
            'InitiateNewPaymentViaOtpRequestResponse' => '\\BancoBai\\Client\\Struct\\InitiateNewPaymentViaOtpRequestResponse',
            'confirmMobilePaymentCaptiveRequestFromMerchant' => '\\BancoBai\\Client\\Struct\\ConfirmMobilePaymentCaptiveRequestFromMerchant',
            'confirmMobilePaymentCaptiveRequestFromMerchantResponse' => '\\BancoBai\\Client\\Struct\\ConfirmMobilePaymentCaptiveRequestFromMerchantResponse',
            'ConfirmPaymentCaptiveRequestResponse' => '\\BancoBai\\Client\\Struct\\ConfirmPaymentCaptiveRequestResponse',
            'generateQRCode' => '\\BancoBai\\Client\\Struct\\GenerateQRCode',
            'generateQRCodeResponse' => '\\BancoBai\\Client\\Struct\\GenerateQRCodeResponse',
            'GenerateQRCodeResponse' => '\\BancoBai\\Client\\Struct\\GenerateQRCodeResponse_1',
            'generateNewMobilePaymentCaptiveRequestFromMerchant' => '\\BancoBai\\Client\\Struct\\GenerateNewMobilePaymentCaptiveRequestFromMerchant',
            'generateNewMobilePaymentCaptiveRequestFromMerchantResponse' => '\\BancoBai\\Client\\Struct\\GenerateNewMobilePaymentCaptiveRequestFromMerchantResponse',
            'GenerateNewPaymentCaptiveRequestResponse' => '\\BancoBai\\Client\\Struct\\GenerateNewPaymentCaptiveRequestResponse',
            'validateMsisdnForPayments' => '\\BancoBai\\Client\\Struct\\ValidateMsisdnForPayments',
            'validateMsisdnForPaymentsResponse' => '\\BancoBai\\Client\\Struct\\ValidateMsisdnForPaymentsResponse',
            'ValidateMsisdnForPaymentResponse' => '\\BancoBai\\Client\\Struct\\ValidateMsisdnForPaymentResponse',
        ];
    }
}
