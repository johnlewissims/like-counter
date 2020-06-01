<?php

namespace Ejin\LikeCounter\Listeners;

use Flarum\Api\Event\Serializing;
use Flarum\Api\Serializer\ForumSerializer;
use Flarum\Settings\SettingsRepositoryInterface;

class SaveSettings
{
    protected $settings;

    public function __construct(SettingsRepositoryInterface $settings)
    {
        $this->settings = $settings;
    }

    public function handle(Serializing $event)
    {
        if ($event->isSerializer(ForumSerializer::class)) {
            $event->attributes['like-counter.caption'] = $this->settings->get('like-counter.caption');
            $event->attributes['like-counter.display_under_comments'] = $this->settings->get('like-counter.display_under_comments');
        }
    }
}
