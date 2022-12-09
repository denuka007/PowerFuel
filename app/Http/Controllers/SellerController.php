<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Fuelstation;
use App\Models\Requests;

class SellerController extends Controller
{
    public function fuelreq() {
        return view('seller.request');
    }

public function req(Request $request) {

    if (Requests::where('fid', Auth::user()->fid)->exists()) {

        return back()->with('status',"Your Already Requested");
    }

    else {

        $post = Fuelstation::where('stationid', Auth::user()->fid)->get();

       foreach($post  as $posts)
    Requests::create([
            'fid'=> auth()->user()->fid,
            'company'=> $posts->company_name,
            'district'=> $posts->district,
            'city'=> $posts->city,
            'density'=> $posts->density

        ]);


        return back()->with('status',"Your Request Send Successfully");

    }

}

}
