<?php

namespace HuangChun\MetaSystem\App\Helpers;

use Illuminate\Database\Eloquent\Model;
use HuangChun\MetaSystem\App\Models\Notification as NotificationModel;

final class NotificationHelper
{
    protected $model;
    protected $logEvent;
    protected $logMessage;
    protected $pusherData = [];

    public static function create(Model $model)
    {
        $instance = new static();
        $instance->toModel($model);
        return $instance;
    }

    public function toModel(Model $model)
    {
        $this->model = $model;

        return $this;
    }

    public function setLog(String $event, String $message = "")
    {
        $this->logEvent = $event;
        $this->logMessage = $message;
        return $this;
    }

    public function addPusherChannel($channel, $event, $payload)
    {
        $this->pusherData[] = [
            'channel'   => $channel,
            'eventType' => $event,
            'payload'   => $payload,
        ];
        return $this;
    }

    public function setPusher(array $pusherData)
    {
        $this->pusherData = $pusherData;
        return $this;
    }

    public function createLog($customer)
    {
        if (!$this->logEvent || !$this->logMessage) {
            return FALSE;
        }

        return NotificationModel::create([
            'customer_id' => $customer->id,
            'model_type'  => get_class($this->model),
            'model_id'    => $this->model->id,
            'event'       => $this->logEvent,
            'message'     => $this->logMessage,
        ]);
    }

    public function getPusherData()
    {
        return $this->pusherData;
    }

    public function getCustomerChannel()
    {
        $channels = array_filter($this->pusherData, function ($pusher) {
            return strpos($pusher['channel'], 'private-customer') === 0;
        });

        if (empty($channels)) {
            return NULL;
        }

        $channels = array_values($channels);
        return $channels[0]['channel'];
    }

    public function getModelName()
    {
        return get_class($this->model);
    }

    public function getModelId()
    {
        return $this->model->id;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
