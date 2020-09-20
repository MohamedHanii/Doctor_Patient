<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Config;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:doctor')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showDoctorLoginForm()
    {
        return view('auth.doctor_login',['url' => 'doctor']);
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function validator(Request $request)
    {
        return $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);
    }

    /**
     * @param Request $request
     * @param $guard
     * @return bool
     */
    protected function guardLogin(Request $request, $guard)
    {
        $this->validator($request);

        return Auth::guard($guard)->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ],
            $request->get('remember')
        );
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doctorLogin(Request $request)
    {
        if ($this->guardLogin($request, 'doctor')) {
            return redirect()->route('doctor.profile');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

}
