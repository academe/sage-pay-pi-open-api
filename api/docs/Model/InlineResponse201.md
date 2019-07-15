# # InlineResponse201

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionId** | **string** | Sage Pay’s unique reference for this transaction. | [optional] 
**transactionType** | **string** | The type of the transaction | [optional] 
**status** | **string** | Result of transaction registration.  * &#x60;Ok Transaction&#x60; - request completed successfully.  * &#x60;NotAuthed&#x60; - Transaction request was not authorised by the bank.  * &#x60;Rejected&#x60; - Transaction rejected by your fraud rules.  * &#x60;Malformed&#x60; - Missing properties or badly formed body.  * &#x60;Invalid&#x60; - Invalid property values supplied.  * &#x60;Error&#x60; - An error occurred at Sage Pay. | [optional] 
**statusCode** | **string** | Code related to the &#x60;status&#x60; of the transaction. *Successfully authorised transactions will have the &#x60;statusCode&#x60; of &#x60;0000&#x60;. You can lookup any other status code on our [website](https://www.sagepay.co.uk/support/error-codes).* | [optional] 
**statusDetail** | **string** | A detailed reason for the &#x60;status&#x60; of the transaction. | [optional] 
**retrievalReference** | **string** | Sage Pay unique Authorisation Code for a successfully authorised transaction. Only present if &#x60;status&#x60; is &#x60;Ok&#x60;. | [optional] 
**bankResponseCode** | **string** | Also known as the decline code, these are codes that are specific to your merchant bank. Please contact them for a description of each code. *This is only returned for transaction type &#x60;Payment&#x60;* | [optional] 
**bankAuthorisationCode** | **string** | The authorisation code returned from your merchant bank. | [optional] 
**avsCvsCheck** | [**\Academe\SagePay\PiSdk\Model\AvsCvsCheck**](AvsCvsCheck.md) |  | [optional] 
**paymentMethod** | [**\Academe\SagePay\PiSdk\Model\PaymentMethodObject**](PaymentMethodObject.md) |  | [optional] 
**amount** | **int** | The amount charged to the customer in the smallest currency unit. (e.g 100 pence to charge £1.00, or 1 to charge ¥1 (0-decimal currency). | [optional] 
**currency** | **string** | The currency of the amount in 3 letter [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format. | [optional] 
**_3dSecure** | [**\Academe\SagePay\PiSdk\Model\Model3DSecureObject**](Model3DSecureObject.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


