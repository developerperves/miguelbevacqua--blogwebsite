<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomebannerRequest extends FormRequest
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
        $required = $this->bg ? '' : 'required';

        return [
            'bg'      => [$required,'mimes:jpeg,jpg,png,svg'],
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
            'bg.required'  => __('BG field is required.'),
            'bg.mimes'  => __('BG file format not supported.'),
        ];
    }
}
