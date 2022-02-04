<?php


namespace App\Http\Repository;


use App\Http\IRepositories\ILoginRepository;
use App\Http\IRepositories\IProfileRepository;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;


class LoginRepository extends BaseRepository implements ILoginRepository
{

    public function model()
    {
        return User::class;
    }

    public function getLogin()
    {
        return view('auth.login');
    }
    public function Login($request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            return redirect() -> route('home');
        }
        return redirect()->back()->with(['error' => Lang::get('auth.something wrong in data input',[],Config::get('app.locale'))]);
    }
    public function Logout()
    {
        $gaurd = $this->getGaurd();
        $gaurd->logout();
        return redirect()->route('admin.login');
    }
    private function getGaurd()
    {
        return auth('admin');
    }

}
