<?php

namespace App\Http\Controllers\Admin;
use App\Helpers\JsonResponse;
use App\Helpers\Mapper;
use App\Http\IRepositories\IHomeworkRepository;

use App\Http\Controllers\Controller;
use App\Models\File;
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
    } catch (\Exception $ex) {
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


        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }

    }

    public function get_file($path,$file_name)

    {
        try {
        $contents= Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($file_name.'/'.$path);
        return response()->download( $contents);
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }

    public function open_file($path,$file_name)

    {
        try {
            $files = Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($file_name.'/'.$path);
            return response()->file($files);
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }
    }
    public function destroy_file(Request $request)
    {


        try {
            $attachment = File::findOrFail($request->attachment_id);
            $file_name=$attachment->name;
            $path=$attachment->path;
            $attachment->delete();
            Storage::disk('public_uploads')->delete($file_name.'/'.$path);
            return redirect()->back()->with('delete','Attachment has Deleted Successfully');
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }




}
