<?php

namespace App\Controller;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class EmailService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function sendEmail($sujet,$text)
    {

        $response = $this->client->request('POST', 'https://y363zp.api.infobip.com/email/3/send', [
            'headers' => [
                'Authorization' => 'App 3bfd3ba2dc97ff6cc86a96b71b5ed171-d08b0c74-c8c9-4039-bdeb-117ad64e2432',
                'Content-Type' => 'multipart/form-data',
                'Accept' => 'application/json',
            ],
            'body' => [
                'from' => 'marwen <Marouen.BenMohamed@esprit.tn>',
                'subject' => 'test',
                'to' => '{"to":"b.mohamed.marwen@gmail.com","placeholders":{"firstName":"marwen"}}',
                'text' => 'sssss',
            ]
        ]);

        if (200 === $response->getStatusCode()) {
            return $response->getContent();
        } else {
            throw new \Exception('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' . $response->getReasonPhrase());
        }
    }
}
