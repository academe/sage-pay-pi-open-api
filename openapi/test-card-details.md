We have a list of card details that can be used in our test environment and allow for successful transactions to be processed. When you are using any of the cards listed below you will always receive an authorisation code from the test server.

 #### Please make sure that you do not use your real card details to test your integration.

| Payment Method	          | Card Number	      | Card Type	        | 3-D Secure object status
|---------------------------|-------------------|-------------------|-------------------------
| Visa	                    | 4929000000006	    | `Visa`	          | `Authenticated`
| Visa	                    | 4929000005559	    | `Visa`	          | `CardNotEnrolled`
| Visa	                    | 4929000000014	    | `Visa`	          | `IssuerNotEnrolled`
| Visa	                    | 4929000000022	    | `Visa`	          | `Error`
| Visa Corporate	          | 4484000000002	    | `Visa`	          | `CardNotEnrolled`
| Visa Debit	              | 4462000000000003	| `VisaDebit`	      | `Authenticated`
| Visa Electron	            | 4917300000000008	| `VisaElectron`	  | `Authenticated`
| MasterCard	              | 5404000000000001	| `MasterCard`	    | `Authenticated`
| MasterCard	              | 5404000000000043	| `MasterCard`	    | `CardNotEnrolled`
| MasterCard	              | 5404000000000084	| `MasterCard`	    | `IssuerNotEnrolled`
| MasterCard	              | 5404000000000068	| `MasterCard`	    | `Error`
| Debit MasterCard	        | 5573470000000001	| `DebitMasterCard`	| `Authenticated`
| Maestro (UK Issued)	      | 6759000000005	    | `Maestro`	        | `Authenticated`
| Maestro (German Issued)	  | 6705000000008	    | `Maestro`	        | `Authenticated`
| Maestro (Irish Issued)	  | 6777000000007	    | `Maestro`	        | `Authenticated`
| Maestro (Spanish Issued)	| 6766000000000	    | `Maestro`	        | `Authenticated`
| American Express	        | 374200000000004	  | `AmericanExpress`	| N/A
| Diners Club / Discover	  | 36000000000008	  | `Discover`	      | N/A
| JCB	                      | 3569990000000009	| `JCB`	            | N/A

* **The `securityCode` (CV2/CVV) is always: 123**
* **The `billingAddress.address1` is: 88**
* **The `billingAddress.postalCode` is: 412**
* **Any `expiryDate can` be entered as long as it is in the future**

## Testing 3-D Secure Authentication

To aid the implementation and testing of the 3-D Secure authentication functionality, each card will provide you with a specific 3-D Secure authentication result. This is indicated by the `status` value in the [3-D Secure](#tag/3-D-Secure) object status column.

* To successfully authenticate the transaction, enter password into the `password` field during the 3-D Secure authentication process.
* You can enter `E:N:06` into the password field to simulate the scenario where an error occurred during authentication and you will receive the 3-D Secure `status`: `Error`
* You can enter `A:D:06` into the password field to simulate the scenario where the cardholder is not enrolled in scheme and you will receive the 3-D Secure `status`: `AttemptOnly`
* You can enter `U:N:06` into the password field to simulate the scenario where the 3D Secure authentication is not available and you will receive the 3-D Secure `status`: `Incomplete`

Any other phrase will fail the authentication, allowing you to test your rules and 3-D Secure response handling.

## Simulating 'Declined by the bank' response

If you wish to simulate a 'Declined by the bank’ response you have to use one of the following card details.

| Payment Method | Card Number      | Card Type
|----------------|------------------|------------
| Visa           | 4929602110085639 | `Visa`
| MasterCard     | 5403814948608092 | `MasterCard`

Example of a response when the transaction has been declined by the bank:

```JSON
{
  "statusCode": "2000",
  "statusDetail": "The Authorisation was Declined by the bank.",
  "transactionId": "786D4F71-C1CB-8065-E609-FB29C026BF91",
  "bankResponseCode": "05",
  "status": "NotAuthed",
  "paymentMethod": {
        "card": {
            "cardType": "Visa",
            "lastFourDigits": "0006",
            "expiryDate": "0320",
            "cardIdentifier": "cardTokenUUID",
            "reusable": false
        }
    },
   "amount": {
      "totalAmount": 10000,
      "saleAmount": 10000,
      "surchargeAmount": 0
     },
  "currency" : "GBP",
  "3DSecure": {
    "status": "NotChecked"
  }
}
```
