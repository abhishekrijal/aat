<?php

namespace AAT\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){

    	return view('/app/dashboard');
    }
}
