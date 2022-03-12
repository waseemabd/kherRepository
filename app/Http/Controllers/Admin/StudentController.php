<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\IRepositories\IStudentRepository;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{


    protected $studentRepository;
    public function __construct(IStudentRepository  $studentRepository)
    {
        $this->studentRepository = $studentRepository;
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

        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }


        return redirect()->route('students.index')->with('edit','Student information has updated successfully');


    }

    public function destroy(Request $req)
    {
        $this->studentRepository->deleteStudent($req);
        return redirect()->route('students.index')->with('delete','Student has Deleted Successfully');
    }
}
