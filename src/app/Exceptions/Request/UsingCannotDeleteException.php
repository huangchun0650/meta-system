<?php

namespace HuangChun\MetaSystem\App\Exceptions\Request;

use HuangChun\MetaSystem\App\Constants\ErrorCode;

/**
 * 使用中無法刪除
 */
class UsingCannotDeleteException extends CustomValidationException
{
    public function __construct(string $key)
    {
        parent::__construct($key, 'using', ErrorCode::USING_CANNOT_DELETE);
    }
}
