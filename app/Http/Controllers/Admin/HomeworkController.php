<?php

namespace App\Http\Controllers\Admin;
use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\IRepositories\IHomeworkRepository;
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

class HomeworkController extends Controller
{

    protected $homeworkRepository;
    protected $requestData;
    public function __construct(IHomeworkRepository  $homeworkRepository)
    {
        $this->homeworkRepository = $homeworkRepository;
        $this->requestData = Mapper::toUnderScore(Request()->all());
    }

    public function index(Request $request)
    {
        $data= $this->homeworkRepository->getAllHomework($request);
        return view('admin.homework.list',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $data= $this->homeworkRepository->createHomework();
        return view('admin.homework.add',$data);
    }

    public function store(Request $request)
    {
        $data = $this->requestData;

        $this->homeworkRepository->storeHomework($data);
        return redirect()->route('homework.index')
            ->with('success','Homework has Added Successfully');
    }

    public function show($id)
    {
      $data=  $this->homeworkRepository->showHomework($id);
      return view('admin.homework.show',$data);
    }

    public function edit($id)
    {
        $data= $this->homeworkRepository->editHomework($id);
        return view('admin.homework.edit',$data);
    }

    public function update(Request $request, $id)
    {

        $this->homeworkRepository->updateHomework($request,$id);
        return redirect()->route('homework.index')
            ->with('edit','Homeowork information has updated successfully');

    }

    public function destroy($id)
    {try {

        $this->homeworkRepository->delete($id);
        return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
    } catch (\Exception $ex) {
        return JsonResponse::respondError($ex->getMessage());
    }
    }

    public function attachments(Request $request)
    {
        try {
           return $request;

        return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
    } catch (\Exception $ex) {
        return JsonResponse::respondError($ex->getMessage());
    }
    }


}
