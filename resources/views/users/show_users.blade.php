


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

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Users</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ Users Menu</span>
            </div>
        </div>

    </div>


    @if (session()->has('edit'))
        <script>
            window.onload = function() {
                notif({
                    msg: " User information has updated successfully",
                    type: "success"
                });
            }

        </script>
    @endif

    @if (session()->has('delete'))
        <script>
            window.onload = function() {
                notif({
                    msg: "User has Deleted Successfully",
                    type: "success"
                });
            }

        </script>
    @endif

    @if (session()->has('success'))
        <script>
            window.onload = function() {
                notif({
                    msg: "User has Added Successfully",
                    type: "success"
                });
            }

        </script>
    @endif




    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-primary btn-sm" href="{{ route('user.create') }}">Add User</a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">name</th>
                                <th class="wd-20p border-bottom-0">email</th>
                                <th class="wd-15p border-bottom-0">status</th>
                                <th class="wd-15p border-bottom-0">user role</th>
                                <th class="wd-10p border-bottom-0">methods</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->status == 1)
                                            <span class="label text-success d-flex">
                                                <div class="dot-label bg-success ml-1"></div>Active
                                            </span>
                                        @else
                                            <span class="label text-danger d-flex">
                                                <div class="dot-label bg-danger ml-1"></div>Inactive
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>

                                    <td>


                                        <a class="btn btn-primary btn-sm"
                                           href="{{ route('user.edit', $user->id) }}"><i
                                                class="las la-edit"></i></a>

                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                           data-user_id="{{ $user->id }}" data-username="{{ $user->name }}"
                                           data-bs-toggle="modal" href="#modaldemo1" title="delete"><i
                                                class="las la-trash"></i></a>

                                        <div class="modal" id="modaldemo1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Delete User</h6><button aria-label="Close" class="close"
                                                                                                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('user.destroy',$user->id) }}" method="post">
                                                            {{ method_field('post') }}
                                                            @csrf
                                                            <div class="modal-body">
                                                                <p>? Do Yoy Want to Delete This User </p><br>

                                                                <input class="form-control" name="rolename" value="{{$user->name}}" id="rolename" type="text" readonly>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn ripple btn-primary" type="submit">Delete</button>
                                                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                                            </div>


                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    @endsection('content')

    @section('scripts')

        <!-- Internal Data tables -->
            <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/datatables.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
            <script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
            <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>

            <!--Internal  Datatable js -->
            <script src="{{asset('assets/js/table-data.js')}}"></script>

@endsection

