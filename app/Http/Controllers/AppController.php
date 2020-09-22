<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
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

    public function searching(Request $request){
        $doctors = Doctor::where('price','=',$request->price_filter)
            ->orWhere('location','=',$request->location_filter)
            ->orWhere('specilization','=',$request->spec_filter)
            ->get();
            // foreach($doctors as $doctor){
            //     echo $doctor->email,"\n";
            // }
            //     echo $request->price_filter,"\n";
            //     echo $request->location_filter,"\n";
            //     echo $request->spec_filter,"\n";
            return view('search',['searchResult'=>$doctors]);
    }


    public function showingResult(Request $request){

        $query = $request->input("query");
        $doctors = Doctor::where('first_name','like',"%$query%")->paginate(1);
        return view('search')->with('searchResult',$doctors);
    }
}
