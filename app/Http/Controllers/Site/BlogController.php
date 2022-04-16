<?php

namespace App\Http\Controllers\Site;

use App\Helpers\JsonResponse;
use App\Http\IRepositories\ILoginRepository;
use App\Http\IRepositories\IUserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class BlogController extends Controller
{


    public function  GetAllBlogs()
    {

        $blogs=Blog::where('status',1)->where('is_reject',0)->paginate(3);
        return view('user.blog',compact('blogs'));
    }
    public function  GetBlogDetails($id)
    {
        $blog=Blog::find($id);
       return view('user.blog-details',compact('blog'));
    }

    public function Commentstore(Request $request)
    {


        if(auth('user') -> user())
        {

            $comment = new Comment();
            $comment->desc=$request->desc;
            $comment->parent_id=null;
            $comment->blog_id=$request->blog_id;
            $comment->user_id=auth('user') -> user() ->id;
            $comment->save();
            return back();
        }elseif(auth('student') -> user())
        {
            $comment = new Comment();
            $comment->desc=$request->desc;
            $comment->parent_id=null;
            $comment->blog_id=$request->blog_id;
            $comment->student_id=auth('student') -> user() ->id;
            $comment->save();
            return back();
        }else
        {
            return back();

        }
    }


    public function store(Request $request)
    {
       if(auth('user') -> user())
       {
           $comment = new Comment();
           $comment->desc=$request->desc;
           $comment->parent_id=$request->parent_id;
           $comment->blog_id=$request->blog_id;
           $comment->user_id=auth('user') -> user() ->id;
           $comment->save();
           return back();
       }elseif(auth('student') -> user())
       {
           $comment = new Comment();
           $comment->desc=$request->desc;
           $comment->parent_id=$request->parent_id;
           $comment->blog_id=$request->blog_id;
           $comment->student_id=auth('student') -> user() ->id;
           $comment->save();
           return back();
       }else
       {
           return back();

       }

//        try {
//            if(auth('user') -> user()) {
//                $comment = new Comment();
//                $comment->desc = $request->desc;
//                $comment->parent_id = $request->parent_id;
//                $comment->blog_id = $request->blog_id;
//                $comment->user_id = auth('user')->user()->id;
//                $comment->save();
//                $comments=Comment::all();
//                $view = view('user.comment')->with(['comments' => $comments])
//                    ->renderSections();
//
//                return response()->json([
//                    'status' => true,
//                    'content' => $view['main']
//                ]);
//            }elseif(auth('student') -> user())
//            {
//                $comment = new Comment();
//                $comment->desc=$request->desc;
//                $comment->parent_id=$request->parent_id;
//                $comment->blog_id=$request->blog_id;
//                $comment->student_id=auth('student') -> user() ->id;
//                $comment->save();
//                $view = view('admin.homework._showlist')->with(['attachments' => $attachments, 'id' => $request->homework_id])
//                    ->renderSections();
//
//                return response()->json([
//                    'status' => true,
//                    'content' => $view['main']
//                ]);
//            }
//
//
//        } catch (Exception $ex) {
//            return JsonResponse::respondError($ex->getMessage());
//        }

    }

}
