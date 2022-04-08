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
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">

    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">


@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('homeworks/homeworks.homework')}}</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('homeworks/homeworks.add_homework')}}</span>
            </div>
        </div>

    </div>

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('homework.store')}}" method="POST"
                          id="lecture_form" data-parsley-validate="">
                        @csrf
                        <div class="row row-sm mg-b-20">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">{{trans('lectures/lectures.title')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="title" placeholder="{{trans('lectures/lectures.plc_title')}}" required="" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row row-sm">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">{{trans('homeworks/homeworks.mark')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="mark" placeholder="{{trans('homeworks/homeworks.mark')}}" required="" type="text">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row row-sm mg-b-20">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-0">
                                <label class="form-label">{{trans('Homework/Homework.course')}}:<span class="tx-danger">*</span></label>
                                <select name="course_id" required="" id="select-beast" class="form-control  nice-select  custom-select">
                                    <option value="">{{trans('Homework/Homework.please select one course from this list')}}</option>

                                    @foreach($courses as $one)
                                        <option value="{{$one->id}}">{{$one->title}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <label class="form-label">{{trans('Homework/Homework.lectures')}}:<span class="tx-danger">*</span></label>
                                <select name="lecture_id" required="" id="select-beast" class="form-control   nice-select  custom-select">
                                    <option value="">{{trans('Homework/Homework.please select one lecture from this list')}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row row-sm mg-b-20">
                            <div class="col-lg-12">
                                <label class="form-label">{{trans('Homework/Homework.teachers')}}:<span class="tx-danger">*</span></label>
                                <select name="teacher_id" required="" id="select-beast" class="form-control  nice-select  custom-select">
                                    <option value="">{{trans('Homework/Homework.please select one teacher from this list')}}</option>
                                </select>
                            </div>
                        </div>





                        <div class="row mg-b-20">
                            <div class="col-xs-12 col-md-12">
                                <p class="mg-b-10">{{trans('Homework/Homework.students')}} <span class="tx-danger">*</span></p>
                                <select name="students[]" required="" multiple class="form-control select2">
                                    <option >
                                    </option>
                                </select>

                            </div><!-- col-4 -->
                        </div><!-- col-4 -->

{{--                        <div class="row mg-b-20">--}}
{{--                            <div class="col-xs-12 col-md-12">--}}
{{--                                <p class="mg-b-10">{{trans('Homework/Homework.students')}} <span class="tx-danger">*</span></p>--}}
{{--                                <select id="students" name="students[]" multiple onchange="console.log($(this).children(':selected').length)" class="form-control selectsum1">--}}
{{--                                    <option value="">{{trans('Homework/Homework.please select one teacher from this list')}}</option>--}}

{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                         <div class="row row-sm mt-2">
                            <div class="col-12">
                                <div class="form-group mg-b-0">
                                    <label
                                        class="form-label">{{trans('lectures/lectures.desc')}} </label>
                                    <input class="form-control" type="hidden" name="desc"  id="desc">
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


    <script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <script src="{{asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>


    <script src="{{asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>

    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>


    <script src="{{asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>


    <script src="{{asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>


    <script src="{{asset('assets/plugins/pickerjs/picker.min.js')}}"></script>

    <script src="{{asset('assets/js/form-elements.js')}}"></script>

    <script src="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>

    <script src="{{asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

    <script src="{{asset('assets/js/admin-pages/lectures/add.js')}}"></script>

    <script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>


    <script>
        $(document).ready(function () {
            $('select[name="course_id"]').on('change', function () {
                var course_id = $(this).val();
                if (course_id) {
                    $.ajax({
                        url: "{{ URL::to('admin/homework/selectLectures') }}/" + course_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="lecture_id"]').empty();
                            $.each(data, function (key, value) {

                                $('select[name="lecture_id"]').append('<option value="' + value.id + '">' + value.title + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });

            $('select[name="course_id"]').on('change', function () {
                var course_id = $(this).val();
                if (course_id) {
                    $.ajax({
                        url: "{{ URL::to('admin/homework/selectStudents') }}/" + course_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="students[]"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="students[]"]').append('<option value="' + value.id + '">' + value.name_ar + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });

            $('select[name="course_id"]').on('change', function () {
                var course_id = $(this).val();
                if (course_id) {
                    $.ajax({
                        url: "{{ URL::to('admin/homework/selectTeachers') }}/" + course_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="teacher_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="teacher_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });

    </script>


@endsection
