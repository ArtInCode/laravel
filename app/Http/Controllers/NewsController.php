<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
	/**
 	* 
 	*/
    public function main()
    {
    	return view('pages.news.news', ['title'=>"News"]);
    }

    /**
 	* 
 	*/
    public function categ($categ="", $page="")
    {
    	return view('pages.news.news', ['title'=>"News | ".$categ]);	
    }
}
