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
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LectureController extends Controller
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
//        $this->middleware('permission:Lectures');
//        $this->middleware('permission:list Lecture')->only(['index']);
//        $this->middleware('permission:add lecture files')->only(['add_files']);
//        $this->middleware('permission:create Lecture')->only(['create']);
//        $this->middleware('permission:update Lecture')->only(['edit']);
//        $this->middleware('permission:present students lecture')->only(['studentsPresent']);
//        $this->middleware('permission:delete Lecture')->only(['destroy']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        try {
            if(auth('admin')->user()->role == 2 ){
                $lectures = [];
                $courses = auth('admin')->user()->courses;
                if(count($courses) > 0){
                    foreach($courses as $key => $course){
                        // $lectures[] = $course->lectures();
                        print_r($course->lectures());
                        die();
                    }
                    $lectures = json_encode($lectures);
                }
            }
            else {
                $lectures = $this->lectureRepository->all();
            }


            return view('admin.lectures.list', compact('lectures'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        try {

            $courses = $this->courseRepository->all();
            $students=Student::all();
            $teachers=user::where('role',2)->get();
            return view('admin.lectures.add', compact('courses','students','teachers'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            if($request->course){
               $course=Course::where('id',$request->course)->first();
               $lectures_course=$course->lectures;
               $students_course=$course->students;

                $schedule=[];
               foreach ($students_course as $student)
               {
                   if ($student->schedules)
                   {
                       foreach ($lectures_course as $lecture)
                       {
                           if($lecture->schedules)
                           {
                             $schedule[]=Schedule::where('student_id',$student->id)->where('lecture_id',$lecture->id)
                                 ->whereBetween('start_date',[$request->start_date,$request->end_date])
                                 ->whereBetween('end_date',[$request->start_date,$request->end_date])
                                  ->first();
                           }
                       }
                   }
               }

               foreach ($schedule as $one)
               {
                   if($one !==null)
                   {
                       return view('admin.lectures.error',compact('schedule'));
                   }
               }
            }
            $data = $this->requestData;
            $data['course_id'] = $this->requestData['course'];
            $validator = Validator::make($data, $validator_rules = Lecture::create_update_rules);
            if ($validator->passes()) {
                $user = $this->lectureRepository->create($data);
              //  $user->students()->attach($data['students']);
                return redirect()->route('lecture.index')->with('message', trans('lectures/lectures.Lecture_Added_Successfully'));
            }
            return redirect()->route('lecture.create')->with('error', trans('general.Operation_Failed'));

        } catch (Exception $e) {
            return redirect()->route('lecture.create')->with('error', $e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        try {

            $courses = $this->courseRepository->all();
            $lecture = $this->lectureRepository->find($id);

            return view('admin.lectures.edit', compact('lecture','courses' ));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
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
            return redirect()->route('lecture.edit', $id)->with('error', trans('general.Operation_Failed'));

        } catch (Exception $e) {
            return redirect()->route('lecture.edit', $id)->with('error', $e->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        try {

            $this->lectureRepository->delete($id);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }


    public function attachments(Request $request)
    {
        try {

            $image = $request->file('file');
            $file_name = $image->getClientOriginalName();
            $attachment = new File();
            $attachment->path = $file_name;
            $attachment->lecture_id = $request->lecture_id;
            $attachment->name = $request->name;
            $attachment->type = 0;
            $attachment->save();
            // move pic
            $imageName = $request->file->getClientOriginalName();
            $request->file->move(public_path('Lecture/' . $request->name), $imageName);
            $attachments = File::where('lecture_id', $request->lecture_id)->get();
            $view = view('admin.lectures._showlist')->with(['attachments' => $attachments, 'id' => $request->lecture_id])
                ->renderSections();

            return response()->json([
                'status' => true,
                'content' => $view['main']
            ]);


        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }

    }

    public function uploadFile(Request $request)
    {
        //
        try {


            if($request->hasFile('files')){

                $file = $request->file('files');
                $filename = 'lecture_'.time() . '_' . $file->getClientOriginalName();
                // File upload location
                $location = public_path('files/lectures/');

                // Upload file
                $file->move($location, $filename);
                $path = '/files/lectures/' . $filename;

                return json_encode($path);

            }
            return  json_encode(false);
//            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (Exception $ex) {
            return json_encode($ex->getMessage());
        }
    }

    public function add_files(Request $request,$id)
    {
        try {
            $lecture=Lecture::find($id);
            $attachments=File::where('lecture_id',$lecture->id)->get();
            return view('admin.lectures.add_files',compact('attachments','lecture'));

        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }

    public function get_file($path,$file_name)

    {
        try {
            $contents= Storage::disk('public_uploads_lectures')->getDriver()->getAdapter()->applyPathPrefix($file_name.'/'.$path);
            return response()->download( $contents);
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }

    public function open_file($path,$file_name)

    {
        try {
            $files = Storage::disk('public_uploads_lectures')->getDriver()->getAdapter()->applyPathPrefix($file_name.'/'.$path);
            return response()->file($files);
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }
    public function destroy_file(Request $request,$id)
    {
        try {
            $attachment = File::findOrFail($id);
            $file_name=$attachment->name;
            $path=$attachment->path;
            $attachment->delete();
            Storage::disk('public_uploads_lectures')->delete($file_name.'/'.$path);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));

        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }

    public function validateDate(Request $request,$id)
    {
        try {
//             return response()->json([
//                 'status'=>true,
//                 'data'=>$id
//             ]);
            $student=Student::find($id);

             if($student->lectures->isEmpty())
             {
                 $data='success';
                 $status=1;
             }
             else
             {
                 $lectures_student=$student->lectures;
                 $start_at = date($request->start_date);
                 $end_at = date($request->end_date);
                 foreach ($lectures_student as $one)
                 {
                     $student = Lecture::where('id',$one->id)->whereBetween('start_date',[$start_at,$end_at])
                         ->whereBetween('end_date',[$start_at,$end_at])
                         ->pluck('id');
                 }
                 if($student->isEmpty())
                 {
                     $data='success';
                     $status=1;
                 }
                 else{
                     $data='this student has lecture in this date';
                     $status=2;
                 }


             }
             return response()->json([
                 'status'=>$status,
                 'data'=>$data
             ]);

            //$student = Student::whereBetween('invoice_Date',[$start_at,$end_at])->get();


        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }


    public function validateDateTeacher(Request $request,$id)
    {
        try {
//             return response()->json([
//                 'status'=>true,
//                 'data'=>$id
//             ]);
            $teacher=User::find($id);
            if($teacher->lectures->isEmpty())
            {
                $data='success';
                $status=1;
            }
            else
            {
                $start_at = date($request->start_date);
                $end_at = date($request->end_date);
                foreach ($teacher->lectures as $one)
                {
                    $student = Lecture::where('id',$one->id)->whereBetween('start_date',[$start_at,$end_at])
                        ->whereBetween('end_date',[$start_at,$end_at])
                        ->pluck('id');
                }
                if($student->isEmpty())
                {
                    $data='success';
                    $status=1;
                }
                else{
                    $data='this student has lecture in this date';
                    $status=2;
                }
            }
            return response()->json([
                'status'=>$status,
                'data'=>$data
            ]);

        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }


    public function studentsPresent($id)
    {
        //
        try {

            $lecture = $this->lectureRepository->find($id);
            $course = $lecture->course;
            $course_students = $course->students;

            $lecture_students_ids = $lecture->students->pluck('id')->toArray();
//            dd($lecture_students_ids);

            return view('admin.lectures.students', compact('lecture','course_students', 'lecture_students_ids'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


}
