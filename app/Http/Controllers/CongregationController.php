<?php

namespace App\Http\Controllers;

use App\Congregation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as A;

class CongregationController extends Controller
{

    protected $c = null;

    public function index()
    {

        if( $this->getCongId() != null ){
            $data['cong'] = Congregation::findOrFail( $this->getCongId() );
            return view('pages.congregation.view', $data);
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
        $data['cong'] = Congregation::findOrFail($this->getCongId() );
        return view('pages.congregation.edit', $data);
    }


    public function store(Request $request)
    {
        //Validation rules
        $request->validate([
            'name' => 'bail|required|max:180|min:4',
            'password' => 'required|min:4|confirmed',
        ]);

        //Check Create or Update congragation
        if( $this->getCongId() == null){
            $cong = new Congregation;
        } else {
            $cong = Congregation::findOrFail($this->getCongId() );
        }

        $cong->name = $request->name;
        $cong->number = $request->number;
        $cong->lang = $request->lang;
        $cong->city = $request->city;
        $cong->country = $request->country;

        if( $cong->save() ) {
            $user = User::findOrFail( Auth::id() );
            $user->congregation_id = $cong->id;
            $user->save();
            return redirect('/');
        }
    }



}
