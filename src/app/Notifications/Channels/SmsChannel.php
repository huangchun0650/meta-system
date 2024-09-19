<?php

namespace YFDev\System\App\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use YFDev\System\App\Helpers\SmSender;

final class SmsChannel
{
    protected $smsSender;

    public function __construct()
    {
        $this->smsSender = new SmSender;
    }

    /**
     * 發送通知
     *
     * @param  mixed  $notifiable
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $phone = $notifiable->phone;
        $msg = $notification->toSms($notifiable);

        if (! $phone || ! $msg) {
            Log::info('簡訊寄送錯誤', [$phone, $msg]);

            return;
        }

        $this->smsSender->sendMsg($phone, $msg);
    }
}
