<?php
namespace Ejin\LikeCounter\Extenders;

use Flarum\Extend\ExtenderInterface;
use Flarum\Extension\Extension;
use Flarum\Api\Event\Serializing;
use Flarum\Api\Serializer\UserSerializer;
use Illuminate\Contracts\Container\Container;
use Flarum\User\User;
use Flarum\Post\Post;

class AddUserAttributes implements ExtenderInterface
{

    public function extend(Container $container, Extension $extension = null)
    {
        $container['events']->listen(Serializing::class, [$this, 'attributes']);
    }

    public function attributes(Serializing $event)
    {
        if ($event->isSerializer(UserSerializer::class)) {
            $event->attributes['ejinLikeCount'] = (int)$event->model->ejin_like_count;
        }
    }
}
