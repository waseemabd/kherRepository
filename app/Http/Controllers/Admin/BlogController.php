<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\IRepositories\IBlogRepository;
use App\Models\Blog;
use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    protected $blogRepository;

    public function __construct(IBlogRepository  $blogRepository)
    {
        $this->blogRepository = $blogRepository;

    }
    public function index()
    {
        $blogs=Blog::get();

        //dd($blogs);
        return view('admin.blogs.list',compact('blogs'));
    }


    public function edit($id)
    {
       $data= $this->blogRepository->editBlog($id);
        return view('admin.blogs.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $this->blogRepository->updateBlog($request,$id);
        return redirect()->route('blogs.index')
            ->with('edit','Blog information has updated successfully');
    }


    public function destroy($id)
    {
        try {
            $blog=Blog::find($id);
            $blog->delete();
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }

    }

    public function block($id)
    {
        try {
            $blog=Blog::find($id);
           if($blog->status ==1)
           {
               $blog->status=0;
               $blog->save();
           }else
               $blog->status=1;
               $blog->save();
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));
        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }

    }

    public function saveImage(Request $request)
    {
        try {

            $image = $request->file('file');
            $blog=Blog::find($request->id);
            $blog->update(['image'=>$image->getClientOriginalName()]);
            // move pic
            $imageName = $request->file->getClientOriginalName();
            $request->file->move(public_path('Blogs/' . $request->id), $imageName);
            $view = view('admin.blogs._showlist')->with(['blog' => $blog])
                ->renderSections();

            return response()->json([
                'status' => true,
                'content' => $view['main']
            ]);


        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }

    }

    public function destroy_file(Request $request,$id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $path=$blog->image;
            $blog->image=null;
            $blog->save();
            Storage::disk('public_uploads')->delete($blog->id.'/'.$path);
            return JsonResponse::respondSuccess(trans('common_msg.' . JsonResponse::MSG_DELETED_SUCCESSFULLY));

        } catch (\Exception $ex) {
            return JsonResponse::respondError($ex->getMessage());
        }


    }
}
