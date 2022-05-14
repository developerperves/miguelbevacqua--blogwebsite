<?php

namespace App\Http\Controllers;

use App\Homebanner;
use App\Http\Requests\HomebannerRequest;
use App\Repositories\HomebannerRepository;
use Illuminate\Http\Request;

class HomebannerController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\BannerRepository $repository
     *
     */
    public function __construct(HomebannerRepository $repository)
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
        return view('admin.homebanner.index',[
            'datas' => Homebanner::orderBy('id','desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homebanner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomebannerRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('home.banner.index')->withSuccess(__('New Banner Added Successfully.'));
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
    public function edit(Homebanner $banner)
    {
        return view('admin.homebanner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homebanner $banner)
    {
        $this->repository->update($banner, $request);
        return redirect()->route('home.banner.index')->withSuccess(__('Banner Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homebanner $banner)
    {
        $this->repository->delete($banner);
        return redirect()->route('home.banner.index')->withSuccess(__('Banner Deleted Successfully.'));
    }
}
