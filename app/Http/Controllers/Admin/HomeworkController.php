<?php

namespace App\Http\Controllers\Admin;
use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\IRepositories\IHomeworkRepository;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Homework;
use App\Models\Student;
use App\Models\StudentFile;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class HomeworkController extends Controller
{

    protected $homeworkRepository;
    protected $requestData;
    public function __construct(IHomeworkRepository  $homeworkRepository)
    {
        $this->homeworkRepository = $homeworkRepository;
        $this->requestData = Mapper::toUnderScore(Request()->all());
        $this->middleware('permission:Homework');
        $this->middleware('permission:list Homework')->only(['index']);
        $this->middleware('permission:add files')->only(['add_files']);
        $this->middleware('permission:create Homework')->only(['create']);
        $this->middleware('permission:update Homework')->only(['edit']);
        $this->middleware('permission:show Homework')->only(['show']);
        $this->middleware('permission:delete Homework')->only(['destroy']);
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
            $attachment->homework_id = $request->homework_id;
            $attachment->name = $request->name;
            $attachment->type = 1;
            $attachment->save();
            // move pic
            $imageName = $request->file->getClientOriginalName();
            $request->file->move(public_path('Homework/' . $request->name), $imageName);
            $attachments = File::where('homework_id', $request->homework_id)->get();
            $view = view('admin.homework._showlist')->with(['attachments' => $attachments, 'id' => $request->homework_id])
                ->renderSections();

            return response()->json([
                'status' => true,
                'content' => $view['main']
            ]);


        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }

    }

    public function get_file($path,$file_name)

    {
        try {
        $contents= Storage::disk('public_uploads_homework')->getDriver()->getAdapter()->applyPathPrefix($file_name.'/'.$path);
        return response()->download( $contents);
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }

    public function open_file($path,$file_name)

    {
        try {
            $files = Storage::disk('public_uploads_homework')->getDriver()->getAdapter()->applyPathPrefix($file_name.'/'.$path);
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
            Storage::disk('public_uploads_homework')->delete($file_name.'/'.$path);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));

        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }

    public function add_files(Request $request,$id)
    {
        try {
            $homework=Homework::find($id);
            $attachments=File::where('homework_id',$homework->id)->get();
            return view('admin.homework.add_files',compact('attachments','homework'));

        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }

    public function homeworkStudents($id)
    {
        //
        try {

            $homework=Homework::find($id);
            $students_homework = $homework->students;

            $ids=[];
            foreach ($students_homework as $one) {
                if (!$one->studentFiles->isEmpty())
                {

                    $ids[] = StudentFile::where('homework_id', $homework->id)->where('student_id', $one->id)->pluck('student_id');
                }
            }

            $students=Student::whereIn('id',$ids)->get();

            //$students_file=StudentFile::where('')

            return view('admin.homework.students', compact('homework', 'students'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function homeworkStudentsAnswers($id, $stud_id)
    {
        //
        try {

            $homework=Homework::find($id);
            $student = Student::find($stud_id);



            return view('admin.homework.studentAnswers', compact('homework', 'student'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function correctStudentsAnswers($id, $stud_id,Request $request)
    {
        //

        try {
            $homework=Homework::find($id);
            $students = $homework->students;
            $mark=$request->mark;
            $student_file=StudentFile::where('homework_id',$id)->where('student_id',$stud_id)->first();
            $student_file->mark=$mark;
            $student_file->save();
            return view('admin.homework.students')->with(['edit','User has Deleted Successfully','students'=>$students,'homework'=>$homework]);



        } catch (Exception $e) {
            return redirect()->route('homework.students.answers',[$id, $stud_id])->with('error', $e->getMessage());

        }
    }

    public function get_file_student($path,$file_id)

    {
        try {
            $contents= Storage::disk('public_uploads_homework_student_file')->getDriver()->getAdapter()->applyPathPrefix($file_id.'/'.$path);
            return response()->download( $contents);
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }

    public function open_file_student($path,$file_id)

    {
        try {
            $files = Storage::disk('public_uploads_homework_student_file')->getDriver()->getAdapter()->applyPathPrefix($file_id.'/'.$path);
            return response()->file($files);
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }









}
