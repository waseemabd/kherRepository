@extends('layouts.app')

@section('styles')

    <!--- Internal Select2 css-->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/quill.snow.css')}}">
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('courses/courses.courses')}}</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('courses/courses.add_course')}}</span>
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
                    <form action="{{route('course.store')}}" method="POST"
                          id="course_form" data-parsley-validate="">
                        @csrf
                        <div class="row row-sm">
                            <div class="col-lg-6 col-sm-12 mt-5">
                                <div class="form-group mg-b-0">
                                    <label class="form-label fz-13">{{trans('courses/courses.title')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="title" placeholder="{{trans('courses/courses.plc_title')}}" required="" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                <p class="mg-b-10 fz-13">{{trans('courses/courses.diploma')}} <span class="tx-danger">*</span></p>
                                <select name="diploma" required="" class="form-control  select2-diploma">
                                    <option >
{{--                                        {{trans('courses/courses.sel_diploma')}}--}}
                                    </option>
                                    @foreach($diplomas as $diploma)
                                    <option value="{{$diploma->id}}">
                                        {{$diploma->title}}
                                    </option>
                                    @endforeach

                                </select>
                                @error('diploma')
                                <p class="validation_error">{{ $message }}</p>
                                @enderror
                            </div><!-- col-4 -->
                        </div>

                        <div class="row row-sm mt-2">

                            <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                                <p class="mg-b-10 fz-13">{{trans('courses/courses.teachers')}} <span class="tx-danger">*</span></p>
                                <select name="teachers[]" required="" class="form-control select2-teacher" multiple>
                                    <option >
                                        {{--                                        {{trans('courses/courses.sel_diploma')}}--}}
                                    </option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}">
                                            {{$teacher->name}}
                                        </option>
                                    @endforeach

                                </select>
                                @error('diploma')
                                <p class="validation_error">{{ $message }}</p>
                                @enderror
                            </div><!-- col-4 -->
                        </div>

                        <div class="row row-sm">
                            <div class="col-lg-4 col-sm-12 mg-t-30">
                                <div class="form-group mg-b-0">
                                    <label class="form-label fz-13">{{trans('courses/courses.test_percentage')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="testPercentage" placeholder="{{trans('courses/courses.test_percentage')}} مثلا 60" required type="text">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 mg-t-30">
                                <div class="form-group mg-b-0">
                                    <label class="form-label fz-13">{{trans('courses/courses.homework_percentage')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="homeworkPercentage" placeholder="{{trans('courses/courses.homework_percentage')}} مثلا 30" required type="text">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 mg-t-30">
                                <div class="form-group mg-b-0">
                                    <label class="form-label fz-13">{{trans('courses/courses.presence_percentage')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="presencePercentage" placeholder="{{trans('courses/courses.homework_percentage')}} مثلا 10" required type="text">
                                </div>
                            </div>
                        </div>


                        <div class="row row-sm mt-2">
                            <div class="col-12">
                                <div class="form-group mg-b-0">
                                    <label
                                        class="form-label">{{trans('courses/courses.desc')}} </label>
                                    <input class="form-control" type="hidden" name="desc" id="desc">
                                    <div id="blog-editor-wrapper">
                                        <div id="blog-editor-container">
                                            <div class="editor" style="min-height: 200px">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">{{trans('general.Add')}}</button></div>
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

    <script src="{{asset('assets/js/form-elements.js')}}"></script>

    <script src="{{asset('assets/js/admin-pages/courses/add.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
        



@endsection
