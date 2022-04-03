<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\IStudentRepository;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{


    protected $studentRepository;
    public function __construct(IStudentRepository  $studentRepository)
    {
        $this->studentRepository = $studentRepository;
//        $this->middleware('permission:Students');
//        $this->middleware('permission:list Students')->only(['index']);
//        $this->middleware('permission:create Student')->only(['create']);
//        $this->middleware('permission:update Student')->only(['edit']);
//        $this->middleware('permission:show Student')->only(['show']);
//        $this->middleware('permission:delete Student')->only(['destroy']);
    }

    public function index()
    {
        $students= $this->studentRepository->getStudents();
        return view('students.index',compact('students'));
    }


    public function create()
    {
        $certificate= $this->studentRepository->createStudent();
        return view('students.create',compact('certificate'));
    }


    public function store(StudentRequest $request)
    {
         $this->studentRepository->storeStudent($request);
        return redirect()->route('students.index')
            ->with('success','Student has Added Successfully');
    }

    public function show($id)
    {
        $student = $this->studentRepository->ShowStudent($id);
        return view('students.show',compact('student'));
    }

    public function edit($id)
    {
        $data=  $this->studentRepository->editStudent($id);

        return view('students.edit',$data);
    }

    public function update(StudentUpdateRequest $input, $id)
    {
        try {
            $student = Student::find($id);
            $input = $input->all();
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
                $input['password']=$student->password;
            }
            $student->update($input);

        } catch (Exception $exception) {
            throw new Exception('common_msg.' . trans($exception->getMessage()));
        }


        return redirect()->route('students.index')->with('edit','Student information has updated successfully');


    }

    public function destroy(Request $req)
    {
        $this->studentRepository->deleteStudent($req);
        return redirect()->route('students.index')->with('delete','Student has Deleted Successfully');
    }

    public function pending_registration_request()
    {

        try {

            $students= $this->studentRepository->getStudentByStatus(0);
            return view('students.pending_students',compact('students'));

        } catch (Exception $exception) {
            throw new Exception('common_msg.' . trans($exception->getMessage()));
        }


    }



    public function acceptStudent($id)
    {
        //
        try {


            $data['status'] = 1;
            $validator_rules = [
                'status' => 'required'
            ];
//            dd($data);
            $validator = Validator::make($data, $validator_rules);

            if ($validator->passes()) {


                $course = $this->studentRepository->update($data, $id);


                return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));

            }
            return JsonResponse::respondError($validator->errors()->all());

        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }


    public function destroyStudent($id)
    {
        //
        try {

            $this->studentRepository->delete($id);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }

    public function resultStudent($id)
    {
        //
        try {

            $student=$this->studentRepository->find($id);
            return view('students.result',compact('student'));
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }



}
