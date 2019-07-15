# # BillingAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address1** | **string** | Billing address line 1, used in AVS check. | 
**address2** | **string** | Billing address line 2. | [optional] 
**city** | **string** | Billing city. | 
**postalCode** | **string** | Billing postal code, used in AVS check. Not required when &#x60;country&#x60; is &#x60;IE&#x60;. | [optional] 
**country** | **string** | Two letter country code defined in [ISO 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) | 
**state** | **string** | Two letter state code defined in [ISO 3166-2](http://en.wikipedia.org/wiki/ISO_3166-2:US). Required when &#x60;country&#x60; is &#x60;US&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


