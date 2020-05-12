<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Password;


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
    protected $redirectTo;

    public function redirectTo()
    {
        switch (Auth::user()->role) {
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/teacher';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/student';
                return $this->redirectTo;
                break;

            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }

    public function welcome()
    {
        return redirect()->route('admin'); //redirect to admin.. als het een andere gebruiker is dan gaat die gebruiker naar zijn/haar eigen dashboard!
    }

    public function authenticated(Request $request, $user)
    {
        $user->status_id = 2;
        $now = Carbon::now();
        $now->tz = 'Europe/Amsterdam';
        // $user->logged_in = $now->toDateTimeString();
        $user->save();

        Session::updateOrInsert( //update session table als de gebruiker activiteit vertoond
            [
                'user_id' => $user->id
            ],
            [
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'payload' => json_decode(request()->getContent(), true),
                'last_activity' => $now->format('Y-m-d H:i:s')
            ]
        );
    }



    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->status_id = 1;
        // $user->logged_in = NULL;
        $user->save();

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    // public function welcome()
    // {
    //     return view('auth.login');
    // }
}
