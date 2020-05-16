<?php

namespace Ejin\LikeCounter\Listeners;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Likes\Event\PostWasUnliked;
use Flarum\User\User;

class UnlikedPost
{
    public function handle(PostWasUnliked $event)
    {
      $user = $event->post->user;
      $user->ejin_like_count -= 1;
      $user->save();
    }
}
