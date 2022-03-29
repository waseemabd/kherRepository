@extends('layouts.app')

@section('styles')

    <!-- Interenal Accordion Css -->


    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css-rtl/editors/quill/quill.snow.css')}}">

    <!---Internal Fileupload css-->
    <link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('settings/settings.Settings')}}</h4>
                <span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('settings/settings.list')}}
                </span>

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
                                <a href="#about" data-bs-toggle="tab" aria-expanded="true" class="active"> <span
                                        class="visible-xs"><i
                                            class="las la-user-circle tx-16 me-1"></i></span> <span
                                        class="hidden-xs">{{trans('settings/settings.about')}}</span> </a>
                            </li>
                            <li class="">
                                <a href="#contact" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="fas fa-address-card tx-15 me-1"></i></span>
                                    <span class="hidden-xs">{{trans('settings/settings.contact')}}</span> </a>
                            </li>

                            <li class="">
                                <a href="#images" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="fas fa-photo-video tx-15 me-1"></i></span>
                                    <span class="hidden-xs">{{trans('settings/settings.site_images')}}</span> </a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content border-start border-bottom border-right border-top-0 p-4">

                        <div class="tab-pane active" id="about">
                            <div class="row row-sm">
                                <div class="col-xl-12">
                                    <div class="card">

                                        <div class="card-header pb-0">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mg-b-0">{{trans('settings/settings.about_info')}}</h4>
                                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('settings.about.update')}}" method="POST"
                                                  id="about_form" enctype="multipart/form-data" data-parsley-validate="">
                                                @csrf

                                                <div class="row row-sm mt-2">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label
                                                                class="form-label">{{trans('settings/settings.about_us')}} </label>
                                                            <input class="form-control" type="hidden" name="about_desc" id="about_desc">
                                                            <div id="blog-editor-wrapper">
                                                                <div id="blog-editor-container">
                                                                    <div class="editor" style="min-height: 200px">
                                                                        {!! $settings->about_desc !!}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row row-sm mt-2">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label
                                                                class="form-label">{{trans('settings/settings.goals')}} </label>
                                                            <input class="form-control" type="hidden" name="goals" id="goals">
                                                            <div id="blog-editor-wrapper">
                                                                <div id="blog-editor-container-goals">
                                                                    <div class="editor-goals" style="min-height: 200px">
                                                                        {!! $settings->goals !!}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row row-sm">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label">{{trans('settings/settings.address')}}: </label>
                                                            <input class="form-control" name="address" placeholder="{{trans('settings/settings.plc_address')}}" value="{{$settings->address}}" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-sm mt-2">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div>
                                                                    <h6 class="card-title mb-1">{{trans('settings/settings.logo')}}</h6>
                                                                    <p class="text-muted card-sub-title">{{trans('settings/settings.logo_res')}}</p>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12 col-md-4">
                                                                        <input type="file" class="dropify"
                                                                               data-default-file="{{URL::asset($settings->logo)}}"
                                                                               data-height="200" name="logo"
                                                                               accept=".jpg, .png, image/jpeg, image/png"/>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">{{trans('general.Update')}}</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="contact">


                            <div class="row row-sm">
                                <div class="col-xl-12">
                                    <div class="card">

                                        <div class="card-header pb-0">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mg-b-0">{{trans('settings/settings.contact_info')}}</h4>
                                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('settings.contact.update')}}" method="POST"
                                                  id="contact_form" class="" enctype="multipart/form-data" data-parsley-validate="">
                                                @csrf




                                                <div class="row row-sm">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label">{{trans('settings/settings.whats_phone')}}:  </label>
                                                            <input class="form-control" name="whats_phone" value="{{$contacts->whats_phone}}" placeholder="+96xxxxxxxxx" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-sm mt-2 repeater" id="mobile_div">
                                                    <div data-repeater-list="mobiles">
                                                        <?php $m_phones = json_decode($contacts->mobile_phones); ?>
                                                        @foreach($m_phones as $phone)
                                                            <div data-repeater-item>
                                                                <div class="row d-flex align-items-end">
                                                                    <div class="col-md-4 col-12">
                                                                        <div class="mb-1">
                                                                            <label class="form-label" for="itemname">{{trans('settings/settings.mobile_phone')}}</label>
                                                                            <input
                                                                                type="text"
                                                                                class="form-control"
                                                                                name="mobile_phone"
                                                                                id="itemname"
                                                                                aria-describedby="itemname"
                                                                                value="{{$phone}}"
                                                                                placeholder="+9xxxxxxxxxx"
                                                                            />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-2 col-12 mb-50">
                                                                        <div class="mb-1">
                                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                                    data-repeater-delete type="button">
                                                                                <i data-feather="x" class="me-25"></i>
                                                                                <span>{{trans('general.Delete')}}</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>

                                                        @endforeach

                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-md-4 col-12">
                                                                    <div class="mb-1">
                                                                        <label class="form-label" for="itemname">{{trans('settings/settings.mobile_phone')}}</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            name="mobile_phone"
                                                                            id="itemname"
                                                                            aria-describedby="itemname"
                                                                            placeholder="+9xxxxxxxxxx"
                                                                        />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 col-12 mb-50">
                                                                    <div class="mb-1">
                                                                        <button class="btn btn-outline-danger text-nowrap px-1"
                                                                                data-repeater-delete type="button">
                                                                            <i data-feather="x" class="me-25"></i>
                                                                            <span>{{trans('general.Delete')}}</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button class="btn btn-primary" type="button" data-repeater-create>
                                                                <i data-feather="plus" class="me-25"></i>
                                                                <span>{{trans('settings/settings.add_new_m_phone')}}</span>
                                                            </button>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row row-sm mt-2 repeater" id="land_div">
{{--                                                    <form class="mobile-repeater">--}}

                                                        <div data-repeater-list="lands" class="repeater-default-land">
                                                            <?php $l_phones = json_decode($contacts->land_phones); ?>
                                                            @foreach($l_phones as $phone)
                                                                <div data-repeater-item>
                                                                    <div class="row d-flex align-items-end">
                                                                        <div class="col-md-4 col-12">
                                                                            <div class="mb-1">
                                                                                <label class="form-label" for="itemname">{{trans('settings/settings.land_phone')}}</label>
                                                                                <input
                                                                                    type="text"
                                                                                    class="form-control"
                                                                                    name="land_phone"
                                                                                    id="itemname"
                                                                                    aria-describedby="itemname"
                                                                                    value="{{$phone}}"
                                                                                    placeholder="+xxxxxxxxxx"
                                                                                />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-2 col-12 mb-50">
                                                                            <div class="mb-1">
                                                                                <button class="btn btn-outline-danger text-nowrap px-1"
                                                                                        data-repeater-delete type="button">
                                                                                    <i data-feather="x" class="me-25"></i>
                                                                                    <span>{{trans('general.Delete')}}</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                </div>

                                                            @endforeach

                                                            <div data-repeater-item>
                                                                <div class="row d-flex align-items-end">
                                                                    <div class="col-md-4 col-12">
                                                                        <div class="mb-1">
                                                                            <label class="form-label" for="itemname">{{trans('settings/settings.land_phone')}}</label>
                                                                            <input
                                                                                type="text"
                                                                                class="form-control"
                                                                                name="land_phone"
                                                                                id="itemname"
                                                                                aria-describedby="itemname"
                                                                                placeholder="+xxxxxxxxxx"
                                                                            />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-2 col-12 mb-50">
                                                                        <div class="mb-1">
                                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                                    data-repeater-delete type="button">
                                                                                <i data-feather="x" class="me-25"></i>
                                                                                <span>{{trans('general.Delete')}}</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button class="btn btn-primary" type="button" data-repeater-create>
                                                                    <i data-feather="plus" class="me-25"></i>
                                                                    <span>{{trans('settings/settings.add_new_l_phone')}}</span>
                                                                </button>
                                                            </div>
                                                        </div>
{{--                                                    </form>--}}



                                                </div>


                                                <div class="row row-sm mt-4">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label">{{trans('settings/settings.whats_link')}}:  </label>
                                                            <input class="form-control" name="whats_link" value="{{$contacts->whats_link}}" placeholder="www.whatsup.com" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-sm mt-2">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label">{{trans('settings/settings.face_link')}}:  </label>
                                                            <input class="form-control" name="facebook_link" value="{{$contacts->facebook_link}}" placeholder="www.facebook.com" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-sm mt-2">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label">{{trans('settings/settings.insta_link')}}:  </label>
                                                            <input class="form-control" name="insta_link" value="{{$contacts->insta_link}}" placeholder="www.instagram.com" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-sm mt-2">
                                                    <div class="col-12">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label">{{trans('settings/settings.twitter_link')}}:  </label>
                                                            <input class="form-control" name="twitter_link" value="{{$contacts->twitter_link}}" placeholder="www.twitter.com" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">{{trans('general.Update')}}</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="tab-pane" id="images">
                            <div class="row row-sm">
                                <div class="col-xl-12">
                                    <div class="card">

                                        <div class="card-header pb-0">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mg-b-0">{{trans('settings/settings.site_images')}}</h4>
                                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('settings.images.update')}}" method="POST"
                                                  id="images_form" enctype="multipart/form-data" data-parsley-validate="">
                                                @csrf

                                                <div class="row row-sm mt-2">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div>
                                                                    <h6 class="card-title mb-1">{{trans('settings/settings.image1')}}</h6>
                                                                    <p class="text-muted card-sub-title">{{trans('settings/settings.logo_image1')}}</p>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12 col-md-4">
                                                                        <input type="file" class="dropify"
                                                                               data-default-file="{{URL::asset($settings->logo)}}"
                                                                               data-height="200" name="image1"
                                                                               accept=".jpg, .png, image/jpeg, image/png"/>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-sm mt-2">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div>
                                                                    <h6 class="card-title mb-1">{{trans('settings/settings.image2')}}</h6>
                                                                    <p class="text-muted card-sub-title">{{trans('settings/settings.logo_res')}}</p>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12 col-md-4">
                                                                        <input type="file" class="dropify"
                                                                               data-default-file="{{URL::asset($settings->logo)}}"
                                                                               data-height="200" name="image2"
                                                                               accept=".jpg, .png, image/jpeg, image/png"/>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row row-sm mt-2">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div>
                                                                    <h6 class="card-title mb-1">{{trans('settings/settings.image3')}}</h6>
                                                                    <p class="text-muted card-sub-title">{{trans('settings/settings.logo_res')}}</p>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12 col-md-4">
                                                                        <input type="file" class="dropify"
                                                                               data-default-file="{{URL::asset($settings->logo)}}"
                                                                               data-height="200" name="image3"
                                                                               accept=".jpg, .png, image/jpeg, image/png"/>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-sm mt-2">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div>
                                                                    <h6 class="card-title mb-1">{{trans('settings/settings.image4')}}</h6>
                                                                    <p class="text-muted card-sub-title">{{trans('settings/settings.logo_res')}}</p>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12 col-md-4">
                                                                        <input type="file" class="dropify"
                                                                               data-default-file="{{URL::asset($settings->logo)}}"
                                                                               data-height="200" name="image4"
                                                                               accept=".jpg, .png, image/jpeg, image/png"/>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">{{trans('general.Update')}}</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('assets/js/editors/quill/katex.min.js')}}"></script>
    <script src="{{asset('assets/js/editors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('assets/js/editors/quill/quill.min.js')}}"></script>

    <!--Internal  Parsley.min js -->
    <script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

    <!-- Internal Form-validation js -->
    {{--    <script src="{{asset('assets/js/form-validation.js')}}"></script>--}}
    <!--Internal Fileuploads js-->
    <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>



    <script src="{{asset('assets/js/repeater/jquery.repeater.min.js') }}"></script>

    {{--    <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>--}}


    <script src="{{asset('assets/js/form-elements.js')}}"></script>

    <script src="{{asset('assets/js/admin-pages/settings/settings.js')}}"></script>

@endsection

