
# laravel-voipms

Laravel Voip Ms API Integration  - the perfect wingman for your Laravel project to connect with your VoIP Ms crush!

[![Total Downloads](https://img.shields.io/packagist/dt/sinarahmannejad/laravel-voipms.svg?style=flat)](https://packagist.org/packages/sinarahmannejad/laravel-voipm)
[![Latest Stable Version](https://img.shields.io/packagist/v/sinarahmannejad/laravel-voipms.svg?style=flat)](https://packagist.org/packages/sinarahmannejad/laravel-voipm)
[![License](https://img.shields.io/packagist/l/sinarahmannejad/laravel-voipms?style=flat)](#license)

## Installation

Begin by installing this package through Composer. Run this command from the Terminal:



```bash
  composer require sinarahmany/laravel-voipms
  php artisan vendor:publish

```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`VOIPMS_API_URL=https://voip.ms/api/v1/rest.php`

`VOIPMS_USERNAME={YOUR_USERNAME}`

`VOIPMS_PASSWORD={YOUR_PASSWORD}`

`VOIPMS_DID={YOUR_DID}`


## Usage

First, include the Facade class at the top of your file:

```php
use Sinarahmany\LaravelVoipMs\VoipMs;
```
To send an SMS message to a destination number, use the `sendSMS` method:

```php
VoipMs::sendSMS($yourNumber, $yourText);
```

To send an MMS message to a destination number, use the `sendMMS` method:

```php
VoipMs::sendMMS($yourNumber, $yourText, $imageurl (optional));
// Note: $imageUrl is optional.
```
To retrieve a list of SMS messages by date range, SMS type, DID number, and contact, use the `getSMS` method:
```php
VoipMs::getSMS(['id' => $smsId, 'from' => $fromDate, 'to' => $toDate, 'type' => $smsType, 'contact' => $contactNumber, 'limit' => $limit]);
// Note: passed params are optional.
```

## Note for Developers:


This is a development package and may be subject to frequent changes and updates as development continues. It is recommended that you regularly check for updates and incorporate any changes as needed.

Thank you for using this development package, and happy coding!


## Feedback

If you have any feedback, please reach out to us at info@sinarahmannejad.com


## Credits

- [@sinarahmany](https://www.github.com/sinarahmany)


## License

[MIT](https://choosealicense.com/licenses/mit/)

