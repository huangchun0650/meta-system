<?php

namespace YFDev\System\App\Notifications;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;

class PusherQueueNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $channel;
    private $isPrivate;
    private $type;
    private $message;

    public function __construct(String $channel, String $type, array $message = [])
    {
        $this->isPrivate = strpos($channel, 'private') !== FALSE;
        $this->channel = $this->isPrivate ? str_replace('private-', '', $channel) : $channel;
        $this->type = $type;
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return $this->shouldSend() ? ['broadcast'] : [];
    }

    public function broadcastType()
    {
        return $this->type;
    }

    public function broadcastOn()
    {
        if ($this->isPrivate) {
            return new PrivateChannel($this->channel);
        }
        return new Channel($this->channel);
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage($this->message);
    }

    public function shouldSend()
    {
        $cacheKey = 'notification_' . $this->type . '_' . md5(json_encode($this->message));

        if (Cache::has($cacheKey)) {
            return false;
        }

        Cache::put($cacheKey, true, 15);

        return true;
    }
}
