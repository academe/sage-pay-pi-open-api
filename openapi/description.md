# Introduction

The Sage Pay REST API is based on [REST](http://en.wikipedia.org/wiki/Representational_state_transfer) principles. Our resource oriented URLs are only accessible via
HTTPS and are available in both our test and live environments.

We use [HTTP Authentication](#section/Authentication) and HTTP verbs for each method

|Verb | Description                    |
|-----|--------------------------------|
|GET  | Used for retrieving resources. |
|POST | Used for creating resources.   |

The Sage Pay API uses [JSON](http://en.wikipedia.org/wiki/JSON) format for both requests and responses.

We return [HTTP Response Codes](#section/Response-Codes) to indicate the success or failure of an API request, along with further information in the body.

## Environments

The Test Server is an exact copy of the Live System but without the banks attached. This means you get a true user experience but without the fear of any
money being taken from your cards during testing.

If you want to test our API without an account you can use one of our [sandbox accounts](#tag/Sandbox-Accounts).

If you would like to test our API with your own credentials you will need a Test Server account to be set up for you by the Sage Pay Support team. Your test
account can only be set up once you have submitted an online [Sage Pay application](https://applications.sagepay.com/apply).

#### Please ensure that you update your integration to the Live environment API endpoints and credentials before you go live.

## Getting your API credentials

Before you can start integrating with our REST API you need to get your Integration Key and Password. You can do that by following the guide below:

1. Go to MySagePay in either the [TEST](https://test.sagepay.com/mysagepay) or [LIVE](https://live.sagepay.com/mysagepay) environment and log in using the Administration log
in details that were provided to you during the setup of the account.

2. Once you are logged in as the Administrator, in the Password details section of the Administrator tab you will see an option to ‘Create API credentials’.

3. To create your credentials you just have to select the tick-box labelled “I understand that this will create new credentials and may break any existing Sage Pay API implementations.” and click on the 'Create API credentials’ button.

4. Once you have opted to create your new credentials we will present you with the following information:

  - Environment: This specifies the environment for which the credentials apply (test or live)
  - Vendor Name: The vendor name for the account
  - Integration Key: The value for the Integration key (username)
  - Integration Password: The value for the Integration password

#### When you choose to create new credentials, any previously generated credentials are immediately rendered invalid. Therefore, if you have already integrated with our REST API, you will not be able to authenticate your calls until you replace your expired credentials with the ones you just generated.

Please store these credentials safely. If you lose them, you will need to generate a new set of credentials using the same process.

Please note that these credentials are only valid for our REST API.

# Versioning

The current version of the Sage Pay API is v1, as defined in the base URL.

To ensure we don’t break your code, it’s essential that you support the following compatible changes:

* Adding new API resources
* Adding new optional request parameters.
* Adding new response properties.
* Adding additional values to parameters or properties in requests and responses.
* Changing the length or format of existing fields and resources.

Each time we release a change which isn’t backwards compatible (requires you to make a change), we will release a new version of the API.

Of course, we won’t suddenly stop supporting older versions but we would advise that to make full use of new benefits, you try to use the latest version.

Read our [API changelog](#tag/API-Changelog) to learn more and keep track of any changes.

# Getting Started

To process a test payment in three simple steps, go to the [Testing section](#tag/Sandbox-Accounts) where you can find the a collection of API requests.

**TEST**
To view our getting started and additional integration guides, go to the [integrations microsite](/payments/).

# Authentication
Requests to the Sage Pay API require authentication. We use [HTTP Basic authentication](https://en.wikipedia.org/wiki/Basic_access_authentication) for a simple,
yet secure method of enforcing access controls.

In order to access our protected resources you must authenticate with our API by providing us with your:

- Integration Key (Username)
- Integration Password (Password)

How to authenticate:

1. Using HTTP Basic authentication, you will need to combine into a string “integrationKey:integrationPassword”.
1. The resulting string will have to be encoded using [Base64](https://en.wikipedia.org/wiki/Base64) encoding.
1. The encoded string will have to be included in the Authorization header.

_The only exception to the above is the [card identifier](#tag/Card-Identifiers). To create a card identifier you will need to use the Merchant Session Keys as an access token in the
Authorization request header field._

As the Sage Pay API is available in our test and live environments, we will provide you with different credentials for both.

Please ensure that you are using the correct credentials for each environment.

#### Remember, all requests must be made over HTTPS. This is to ensure that all the sensitive customer information is protected.

# Response Codes

As much as possible, we attempt to use appropriate HTTP status codes, as well as returning additional details to aid with error handling.

## HTTP Response Codes

The Sage Pay API will return appropriate HTTP status codes for every request.

| Code | Text                 | Description
|------|----------------------|-------------------------------
| 200  | OK                   | Success! Everything worked as expected.
| 201  | Created              | Success! Everything worked as expected and a new resource has been created.
| 202  | Accepted             | The request has been accepted for processing, but the processing has not been completed.
| 204  | No Content           | The request has been successfully processed and is not returning any content.
| 400  | Bad Request          | The request could not be understood, generally a malformed body.
| 401  | Unauthorised         | Authentication credentials are missing or incorrect.
| 403  | Forbidden            | The request was formed correctly but is unsuccessful. Usually returned when a transaction request is declined or rejected.
| 404  | Not Found            | The resource does not exist.
| 405  | Method Not Allowed   | The method requested is not permitted against this resource.
| 408  | Request              | Timeout  Request timeout.
| 422  | Unprocessable Entity | The request was well-formed but contains invalid values or missing properties.
| 500  | Server Error         | An issue occurred at Sage Pay.
| 502  | Bad Gateway          | An issue occurred at Sage Pay.

## Sage Pay Error Codes

As well as returning the HTTP response code, the Sage Pay API will, when possible, return more detail about the error in the body. This will contain the properties `code` and `description` in JSON format.

When the HTTP response code is `422`, `property` and `clientMessage` fields are also returned, identifying which specific property the error relates to and a user-friendly message. When multiple `422` errors are detected these will be returned in an `errors` array.

Below is a complete list of Sage Pay errors.

| HTTP   | Code | Description
|--------|------|-------------
| `400 ` | 1000 | Incorrect request format
| `401 ` | 1001 | Authentication values are missing
| `401 ` | 1002 | Authentication failed
| `422 ` | 1003 | Missing mandatory field
| `422 ` | 1004 | Invalid length
| `422 ` | 1005 | Contains invalid characters
| `404 ` | 1006 | Merchant Session Keys not found
| `422 ` | 1007 | The card number has failed our validity checks and is invalid
| `422 ` | 1008 | The card is not supported
| `422 ` | 1009 | Contains invalid value
| `422 ` | 1010 | Currency does not exist
| `422 ` | 1011 | Merchant Session Keys or card identifier invalid
| `404 ` | 1012 | Transaction not found
| `403 ` | 1013 | Transaction type not supported
| `403 ` | 1014 | Transaction status not applicable
| `422 ` | 1015 | The request entity was empty
| `422 ` | 1016 | This parameter requires an integer
| `403 ` | 1017 | Operation not allowed for this transaction
| `403 ` | 1018 | This refund amount will exceed the amount of the original transaction
| `404 ` | 1019 | Transaction instructions not found
| `422 ` | 1020 | Unable to save a card identifier that is already reusable
| `403 ` | 1021 | This release amount will exceed the amount of the original transaction
| `408 ` | 9998 | Request timeout
| `500 ` | 9999 | An internal error occurred at Sage Pay

### Example JSON

```JSON
{
   "errors":[
      {
         "code": "1005",
         "property": "cardDetails.cardholderName",
         "description": "Contains invalid characters",
         "clientMessage": "The cardholder name contains invalid characters"
      },
      {
         "code": "1004",
         "property": "cardDetails.cardholderName",
         "description": "Invalid length",
         "clientMessage": "The cardholder name is too long"
      },
      {
         "code": "1003",
         "property": "cardDetails.cardNumber",
         "description": "Missing mandatory field",
         "clientMessage": "The card number is required"
      },
      {
         "code": "1005",
         "property": "cardDetails.expiryDate",
         "description": "Contains invalid characters",
         "clientMessage": "The expiry date has to be in MMYY format"
      }
   ]
}
```

### Transaction Error Codes

During transaction registration you may receive HTTP 422 errors with a code and description not mentioned in the table above.

To get help with our terminology and those error codes you can visit [our website](https://www.sagepay.co.uk/support/error-codes) and type the relevant error code there.
