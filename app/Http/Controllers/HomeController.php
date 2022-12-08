<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Fuelstation;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->user_role;

        if($role=='1')
        {
            //details get here
            return view('Adminn.dashboard');
        }
        elseif($role=='2')
        {
            $post = Fuelstation::where('stationid', Auth::user()->fid)->get();
            return view('seller.dashboard', compact('post'));

        }
        else
        {
            return view('dashboard');
        }
    }

   // public function addseller(Request $request)
   // {
  //      $data=new user;

   //     $data->name=$request->name;
   //     $data->email=$request->email;
   //     $data->password=bcrypt($request->password);

   //     $data->user_role = '2';

   //     $data->save();

     //   return redirect()->back();



  //  }
}
