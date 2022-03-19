<?php

namespace App\Http\Controllers\Admin;
use App\Http\IRepositories\IUserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{

    protected $userRepository;
    public function __construct(IUserRepository  $userRepository)
    {
        $this->middleware('permission:list users')->only(['index']);
        $this->middleware('permission:create user')->only(['create']);
        $this->middleware('permission:update user')->only(['edit']);
        $this->middleware('permission:show user')->only(['show']);
        $this->middleware('permission:delete user')->only(['destroy']);
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        return $this->userRepository->getAllUsers($request);
    }


    public function create()
    {
        return $this->userRepository->createUser();
    }


    public function store(UserRequest $request)
    {
        return $this->userRepository->storeUser($request);

    }

    public function show($id)
    {
        $user = $this->userRepository->showUser($id);
        return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $data= $this->userRepository->editUser($id);
        return view('users.edit',$data);

    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        if(!empty($input['password'])){
            $validator = Validator::make($input, [
                'password' => 'required|min:6',
                'confirm-password' =>'required_with:password|same:password'
            ]);

            if ($validator->fails()) {

                return redirect()->back()->withErrors($validator);
            }

            if($validator->passes()) {
                $input['password'] = Hash::make($input['password']);
            }

        }else{
            $input['password']=$user->password;
            $user->update($input);
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->assignRole($request->input('roles'));
        }



        return redirect()->route('users.index')
            ->with('edit','User information has updated successfully');
    }

    public function destroy($id)
    {
         $this->userRepository->deleteUser($id);
        return redirect()->route('users.index')->with('delete','User has Deleted Successfully');
    }
}
