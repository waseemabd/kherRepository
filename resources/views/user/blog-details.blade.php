@extends('user.layouts.master-page')

@section('title','تفاصيل المدونة')

@section('style')

@endsection


@section('content')


    <!-- Breadcrumb  start -->
    <section class="breadcrumb-wrap bg-f br-bg-2">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-title">
                        <h2>Blog Details</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="">Home </a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->
    <!-- Blog Details start -->
    <div class="post-details pt-100 pb-100">
        <div class="container">
            <div class="row gx-5">

                <div class="col-xl-8 col-lg-8 order-xl-2 order-lg-1 order-md-1 order-1">
                    <div class="content-wrapper">
                        <article>
                            <div class="post-content ">
                                <div  class="post-img">
                                    <img  src="{{URL::to('/') . '/Blogs/' . $blog->id.'/'.$blog->image}}" alt="Image">
                                </div>
                                <h2 class="post-subtitle">{{$blog->title}}</h2>
                                <blockquote class="wp-block-quote">
                                    <p>{{$blog->desc}}</p>
                                    <i class="ri-double-quotes-l"></i>
                                </blockquote>
                            </div>
                        </article>

                        <div id="list-comments" class="post-comment-wrap style2">
                            <h4 class="comment-title">{{$blog->comments->count()}} Comments</h4>
                            @include("user.comment",['comments'=>$blog->comments, 'blog_id'=>$blog->id])
                        </div>


                        <div class="comment-form-wrap">
                            <div class="comment-form-title style2">
                                <p>You Have To Login Before Comment This Blog*
                                </p>
                            </div>

                                <div class="row gx-3">
                                    <form action="{{route('comment.store')}}" method="post" >
                                        @csrf
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="msg">Enter Your Comment</label>

                                                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Your comments..."></textarea>
                                            </div>
                                            <div class="form-group">

                                                <input hidden name="blog_id" value="{{$blog->id}}" id="blog_id" cols="30" rows="10" placeholder="Your comments..."/>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" id="comment"  class="btn v1 d-block w-100">Post A Comment</button>
                                        </div>

                                    </form>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details end -->

@section('script')

@endsection

@endsection
