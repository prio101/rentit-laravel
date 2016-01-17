<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '566988553457056',
            'client_secret' => 'a84a80757cfc9dedc6505a9b423fb859',
            'redirect_uri' => 'http://rentit.dev/auth/facebook/login',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '515382690529-t1j0vu5tj6tarph6p8cb2epga2f8h922.apps.googleusercontent.com',
            'client_secret' => 'sbot-_sDfYbqtOEmHGfl2FsV',
            'redirect_uri' => 'http://rentit.dev/google/login',
            'scope' => [],
        ],
        'github' => [
            'client_id' => '97f7122a00d4e7b5ba9b',
            'client_secret' => 'dd4d4b048801a418c0d40faa4dab2cbeb942ab0b',
            'redirect_uri' => 'http://rentit.dev/github/login',
            'scope' => [],
        ],
//        'linkedin' => [
//            'client_id' => '12345678',
//            'client_secret' => 'y0ur53cr374ppk3y',
//            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
//            'scope' => [],
//        ],
//        'instagram' => [
//            'client_id' => '12345678',
//            'client_secret' => 'y0ur53cr374ppk3y',
//            'redirect_uri' => 'https://example.com/your/instagram/redirect',
//            'scope' => [],
//        ],
//        'soundcloud' => [
//            'client_id' => '12345678',
//            'client_secret' => 'y0ur53cr374ppk3y',
//            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
//            'scope' => [],
//        ],
    ],
];
