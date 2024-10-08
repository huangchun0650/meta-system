<?php

namespace HuangChun\MetaSystem\App\Http\Requests\Setting;

use Illuminate\Validation\Rule;
use HuangChun\MetaSystem\App\Http\Requests\BaseRequest;

class UpdateMethodRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('methods', 'name')->ignore($this->route('method')->id),
            ],
        ];
    }
}
