<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'logo' => 'mimes:jpeg,jpg,png,svg',
            'blog_banner_bg' => 'mimes:jpeg,jpg,png,svg',
            'about_banner_bg' => 'mimes:jpeg,jpg,png,svg',
            'about_thumbnail' => 'mimes:jpeg,jpg,png,svg',
            'project_banner_bg' => 'mimes:jpeg,jpg,png,svg',
            'count_bg' => 'mimes:jpeg,jpg,png,svg',
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
            'logo.mimes'    => __('Logo type must be jpg,jpeg,png,svg.'),
            'blog_banner_bg.mimes'    => __('Blog Banner Image type must be jpg,jpeg,png,svg,gif.'),
            'about_banner_bg.mimes'    => __('About Banner BG type must be jpg,jpeg,png,svg,gif.'),
            'about_thumbnail.mimes'    => __('About Thumbnail Image type must be jpg,jpeg,png,svg,ico.'),
            'project_banner_bg.mimes'    => __('Project Banner BG type must be jpg,jpeg,png,svg.'),
            'count_bg.mimes'    => __('Counter BG must be jpg,jpeg,png,svg.'),
        ];
    }
}
