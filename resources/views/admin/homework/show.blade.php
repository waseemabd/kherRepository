@extends('layouts.app')

@section('styles')

    <!-- Interenal Accordion Css -->
    <link href="{{asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />
    <!--- Internal Select2 css-->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <!---Internal Fileupload css-->
    <link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

    <!---Internal Fancy uploader css-->
    <link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">

    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">


@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Homework</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ Show</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">

        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="">
                                <a href="#home" data-bs-toggle="tab" aria-expanded="true" class="active"> <span
                                        class="visible-xs"><i
                                            class="las la-user-circle tx-16 me-1"></i></span> <span
                                        class="hidden-xs">Homework</span> </a>
                            </li>
                            <li class="">
                                <a href="#profile" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-images tx-15 me-1"></i></span>
                                    <span class="hidden-xs">lecture</span> </a>
                            </li>
                            <li class="">
                                <a href="#settings" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">teacher</span> </a>
                            </li>

                            <li class="">
                                <a href="#students" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">students</span> </a>
                            </li>

                            <li class="">
                                <a href="#files" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">files</span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content border-start border-bottom border-right border-top-0 p-4">
                        <div class="tab-pane active" id="home">
                            <h4 class="tx-15 text-uppercase mb-3">title</h4>
                            <p class="m-b-5">{{$homework->title}}</p>
                            <div class="m-t-30">
                                <h4 class="tx-15 text-uppercase mt-3">Description</h4>
                                <div class=" p-t-10">
                                    <p class="text-muted tx-13 m-b-0">{!! $homework->desc !!}</p>
                                </div>
                                <hr>

                            </div>
                        </div>
                        <div class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">title</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->title}}</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">link</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->link}}</small></p>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">end_date</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->end_date}}</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">start_date</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->start_date}}</small></p>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">description</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->desc}}</small></p>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">course title</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->course->title}}</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">course description</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->course->desc}}</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">diploma title</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->course->diploma->title}}</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="border p-1 card thumb">

                                        <h4 class="text-center tx-14 mt-3 mb-0">diploma description</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{$homework->lecture->course->diploma->desc}}</small></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="settings">
                            <form role="form">
                                <div class="form-group">
                                    <label for="FullName">Full Name</label>
                                    <input readonly type="text" value="{{$teacher->name}}" id="FullName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input readonly  type="email" value="{{$teacher->email}}" id="Email"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Username">address</label>
                                    <input readonly type="text" value="{{$teacher->profile->address}}" id="Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Password">phone</label>
                                    <input readonly type="text" value="{{$teacher->profile->phone}}"  id="Password"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="RePassword">birthday</label>
                                    <input readonly  type="text" value="{{$teacher->profile->birthday}}" id="RePassword"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="AboutMe">Profile Image</label>
                                    <div class="col-sm-4">
                                        <div class=" border p-1 card thumb">
                                            <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                    src="{{asset('assets/img/photos/9.jpg')}}" class="thumb-img"
                                                    alt="work-thumbnail"> </a>
                                            <h4 class="text-center tx-14 mt-3 mb-0">Profile Image</h4>
                                            <div class="ga-border"></div>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="tab-pane " id="students">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-header pb-0">
                                            <h3 class="card-title">students details</h3>

                                        </div>
                                        <div class="card-body">
                                            <div class="panel-group1" id="accordion11">
                                                @foreach($students as $student)
                                                <div class="panel panel-default  mb-4">
                                                    <div class="panel-heading1 bg-primary ">
                                                        <h4 class="panel-title1">
                                                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                                               data-bs-parent="#accordion11" href="#collapse{{$student->id}}"
                                                               aria-expanded="false">{{$student->getTranslatedName()}}<i class="fe fe-arrow-left me-2"></i></a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse{{$student->id}}" class="panel-collapse collapse" role="tabpanel"
                                                         aria-expanded="false">
                                                        <div class="panel-body border">
                                                            <form role="form">
                                                                <div class="form-group">
                                                                    <label for="FullName">Full Name</label>
                                                                    <input readonly type="text" value="{{$student->getTranslatedName()}}" id="FullName" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Email">Email</label>
                                                                    <input readonly type="email" value="{{$student->email}}" id="Email"
                                                                           class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Username">Address</label>
                                                                    <input readonly type="text" value="{{$student->profile->address}}" id="Username" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Password">Phone</label>
                                                                    <input readonly type="text" value="{{$student->profile->phone}}"  id="Password"
                                                                           class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="RePassword">Birthday</label>
                                                                    <input readonly type="text" value="{{$student->profile->birthday}}" id="RePassword"
                                                                           class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="AboutMe">Profile Image</label>
                                                                    <div class="col-sm-4">
                                                                        <div class=" border p-1 card thumb">
                                                                            <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                                                    src="{{asset('assets/img/photos/9.jpg')}}" class="thumb-img"
                                                                                    alt="work-thumbnail"> </a>
                                                                            <h4 class="text-center tx-14 mt-3 mb-0">Profile Image</h4>
                                                                            <div class="ga-border"></div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </form>






                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="files">
                            <div class="card-body">
                                <p class="text-danger">* صيغة المرفق pdf, jpeg ,.jpg , png </p>
                                <h5 class="card-title">اضافة مرفقات</h5>
                                <form method="post" action="{{ url('admin/homework/Attachments') }}"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="card">
                                        <div class="card-body">
                                            <div>
{{--                                                <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png,,pdf, html, zip, css,js" multiple>--}}
                                                <input type="file" name="file" class="dropify" data-height="200" /></div>
                                        </div>
                                    </div>


                                    <br><br>
                                    <button type="submit" class="btn btn-primary btn-sm "
                                            name="uploadedFile">تاكيد</button>
                                </form>

                            </div>
                        </div>
                            <!-- row -->








                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

@endsection('content')

@section('scripts')


    <!--Internal  Datepicker js -->
    <script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- Internal Select2 js-->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!--Internal Fileuploads js-->
    <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

    <!--Internal Fancy uploader js-->
    <script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

    <!--Internal  Form-elements js-->
    <script src="{{asset('assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>

    <!--Internal Sumoselect js-->
    <script src="{{asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

    <!-- Internal TelephoneInput js-->
    <script src="{{asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
    <script src="{{asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>





@endsection

