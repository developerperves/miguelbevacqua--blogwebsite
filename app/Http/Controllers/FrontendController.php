<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Blog_comment;
use App\Category;
use App\Homebanner;
use App\Instagrma;
use App\Partner;
use App\Project;
use App\Repositories\FrontRepository;
use App\Setting;
use App\Social;
use App\Speciality;
use App\Subscriber;
use App\Team;
use Carbon\Carbon;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    /**
     * Constructor Method.
     *
     * @param  \App\Repositories\FrontRepository $repository
     *
     */
    public function __construct(FrontRepository $repository)
    {
        $this->repository = $repository;
        // $setting = Setting::first();
        // if($setting->recaptcha == 1){
        //     Config::set('captcha.sitekey', $setting->google_recaptcha_site_key);
        //     Config::set('captcha.secret', $setting->google_recaptcha_secret_key);
        // }

    }
    public function index()
    {

        $tagz = '';
        $tags = null;
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));
        return view('frontend.index', [
            'banners' => Homebanner::latest()->get(),
            'recent_post' => Blog::latest()->paginate(10),
            'blogs' => Blog::where('type', 'new')->paginate(10),
            'instagrams' => Instagrma::latest()->get(),
            'categories' => Category::all(),
            'setting' => Setting::find(1),
            'socials' => Social::all(),
            'tags'       => array_filter($tags),
            'popular_blog' => Blog::where('type', 'popular')->get(),
        ]);
    }
    public function about()
    {
        return view('frontend.about', [
            'categories' => Category::all(),
            'setting' => Setting::find(1),
            'socials' => Social::all(),
            'specialities' => Speciality::all(),
            'teams' => Team::all(),
            'partners' => Partner::latest()->get(),
        ]);
    }
    public function blog()
    {

        $tagz = '';
        $tags = null;
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));
        $blog  = Blog::all();
        return view('frontend.blog', [
            'categories' => Category::all(),
            'setting' => Setting::find(1),
            'socials' => Social::all(),
            'blogs' => Blog::latest()->paginate(10),
            'instagrams' => Instagrma::latest()->get(),
            'tags'       => array_filter($tags),
            'recent_post' => Blog::latest()->paginate(10),
            'popular_blog' => Blog::where('type', 'popular')->get(),
        ]);
    }
    public function blogdetail($slug)
    {

        $blog_info = Blog::where('slug', $slug)->first();

        $related_blog = Blog::where('category_id', $blog_info->category_id)->where('id', '!=', $blog_info->id)->get();
        $items = $this->repository->displayPost($blog_info->id);

        $photoz = '';
        $photos = null;
        $name = Blog::where('slug', $slug)->pluck('photos')->toArray();
        foreach ($name as $nm) {
            $photoz .= $nm . ',';
        }
        $photos = array_unique(explode(',', $photoz));


        $tagz = '';
        $tags = null;
        $name = Blog::where('slug', $slug)->pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));

        $shareComponent = \Share::page(route('front.blog.detail', $slug))
            ->facebook()
            ->twitter()
            ->whatsapp();

        return view('frontend.blog_detail', [
            'setting' => Setting::find(1),
            'socials' => Social::all(),
            'blog_info' => $blog_info,
            'categories' => Category::all(),
            'tags' => array_filter($tags),
            'photos' => $photos,
            'related_blog' => $related_blog,
            'shareComponent' => $shareComponent,
        ]);
    }
    public function project()
    {
        return view('frontend.project', [
            'setting' => Setting::find(1),
            'socials' => Social::all(),
            'categories' => Category::all(),
            'projects' => Project::all(),
        ]);
    }
    public function subscribe(Request $request)
    {
        Subscriber::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->withSuccess(__('Subscribe Successfully.'));
    }
    public function search()
    {
        $search_result = QueryBuilder::for(Blog::class)
            ->allowedFilters(['title'])
            ->allowedSorts('title')
            ->latest()->paginate(10);

        // print_r($search_result);


        $tagz = '';
        $tags = null;
        $name = Blog::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));
        return view('frontend.search', [
            'categories' => Category::all(),
            'setting' => Setting::find(1),
            'socials' => Social::all(),
            'blogs' => $search_result,
            'instagrams' => Instagrma::latest()->get(),
            'tags'       => array_filter($tags),
            'recent_post' => Blog::latest()->paginate(10),
            'popular_blog' => Blog::where('type', 'popular')->get(),
        ]);
    }
    public function categoryname ($name) {


        $tagz = '';
        $tags = null;
        $nameAs = Blog::pluck('tags')->toArray();
        foreach ($nameAs as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));
        $category = Category::where('name', $name)->first();
        return view('frontend.category_filter', [
            'categories' => Category::all(),
            'setting' => Setting::find(1),
            'socials' => Social::all(),
            'blogs' => Blog::where('category_id', $name)->latest()->paginate(10),
            'instagrams' => Instagrma::latest()->get(),
            'tags'       => array_filter($tags),
            'recent_post' => Blog::latest()->paginate(10),
            'popular_blog' => Blog::where('type', 'popular')->get(),
            'category' => $category,
        ]);
    }
    public function commentpost(Request $request) {        
        $request->validate([
            'comment' => 'required',
            'name' => 'required',
            'email' => 'required|unique:blog_comments|max:255'
        ]);
        Blog_comment::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->withSuccess(__('Comment Successfully.'));
    }
}
