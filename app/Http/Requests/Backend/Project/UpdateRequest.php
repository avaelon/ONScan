<?php

namespace App\Http\Requests\Backend\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'url' => ['nullable'],
            'featured_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'slider_images' => ['nullable'],
            'slider_images.*' => ['nullable', 'image', 'mimes:png,jpg,jpeg,svg'],
            'category_id' => ['required'],
            'industry' => ['nullable', 'string', 'max:255'],
            'description' => ['required'],
            'status' => ['required'],
        ];
    }
}
