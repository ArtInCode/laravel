<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CarsController extends Controller
{
    public function main()
    {
    	return view('pages.cars.car', ['car_type'=>"Car "]);
    }

    public function types($car_type)
    {
    	return view('pages.cars.car_types', ['car_type'=>"Car | ".$car_type]);	
    }
}
