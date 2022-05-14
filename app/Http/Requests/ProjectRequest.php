<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        $required = $this->photo ? '' : 'required';

        return [
            'heading' => 'required',
            'photo'      => [$required,'mimes:jpeg,jpg,png,svg'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'heading.required' => __('Heading field is required.'),
            'photo.required'  => __('Photo field is required.'),
            'photo.mimes'  => __('Photo file format not supported.'),
        ];
    }
}
