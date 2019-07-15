The table logs all major changes to the Sage Pay REST API in reverse chronological order.

Last Updated: `08-02-2017`

#### The date relates to when changes were applied to the TEST environment. Unless specified, changes will take effect on the LIVE environment 4 days later.

| Date       |	Version	| Details
|------------|----------|--------------------------
| 08-02-2017 | v1       |	Added `amount` object and `currency` to the transaction response of a POST on transactions endpoint.
| 20-01-2017 | v1       |	Added `Deferred` transaction type and `abort`\\`release` instructions.
| 15-09-2016 | v1       |	Added support for reusable `cardIdentifier`.
| 02-09-2016 | v1       |	Updated the API to use ISO 8601 standards Date Format in all date fields.
| 15-08-2016 | v1       |	Added support for `Void` instructions. Updated new response codes `1019`.
| 15-07-2016 | v1       |	Added support for `Refund` transactions. <br> Added amount and currency information to the response for GET requests to the transactions resource. <br> Updated how repeat transactions get created to be aligned with refunds and payments.
| 12-07-2016 | v1       |	Changed HTTP response code from `402` to `201` for POST requests to the transactions resource when the transaction status is `NotAuthed` or `Rejected` to better reflect that a resource has been created.
| 09-06-2016 | v1       |	Added payment method object in transaction responses.
| 16-05-2016 | v1       |	Added support for Repeat transactions.
| 29-04-2016 | v1       |	Added sandbox section and new test card details.
| 22-04-2016 | v1       |	Added support for `referrerId` parameter.
| 21-04-2016 | v1       |	Updated getting started and guides sections to include drop-in checkout.
| 18-02-2016 | BETA     |	Made `securityCode` optional when tokenising the card details.
| 15-02-2016 | BETA     |	Added getting your API credentials section. Added `clientMessage` as a property in SagePay Error Codes. Updated test card numbers.
| 22-01-2016 | BETA     |	Clarified parameters case when posting to ACS url.
| 12-11-2015 | BETA     |	Added support for transactions with 3-D Secure authentication.
| 29-10-2015 | BETA     |	Used `transactionId` in camelCase instead of `transactionID` in transaction response.
| 28-10-2015 | BETA     |	Included 3-D Secure object in transaction response.
| 21-08-2015 | BETA     |	Included transactions endpoint.
| 11-08-2015 | BETA     |	Initial release.
