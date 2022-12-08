<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fuelstation;

class AdminController extends Controller
{
    public function addsellers() {
        return view('Adminn.addseller');
    }

    public function fueladd(Request $request) {

        Fuelstation::create([
            'stationid'=> $request->regid,
            'company_name'=> $request->company_name,
            'manager_name'=> $request->manager_name,
            'district'=> $request->district,
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

        return back();
    }
}
