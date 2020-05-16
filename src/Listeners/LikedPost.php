<?php

namespace Ejin\LikeCounter\Listeners;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Likes\Event\PostWasLiked;
use Flarum\User\User;

class LikedPost
{
    public function handle(PostWasLiked $event)
    {
      $user = $event->post->user;
      $user->ejin_like_count += 1;
      $user->save();
    }
}
