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
    <!---Internal  Owl Carousel css-->
    <link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

    <!--- Internal Timeline css-->
    <link href="{{asset('assets/plugins/timeline/css/timeline.min.css')}}" rel="stylesheet">
    <!--Internal  Font Awesome -->
    <link href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!--Internal  treeview -->
    <link href="{{asset('assets/plugins/treeview/treeview-rtl.css')}}" rel="stylesheet" type="text/css" />


@endsection

@section('content')

    @if (session()->has('delete'))
        <script>
            window.onload = function () {
                notif({
                    msg: "Attachment has Deleted Successfully",
                    type: "success"
                });
            }

        </script>
    @endif

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{route('students.index')}}" class="content-title mb-0 my-auto">Student</a><span
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
                                <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="active"> <span
                                        class="visible-xs"><i
                                            class="las la-user-circle tx-16 me-1"></i></span> <span
                                        class="hidden-xs">information</span> </a>
                            </li>
                            <li class="">
                                <a href="#courses" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">courses</span> </a>
                            </li>
                            <li class="">
                                <a href="#schedules" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-images tx-15 me-1"></i></span>
                                    <span class="hidden-xs">schedules</span> </a>
                            </li>
                            <li class="">
                                <a href="#homeworks" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">homeworks</span> </a>
                            </li>

                            <li class="">
                                <a href="#surveys" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">surveys</span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content border-start border-bottom border-right border-top-0 p-4">
                        <div class="tab-pane active" id="profile">
                            <form role="form">
                                <div class="form-group">
                                    <label for="FullName">Full Name</label>
                                    <input readonly type="text" value="{{$student->getTranslatedName()}}" id="FullName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input readonly  type="email" value="{{$student->email}}" id="Email"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Username">address</label>
                                    <input readonly type="text" value="{{$student->profile->address}}" id="Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Password">phone</label>
                                    <input readonly type="text" value="{{$student->profile->phone}}"  id="Password"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="RePassword">birthday</label>
                                    <input readonly  type="text" value="{{$student->profile->birthday}}" id="RePassword"
                                           class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="RePassword">certificate</label>
                                    <input readonly  type="text" value="{{$student -> certificate -> getTranslatedName()}}" id="RePassword"
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

                        <div class="tab-pane " id="courses">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-header pb-0">
                                            <h3 class="card-title">courses details</h3>

                                        </div>
                                        <div class="card-body">
                                            <div class="panel-group1" id="accordion11">
                                                @foreach($student->courses as $one)
                                                    <div class="panel panel-default  mb-4">
                                                        <div class="panel-heading1 bg-primary ">
                                                            <h4 class="panel-title1">
                                                                <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                                                   data-bs-parent="#accordion11" href="#collapse{{$one->id}}"
                                                                   aria-expanded="false">{{$one->title}}<i class="fe fe-arrow-left me-2"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse{{$one->id}}" class="panel-collapse collapse" role="tabpanel"
                                                             aria-expanded="false">
                                                            <div class="panel-body border">
                                                                <form role="form">


                                                                    <div class="form-group">
                                                                        <label for="FullName">description</label>
                                                                        <textarea readonly type="text"  id="FullName" class="form-control">{{ $one->desc }}</textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Email">Diploma title</label>
                                                                        <input readonly type="email" value="{{$one->diploma->title}}" id="Email"
                                                                               class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="FullName">Diploma description</label>
                                                                        <textarea readonly type="text"  id="FullName" class="form-control">{{ $one->diploma->desc }}</textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Email">course results</label>
                                                                        <div class="row">
                                                                            @foreach($one->tests as $index=>$test)

                                                                            <div class="col-lg-3 col-md-12">
                                                                                <label for="Email">test:{{$test->title}} result</label>
                                                                            <input readonly type="email" value="{{\App\Models\StudentTest::where('test_id',$test->id)->where('student_id',$student->id)->first()->total_mark}}" id="Email"
                                                                                   class="form-control">
                                                                            </div>

                                                                            @endforeach
                                                                        </div>

                                                                        <div class="row">
                                                                            @foreach($one->lectures as $index=>$lecture)
                                                                                <div class="col-lg-3 col-md-12">
                                                                                    <label for="Email">homework:{{$index+1}} result</label>
                                                                                    <input readonly type="email" value="{{\App\Models\StudentFile::where('homework_id',$lecture->homework->id)->where('student_id',$student->id)->first()->mark ??'غير مصححة بعد'}}" id="Email"
                                                                                           class="form-control">
                                                                                </div>

                                                                            @endforeach
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-12">
                                                                                <label for="Email">present result</label>
                                                                                <input readonly type="email" value="{{$one->diploma->title}}" id="Email"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-12">
                                                                                <label for="Email">result as value</label>
                                                                                <input readonly type="email" value="{{App\Helpers\General::studentResult($one,$student->id)}}" id="Email"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </div>
                                                                            <div class="row">
                                                                            <div class="col-lg-4 col-md-12">
                                                                                <label for="Email">result as text</label>
                                                                                <input readonly type="email" value="{{App\Helpers\General::resultStudentText($one,$student->id)}}" id="Email"
                                                                                       class="form-control">
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

                        <div class="tab-pane" id="schedules">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card custom-card">
                                        <div class="card-header custom-card-header">
                                            <h6 class="card-title mb-0">schedules Timeline</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="vtimeline">
                                              @if(isset($student->schedules))
                                                  @foreach($student->schedules as $one)
                                                <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
                                                    <div class="timeline-badge success"><img class="timeline-image" alt="img"
                                                                                             src="{{asset('assets/img/faces/3.jpg')}}"> </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">{{$one->lecture->title}}</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>{{$one->lecture->desc}}</p>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap">

                                                            <span ><i class="fe fe-calendar text-muted me-1"></i>{{$one->lecture->start_date}}</span>
                                                            start

                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>{{$one->lecture->end_date}}</span>
                                                            end
                                                        </div>
                                                    </div>
                                                </div>
                                                    @endforeach
                                                @endif

                                                  @if(isset($student->tests))
                                                      @foreach($student->tests as $one)
                                                          <div class="timeline-wrapper timeline-wrapper-warning">
                                                              <div class="timeline-badge ">
                                                                  <img class="timeline-image" alt="img"
                                                                  src="{{asset('assets/img/faces/3.jpg')}}">
                                                              </div>
                                                              <div class="timeline-panel">
                                                                  <div class="timeline-heading">
                                                                      <h6 class="timeline-title">{{$one->title}}</h6>
                                                                  </div>
                                                                  <div class="timeline-body">
                                                                      <p>{{$one->desc}}</p>
                                                                  </div>
                                                                  <div class="timeline-footer d-flex align-items-center flex-wrap">

                                                                      <span ><i class="fe fe-calendar text-muted me-1"></i>{{$one->date}}</span>
                                                                      start

                                                                      <span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>{{$one->duration}} minute</span>
                                                                      duration
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      @endforeach
                                                  @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>

                        <div class="tab-pane " id="homeworks">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-header pb-0">
                                            <h3 class="card-title">student homeworks</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="panel-group1" id="accordion11">
                                                @foreach($student->homeworks as $one)
                                                    <div class="panel panel-default  mb-4">
                                                        <div class="panel-heading1 bg-primary ">
                                                            <h4 class="panel-title1">
                                                                <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                                                   data-bs-parent="#accordion11" href="#collapse{{$one->id}}"
                                                                   aria-expanded="false">{{$one->title}}<i class="fe fe-arrow-left me-2"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse{{$one->id}}" class="panel-collapse collapse" role="tabpanel"
                                                             aria-expanded="false">
                                                            <div class="panel-body border">
                                                                <form role="form">
                                                                    <div class="form-group">
                                                                        <label for="FullName">description</label>
                                                                        <input readonly type="text" value="{{$one->desc}}" id="FullName" class="form-control">
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label for="AboutMe">File</label>

                                                                        <?php $i = 0; ?>
                                                                        <div class="table-responsive mt-15">
                                                                            <table class="table center-aligned-table mb-0 table table-hover"
                                                                                   style="text-align:center">
                                                                                <thead>
                                                                                <tr class="text-dark">
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">file name</th>
                                                                                    <th scope="col">created at</th>
                                                                                    <th scope="col">methods</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody id="list">
                                                                                <?php $i = 0; ?>
                                                                                @foreach($one->files as $attachment)
                                                                                    <?php $i++; ?>
                                                                                    <tr id="row-{{$attachment->id}}">
                                                                                        <td>{{ $i }}</td>
                                                                                        <td>{{ $attachment->name }}</td>
                                                                                        <td>{{ $attachment->created_at }}</td>
                                                                                        <td colspan="2">
                                                                                            <a class="btn btn-outline-success btn-sm"
                                                                                               href="{{ route('homework.View_file',['path'=>$attachment->path,'file_name'=>$attachment->name])  }}"
                                                                                               role="button"><i class="fas fa-eye"></i>&nbsp;
                                                                                            </a>

                                                                                            <a class="btn btn-outline-info btn-sm"
                                                                                               href="{{ route('homework.download',['path'=>$attachment->path,'file_name'=>$attachment->name])  }}"
                                                                                               role="button"><i
                                                                                                    class="fas fa-download"></i>&nbsp;
                                                                                            </a>
                                                                                            {{--   @can('حذف المرفق')  --}}
                                                                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                                                               data-id="{{ $attachment->id }}"
                                                                                               data-bs-toggle="modal" href="#delete-sub"
                                                                                               title="{{trans('general.Delete')}}"><i
                                                                                                    class="las la-trash"></i></a>
                                                                                            {{--   @endcan  --}}

                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                                </tbody>
                                                                            </table>

                                                                            <div class="modal" id="delete-sub">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content modal-content-demo">
                                                                                        <div class="modal-header">
                                                                                            <h6 class="modal-title">{{trans('general.Delete')}}</h6>
                                                                                            <button aria-label="Close" class="close"
                                                                                                    data-bs-dismiss="modal" type="button"><span
                                                                                                    aria-hidden="true">&times;</span></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="modal-body">
                                                                                                <p>{{trans('general.delete_warning')}} </p><br>

                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button class="btn ripple btn-danger" id="delete_btn"
                                                                                                        type="submit">{{trans('general.Delete')}}</button>
                                                                                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal"
                                                                                                        type="button">{{trans('general.Cancel')}}</button>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
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

                        <div class="tab-pane " id="surveys">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-header pb-0">
                                            <h3 class="card-title">surveys details</h3>

                                        </div>
                                        <div class="card-body">
                                            <div class="panel-group1" id="accordion11">
                                                @foreach($student->surveys as $one)
                                                    <div class="panel panel-default  mb-4">
                                                        <div class="panel-heading1 bg-primary ">
                                                            <h4 class="panel-title1">
                                                                <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                                                   data-bs-parent="#accordion11" href="#collapse{{$one->id}}"
                                                                   aria-expanded="false">{{$one->title}}<i class="fe fe-arrow-left me-2"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse{{$one->id}}" class="panel-collapse collapse" role="tabpanel"
                                                             aria-expanded="false">
                                                            <div class="panel-body border">
                                                                <form role="form">


                                                                    <div class="form-group">
                                                                        <label for="FullName">description</label>
                                                                        <textarea readonly type="text"  id="FullName" class="form-control">{{ $one->desc }}</textarea>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="card mg-b-20">
                                                                                <div class="card-body">
                                                                                    <div class="main-content-label mg-b-5">
                                                                                       questions
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <!-- col -->
                                                                                        <div class="col-lg-4">
                                                                                            <ul id="treeview{{$one->id}}">
                                                                                                @if(isset($one->survey_questions))
                                                                                                    @foreach($one->survey_questions as $question)
                                                                                                <li><a href="#">{{$question->desc}}</a>
                                                                                                    <ul>
                                                                                                        @foreach($question->SurveyAnswers as $answer)
                                                                                                            @if($answer->student_id===$student->id)
                                                                                                        <li>
                                                                                                            @if(isset($answer->desc))
                                                                                                            {{     $answer->desc}}
                                                                                                            @elseif($answer->bool)
                                                                                                                {{     $answer->bool===1 ? 'true' :'false'}}
                                                                                                            @else
                                                                                                                {{
                                                                                                                   App\Models\Option::where('id', $answer->options)->first()->desc

                                                                                                                    }}
                                                                                                                @endif
                                                                                                        </li>
                                                                                                            @endif
                                                                                                        @endforeach
                                                                                                    </ul>
                                                                                                </li>
                                                                                                    @endforeach
                                                                                                @endisset
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
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




    <script src="{{asset('assets/js/admin-pages/homework/delete_file.js')}}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal  Perfect-scrollbar js -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

    <!-- Internal Treeview js -->
    <script src="{{asset('assets/plugins/treeview/treeview.js')}}"></script>

@endsection

