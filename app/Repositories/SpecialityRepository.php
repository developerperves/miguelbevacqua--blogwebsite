<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Speciality;

class SpecialityRepository
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
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        Speciality::create($input);
    }

    /**
     * Update Brand.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($speciality, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images',$speciality,'/assets/images/','photo');
        }
        $speciality->update($input);
    }

    /**
     * Delete brand.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($speciality)
    {
        ImageHelper::handleDeletedImage($speciality,'photo','assets/images/');
        $speciality->delete();
    }
}
