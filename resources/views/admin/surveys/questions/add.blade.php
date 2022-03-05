@extends('layouts.app')

@section('styles')

    <!--- Internal Select2 css-->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/quill.snow.css')}}">

    <!---Internal Fileupload css-->
    <link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"><a
                        href="{{route('survey.index')}}">{{trans('surveys/surveys.surveys')}}</a></h4>
                <span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ <a href="{{route('survey.students', $survey->id)}}">{{$survey->title}}</a>
                </span>
                <span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ <a
                        href="{{route('survey.questions', $survey->id)}}">{{trans('questions/questions.questions')}}</a>
                </span>
                <span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('questions/questions.add_question')}}
                </span>
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
                    <form action="{{route('survey.question.store', $survey->id)}}" method="POST"
                          id="question_form" data-parsley-validate="" class="invoice-repeater" enctype="multipart/form-data">
                        @csrf

                        <div class="row row-sm mt-2">
                            <div class="col-12">
                                <div class="form-group mg-b-0">
                                    <label
                                        class="form-label">{{trans('questions/questions.desc')}} </label>
                                    <input class="form-control" type="hidden" name="desc" id="desc">
                                    <div id="blog-editor-wrapper">
                                        <div id="blog-editor-container">
                                            <div class="editor" style="min-height: 200px">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-sm mt-2">
                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                <p class="mg-b-10">{{trans('questions/questions.type')}} <span
                                        class="tx-danger">*</span></p>
                                <select name="type" id="type" required="" class="form-control select2">
                                    <option label="{{trans('lectures/lectures.sel_type')}}">
                                    <option value="1">
                                        {{trans('questions/questions.text')}}
                                    </option>
                                    <option value="2">
                                        {{trans('questions/questions.trueFalse')}}
                                    </option>
                                    <option value="3">
                                        {{trans('questions/questions.options')}}
                                    </option>
                                    <option value="4">
                                        {{trans('questions/questions.multiChoice')}}
                                    </option>

                                </select>
                                @error('type')
                                <p class="validation_error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row row-sm mt-2" id="option_div">

                                <div data-repeater-list="options">
                                    <div data-repeater-item>
                                        <div class="row d-flex align-items-end">
                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemname">{{trans('questions/questions.option')}}</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="option"
                                                        id="itemname"
                                                        aria-describedby="itemname"
                                                        placeholder="{{trans('questions/questions.option_plc')}}"
                                                    />
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12 mb-50">
                                                <div class="mb-1">
                                                    <button class="btn btn-outline-danger text-nowrap px-1"
                                                            data-repeater-delete type="button">
                                                        <i data-feather="x" class="me-25"></i>
                                                        <span>{{trans('general.Delete')}}</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="button" data-repeater-create>
                                            <i data-feather="plus" class="me-25"></i>
                                            <span>{{trans('questions/questions.add_new_option')}}</span>
                                        </button>
                                    </div>
                                </div>


                        </div>

                        <div class="row">

                            <div class="col-12">
                                <button class="btn btn-main-primary pd-x-20 mg-t-10"
                                        type="submit">{{trans('general.Add')}}</button>
                            </div>
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
    {{--    <script src="{{asset('assets/js/form-validation.js')}}"></script>--}}
    <!--Internal Fileuploads js-->
    <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>



    <script src="{{asset('assets/js/repeater/jquery.repeater.min.js') }}"></script>

    {{--    <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>--}}


    <script src="{{asset('assets/js/form-elements.js')}}"></script>

    <script src="{{asset('assets/js/admin-pages/surveys/questions/add.js')}}"></script>


@endsection
