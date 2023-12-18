<?php

namespace PyaeSoneAung\QuizApiClient\Concerns;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

trait CanSendGetRequest
{
    public function get(Client $apiClient, string $url): ResponseInterface
    {
        return $apiClient->request('GET', $url);
    }
}
