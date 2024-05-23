<?php

namespace App\Http\Controllers;
use App\Models\Truck;
use App\Models\Trucker;

use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    public function asociar(){
        
       $truckers=Trucker::all();
       
       $trucks=Truck::all();
   

       return view('truck_truckers.asociar',compact('truckers','trucks'));
    }


    public function store(Request $request)
    {
        $trucker=Trucker::find($request->trucker_id);
        $trucker->trucks()->attach($request->truck_id);
    }


}
