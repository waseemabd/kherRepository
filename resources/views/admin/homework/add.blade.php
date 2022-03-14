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
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('lectures/lectures.add_homework')}}</span>
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
                    <form action="{{route('homework.store')}}" method="POST"
                          id="lecture_form" data-parsley-validate="">
                        @csrf
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-0">
                                    <label class="form-label">{{trans('lectures/lectures.title')}}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" name="title" placeholder="{{trans('lectures/lectures.plc_title')}}" required="" type="text">
                                </div>
                            </div>


                        </div>


                       
                             <div class="row row-sm mg-b-20">
                                 <div class="col-lg-12">
                                     <label class="form-label">{{trans('Homework/Homework.teachers')}}</label>
                                     <select name="teacher_id" id="select-beast" class="form-control  nice-select  custom-select">
                                         <option value="">{{trans('Homework/Homework.please select one teacher from this list')}}</option>
                                         @foreach($teachers as $one)
                                             <option value="{{$one->id}}">{{$one->name}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="row row-sm mg-b-20">
                                 <div class="col-lg-12">
                                     <label class="form-label">{{trans('Homework/Homework.lectures')}}</label>
                                     <select name="lecture_id" id="select-beast" class="form-control  nice-select  custom-select">
                                         <option value="">{{trans('Homework/Homework.please select one lecture from this list')}}</option>

                                         @foreach($lectures as $one)
                                             <option value="{{$one->id}}">{{$one->title}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="row mg-b-20">
                                 <div class="col-xs-12 col-md-12">
                                     <p class="mg-b-10">{{trans('Homework/Homework.students')}} <span class="tx-danger">*</span></p>
                                     <select name="students[]" required="" multiple class="form-control select2">
                                         <option >
                                         </option>
                                         @foreach($students as $student)
                                             <option value="{{$student->id}}">
                                                 {{$student->getTranslatedName()}}
                                             </option>
                                         @endforeach

                                     </select>

                                 </div><!-- col-4 -->
                             </div><!-- col-4 -->
                            
                             <div class="row row-sm mt-2">
                            <div class="col-12">
                                <div class="form-group mg-b-0">
                                    <label
                                        class="form-label">{{trans('Homework/Homework.Description')}} </label>
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



    <script src="{{asset('assets/js/admin-pages/lectures/add.js')}}"></script>


@endsection
