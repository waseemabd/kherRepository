<?php

namespace App\Http\Controllers\Admin;
use App\Http\IRepositories\IUserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{

    protected $userRepository;
    public function __construct(IUserRepository  $userRepository)
    {
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
        return $this->userRepository->showUser($id);
    }

    public function edit($id)
    {
        return $this->userRepository->editUser($id);
    }

    public function update(UserRequest $request, $id)
    {
        return $this->userRepository->updateUser($request,$id);
    }

    public function destroy($id)
    {
        return $this->userRepository->deleteUser($id);
    }
}
