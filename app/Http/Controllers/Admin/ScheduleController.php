<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\ICourseRepository;
use App\Http\IRepositories\ILectureRepository;
use App\Models\Course;
use App\Models\File;
use App\Models\Homework;
use App\Models\Lecture;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    protected $courseRepository;
    protected $lectureRepository;
    protected $requestData;


    public function __construct(ILectureRepository $lectureRepository,
                                ICourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->lectureRepository = $lectureRepository;
        $this->requestData = Mapper::toUnderScore(Request()->all());
//        $this->middleware('permission:categories');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {

            $lectures = $this->lectureRepository->all();
            return view('admin.lectures.list', compact('lectures'));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        try {


            $students=Student::all();
            $teachers=user::where('role',2)->get();
            return view('admin.schedules.add', compact('students','teachers'));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {

            if($request->hasFile('files')){
                dd();
            }
            $data = $this->requestData;
            $data['course_id'] = $this->requestData['course'];
//            dd($data);
            $validator = Validator::make($data, $validator_rules = Lecture::create_update_rules);

            if ($validator->passes()) {


                $user = $this->lectureRepository->create($data);


                return redirect()->route('lecture.index')->with('message', trans('lectures/lectures.Lecture_Added_Successfully'));

            }
            return redirect()->route('lecture.create')->with('error', trans('general.Operation_Failed'));

        } catch (\Exception $e) {
            return redirect()->route('lecture.create')->with('error', $e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try {

            $courses = $this->courseRepository->all();
            $lecture = $this->lectureRepository->find($id);

            return view('admin.lectures.edit', compact('lecture','courses' ));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {

            $data = $this->requestData;
            $data['course_id'] = $this->requestData['course'];
            $type = $this->requestData['type'];
            if($type == 0){
               $data['link'] = '';
            }
//            dd($data);
            $validator = Validator::make($data, $validator_rules = Lecture::create_update_rules);

            if ($validator->passes()) {


                $user = $this->lectureRepository->update($data, $id);


                return redirect()->route('lecture.index')->with('message', trans('lectures/lectures.Lecture_Updated_Successfully'));

            }
            return redirect()->route('lecture.edit')->with('error', trans('general.Operation_Failed'));

        } catch (\Exception $e) {
            return redirect()->route('lecture.edit')->with('error', $e->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {

            $this->lectureRepository->delete($id);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }



    public function validateDate(Request $request,$id)
    {
        try {

            $student=Student::find($id);

             if($student->schedules->isEmpty())
             {
                 $data='success';
                 $status=1;
             }
             else
             {
                 $schedules_student=$student->schedules;
                 $start_at = date($request->start_date);
                 $end_at = date($request->end_date);
                 foreach ($schedules_student as $one)
                 {
                     $student = Schedule::where('id',$one->id)->whereBetween('start_date',[$start_at,$end_at])
                         ->whereBetween('end_date',[$start_at,$end_at])
                         ->pluck('id');
                 }
                 if($student->isEmpty())
                 {
                     $data='success';
                     $status=1;
                 }
                 else{
                     $data='this student has schedule in this date';
                     $status=2;
                 }


             }
             return response()->json([
                 'status'=>$status,
                 'data'=>$data
             ]);

            //$student = Student::whereBetween('invoice_Date',[$start_at,$end_at])->get();


        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }


    public function validateDateTeacher(Request $request,$id)
    {
        try {

            $teacher=User::find($id);
            if($teacher->schedules->isEmpty())
            {

                $data='success';
                $status=1;
            }
            else
            {
                $start_at = date($request->start_date);
                $end_at = date($request->end_date);
                foreach ($teacher->schedules as $one)
                {
                    $teacher = Schedule::where('id',$one->id)->whereBetween('start_date',[$start_at,$end_at])
                        ->whereBetween('end_date',[$start_at,$end_at])
                        ->pluck('id');
                }
                if($teacher->isEmpty())
                {
                    $data='success';
                    $status=1;
                }
                else{
                    $data='this teacher has schedule in this date';
                    $status=2;
                }


            }
            return response()->json([
                'status'=>$status,
                'data'=>$data
            ]);

        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }





}
