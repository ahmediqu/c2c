<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
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
    protected $redirectTo = 'admin/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin,admin/dashboard')->except('logout');
    }
    public function redirectTo()
    {
        return 'admin/dashboard';
    }
    protected function guard()
    {
        return \Auth::guard('admin');
    }
    public function showLoginForm()
    {
        return view('auth.adminlogin');
    }
    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('/admin/login');
    // }
}