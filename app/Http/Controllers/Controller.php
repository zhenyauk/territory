<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use LaravelLocalization;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $data = [];


    //For more secure
    public function secure($name)
    {
        $name = strip_tags($name);
        $name = htmlentities($name, ENT_QUOTES, "UTF-8");
        $name = htmlspecialchars($name, ENT_QUOTES);
        return $name;
    }




    // Get current language
    public function lang( $lang = '' )
    {
        if($lang === '') return LaravelLocalization::getCurrentLocale();
        return LaravelLocalization::setLocale($lang);
    }

    public function getCongId()
    {
        $user = User::find(Auth::id());
        return $user->congregation_id;
    }



}



