<?php

namespace App\Http\Controllers;

use App\Congregation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CongregationController extends Controller
{



    public function index()
    {
        $data['username'] = Auth::User()->name;
        if( Auth::User()->congregation_id != null ){
            $data['cong'] = Congregation::findOrFail( Auth::User()->congregation_id );
            return view('pages.congregation.view');
        } else {
            return view('pages.congregation.clean');
        }
        //if user isset congragation_id
        return view('pages.congregation.edit');
        //else
    }

    public function add()
    {
        return view('pages.congregation.edit');
    }

    public function edit()
    {
        $data['cong'] = Congregation::findOrFail( Auth::User()->congregation_id );
        return view('pages.congregation.edit');
    }


    public function store(Request $request)
    {
        //Validation rules
        $request->validate([
            'name' => 'bail|required|max:180|min:4',
            'email' => 'required|max:180|min:4',
            'password' => 'required|min:4|confirmed',
        ]);

        //Check Create or Update congragation
        if( Auth::User()->congregation_id != null){
            $cong = new Congregation;
        } else {
            $cong = Congregation::findOrFail( Auth::User()->congregation_id );
        }




    }


}
