<?php

use Flarum\Database\Migration;

return Migration::addColumns('users', [
    'ejin_like_count' => [
        'integer',
        'length' => 10,
        'nullable' => true,
        'default' => 0,
    ],
]);
