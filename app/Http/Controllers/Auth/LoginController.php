<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/Details.index2';

    /**
     * Create a new controller instance.
     * 
     * @param 
     * @return 
     */

    public function logout(Request $request)
    {
        $this->guard()->logout(); 
 
        $request->session()->invalidate(); 
 
        $request->session()->regenerateToken();  
 
        return redirect()->route('Details.index2'); 
    }
}
