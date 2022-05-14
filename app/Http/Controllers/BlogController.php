<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\BlogRepository $repository
     *
     */
    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index',[
            'datas' => Blog::with('category')->orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail*' => 'required|image',
            'photo*' => 'required|image',
            'title' => 'required|unique:blogs|max:255',
            'details' => 'required',
            'tags' => 'nullable|max:255'
        ]);

        $this->repository->store($request);
        return redirect()->route('home.blog.index')->withSuccess(__('New Blog Added Successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status(Blog $blog,$type)
    {
        $blog->update(['type' => $type]);
        return redirect()->back()->withSuccess(__('Type Updated Successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'thumbnail*' => 'image',
            'photo*' => 'image',
            'title' => 'required|max:255|unique:blogs,title,'.$blog->id,
            'category_id' => 'required',
            'details' => 'required',
            'tags' => 'nullable|max:255'
        ]);

        $this->repository->update($blog, $request);
        return redirect()->route('home.blog.index')->withSuccess(__('Blog Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $this->repository->delete($blog);
        return redirect()->route('home.blog.index')->withSuccess(__('Blog Deleted Successfully.'));
    }

    public function delete($key,$id)
    {
        $this->repository->photoDelete($key,$id);
        return back()->withSuccess(__('Photo Deleted Successfully.'));

    }
}
