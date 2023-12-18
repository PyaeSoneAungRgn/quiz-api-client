<?php

namespace PyaeSoneAung\QuizApiClient\Resources;

use Pyaesoneaung\QuizApiClient\QuizApi;

class QuestionResource
{
    public function __construct(
        private readonly QuizApi $service,
    ) {
    }

    public function get(): array
    {
        $body = $this->service->get(
            apiClient: $this->service->buildClient(),
            url: '/api/v1/questions',
        )->getBody();

        return json_decode($body, true);
    }
}
