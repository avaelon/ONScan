<?php

namespace App\Http\Requests\Backend\EmployeeTemperature;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'file' => ['required', 'mimes:json,txt'],
        ];
    }

    /**
     * Get the error messages for the defined message.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'file.required' => 'upload the json only'
        ];
    }
}
