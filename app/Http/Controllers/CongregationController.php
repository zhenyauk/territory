<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongregationController extends Controller
{
    public function index()
    {
        return view('pages.congregation.edit');
    }
}
