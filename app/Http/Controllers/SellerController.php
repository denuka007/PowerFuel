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

public function req() {

    Requests::create([
        'fid'=> auth()->user()->fid
    ]);

    return back();

}

}
