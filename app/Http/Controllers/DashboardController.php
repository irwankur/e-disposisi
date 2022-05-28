<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
    	$role = 1;

    	if($role == 1){
    		return view('admin.dashboard');
    	} else {
    		return view('kasubag.dashboard');
    	}

    }

}
