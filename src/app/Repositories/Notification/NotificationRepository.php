<?php

namespace HuangChun\MetaSystem\App\Repositories\Notification;

use HuangChun\MetaSystem\App\Models\Notification;
use HuangChun\MetaSystem\App\Repositories\BaseRepository;

class NotificationRepository extends BaseRepository implements NotificationRepositoryInterface
{
    protected $model = Notification::class;
}
