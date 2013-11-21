<?php

/**
 * User: RiderSx
 * Date: 18.09.13
 * Time: 12:14
 */
return [
    'route' => 'auth.social',
    'opauth' => [
        'callback_transport' => 'post',
        'callback_url' => '/lala/lele',
        'Strategy' => [
            'Facebook' => array(
                'app_id' => 'xxx',
                'app_secret' => 'xxx'
            ),
            'Twitter' => array(
                'key' => 'xxx',
                'secret' => 'xxx'
            ),
            'Google' => array(
                //'redirect_uri' => 'http://laravel.bpt.local.com/auth/social/google',
                'client_id' => 'xxx.apps.googleusercontent.com',
                'client_secret' => 'xxx'
            )
        ]
    ]
];
