@extends('layouts.app')

@section('styles')

    <!-- Internal Data table css -->
    <link href="{{asset('assets/plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

    <link href="{{asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">



@endsection





@section('content')


    <!-- row closed -->
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>خطا</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">Homework</h4><span
                            class="text-muted mt-1 tx-13 ms-2 mb-0">/Create Homework</span>
                    </div>
                </div>

            </div>

        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('homework.index') }}">Back</a>
                    </div>
                </div><br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{route('homework.store','test')}}" method="post">
                    {{csrf_field()}}


                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <label>title: <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper"  name="title" required="" type="text">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    Form Editor
                                </div>
                                <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                                <div class="ql-wrapper ql-wrapper-demo bg-gray-100">
                                    <div id="quillEditor">
                                        <p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
                                        <p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-6">
                            <label class="form-label">lectures</label>
                            <select name="lecture_id" id="select-beast" class="form-control  nice-select  custom-select">
                                <option value="">please select one lecture from this list</option>

                            @foreach($lectures as $one)
                                    <option value="{{$one->id}}">{{$one->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-6">
                            <label class="form-label">teachers</label>
                            <select name="teacher_id" id="select-beast" class="form-control  nice-select  custom-select">
                                <option value="">please select one teacher from this list</option>
                            @foreach($teachers as $one)
                                <option value="{{$one->id}}">{{$one->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="row mg-b-20">
                        <div class="col-xs-12 col-md-12">
                        <p class="mg-b-10">students <span class="tx-danger">*</span></p>
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





                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-main-primary pd-x-20" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('scripts')
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

    <script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

    <!-- Internal Form-editor js -->
    <script src="{{asset('assets/js/form-editor.js')}}"></script>>

    <script>
        $('.select2').select2();
    </script>


@endsection
