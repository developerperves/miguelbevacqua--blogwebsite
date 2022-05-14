<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstagramRequest;
use App\Instagrma;
use App\Repositories\InstagramRepository;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\InstagramRepository $repository
     *
     */
    public function __construct(InstagramRepository $repository)
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
        return view('admin.instagram.index',[
            'datas' => Instagrma::orderBy('id','desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instagram.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstagramRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('home.instagram.index')->withSuccess(__('New Instagram Added Successfully.'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instagrma $instagram)
    {
        return view('admin.instagram.edit', compact('instagram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instagrma $instagram)
    {
        $this->repository->update($instagram, $request);
        return redirect()->route('home.instagram.index')->withSuccess(__('Instagram Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instagrma $instagram)
    {
        $this->repository->delete($instagram);
        return redirect()->route('home.instagram.index')->withSuccess(__('Instagram Deleted Successfully.'));
    }
}
