@extends('layouts.app')

@section('styles')

    <!--- Internal Select2 css-->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/quill.snow.css')}}">
@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('diplomas/diplomas.diplomas')}}</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('diplomas/diplomas.edit_diploma')}}</span>
            </div>
        </div>

    </div>    <!-- breadcrumb -->

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    {{--                    <div class="main-content-label mg-b-5">--}}
                    {{--                        Required Input Validation--}}
                    {{--                    </div>--}}
                    {{--                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>--}}
                    <form action="{{route('diploma.update', $diploma->id)}}" method="POST"
                          id="diploma_form" data-parsley-validate="">
                        @csrf
                        <div class="row row-sm">
                            <div class="col-12">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">{{trans('diplomas/diplomas.title')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="title" value="{{ $diploma->title }}" placeholder="{{trans('diplomas/diplomas.plc_title')}}" required="" type="text">
                                </div>
                            </div>


                            <div class="col-12 mt-2">
                                <div class="form-group mg-b-0">
                                    <label
                                        class="form-label">{{trans('diplomas/diplomas.desc')}}</label>
                                    <input class="form-control" type="hidden" name="desc" id="desc">
                                    <div id="blog-editor-wrapper">
                                        <div id="blog-editor-container">
                                            <div class="editor" style="min-height: 200px">

                                                {!!  $diploma->desc !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">{{trans('general.Edit')}}</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->

@endsection('content')

@section('scripts')

    <!--Internal  Select2 js -->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('assets/js/editors/quill/katex.min.js')}}"></script>
    <script src="{{asset('assets/js/editors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('assets/js/editors/quill/quill.min.js')}}"></script>

    <!--Internal  Parsley.min js -->
    <script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

    <!-- Internal Form-validation js -->
    <script src="{{asset('assets/js/form-validation.js')}}"></script>

    <script src="{{asset('assets/js/admin-pages/diplomas/add.js')}}"></script>


@endsection
