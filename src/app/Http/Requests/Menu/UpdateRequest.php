<?php

namespace HuangChun\MetaSystem\App\Http\Requests\Menu;

use Illuminate\Validation\Rule;
use HuangChun\MetaSystem\App\Http\Requests\BaseRequest;

class UpdateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'sortOrder' => [
                'nullable',
                'integer',
            ],
            'name' => [
                'required',
                'string',
                Rule::unique('menus', 'name')->ignore($this->route('menu')->id),
            ],
            'code' => [
                'required',
                'string',
                Rule::unique('menus', 'code')->ignore($this->route('menu')->id),
            ],
        ];
    }
}
