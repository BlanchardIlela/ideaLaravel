<?php

test('register a user', function () {
    visit('/register')
        ->fill('name', 'Joah Doe')
        ->fill('email', 'john@doe.fr')
        ->fill('password', 'aroina20')
        ->click('Create Account')
        ->assertPathIs('/');
});
