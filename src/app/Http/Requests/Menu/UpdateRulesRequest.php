<?php

namespace HuangChun\MetaSystem\App\Http\Requests\Menu;

use Illuminate\Validation\Rule;
use HuangChun\MetaSystem\App\Http\Requests\BaseRequest;

class UpdateRulesRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'rules' => 'array',
            'rules.*' => [
                'sometimes',
                'integer',
                Rule::exists('rules', 'id'),
            ],
        ];
    }
}
