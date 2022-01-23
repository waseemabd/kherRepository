@extends('layouts.app')

@section('styles')

		<!-- Internal Morris Css-->
		<link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Chartjs</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-info btn-icon btn-b" id="m-l-c-05"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-danger btn-icon" id="m-l-c-05"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-warning btn-icon" id="m-l-c-05"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartLine1"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartArea1"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartStacked1"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartStacked2"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-sm-12 col-md-6 col-xl-4">
										<div class="main-content-label tx-12 mg-b-15">
											Solid Color
										</div>
										<div class="ht-200 ht-lg-250">
											<canvas id="chartBar1"></canvas>
										</div>
									</div><!-- col-6 -->
									<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-md-t-0">
										<div class="main-content-label tx-12 mg-b-15">
											With Transparency
										</div>
										<div class="ht-200 ht-lg-250">
											<canvas id="chartBar2"></canvas>
										</div>
									</div><!-- col-6 -->
									<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-xl-t-0">
										<div class="main-content-label tx-12 mg-b-15">
											Using Gradient Color
										</div>
										<div class="ht-200 ht-lg-250">
											<canvas id="chartBar3"></canvas>
										</div>
									</div><!-- col-6 -->
								</div>
							</div><!-- col-12 -->
						</div><!-- col-12 -->
					</div><!-- col-12 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartBar4"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartBar5"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6">
						<div class="card mg-b-md-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartPie"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-sm-12 col-md-6">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Valex template.</p>
								<div class="chartjs-wrapper-demo">
									<canvas id="chartDonut"></canvas>
								</div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('assets/plugins/chartjs/Chart.bundle.min.js')}}"></script>

		<!-- Internal Chartjs js -->
		<script src="{{asset('assets/js/chart.chartjs.js')}}"></script>

@endsection
