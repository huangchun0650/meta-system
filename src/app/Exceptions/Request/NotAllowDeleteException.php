<?php

namespace HuangChun\MetaSystem\App\Exceptions\Request;

use HuangChun\MetaSystem\App\Constants\ErrorCode;
use Exception;

/**
 * 無法刪除
 */
class NotAllowDeleteException extends Exception
{
    public function __construct(string $key)
    {
        parent::__construct($key, ErrorCode::INVALID_REQUEST);
    }
}
