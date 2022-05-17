<?php

namespace App\Http\Requests\Languages;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required', Rule::unique('languages')->ignore($this->id),
            'lang' => 'required', Rule::unique('languages')->ignore($this->id),
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'This Language Title Is Already in use',
            'name.required' => 'Language Title Is Required',
            'lang.unique' => 'This Language Already in use',
            'lang.required' => 'Language Is Required!',
        ];
    }
}
