<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Homebanner;



class HomebannerRepository 
{
   
    public function __construct()
    {
        //
    }
    
    /**
     * Store meal.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['bg'] = ImageHelper::handleUploadedImage($request->file('bg'),'assets/images');
        Homebanner::create($input);
    }

    /**
     * Update Brand.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($banner, $request)
    {
        $input = $request->all();
        if ($file = $request->file('bg')) {
            $input['bg'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images',$banner,'/assets/images/','bg');
        }
        $banner->update($input);
    }

    /**
     * Delete brand.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($banner)
    {
        ImageHelper::handleDeletedImage($banner,'bg','assets/images/');
        $banner->delete();
    }

}
