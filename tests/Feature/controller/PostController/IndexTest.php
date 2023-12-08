<?php

use Inertia\Testing\AssertableInertia;

use function Pest\Laravel\get;

it('should return the correct component', function () {

    get(route('posts.index'))
        ->assertInertia(
            fn (AssertableInertia $inertia) => $inertia
                ->component('Posts/Index', true)
        );

});

it('passes post to the view component', function () {

    get(route('posts.index'))
        ->assertInertia(
            fn (AssertableInertia $inertia) => $inertia
                ->component('Posts/Index', true)
        );

});