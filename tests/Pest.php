<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PyaeSoneAung\QuizApiClient\QuizApi;

function quizApi()
{
    return new QuizApi('foo');
}

function mockClient()
{
    $mock = new MockHandler([
        new Response(status: 200, body: json_encode(['foo' => 'bar'])),
    ]);
    $handlerStack = HandlerStack::create($mock);

    return new Client(['handler' => $handlerStack]);
}
