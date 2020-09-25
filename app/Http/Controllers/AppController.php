<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Doctor;

class AppController extends Controller
{

    public function searchItems(){
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
        sort($prices);
        sort($locations);
        sort($specs);
        return [$locations,$specs,$prices];
    }

    public function viewHomePage(){
        $data = AppController::searchItems();

        return view('welcome',['locations'=>$data[0],'specs'=>$data[1],'prices'=>$data[2]]);
    }



    public function showingResult(Request $request){

        $data = AppController::searchItems();

        $query = $request->input("query");
        $price = $request->input("price_filter");
        $spec = $request->input("spec_filter");
        $location = $request->input("location_filter");

        $doctors = Doctor::where('price','=',$request->price_filter)
        ->orWhere('location','=',$request->location_filter)
        ->orWhere('specilization','=',$request->spec_filter)
        ->orWhere('first_name','like',"%$query%");

        if ($request->has('price')) {
            $doctors->whereIn('price', $request->price);
        }
        if ($request->has('title')) {
            //
        }
        if ($request->has('available')) {
            //
        }
        $doctors =  $doctors->paginate(10);
  
        return view('search')->with(['searchResult'=>$doctors ,'locations'=>$data[0],'specs'=>$data[1],'prices'=>$data[2]]);
    } 




}
