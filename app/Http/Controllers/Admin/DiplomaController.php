<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\IDiplomaRepository;
use App\Models\Diploma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiplomaController extends Controller
{
    protected $diplomaRepository;
    protected $requestData;


    public function __construct(IDiplomaRepository $diplomaRepository)
    {
        $this->diplomaRepository = $diplomaRepository;
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

            $diplomas = $this->diplomaRepository->all();
            return view('admin.diplomas.list', compact('diplomas'));

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

        return view('admin.diplomas.add');

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

            $validator = Validator::make($data, $validator_rules = Diploma::create_update_rules);

            if ($validator->passes()) {


                $user = $this->diplomaRepository->create($data);


                return redirect()->route('diploma.index')->with('message', trans('diplomas/diplomas.Diploma_Added_Successfully'));

            }
            return redirect()->route('diploma.create')->with('error', trans('general.Operation_Failed'));

        } catch (\Exception $e) {
            return redirect()->route('diploma.create')->with('error', $e->getMessage());

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
        $diploma = $this->diplomaRepository->find($id);
        return view('admin.diplomas.edit', compact('diploma'));

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

            $validator = Validator::make($data, $validator_rules = Diploma::create_update_rules);

            if ($validator->passes()) {


                $user = $this->diplomaRepository->update($data, $id);


                return redirect()->route('diploma.index')->with('message', trans('diplomas/diplomas.Diploma_Updated_Successfully'));

            }
            return redirect()->route('diploma.edit')->with('error', trans('general.Operation_Failed'));

        } catch (\Exception $e) {
            return redirect()->route('diploma.edit')->with('error', $e->getMessage());

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

            $this->diplomaRepository->delete($id);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }
}
