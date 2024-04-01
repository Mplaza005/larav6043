<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    public function create(){

        return view('formulario');


    }

    public function store(Request $request)  {
     
        $num1=$request->num1;
        $resul=1;
        for($k=1;$k<=$num1;$k++){
            $resul=$resul*$k;
        }
        return $resul;
    }




}
