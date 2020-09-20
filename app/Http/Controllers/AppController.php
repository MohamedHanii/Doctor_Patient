<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class AppController extends Controller
{

    public function viewHomePage(){
        $Doctors = Doctor::all();

        $locations = array();
        $specs = array();
        $prices = array();

        foreach ($Doctors as $doctor){
            $locations[]=$doctor->location;
            $specs[]=$doctor->specilization;
            $prices[]=$doctor->price;
        }
        $locations=array_unique($locations);
        $specs=array_unique($specs);
        $prices=array_unique($prices);

        return view('welcome',['locations'=>$locations,'specs'=>$specs,'prices'=>$prices]);
    }
}
