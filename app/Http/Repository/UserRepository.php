<?php


namespace App\Http\Repository;


use App\Helpers\JsonResponse;
use App\Http\IRepositories\IUserRepository;
use App\Models\User;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserRepository extends BaseRepository implements IUserRepository
{

    public function model()
    {
        return User::class;
    }

    public function getAllUsers($request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.show_users',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function createUser()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.Add_user',compact('roles'));
    }

    public function storeUser($request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles_name'));
        return redirect()->route('users.index')
            ->with('success','User has Added Successfully');
    }



    public function showUser($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }


    public function editUser($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('users.edit',compact('user','roles','userRole'));
    }
    public function updateUser($request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input['password']=$user->password;
        }
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('edit','User information has updated successfully');
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('delete','User has Deleted Successfully');
    }


}
