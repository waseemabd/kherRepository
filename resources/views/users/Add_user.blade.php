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
                        <h4 class="content-title mb-0 my-auto">{{trans('Users/user.Users')}}</h4><span
                            class="text-muted mt-1 tx-13 ms-2 mb-0"> / {{trans('Users/user.users menu')}}</span>
                    </div>
                </div>

            </div>

        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb p-0">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">{{trans('Users/user.Back')}}</a>
                    </div>
                </div><br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{route('user.store','test')}}" method="post">
                    {{csrf_field()}}

                    <div class="">

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-12 col-lg-6" id="fnWrapper">
                                <label>{{trans('Users/user.user name')}}: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper"  name="name" required="" type="text">
                            </div>

                            <div class="parsley-input col-md-12 col-lg-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>{{trans('Users/user.email')}}: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="email" required="" type="email">
                            </div>
                        </div>

                    </div>

                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-12 col-lg-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label>{{trans('Users/user.passowrd')}}: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="password" required="" type="password">
                        </div>

                        <div class="parsley-input col-md-12 col-lg-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label>{{trans('Users/user.confirm password')}} : <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="confirm-password" required="" type="password">
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-6 col-md-12">
                            <label class="form-label">{{trans('Users/user.status')}}</label>
                            <select name="Status" id="select-beast" class="form-control  nice-select  custom-select mg-b-30 select2">
                                <option value="1">{{trans('Users/user.Active')}}</option>
                                <option value="0">{{trans('Users/user.Inactive')}}</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-6 ">
                            <div class="form-group">
                                <label class="form-label ">{{trans('Users/user.user role')}}  <span class="tx-danger">*</span></label>
                                {!! Form::select('roles_name[]', $roles,[], array('class' => 'form-control select2','multiple', 'required' )) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-6 col-md-12">

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="is_teacher" required>
                                <label class="form-check-label" for="flexSwitchCheckChecked">{{trans('Users/user.teacher')}}  <span class="tx-danger">*</span></label>
                            </div>
                        </div>

                    </div>

                    <!-- <div class="row mg-b-20">

                    </div> -->





                    <div class="col-xs-12 col-sm-12 col-md-12 text-center ">
                        <button class="btn btn-main-primary pd-x-20 btn-right" type="submit">{{trans('Users/user.Add')}}</button>
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
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/form-elements.js')}}"></script>

    <!-- Internal Data tables -->
{{--    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets/plugins/datatable/datatables.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>--}}
{{--    <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>--}}
    <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script>
        $('.select2').select2();
    </script>
{{--    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>--}}

    <!--Internal  Datatable js -->
{{--    <script src="{{asset('assets/js/table-data.js')}}"></script>--}}

@endsection
