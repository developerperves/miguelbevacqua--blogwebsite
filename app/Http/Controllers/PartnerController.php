<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Partner;
use App\Repositories\PartnerRepository;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\PartnerRepository $repository
     *
     */
    public function __construct(PartnerRepository $repository)
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
        return view('admin.partner.index',[
            'datas' => Partner::orderBy('id','desc')->get(),
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
    public function store(PartnerRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('home.partner.index')->withSuccess(__('New Partner Added Successfully.'));
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
    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Partner $partner)
    {
        $this->repository->update($partner, $request);
        return redirect()->route('home.partner.index')->withSuccess(__('Partner Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        
        $this->repository->delete($partner);
        return redirect()->route('home.partner.index')->withSuccess(__('Partner Deleted Successfully.'));
    }
}
