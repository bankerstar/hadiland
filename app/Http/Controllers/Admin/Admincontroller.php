<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function __construct()
    {
     // $this->middleware('AuthAdmin');
    }

    public function index(){

        $titleAdmin='داشبورد';
        return view('Admin.home',compact('titleAdmin'));
    }
}
