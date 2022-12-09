<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fuelstation;
use App\Models\Requests;

class AdminController extends Controller
{
    public function addsellers() {
        return view('Adminn.addseller');
    }

    public function fueladd(Request $request) {

        $pop = $request->population;
        $area = $request->area;
        $den = $pop / $area;

        Fuelstation::create([
            'stationid'=> $request->regid,
            'company_name'=> $request->company_name,
            'manager_name'=> $request->manager_name,
            'district'=> $request->district,
            'city'=> $request->city,
            'density'=> $den,
            'address'=> $request->address,
            'contact'=> $request->contact

        ]);

        User::create([
            'name'=> $request->company_name,
            'email'=> $request->email,
            'fid'=> $request->regid,
            'user_role'=> ('2'),
            'password'=> bcrypt($request->password)

        ]);

        return back()->with('status',"FuelStation Added Successfully");
    }

    public function reqs() {

        $data = Requests::all();
        return view('Adminn.request', compact('data'));
    }

    public function reqsview($reqId) {

        $view = Requests::where('id',$reqId)->get();
        return view('Adminn.reqview', compact('view'));
    }

    public function accept($Id) {

        $up = Requests::find($Id);
        $up->note = ('Your request accepted please make your payment');
        $up->status = ('Approved');
        $up->update();
        return back()->with('status',"Fuel Request Accepted");
    }

    public function delete($Id) {

        //email
        $up = Requests::find($Id)->delete();
    }
}
