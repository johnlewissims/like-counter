<?php

/*
 * This file is part of ejin/like-counter.
 *
 * Copyright (c) 2020 John Lewis Sims.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Ejin\LikeCounter;

use Flarum\Extend;
use Flarum\Frontend\Document;
use Flarum\User\User;
use Flarum\Foundation\Application;
use Flarum\Likes\Event\PostWasLiked;
use Flarum\Likes\Event\PostWasUnliked;
use Illuminate\Contracts\Events\Dispatcher;

use Ejin\LikeCounter\Controllers\UserLikesController;
use Ejin\LikeCounter\Extenders\AddUserAttributes;
use Ejin\LikeCounter\Listeners\LikedPost;
use Ejin\LikeCounter\Listeners\UnlikedPost;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    new Extend\Locales(__DIR__ . '/resources/locale'),

    new AddUserAttributes(),

    function (Dispatcher $events) {
      $events->listen(PostWasLiked::class, LikedPost::class);
      $events->listen(PostWasUnliked::class, UnlikedPost::class);
    },

    (new Extend\Routes('api'))
    ->get('/like-count-init', 'ejin-like-counter', UserLikesController::class)
];
