<?php

namespace HuangChun\MetaSystem\App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotification extends Notification
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to(config('telegram.work-chat-id'))
            ->content("系統通知 \n 環境： *".config('app.env')."* \n 內容： \n ```".$this->message.'```');
    }
}
