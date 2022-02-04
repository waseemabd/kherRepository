@extends('layouts.custom-app')

@section('styles')

@endsection

@section('class')

		<div class="">

@endsection

@section('content')

<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
            <div class="row wd-100p mr-center text-center">
                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mr-center wd-100p">
                    <img src="{{asset('assets/img/media/reset.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-50p ht-xl-60p mr-center" alt="logo">
                </div>
            </div>
        </div>
        <!-- The content half -->
        <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
            <div class="login d-flex align-items-center py-2">
                <!-- Demo content-->
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mr-center">
                            <div class="mb-5 d-flex">
                                <a href="{{url('index')}}"><img src="{{asset('assets/img/brand/favicon.png')}}" class="sign-favicon-a ht-40" alt="logo">
                                <img src="{{asset('assets/img/brand/favicon-white.png')}}" class="sign-favicon-b ht-40" alt="logo">
                                </a>
                                <h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Va<span>le</span>x</h1>
                            </div>
                            <div class="main-card-signin d-md-flex" id="m-card-signin">
                                <div class="wd-100p">
                                    <div class="main-signin-header">
                                        <div class="">
                                            <h2>Welcome back!</h2>
                                            <h4 class="text-start">Reset Your Password</h4>
                                            <form>
                                                <div class="form-group text-start">
                                                    <label>Email</label>
                                                    <input class="form-control" placeholder="Enter your email" type="text">
                                                </div>
                                                <div class="form-group text-start">
                                                    <label>New Password</label>
                                                    <input class="form-control" placeholder="Enter your password" type="password">
                                                </div>
                                                <div class="form-group text-start">
                                                    <label>Confirm Password</label>
                                                    <input class="form-control" placeholder="Enter your password" type="password">
                                                </div>
                                                <button class="btn ripple btn-main-primary btn-block">Reset Password</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="main-signup-footer mg-t-20">
                                        <p>Already have an account? <a href="{{url('signin')}}">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->
            </div>
        </div><!-- End -->
    </div>
</div>


@endsection('content')

@section('scripts')

		<!--- JQuery sparkline js --->
		<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

@endsection