<?php


namespace App\Http\Repository;


use App\Helpers\JsonResponse;
use App\Http\IRepositories\IUserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository implements IUserRepository
{

    public function model()
    {
        return User::class;
    }

    public function userLogin()
    {

        try {

            $success = [];


            if (request('remember_me') == 1) {
                $remember_me = true;
            } else {
                $remember_me = false;
            }

            if (Auth::attempt(['phone_number' => request('phone_number'), 'password' => request('password'),'role' => 2],$remember_me)) {
                $user = auth()->user();

                Auth::logoutOtherDevices( request('password'));
                $success['user'] = $user;
                $success['token']['token'] = $user->createToken('MyApp')->accessToken;
                $success['msg'] = 'Authorized';
            } else {
                $success = [];
                $success['msg'] = 'Not Authorized';
            }

            return $success;
        } catch (\Exception $exception) {
            throw new \Exception(trans($exception->getMessage()));
        }
    }


    public function registerUser($input)
    {

        try {


            $input['password'] = bcrypt($input['password']);
            $user = $this->model->create($input);
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user'] = $user;
            return $success;


        } catch (\Exception $exception) {
            throw new \Exception(trans($exception->getMessage()));
        }
    }


    public function allAdmins(){
        try {

            $data = $this->model->where('role',1)->with('roles')->get();

            return $data;
        }catch (\Exception $exception){

            throw new \Exception(trans($exception->getMessage()));
        }
    }



}
