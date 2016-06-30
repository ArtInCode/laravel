<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ToolsController extends Controller
{
 	/**
 	* 
 	*/
    public function main()
    {
    	return view('pages.tools.main', ['title'=>"Tools"]);
    }

    /**
 	* 
 	*/
    public function categ($categ="", $page="")
    {
    	return view('pages.tools.types', ['title'=>"Tools | ".$categ]);	
    }
}
