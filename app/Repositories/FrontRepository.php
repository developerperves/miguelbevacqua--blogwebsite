<?php

namespace App\Repositories;

use App\Blog;
use App\Category;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class FrontRepository.
 */
class FrontRepository
{public function displayPost($slug){
    $tagz = '';
    $tags = null;
    $name = Blog::pluck('tags')->toArray();
    foreach($name as $nm)
    {
        $tagz .= $nm.',';
    }
    $tags = array_unique(explode(',',$tagz));
    return [
        'blogs'       => Blog::orderby('id','desc')->take(4)->get(),
        'blog_info'       => Blog::whereSlug($slug)->first(),
        // 'categories' => Category::withCount('blogs')->get(),
        'tags'       => array_filter($tags)
    ];
}
}
