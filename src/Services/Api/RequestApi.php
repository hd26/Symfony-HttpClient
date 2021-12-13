<?php

namespace App\Services\Api;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class RequestApi
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function RequestApi($requestApi): array
    {

        $response = $this->client->request(
            'GET',
            $requestApi
        );

        $statusCode = $response->getStatusCode();

        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();
        return $content;
    }
}
