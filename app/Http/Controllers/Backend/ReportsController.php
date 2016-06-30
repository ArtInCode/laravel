<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Statistics;

class ReportsController extends Controller
{
    /**
    * Return array of full statistics by browser chart
    * Default is browser
    */
	public function main(Request $request)
    {
    	$Statistics = new Statistics();
        
    	return view('admin.main', ['reports' =>$Statistics->getReports($request)]);
    }

    /**
    * Ajax is passing sort by cay that is integer
    * Return json you can turn to html if you want
    */
    public function ajaxReport(Request $request)
    {
    	$Statistics = new Statistics();

    	return view('admin.json', ['reports' => $Statistics->getReports($request) ]);
    }
}
