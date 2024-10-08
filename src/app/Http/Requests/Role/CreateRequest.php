<?php

namespace HuangChun\MetaSystem\App\Http\Requests\Role;

use Illuminate\Validation\Rule;
use HuangChun\MetaSystem\App\Http\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('roles', 'name'),
            ],
            'permissions' => 'array',
            'permissions.*' => [
                'required',
                'integer',
                Rule::exists(config('permission.table_names.permissions'), 'id'),
            ],
        ];
    }
}
