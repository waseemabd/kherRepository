<?php


namespace App\Http\Repository;


use App\Helpers\JsonResponse;
use App\Http\IRepositories\IHomeworkRepository;
use App\Models\Course;
use App\Models\File;
use App\Models\Homework;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeworkRepository extends BaseRepository implements IHomeworkRepository
{

    public function model()
    {
        return Homework::class;
    }
    public function getAllHomework($input)
    {
       return  $data = $this->model->orderBy('id','DESC')->paginate(5);

    }
    public function createHomework()
    {

        $data['students'] = Student::all();
        $data['teachers']=User::where('role',2)->get();
        $data['lectures']=Lecture::all();
        $data['courses']=Course::all();

        return $data;
    }
    public function showHomework($id)
    {
        $data['homework']=Homework::find($id);
        $data['attachments']=File::where('homework_id',$id)->get();

        if(!$data['homework'])
        {
            return JsonResponse::respondError('there are not homework like this');
        }

        $data['students']= $data['homework'] -> students;
        $data['lectures']=Lecture::all();

        //$data['students'] = Student::all();
        $data['teacher']=$data['homework'] ->user;

        return $data;
    }
    public function storeHomework($request)
    {

        try {
            $homework = new Homework();

            $homework->title=$request['title'];
            $homework-> desc=$request['desc'];
            $homework-> mark=$request['mark'];
             $homework->lecture_id=$request['lecture_id'];
            $homework-> user_id=$request['teacher_id'];
            $homework-> course_id=$request['course_id'];
            $homework->save();

            $homework->students()->attach($request['students']);

        } catch (Exception $e) {
            return redirect()->route('homework.create')->with('error', $e->getMessage());

        }



    }
    public function editHomework($id)
    {

        $data['homework']=Homework::find($id);

        if(!$data['homework'])
        {
            return JsonResponse::respondError('there are not homework like this');
        }

        $data['ids_students']= $data['homework'] -> students -> pluck('id')->toArray();
        $data['lectures']=Lecture::all();
        $data['students'] = Student::all();
        $data['courses']=Course::all();
        $data['teachers']=User::where('role',2)->get();

        return $data;
    }
    public function updateHomework($input, $id)
    {

        try {
            $homework=Homework::find($id);
            if(!$homework)
            {
                return JsonResponse::respondError('there are not homework like this');
            }
            $homework->update([
                'title'=>$input['title'],
                'desc'=>$input['desc'],
                'mark'=>$input['mark'],
                'lecture_id'=>$input['lecture_id'],
                'teacher_id'=>$input['teacher_id'],
                'course_id'=>$input['course_id'],
            ]);
            $homework->students()->sync($input['students']);

        } catch (Exception $e) {

            return redirect()->route('homework.index')->with('error', $e->getMessage());

        }
    }
    public function deleteHomework($id)
    {

    }


}
