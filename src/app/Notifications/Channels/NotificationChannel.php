<?php

namespace YFDev\System\App\Notifications\Channels;

use YFDev\System\App\Constants\Pusher;
use YFDev\System\App\Notifications\PusherQueueNotification;
use Illuminate\Notifications\Notification;
use YFDev\System\App\Models\Admin;

final class NotificationChannel
{
    protected $system;

    /**
     * Channel constructor.
     */
    public function __construct()
    {
        $this->system = Admin::find(1);
    }

    /**
     * Send the given notification.
     */
    public function send(mixed $notifiable, Notification $notification)
    {
        // @phpstan-ignore-next-line
        $data = $notification->toSendNotifications($notifiable);

        if ($data->createLog($notifiable)) {
            if (! is_null($data->getCustomerChannel())) {
                // Refresh Notify
                \Notification::send($this->system, new PusherQueueNotification(
                    $data->getCustomerChannel(),
                    Pusher::TYPE_REFRESH,
                    ['on' => 'notify']
                ));
            }
        }

        foreach ($data->getPusherData() as $pusher) {
            if ($pusher['eventType'] === Pusher::TYPE_NEW_NOTIFICATION) {
                $pusher['payload']['class'] = $data->getModelName();
                $pusher['payload']['classId'] = $data->getModelId();
            }

            \Notification::send($this->system, new PusherQueueNotification(
                $pusher['channel'],
                $pusher['eventType'],
                $pusher['payload']
            ));
        }
    }
}
