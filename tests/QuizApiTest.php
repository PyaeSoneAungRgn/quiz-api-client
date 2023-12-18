<?php

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use PyaeSoneAung\QuizApiClient\Resources\QuestionResource;

it('can build client', function () {
    expect(quizApi()->buildClient())->toBeInstanceOf(Client::class);
});

it('can send get request', function () {
    expect(quizApi()->get(mockClient(), 'foo'))->toBeInstanceOf(ResponseInterface::class);
});

it('can return QuestionResource', function () {
    expect(quizApi()->questions())->toBeInstanceOf(QuestionResource::class);
});
