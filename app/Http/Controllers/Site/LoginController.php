<?php

namespace App\Http\Controllers\Site;
use App\Http\IRepositories\ILoginRepository;
use App\Http\IRepositories\IUserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class LoginController extends Controller
{
    protected $loginRepository;
    public function __construct(ILoginRepository   $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    public function  getLogin()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {

        if (auth()->guard('user')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")]))

        {
          // dd('user');
            return redirect()->route('site.home');
        }

        elseif (auth()->guard('student')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")]) )

        {
          //  dd('student');
            return redirect()->route('site.home');
        }
        else
        {
            return redirect()->back()->with(['error' => Lang::get('auth.something wrong in data input',[],Config::get('app.locale'))]);

        }
    }

    public function logoutUser()
    {

        if(auth('user')->user())
        {
            //dd('user');
            $gaurd = auth('user');
            $gaurd->logout();

            return redirect()->route('user.loginUser');
        }
        elseif(auth('student')->user())
        {
           // dd('student');
            $gaurd = auth('student');
            $gaurd->logout();
            return redirect()->route('user.loginUser');
        }else
        {

            return redirect()->route('site.home');
        }


    }



}
