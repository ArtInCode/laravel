<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Controller\BackendController;
use App\Http\Requests;

class BackendController extends Controller
{
	public function __construct() {
        $this->middleware('auth');
    }

    public function logout()
    {
    	Auth::logout();
    }
}
