<?php

namespace YFDev\System\App\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use YFDev\System\App\Helpers\LineSender;

final class LineChannel
{
    protected $lineSender;

    public function __construct()
    {
        $this->lineSender = new LineSender();
    }

    /**
     * 發送通知
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $msg = $notification->toLine($notifiable);

        if (!$msg) {
            Log::info('Line 通知錯誤', ['請填入通知訊息']);
            return;
        }

        $this->lineSender->sendMsg($msg);
    }
}
