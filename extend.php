<?php

/*
 * This file is part of ejin/like-counter.
 *
 * Copyright (c) 2020 John Lewis SIms.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Ejin\LikeCounter;

use Flarum\Extend;
use Flarum\Frontend\Document;
use Flarum\User\User;
use Illuminate\Contracts\Events\Dispatcher;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    new Extend\Locales(__DIR__ . '/resources/locale'),

    function () {
      //echo "Hello World";
    },
];
