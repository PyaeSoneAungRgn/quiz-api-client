<?php

namespace PyaeSoneAung\QuizApiClient\Concerns;

use GuzzleHttp\Client;

trait BuildBaseClient
{
    public function buildClient(): Client
    {
        return new Client([
            'base_uri' => 'https://quizapi.io',
            'headers' => [
                'X-Api-Key' => $this->apiKey,
            ],
        ]);
    }
}
