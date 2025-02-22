<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Doctor;
use App\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:doctor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showDoctorRegisterForm()
    {
        return view('auth.register-doc', ['url' => 'doctor']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'age' => $data['age'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'] == 'male'? true : false,
            'diseases' => $data['diseases'],
            'surgery' => $data['surgery']
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createDoctor(Request $request)
    {
        $this->validator($request->all())->validate();
        $doctor = Doctor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'phone' => $request->phone,
            'specilization' => $request->specilization,
            'location' => $request->location,
            'price'=> $request->price,
            'email' => $request->email,
            'gender' => $request->gender == 'male'? true : false,
            'password' => Hash::make($request->password),
        ]);

        $schedule = Schedule::create([
            'doctor_id' => $doctor->id,
            'hours_from' => $request->hours_from,
            'hours_to' => $request->hours_to,
        ]);
        
        foreach($request->appointment as $date){
            $schedule->$date = true;
        }
        $schedule->save();
        return redirect()->intended('login/doctor');
    }
}
