<?php

namespace App\Repositories;

use App\Blog;
use App\Helpers\ImageHelper;
use Illuminate\Support\Str;


class BlogRepository
{

    /**
     * Store post.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->title);
        if($request->has('tags')){
            $input['tags'] = str_replace(["value", "{", "}", "[","]",":","\""], '', $request->tags);
        }
        
        $input['thumbnail'] = ImageHelper::handleUploadedImage($request->file('thumbnail'),'assets/images');
        if($request->photos){
            $input['photos'] = json_encode($this->storeImageData($request),true);
        }
        
        
        Blog::create($input);
    }

    /**
     * Update post.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($blog, $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->title);
        if($request->has('tags')){
            $input['tags'] = str_replace(["value", "{", "}", "[","]",":","\""], '', $request->tags);
        }
        if ($file = $request->file('thumbnail')) {
            $input['thumbnail'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images',$blog,'/assets/images/','thumbnail');
        }
        if($request->photos){
            $input['photos'] = json_encode($this->UpdateImageData($request,$blog),true);
        }
        $blog->update($input);
    }


    public function storeImageData($request)
    {
        
        $storeData = [];
        if ($photos = $request->file('photos')) {
            foreach($photos as $key => $photo){
                $storeData[$key] = ImageHelper::handleUploadedImage($photo,'assets/images');
            }
        }
        return $storeData;
    }

    public function UpdateImageData($request,$blog)
    {
        
        $storeData = json_decode($blog->photos,true);
        
        if ($photos = $request->file('photos')) {
            foreach($photos as $key => $photo){
                array_push($storeData,ImageHelper::handleUploadedImage($photo,'assets/images'));
            }
        }
        
        return $storeData;
    }


    /**
     * Delete post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($blog)
    {
        
        ImageHelper::handleDeletedImage($blog,'thumbnail','assets/images/');
        $images = json_decode($blog->photos,true);
        if ($images = json_decode($blog->photos,true)) {
            foreach($images as $image){
                if (file_exists(base_path('public/').'assets/images/'.$image)) {
                    unlink(base_path('public/').'assets/images/'.$image);
                }
            }
        }
        $blog->delete();
    }

    /**
     * Delete post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function photoDelete($key,$id)
    {
        $blog = Blog::findOrFail($id);
        $photos = json_decode($blog->photos,true);
        $delete_photo = $photos[$key];
        if (file_exists(base_path('public/').'assets/images/'.$delete_photo)) {
            unlink(base_path('public/').'assets/images/'.$delete_photo);
        }
        
        unset($photos[$key]);
        $new_photos = json_encode($photos,true);
        $blog->update(['photos'=> $new_photos]);
    }
}
