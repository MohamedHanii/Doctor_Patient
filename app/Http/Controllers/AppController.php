<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class AppController extends Controller
{

    public function viewHomePage(){
        $Doctors = Doctor::all();
        return view('welcome',['Doctors'=>$Doctors]);
    }
}
