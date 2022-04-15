<?php

namespace App\Http\Controllers\Site;
use App\Http\IRepositories\ILoginRepository;
use App\Http\IRepositories\IUserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{


    public function  home()
    {

        return view('user.home');
    }
    public function  courses()
    {
       return view('user.course');
    }




}
