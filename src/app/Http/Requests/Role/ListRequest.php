<?php

namespace HuangChun\MetaSystem\App\Http\Requests\Role;

use HuangChun\MetaSystem\App\Http\Requests\BaseRequest;

class ListRequest extends BaseRequest
{
    public function rules()
    {
        $baseRules = parent::rules();

        $selfRules = [];

        return array_merge($baseRules, $selfRules);
    }
}
