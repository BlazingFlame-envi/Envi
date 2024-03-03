<?php

namespace App\Controller;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class SmsService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function sendSms(array $numbers, string $message)
    {
        $response = $this->client->request('POST', 'https://y363zp.api.infobip.com/sms/2/text/advanced', [
            'headers' => [
                'Authorization' => 'App 3bfd3ba2dc97ff6cc86a96b71b5ed171-d08b0c74-c8c9-4039-bdeb-117ad64e2432',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'messages' => [
                    [
                        'destinations' => array_map(function($number) { return ['to' => $number]; }, $numbers),
                        'from' => 'ServiceSMS',
                        'text' => $message,
                    ],
                ],
            ],
        ]);

        if (200 === $response->getStatusCode()) {
            return $response->getContent();
        } else {
            throw new \Exception('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' . $response->getReasonPhrase());
        }
    }
}


