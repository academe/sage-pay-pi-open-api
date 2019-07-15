# # Model3DSecureObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The 3-D Secure status of the transaction, if applied.  * &#x60;Ok Transaction&#x60; - request completed successfully.   * &#x60;Authenticated&#x60; - 3-D Secure checks carried out and user authenticated correctly.  * &#x60;NotChecked&#x60; - 3-D Secure checks were not performed. This indicates that 3-D Secure was either switched off at the account level, or disabled at transaction registration with the &#x60;apply3DSecure&#x60; set to &#x60;Disable&#x60;.  * &#x60;NotAuthenticated&#x60; - 3-D Secure authentication checked, but the user failed the authentication.  * &#x60;Error&#x60; - Authentication could not be attempted due to data errors or service unavailability in one of the parties involved in the check.  * &#x60;CardNotEnrolled&#x60; - This means that the card is not in the 3-D Secure scheme.  * &#x60;IssuerNotEnrolled&#x60; - This means that the issuer is not part of the 3-D Secure scheme.  * &#x60;MalformedOrInvalid&#x60; - This means that there is a problem with creating or receiving the 3D Secure data. These should not occur on the live environment.  * &#x60;AttemptOnly&#x60; - This means that the cardholder attempted to authenticate themselves but the process did not complete. A liability shift may occur for non-Maestro cards, depending on your merchant agreement.  * &#x60;Incomplete&#x60; - This means that the 3D Secure authentication was not available (normally at the card issuer site). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


