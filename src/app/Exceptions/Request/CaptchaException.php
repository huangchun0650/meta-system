<?php

namespace HuangChun\MetaSystem\App\Exceptions\Request;

use HuangChun\MetaSystem\App\Constants\ErrorCode;

/**
 * 驗證碼錯誤
 */
class CaptchaException extends CustomValidationException
{
    public function __construct(string $key)
    {
        parent::__construct($key, 'captcha', ErrorCode::CAPTCHA_ERROR);
    }
}
