<?php

namespace PyaeSoneAung\QuizApiClient;

use PyaeSoneAung\QuizApiClient\Concerns\BuildBaseClient;
use PyaeSoneAung\QuizApiClient\Concerns\CanSendGetRequest;
use PyaeSoneAung\QuizApiClient\Resources\QuestionResource;

class QuizApi
{
    use BuildBaseClient;
    use CanSendGetRequest;

    public function __construct(
        private readonly string $apiKey
    ) {
    }

    public function questions(): QuestionResource
    {
        return new QuestionResource(
            service: $this
        );
    }
}
