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

@endsection


@section('content')
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>error</strong>
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
                        <h4 class="content-title mb-0 my-auto">Students</h4><span
                            class="text-muted mt-1 tx-13 ms-2 mb-0">/ Students Menu</span>
                    </div>
                </div>

            </div>


            <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('students.index') }}">رجوع</a>
                    </div>
                </div><br>

                {!! Form::model($student, ['method' => 'POST','route' => ['student.update', $student->id]]) !!}
                <div class="">

                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label>Arabic Name: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20"
                                   data-parsley-class-handler="#lnWrapper" value="{{$student->name_ar}}"  name="username" required="" type="text">
                        </div>
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label>English name: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20"
                                   data-parsley-class-handler="#lnWrapper" value="{{$student->name_en}}"  name="name_en" required="" type="text">
                        </div>

                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label>user name: <span class="tx-danger">*</span></label>
                            {!! Form::text('username', null, array('class' => 'form-control','required')) !!}
                        </div>

                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label>email: <span class="tx-danger">*</span></label>
                            {!! Form::text('email', null, array('class' => 'form-control','required')) !!}
                        </div>
                    </div>

                </div>

                <div class="row mg-b-20">
                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                        <label>password: <span class="tx-danger">*</span></label>
                        {!! Form::password('password', array('class' => 'form-control',)) !!}
                    </div>

                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                        <label>confirm password: <span class="tx-danger">*</span></label>
                        {!! Form::password('confirm-password', array('class' => 'form-control',)) !!}
                    </div>
                </div>

                <div class="row row-sm mg-b-20">
                    <div class="col-lg-6">
                        <label class="form-label">certificate</label>
                        <select name="certificate_id" id="select-beast" class="form-control  nice-select  custom-select">
                            @foreach($certificate as $one)
                                <option value="{{$one->id}}" @if($student->certificate_id==$one->id) selected @endif >{{$one->getTranslatedName()}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row row-sm mg-b-20">
                    <div class="col-lg-6">
                        <label class="form-label">status</label>
                        <select name="status" id="select-beast" class="form-control  nice-select  custom-select">
                            <option value="0" @if($student->status==0) selected @endif>Inactive</option>
                            <option value="1" @if($student->status==1) selected @endif>Active</option>
                        </select>
                    </div>
                </div>


                <div class="mg-t-30">
                    <button class="btn btn-main-primary pd-x-20" type="submit">update</button>
                </div>
                {!! Form::close() !!}
            </div>
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
@section('js')

<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection
