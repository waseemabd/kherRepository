<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\ICourseRepository;
use App\Http\IRepositories\IStudentRepository;
use App\Http\IRepositories\ISurveyAnswerRepository;
use App\Http\IRepositories\ISurveyRepository;
use App\Models\Survey;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{

    protected $courseRepository;
    protected $surveyRepository;
    protected $studentRepository;
    protected $surveyAnswerRepository;
    protected $requestData;


    public function __construct(ICourseRepository $courseRepository,
                                ISurveyRepository $surveyRepository,
                                IStudentRepository $studentRepository,
                                ISurveyAnswerRepository $surveyAnswerRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->surveyRepository = $surveyRepository;
        $this->studentRepository = $studentRepository;
        $this->surveyAnswerRepository = $surveyAnswerRepository;
        $this->requestData = Mapper::toUnderScore(Request()->all());
//        $this->middleware('permission:Survey');
//        $this->middleware('permission:list Survey')->only(['index']);
//        $this->middleware('permission:create Survey')->only(['create']);
//        $this->middleware('permission:update Survey')->only(['edit']);
//        $this->middleware('permission:show students Survey')->only(['show']);
//        $this->middleware('permission:questions Survey')->only(['surveyQuestions']);
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

            $surveys = $this->surveyRepository->all();

            return view('admin.surveys.list', compact('surveys'));

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
            return view('admin.surveys.add', compact('courses'));

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
        //
        try {

            $data = $this->requestData;
            $type = $this->requestData['type'];
            if($type){
                $data['course_id'] = $this->requestData['course'];
            }else{
                $data['course_id'] = null;
            }

            $data['user_id'] = auth("admin")->user()->id;

            $validator = Validator::make($data, $validator_rules = Survey::create_update_rules);

            if ($validator->passes()) {


                $user = $this->surveyRepository->create($data);


                return redirect()->route('survey.index')->with('message', trans('surveys/surveys.Survey_Added_Successfully'));

            }
            return redirect()->route('survey.create')->with('error', trans('general.Operation_Failed'));

        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->route('survey.create')->with('error', $e->getMessage());

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
            $survey = $this->surveyRepository->find($id);

            return view('admin.surveys.edit', compact('courses','survey' ));

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
//            $survey = $this->surveyRepository->find($id);
            $type = $data['type'];


            $survey = Survey::where('id', $id)->first();

            $survey->title = $data['title'];
            $survey->desc = $data['desc'];
            $data['user_id'] = $survey->user_id = auth("admin")->user()->id;

            if($type){
                $survey->course_id = $this->requestData['course'];
            }else{
                $survey->course_id = null;
            }


            $validator = Validator::make($data, $validator_rules = Survey::create_update_rules);

            if ($validator->passes()) {


                $user = $survey->save();


                return redirect()->route('survey.index')->with('message', trans('surveys/surveys.Survey_Updated_Successfully'));

            }
            return redirect()->route('survey.edit', $id)->with('error', trans('general.Operation_Failed'));

        } catch (Exception $e) {
            return redirect()->route('survey.edit', $id)->with('error', $e->getMessage());

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

            $this->surveyRepository->delete($id);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }

    public function surveyQuestions($id)
    {
        //
        try {

            $survey = $this->surveyRepository->find($id);
            $questions = $survey->survey_questions;
//            $qtypes = $this->qu
            return view('admin.surveys.questions', compact('survey','questions'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function surveyStudents($id)
    {
        //
        try {

            $survey = $this->surveyRepository->find($id);
            $students = $survey->students;

            return view('admin.surveys.students', compact('survey', 'students'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function surveyStudentsAnswers($test_id, $stud_id)
    {
        //
        try {

            $survey = $this->surveyRepository->find($test_id);
            $student = $this->studentRepository->find($stud_id);



            return view('admin.surveys.studentAnswers', compact('survey', 'student'));

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



}
