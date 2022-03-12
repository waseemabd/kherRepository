<?php

namespace App\Http\Controllers\Admin;
use App\Http\IRepositories\ITeacherRepository;
use App\Http\IRepositories\IUserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class TeacherController extends Controller
{

    protected $teacherRepository;
    protected $userRepository;
    public function __construct(ITeacherRepository  $teacherRepository,IUserRepository $userRepository)
    {
        $this->teacherRepository = $teacherRepository;
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        return $this->teacherRepository->getAllTeachers($request);
    }

    public function show($id)
    {
        $user = $this->userRepository->showUser($id);
        return view('teachers.show',compact('user'));
    }

    public function edit($id)
    {
        $data= $this->userRepository->editUser($id);
        return view('teachers.edit',$data);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->userRepository->updateUser($request,$id);
        return redirect()->route('teachers.index')
            ->with('edit','User information has updated successfully');

    }

    public function destroy($id)
    {
         $this->userRepository->deleteUser($id);
        return redirect()->route('teachers.index')->with('delete','Teacher has Deleted Successfully');
    }
}
