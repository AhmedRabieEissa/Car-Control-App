<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;

class myCar extends Controller
{
    //

    /*
     * function to add acar to DB :
    */
    public function _create(Request $request){
        //request of form inputs with input name
        $make = $request['make'];
        $model = $request['model'];
        $production = $request['production'];

        //object of my model
        $add = new car();

        // insert each data requested to DB table with model
        $add->Make=$make;
        $add->Model=$model;
        $add->Produced_on=$production;

        $add->save();

        return redirect()->back();
    }

    /*
     * function to show cars information
    */
    public function _show(){

        $show = car::all();
        return view('index',compact('show'));
    }
}
