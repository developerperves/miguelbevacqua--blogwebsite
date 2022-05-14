<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Setting;

//use Your Model

/**
 * Class SettingRepository.
 */
class SettingRepository
{
    public function __construct()
    {
        //
    }
    public function update ($request) {
        
        
        $data = Setting::find(1);
        $input = $request->all();
   
        $image_files = ['logo','blog_banner_bg', 'about_banner_bg', 'about_thumbnail','project_banner_bg','count_bg'];
        foreach($image_files as $image_file){
            if ($file = $request->file($image_file)) {
                $input[$image_file] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images',$data,'/assets/images/',$image_file);
            }
        }
        
        $data->update($input);
    }
}
