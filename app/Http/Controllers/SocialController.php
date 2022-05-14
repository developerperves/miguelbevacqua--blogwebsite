<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialRequest;
use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.social.index', [
            'datas' => Social::orderBy('id','desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request)
    {
        Social::insert($request->except('_token'));
        return redirect()->route('home.social.index')->withSuccess(__('Social Added Successfully.'));
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
    public function edit(Social $social)
    {
        return view('admin.social.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialRequest $request, Social $social)
    {
        Social::find($social->id)->update($request->except('_token'));
        return redirect()->route('home.social.index')->withSuccess(__('Social Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        Social::find($social->id)->delete();
        return redirect()->route('home.social.index')->withSuccess(__('Social Deleted Successfully.'));
    }
}
