<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialityRequest;
use App\Repositories\SpecialityRepository;
use App\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\InstagramRepository $repository
     *
     */
    public function __construct(SpecialityRepository $repository)
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
        return view('admin.speciality.index',[
            'datas' => Speciality::orderBy('id','desc')->get(),
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
    public function store(SpecialityRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('home.speciality.index')->withSuccess(__('New Speciality Added Successfully.'));
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
    public function edit(Speciality $speciality)
    {
        return view('admin.speciality.edit', compact('speciality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speciality $speciality)
    {
        $this->repository->update($speciality, $request);
        return redirect()->route('home.speciality.index')->withSuccess(__('Speciality Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speciality $speciality)
    {
        $this->repository->delete($speciality);
        return redirect()->route('home.speciality.index')->withSuccess(__('Speciality Deleted Successfully.'));
    }
}
