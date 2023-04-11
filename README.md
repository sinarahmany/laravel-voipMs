
# laravel-voipms

Laravel Voip Ms API Integration

[![Total Downloads](https://img.shields.io/packagist/dt/sinarahmannejad/laravel-voipms.svg?style=flat)](https://packagist.org/packages/sinarahmannejad/laravel-voipm)
[![Latest Stable Version](https://img.shields.io/packagist/v/sinarahmannejad/laravel-voipms.svg?style=flat)](https://packagist.org/packages/sinarahmannejad/laravel-voipm)
[![License](https://img.shields.io/packagist/l/sinarahmannejad/laravel-voipms?style=flat)](#license)

## Installation

Begin by installing this package through Composer. Run this command from the Terminal:



```bash
  composer require sinarahmannejad/laravel-voipms
  php artisan vendor:publish --provider="Sinarahmannejad\LaravelVoipMs\VoipMsServiceProvider"

```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`VOIPMS_API_URL=https://voip.ms/api/v1/rest.php`

`VOIPMS_USERNAME={YOURUSERNAME}`

`VOIPMS_PASSWORD={YOURPASSWORD`

`VOIPMS_DID={YOURDID}`


## Credits

- [@sinarahmany](https://www.github.com/sinarahmany)


## License

[MIT](https://choosealicense.com/licenses/mit/)

