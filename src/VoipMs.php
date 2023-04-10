<?php

namespace Sinarahmannejad\LaravelVoipMs;

use Exception;
use Illuminate\Support\Facades\Http;

class VoipMs
{
    /**
     * Send a SMS message to a Destination Number from the VoIP.ms API.
     *
     * @param int $dst The DID to retrieve SMS messages for.
     * @param string $message The message
     *
     * @return array The array of SMS messages for the specified DID.
     *
     * @throws Exception if the API response indicates an error.
     */
    public static function sendSMS(int $dst, string $message): string
    {
        $method = 'sendSMS';

        if (empty($dst)) {
            return 'Destination number can not be empty!';
        }

        if (empty($message)) {
            return 'Text can not be empty!';
        }

        $request = config('voipms.api_url') .
            '?api_username=' . config('voipms.username') .
            '&api_password=' . config('voipms.password') .
            '&method=' . $method .
            '&did=' . config('voipms.did') .
            '&dst=' . $dst .
            '&message=' . $message;

        $jsonResponse = Http::withHeaders([
            'User-Agent: ReqBin Curl Client/1.0'
        ])
            ->get($request);

        if ($jsonResponse['status'] === 'success') {
            return $jsonResponse['sms'];
        } else {
            throw new Exception($jsonResponse['status']);
        }
    }

    /**
     * Send a MMS message to a Destination Number from the VoIP.ms API.
     *
     * @param int $dst The DID to retrieve SMS messages for.
     * @param string $message The message
     *
     * @return array The array of SMS messages for the specified DID.
     *
     * @throws Exception if the API response indicates an error.
     */
    public static function sendMMS(int $dst, string $message): string
    {
        $method = 'sendMMS';

        if (empty($dst)) {
            return 'Destination number can not be empty!';
        }

        if (empty($message)) {
            return 'Text can not be empty!';
        }

        $request = config('voipms.api_url') .
            '?api_username=' . config('voipms.username') .
            '&api_password=' . config('voipms.password') .
            '&method=' . $method .
            '&did=' . config('voipms.did') .
            '&dst=' . $dst .
            '&message=' . $message;

        $jsonResponse = Http::withHeaders([
            'User-Agent: ReqBin Curl Client/1.0'
        ])
            ->get($request);

        if ($jsonResponse['status'] === 'success') {
            return $jsonResponse['sms'];
        } else {
            throw new Exception($jsonResponse['status']);
        }
    }


    /**
     * Retrieves a list of SMS messages by: date range, sms type, DID number, and contact.
     *
     * @param int $dst The DID to retrieve SMS messages for.
     * @param string $message The message
     *
     * @return array The array of SMS messages for the specified DID.
     *
     * @throws Exception if the API response indicates an error.
     */
    public static function getSMS(int $id = null, string $from = null, string $to = null, bool $type = true, int $contactNo = null, int $limit = null): Array
    {
        $method = 'getSMS';

        $request = config('voipms.api_url') .
            '?api_username=' . config('voipms.username') .
            '&api_password=' . config('voipms.password') .
            '&method=' . $method .
            '&did=' . config('voipms.did') .
            '&sms=' . $id .
            '&from=' . $from .
            '&to=' . $to .
            '&type=' . $type .
            '&contact=' . $contactNo .
            '&limit=' . $limit;

        $jsonResponse = Http::withHeaders([
            'User-Agent: ReqBin Curl Client/1.0'
        ])
            ->get($request);

        if ($jsonResponse['status'] === 'success') {
            return $jsonResponse['sms'];
        } else {
            throw new Exception($jsonResponse['status']);
        }
    }

    /**
     * Retrieves a list of MMS messages by: date range, sms type, DID number, and contact.
     *
     * @param int $dst The DID to retrieve SMS messages for.
     * @param string $message The message
     *
     * @return array The array of SMS messages for the specified DID.
     *
     * @throws Exception if the API response indicates an error.
     */
    public static function getMMS(int $id = null, string $from = null, string $to = null, bool $type = true, int $contactNo = null, int $limit = null): Array
    {
        $method = 'getMMS';

        $request = config('voipms.api_url') .
            '?api_username=' . config('voipms.username') .
            '&api_password=' . config('voipms.password') .
            '&method=' . $method .
            '&did=' . config('voipms.did') .
            '&sms=' . $id .
            '&from=' . $from .
            '&to=' . $to .
            '&type=' . $type .
            '&contact=' . $contactNo .
            '&limit=' . $limit;

        $jsonResponse = Http::withHeaders([
            'User-Agent: ReqBin Curl Client/1.0'
        ])
            ->get($request);

        if ($jsonResponse['status'] === 'success') {
            return $jsonResponse['sms'];
        } else {
            throw new Exception($jsonResponse['status']);
        }
    }
}
