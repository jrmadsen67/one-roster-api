<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'consumer_key'    => env('ONE_ROSTER_KEY'),
    'consumer_secret' => env('ONE_ROSTER_SECRET'),
    'token_secret' => env('ONE_ROSTER_TOKEN', null),
    'debug' => env('ONE_ROSTER_DEBUG', false),
];
