<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\IRepositories\IStudentRepository;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

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
        $user = $this->studentRepository->showStudet($id);
        return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $data=  $this->studentRepository->editStudent($id);

        return view('students.edit',$data);
    }

    public function update(Request $request, $id)
    {

         $this->studentRepository->updateStudent( $request,$id);
        return redirect()->route('students.index')->with('edit','Student information has updated successfully');


    }

    public function destroy(Request $req)
    {
        $this->studentRepository->deleteStudent($req);
        return redirect()->route('students.index')->with('delete','Student has Deleted Successfully');
    }
}
