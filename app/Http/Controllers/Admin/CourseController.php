<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\ICourseRepository;
use App\Http\IRepositories\IDiplomaRepository;
use App\Models\Course;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{

    protected $courseRepository;
    protected $diplomaRepository;
    protected $requestData;


    public function __construct(ICourseRepository $courseRepository,
                                IDiplomaRepository $diplomaRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->diplomaRepository = $diplomaRepository;
        $this->requestData = Mapper::toUnderScore(Request()->all());
        $this->middleware('permission:courses')->only(['index']);
        $this->middleware('permission:create courses')->only(['create']);
        $this->middleware('permission:update courses')->only(['edit']);
        $this->middleware('permission:delete courses')->only(['destroy']);
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
                $courses = auth('admin')->user()->courses;//$this->courseRepository->all();
            }
            else {
                $courses = $this->courseRepository->all();
            }
            return view('admin.courses.list', compact('courses'));

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

            $diplomas = $this->diplomaRepository->all();
            return view('admin.courses.add', compact('diplomas'));

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

            $data['diploma_id'] = $this->requestData['diploma'];

            $validator = Validator::make($data, $validator_rules = Course::create_update_rules);

            if($request->testPercentage +$request->homeworkPercentage +$request->presencePercentage !==100 )
            {
                return redirect()->route('course.create')->with('error', 'مجموع النسب المئوية لا يساوي 100');

            }

            if ($validator->passes()) {
                Course::create([
                    'diploma_id'=>$request->diploma,
                    'title'=>$request->title,
                    'desc'=>$request->desc,
                    'testPercentage'=>$request->testPercentage,
                    'homeworkPercentage'=>$request->homeworkPercentage,
                    'presencePercentage'=>$request->presencePercentage,

                ]);


                //$user = $this->courseRepository->create($data);


                return redirect()->route('course.index')->with('message', trans('courses/courses.Course_Added_Successfully'));

            }
            return redirect()->route('course.create')->with('error', trans('general.Operation_Failed'));

        } catch (Exception $e) {
            return redirect()->route('course.create')->with('error', $e->getMessage());

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

            $diplomas = $this->diplomaRepository->all();
            $course = $this->courseRepository->find($id);

            return view('admin.courses.edit', compact('course','diplomas' ));

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
            $data['diploma_id'] = $this->requestData['diploma'];

            $validator = Validator::make($data, $validator_rules = Course::create_update_rules);
            if($request->testPercentage +$request->homeworkPercentage +$request->presencePercentage !==100 )
            {
                return redirect()->route('course.index')->with('error', 'مجموع النسب المئوية لا يساوي 100');

            }
            if ($validator->passes()) {
                Course::where('id',$id)->update([
                    'diploma_id'=>$request->diploma,
                    'title'=>$request->title,
                    'desc'=>$request->desc,
                    'testPercentage'=>$request->testPercentage,
                    'homeworkPercentage'=>$request->homeworkPercentage,
                    'presencePercentage'=>$request->presencePercentage,

                ]);

                //$user = $this->courseRepository->update($data, $id);


                return redirect()->route('course.index')->with('message', trans('courses/courses.Course_Updated_Successfully'));

            }
            return redirect()->route('course.edit', $id)->with('error', trans('general.Operation_Failed'));

        } catch (Exception $e) {
            return redirect()->route('course.edit', $id)->with('error', $e->getMessage());

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

            $this->courseRepository->delete($id);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }
}
