<?php

use PyaeSoneAung\QuizApiClient\QuizApi;
use PyaeSoneAung\QuizApiClient\Resources\QuestionResource;

it('can get questions', function () {
    $client = Mockery::mock(QuizApi::class);
    $client->shouldReceive('buildClient')->andReturnUsing(
        fn () => mockClient()
    );
    $client->shouldReceive('get')->andReturnUsing(
        fn () => mockClient()->get('/foo')
    );

    expect((new QuestionResource($client))->get())->toBeArray();
});
