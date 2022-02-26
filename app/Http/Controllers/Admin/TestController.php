<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\IAnswerRepository;
use App\Http\IRepositories\ICourseRepository;
use App\Http\IRepositories\IStudentRepository;
use App\Http\IRepositories\ITestRepository;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    protected $courseRepository;
    protected $testRepository;
    protected $studentRepository;
    protected $answerRepository;
    protected $requestData;


    public function __construct(ICourseRepository $courseRepository,
                                ITestRepository $testRepository,
                                IStudentRepository $studentRepository,
                                IAnswerRepository $answerRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->testRepository = $testRepository;
        $this->studentRepository = $studentRepository;
        $this->answerRepository = $answerRepository;
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

            $tests = $this->testRepository->all();
            return view('admin.tests.list', compact('tests'));

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

            $courses = $this->courseRepository->all();
            return view('admin.tests.add', compact('courses'));

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

            $data = $this->requestData;
            $data['course_id'] = $this->requestData['course'];
            $data['user_id'] = auth("admin")->user()->id;
//            dd($data);
            $validator = Validator::make($data, $validator_rules = Test::create_update_rules);

            if ($validator->passes()) {


                $user = $this->testRepository->create($data);


                return redirect()->route('test.index')->with('message', trans('tests/tests.Test_Added_Successfully'));

            }
            return redirect()->route('test.create')->with('error', trans('general.Operation_Failed'));

        } catch (\Exception $e) {
            return redirect()->route('test.create')->with('error', $e->getMessage());

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
            $test = $this->testRepository->find($id);

            return view('admin.tests.edit', compact('courses','test' ));

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
            $test = $this->testRepository->find($id);

            $data['course_id'] = $this->requestData['course'];
            $data['user_id'] = $test->user_id;

//            dd($data);
            $validator = Validator::make($data, $validator_rules = Test::create_update_rules);

            if ($validator->passes()) {


                $user = $this->testRepository->update($data, $id);


                return redirect()->route('test.index')->with('message', trans('tests/tests.Test_Updated_Successfully'));

            }
            return redirect()->route('test.edit', $id)->with('error', trans('general.Operation_Failed'));

        } catch (\Exception $e) {
            return redirect()->route('test.edit', $id)->with('error', $e->getMessage());

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

            $this->testRepository->delete($id);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }

    public function testQuestions($id)
    {
        //
        try {

            $test = $this->testRepository->find($id);
            $questions = $test->questions;
//            $qtypes = $this->qu
            return view('admin.tests.questions', compact('test','questions'));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function testStudents($id)
    {
        //
        try {

            $test = $this->testRepository->find($id);
            $students = $test->students;

            return view('admin.tests.students', compact('test', 'students'));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function testStudentsAnswers($test_id, $stud_id)
    {
        //
        try {

            $test = $this->testRepository->find($test_id);
            $student = $this->studentRepository->find($stud_id);



            return view('admin.tests.studentAnswers', compact('test', 'student'));

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function correctStudentsAnswers($test_id, $stud_id)
    {
        //
        try {

            $answers_ids = $this->requestData; // key => val, answer_id => mark
            $test = $this->testRepository->find($test_id);

            $questions = $test->questions;

            $total_mark = 0;
            foreach ($questions as $question){
                $student_answer_id = $question->student_answer($stud_id)->id; // get the answer of this question for this student

                $total_mark = $total_mark + $answers_ids[$student_answer_id];

                $data_answer['mark'] = $answers_ids[$student_answer_id];
                $this->answerRepository->update($data_answer, $student_answer_id);
            }
            $updated_test = $test->students()->updateExistingPivot($stud_id, ['total_mark' => $total_mark]);

            if($updated_test){
                return redirect()->route('test.students', $test_id)->with('message', trans('tests/tests.Mark_Updated_Successfully'));

            }else{
                return redirect()->route('test.students.answers',[$test_id, $stud_id])->with('error', trans('tests/tests.Mark_NOT_Updated_Successfully'));

            }

        } catch (\Exception $e) {
            return redirect()->route('test.students.answers',[$test_id, $stud_id])->with('error', $e->getMessage());

        }
    }

}
