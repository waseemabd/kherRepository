@extends('layouts.app')

@section('styles')

    <!--- Internal Select2 css-->
    {{--    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/quill.snow.css')}}">

    <!-- Internal Select2 css -->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <!--Internal  Datetimepicker-slider css -->
    <link href="{{asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">


@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('Homework/Homework.Homework')}}</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('Homework/Homework.edit-homework')}}</span>
            </div>
        </div>

    </div>    <!-- breadcrumb -->

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{route('homework.update', $homework->id)}}" method="POST"
                          id="lecture_form" data-parsley-validate="">
                        @csrf
                            <div class="row row-sm">
                                <div class="col-lg-6 col-sm-12 col-md-12">
                                    <div class="form-group mg-b-0">
                                        <label class="form-label">{{trans('lectures/lectures.title')}}: </label>
                                        <input class="form-control" name="title" value="{{$homework->title}}" placeholder="{{trans('lectures/lectures.plc_title')}}" type="text">
                                    </div>
                                </div>
                

                                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                    <label class="form-label">{{trans('Homework/Homework.lectures')}}</label>
                                        <select name="lecture_id"  class="form-control select2">
                                            <option></option>
                                            @foreach($lectures as $one)
                                                <option value="{{$one->id}}" {{$homework->lecture->id == $one->id ? 'selected': ''}}>{{$one->title}}</option>
                                            @endforeach
                                        </select>

                                    </div><!-- col-4 -->
                            </div>

                            <div class="row mg-b-20">
                                    <div class="col-lg-6 col-sm-12 col-md-12">
                                    <label class="form-label mt-12">{{trans('Homework/Homework.teachers')}}</label>
                                        <select name="teacher_id" required="" class="form-control select2">

                                            @foreach($teachers as $one)
                                                <option value="{{$one->id}}" {{$homework->user->id == $one->id ? 'selected': ''}}>{{$one->name}}</option>
                                            @endforeach
                                        </select>

                                    </div><!-- col-4 -->
                                    <div class="col-lg-6 col-sm-12 col-md-12">
                                        <label class="form-label mt-12">{{trans('Homework/Homework.students')}} <span class="tx-danger">*</span></label>
                                        <select name="students[]"  multiple class="form-control select2">

                                            @foreach($students as $student)
                                                <option value="{{$student->id}}" {{in_array($student->id, $ids_students) ? 'selected':''}}>
                                                    {{$student->getTranslatedName()}}
                                                </option>
                                            @endforeach

                                        </select>

                                    </div><!-- col-4 -->
                            </div>

                            <div class="row row-sm mt-2">
                                <div class="col-12">
                                    <div class="form-group mg-b-0">
                                        <label
                                            class="form-label">{{trans('lectures/lectures.desc')}} </label>
                                        <input class="form-control" type="hidden" name="desc" id="desc">
                                        <div id="blog-editor-wrapper">
                                            <div id="blog-editor-container">
                                                <div class="editor" style="min-height: 200px">

                                                    {!! $homework->desc !!}
                                                </div>
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
    {{--    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>--}}

    <script src="{{asset('assets/js/editors/quill/katex.min.js')}}"></script>
    <script src="{{asset('assets/js/editors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('assets/js/editors/quill/quill.min.js')}}"></script>


    <!--Internal  Parsley.min js -->
    <script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

    <!-- Internal Form-validation js -->
    <script src="{{asset('assets/js/form-validation.js')}}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!--Internal  jquery.maskedinput js -->
    <script src="{{asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

    <!--Internal  spectrum-colorpicker js -->
    <script src="{{asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

    <!-- Internal Select2.min js -->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

    <!--Internal  pickerjs js -->
    <script src="{{asset('assets/plugins/pickerjs/picker.min.js')}}"></script>

    <!-- Internal form-elements js -->
    <script src="{{asset('assets/js/form-elements.js')}}"></script>

    <!-- Ionicons js -->
    <script src="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>



    <script src="{{asset('assets/js/admin-pages/lectures/edit.js')}}"></script>


@endsection
