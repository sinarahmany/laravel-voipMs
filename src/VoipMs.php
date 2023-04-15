<?php

namespace Sinarahmany\LaravelVoipMs;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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

        $response = Http::withUserAgent('ReqBin Curl Client/1.0')
            ->get(config('voipms.api_url'), [
                'api_username' => config('voipms.username'),
                'api_password' => config('voipms.password'),
                'method' => 'getMMS',
                'did' => config('voipms.did'),
                'dst' => $dst,
                'message' => $message
            ]);

        if ($response['status'] === 'success') {
            return $response['sms'];
        } else {
            throw new Exception($response['status']);
        }
    }

    /**
     * Send a MMS message to a Destination Number from the VoIP.ms API.
     *
     * @param int $dst The DID to retrieve SMS messages for.
     * @param string $message The message
     * @param string $media The message
     *
     * @return array The array of SMS messages for the specified DID.
     *
     * @throws Exception if the API response indicates an error.
     */
    public static function sendMMS(int $dst, string $message, string $mediaUrl = null): string
    {
        $method = 'sendMMS';

        if (empty($dst)) {
            return 'Destination number can not be empty!';
        }

        if (empty($message)) {
            return 'Text can not be empty!';
        }

        $response = Http::withUserAgent('ReqBin Curl Client/1.0')
            ->get(config('voipms.api_url'), [
                'api_username' => config('voipms.username'),
                'api_password' => config('voipms.password'),
                'method' => 'getMMS',
                'did' => config('voipms.did'),
                'dst' => $dst,
                'message' => $message,
                'media1' => $mediaUrl,
            ]);

        if ($response['status'] === 'success') {
            return $response['mms'];
        } else {
            throw new Exception($response['status']);
        }
    }


    /**
     * Retrieves a list of SMS messages by: date range, sms type, DID number, and contact.
     *
     * @param array|null $params
     * @return array The array of SMS messages for the specified DID.
     *
     * @throws Exception if the API response indicates an error.
     */
    public static function getSMS(array|null $params = ['id', 'from', 'to', 'type', 'contact', 'limit']): array
    {
        $method = 'getSMS';

        $validator = Validator::make($params, [
            'id' => 'nullable|int',
            'from' => 'nullable|date',
            'to' => 'nullable|date',
            'type' => 'nullable|numeric',
            'contact' => 'nullable|numeric',
            'limit' => 'nullable|numeric'
        ]);
        if ($validator->fails()) {
            throw new Exception($validator->messages());
        }

        $response = Http::withUserAgent('ReqBin Curl Client/1.0')
            ->get(config('voipms.api_url'), [
                'api_username' => config('voipms.username'),
                'api_password' => config('voipms.password'),
                'method' => 'getMMS',
                'did' => config('voipms.did'),
                'sms' => $params['id'] ?? null,
                'from' => $params['from'] ?? null,
                'to' => $params['to'] ?? null,
                'type' => $params['type'] ?? null,
                'contact' => $params['contact'] ?? null,
                'limit' => $params['limit'] ?? null,
            ]);

        if ($response['status'] === 'success') {
            return $response['sms'];
        } else {
            throw new Exception($response['status']);
        }
    }

    /**
     * Retrieves a list of MMS messages by: date range, sms type, DID number, and contact.
     *
     * @param array|null $params The params to filter messages
     *
     * @return array The array of SMS messages for the specified DID.
     *
     * @throws Exception if the API response indicates an error.
     */
    public static function getMMS(array|null $params = ['id', 'from', 'to', 'type', 'contact', 'limit']): array
    {
        $method = 'getMMS';

        $validator = Validator::make($params, [
            'id' => 'nullable|int',
            'from' => 'nullable|date',
            'to' => 'nullable|date',
            'type' => 'nullable|numeric',
            'contact' => 'nullable|numeric',
            'limit' => 'nullable|numeric'
        ]);
        if ($validator->fails()) {
            throw new Exception($validator->messages());
        }

        $response = Http::withUserAgent('ReqBin Curl Client/1.0')
            ->get(config('voipms.api_url'), [
                'api_username' => config('voipms.username'),
                'api_password' => config('voipms.password'),
                'method' => 'getMMS',
                'did' => config('voipms.did'),
                'sms' => $params['id'] ?? null,
                'from' => $params['from'] ?? null,
                'to' => $params['to'] ?? null,
                'type' => $params['type'] ?? null,
                'contact' => $params['contact'] ?? null,
                'limit' => $params['limit'] ?? null,
            ]);

        if ($response['status'] === 'success') {
            return $response['mms'];
        } else {
            throw new Exception($response['status']);
        }
    }
}
