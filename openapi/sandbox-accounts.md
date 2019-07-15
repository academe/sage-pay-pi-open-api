If you would like to test our REST API but you haven’t created your account yet, you can use one of our sandbox accounts in our TEST environment.

## Basic Profile

The basic profile account has the AVS / CV2 and 3-D Secure checks turned off by default. This account is used in most of our code examples.

Basic profile:

```JSON
vendorName: sandbox
integrationKey: hJYxsw7HLbj40cB8udES8CDRFLhuJ8G54O6rDpUXvE6hYDrria
integrationPassword: o2iHSrFybYMZpmWOQMuhsXP52V4fBtpuSDshrKDSWsBY1OiN6hwd9Kb12z4j5Us5u
```

## Extra Check Profile

The extra checks profile account has strict AVS / CV2 checks and 3-D Secure authentication enabled. Any transaction that does not pass either the AVS or CV2 checks will be rejected. The 3-D secure checks are turned on and successful transaction registration will result in a request for [3-D Secure authentication](#tag/3-D-Secure).

Extra checks profile:

```JSON
vendorName: sandboxEC
integrationKey: dq9w6WkkdD2y8k3t4olqu8H6a0vtt3IY7VEsGhAtacbCZ2b5Ud
integrationPassword: hno3JTEwDHy7hJckU4WuxfeTrjD0N92pIaituQBw5Mtj7RG3V8zOdHCSPKwJ02wAV
```

In order for a transaction to pass the AVS checks you will need to provide the following details in the `billingAddress` object:

* `"address1": "88"`

* `"postalCode": "412"`

In order for a transaction to pass the CV2 checks you will have to enter the following security code when creating a card identifier:

* `"securityCode": "123"`

#### You can always override the default security settings by using the `applyAvsCvcCheck` and `apply3DSecure` properties when posting to the [transactions endpoint](#tag/Transactions).

Example of a transaction that was declined by the security checks:

```JSON
{
    "statusCode": "2001",
    "statusDetail": "The Authorisation was Rejected by the vendor rule-base.",
    "transactionId": "759F9DE3-0641-324D-AAF9-825C0608A305",
    "bankResponseCode": "00",
    "status": "Rejected",
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
