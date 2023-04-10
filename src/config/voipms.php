<?php

return [


    /*
    |--------------------------------------------------------------------------
    | API Url
    |--------------------------------------------------------------------------
    |
    | The VOIP Ms Api Url
    |
    */
    'api_url' => env('VOIPMS_API_URL', 'https://voip.ms/api/v1/rest.php'),

    /*
    |--------------------------------------------------------------------------
    | Access Token
    |--------------------------------------------------------------------------
    |
    | Access token that can be found in your VOIP Ms dashboard
    |
    */
    'username' => env('VOIPMS_USERNAME', ''),
    'password' => env('VOIPMS_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | DID
    |--------------------------------------------------------------------------
    |
    | The DID number registered with VOIP MS that your SMS & Calls will come from
    |
    */
    'did' => env('VOIPMS_DID', ''),

];
