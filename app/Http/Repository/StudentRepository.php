<?php


namespace App\Http\Repository;


use App\Http\IRepositories\IStudentRepository;
use App\Models\Certificate;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentRepository extends BaseRepository implements IStudentRepository
{

    public function model()
    {
        return Student::class;
    }

    public function getStudents()
    {
        try {
            $students= $this->model
                ->get();

            return $students;
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }
    public function showStudet($id)
    {
        // TODO: Implement showStudet() method.
    }

    public function createStudent()
    {
      return  $certificate=Certificate::all();

    }
    public function storeStudent($input)
    {
        try {
            $input = $input->all();
            $input['password'] = Hash::make($input['password']);
           return $student =$this->model->create($input);

        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }


    }

    public function ShowStudent($id)
    {
        try {
            $data=Student::find($id);
            return  $data;

        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }


    }

    public function editStudent($id)
    {
        try {
            $data['student']=Student::find($id);
            $data['certificate']=Certificate::all();
            return  $data;

        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }


    }




    public function updateStudent($input, $id)
    {
        try {
        $student = Student::find($id);
        $input = $input->all();
        if(!empty($input['password'])){

            $validator = Validator::make($input, [
                'password' => 'required|min:6',
                'confirm-password' =>'required_with:password|same:password'
            ]);

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

    }

    public function deleteStudent($input)
    {
        try {

         $student=Student::find($input->student_id);
         return $student->delete();
        } catch (\Exception $exception) {
            throw new \Exception('common_msg.' . trans($exception->getMessage()));
        }
    }



}
