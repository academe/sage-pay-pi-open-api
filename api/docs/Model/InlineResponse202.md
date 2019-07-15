# # InlineResponse202

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**statusCode** | **string** | Code related to the &#x60;status&#x60; of the transaction. *You can lookup any status code on our [website](https://www.sagepay.co.uk/support/error-codes).* | [optional] 
**statusDetail** | **string** | A detailed reason for the &#x60;status&#x60; of the transaction. | [optional] 
**transactionId** | **string** | Sage Pay’s unique reference for this transaction. | [optional] 
**acsUrl** | **string** | A fully qualified URL that points to the 3-D Secure authentication system at the card holder’s issuing bank | [optional] 
**paReq** | **string** | A Base64 encoded, encrypted message that contains the transaction details. This needs to be passed to the issuing bank as part of the 3-D Secure authentication | [optional] 
**status** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


