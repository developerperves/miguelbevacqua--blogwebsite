<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Repositories\SettingRepository;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\SettingRepository $repository
     *
     */
    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }
    public function basicsettings() {
        return view('admin.settings.index', [
            'setting' => Setting::find(1)
        ]);
    }
    public function basicsettingsupdate(SettingRequest $request){
        $this->repository->update($request);
        return redirect()->back()->withSuccess(__('Data Updated Successfully.'));
    }
}
