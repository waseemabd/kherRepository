<?php

namespace App\Http\Controllers\Site;
use App\Http\IRepositories\ILoginRepository;
use App\Http\IRepositories\IUserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{


    public function  home()
    {
        $blogs = Blog::where('status',1)->inRandomOrder()->latest()->paginate(3);
        $users=User::where('role',2)->get();
        $courses=Course::get();

        return view('user.home',compact('blogs','users','courses'));
    }
    public function  courses()
    {
       return view('user.course');
    }




}
