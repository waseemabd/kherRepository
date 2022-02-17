@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Advanced ui</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ Blog</span>
            </div>
        </div>

    </div>

{{--    @foreach($blogs as $one)--}}
    <div class="row">
        <div class="col-xl-4 col-md-2">

        </div>
        <div class="col-xl-4 col-md-8">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="todo-widget-header d-flex pb-2 pd-20">
                        <div class="drop-down-profile" data-bs-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="{{asset('assets/img/faces/1.jpg')}}"><span
                                class="assigned-task bg-purple"></span></div>
                        <div class="dropdown-menu tx-13">
                            <div class="main-header-profile">
                                <div class="tx-16 h5 mg-b-0">Petey Cruiser</div>
                                <span>Web Designer</span>
                            </div>
                            <a class="dropdown-item" href="#">Settings</a>
                        </div>
                        <div class="ms-auto">
                            <div class="">

                                <a class="p-2 text-muted" data-bs-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu tx-13 dropleft">
                                    <a class="dropdown-item" href="#">Mark As Unread</a>
                                    <a class="dropdown-item" href="#">Mark As Important</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <span class="tx-12 text-muted">10.54am</span><span
                            class="badge bg-primary-transparent text-primary ms-auto float-end"></span>

                    </div>
                    <hr>
                    <h4 class="card-title">Blog Title</h4>
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
                    <a class="" href="{{url('search')}}">Read More<i class="fe fe-arrow-left me-1"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-2">

        </div>

    </div>
    
{{--    @endforeach--}}


@endsection('content')

@section('scripts')

    <!-- Internal Select2 js-->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection
