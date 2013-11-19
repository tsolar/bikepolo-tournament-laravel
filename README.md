bikepolo-tournament-laravel
===========================

bikepolo-tournament with laravel 4

### Example code for laravel-opauth config:

```php
<?php

/**
 *
 */
return [
    'route' => 'auth.social',
    'opauth' => [
        'callback_transport' => 'post',
        'callback_url' => '/lala/lele',
        'Strategy' => [
            'Facebook' => array(
                'app_id' => 'app_id',
                'app_secret' => 'app_secret'
            ),
        ]
    ]
];
```
