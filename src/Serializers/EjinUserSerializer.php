<?php

namespace Ejin\LikeCounter\Serializers;

use Flarum\Api\Event\Serializing;
use Flarum\Api\Serializer\UserSerializer;
use Flarum\Extend\ExtenderInterface;
use Flarum\Post\Post;
use Flarum\User\User;
use Flarum\Extension\Extension;
use Illuminate\Contracts\Container\Container;

class EjinUserSerializer implements ExtenderInterface
{
    public function extend(Container $container, Extension $extension = null)
    {
      $container['events']->listen(Serializing::class, [$this, 'attributes']);
    }

    public function attributes(Serializing $event)
    {
      if ($event->isSerializer(UserSerializer::class)) {
        $userId = User::where('username', $event->attributes['username'])->select('id')->get()->first();
        $event->attributes['ejinLikeCount'] = Post::where('user_id', $userId->id)->select('id')->withCount('likes')->get()->sum('likes_count');
      }
    }
}
