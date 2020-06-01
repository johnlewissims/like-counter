<?php

namespace Ejin\LikeCounter\Serializers;

use Flarum\Api\Event\Serializing;
use Flarum\Api\Serializer\UserSerializer;
use Flarum\Api\Serializer\PostSerializer;
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
        $event->attributes['ejinLikeCount'] = Post::where('user_id', $event->model->id)->select('id')->withCount('likes')->get()->sum('likes_count');
      }
      if ($event->isSerializer(PostSerializer::class)) {
        $event->attributes['ejinLikeCount'] = Post::where('user_id', $event->model->user_id)->select('id')->withCount('likes')->get()->sum('likes_count');
      }
    }
}
