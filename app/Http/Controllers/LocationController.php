<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use View;

class LocationController extends Controller
{
    public function show()
    {   
        //get all the locations from the data base and store in 'locations' variable
        $locations = Location::all();
        //json_encode ($locations);
        //dd($locations);
        //return view::make('front', compact('locations'));
        //pass the result set to front view, pass the result set in 'results' variable
        return view('front')->with('results',$locations);
        
    }

}
