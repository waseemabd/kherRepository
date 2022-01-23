@extends('layouts.app')

@section('styles')

        <!---Internal  Prism css-->
        <link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/ Tooltip</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-info btn-icon btn-b" id="m-l-c-05"><i
									class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-danger btn-icon" id="m-l-c-05"><i
									class="mdi mdi-star"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-warning btn-icon" id="m-l-c-05"><i
									class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
									id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate"
									x-placement="bottom-end">
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

				<!-- row opened -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<!-- div -->
						<div class="card mg-b-20" id="Tooltip">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Tooltip
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
								</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20" id="tooltip-demo">
									<div class="row row-sm">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip bs-tooltip-top" role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div
											class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0 d-flex justify-content-center align-items-center">
											<div class="tooltip bs-tooltip-bottom" role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div
											class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
											<div class="tooltip bs-tooltip-start" role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div
											class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
											<div class="tooltip bs-tooltip-end" role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button class="btn btn-secondary" data-bs-placement="top"
													data-bs-toggle="tooltip" title="Tooltip on the top">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button class="btn btn-secondary" data-bs-placement="bottom"
													data-bs-toggle="tooltip" title="Tooltip on the bottom">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-secondary" data-bs-placement="left"
													data-bs-toggle="tooltip" title="Tooltip on the left">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-secondary" data-bs-placement="right"
													data-bs-toggle="tooltip" title="Tooltip on the right">Hover me</button>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code"
												data-bs-toggle="tab" href="#html-code" role="tab"
												aria-controls="html-code" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>

									<figure class="highlight mb-0" id="element1">
										<pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on the top">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
			<button class="btn btn-secondary" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Tooltip on the bottom">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-bs-placement="left" data-bs-toggle="tooltip" title="Tooltip on the left">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-bs-placement="right" data-bs-toggle="tooltip" title="Tooltip on the right">Hover me</button>
		</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#element1"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- /div -->

						<!--div-->
						<div class="card mg-b-20" id="Tooltip2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Colored Tooltip
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.
								</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20" id="tooltip-demo">
									<div class="row row-sm me-0">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip tooltip-primary bs-tooltip-top position-relative"
												role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div
											class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0 d-flex justify-content-center align-items-center">
											<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div
											class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
											<div class="tooltip tooltip-primary bs-tooltip-start" role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div
											class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0 d-flex justify-content-center align-items-center">
											<div class="tooltip tooltip-primary bs-tooltip-end" role="tooltip">
												<div class="tooltip-arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="bg-gray-200 pd-20">
											<div class="row row-sm tx-center">
												<div class="col-sm-6 col-lg-3">
													<button class="btn btn-secondary" data-bs-placement="top"
														data-bs-toggle="tooltip-primary" title="Tooltip on the top"
														type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<button class="btn btn-secondary" data-bs-placement="bottom"
														data-bs-toggle="tooltip-primary" title="Tooltip on the bottom"
														type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn btn-secondary" data-bs-placement="left"
														data-bs-toggle="tooltip-primary" title="Tooltip on the left"
														type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn btn-secondary" data-bs-placement="right"
														data-bs-toggle="tooltip-primary" title="Tooltip on the right"
														type="button">Hover me</button>
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code2"
												data-bs-toggle="tab" href="#html-code2" role="tab"
												aria-controls="html-code2" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>

									<figure class="highlight mb-0" id="element2">
										<pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Tooltip on the top">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
			<button class="btn btn-secondary" data-bs-placement="bottom" data-bs-toggle="tooltip-primary" title="Tooltip on the bottom">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-bs-placement="left" data-bs-toggle="tooltip-primary" title="Tooltip on the left">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-bs-placement="right" data-bs-toggle="tooltip-primary" title="Tooltip on the right">Hover me</button>
		</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#element2"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--div-->
					</div>
					<!--/div-->
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts')

		<!-- Tooltip js -->
		<script src="{{asset('assets/js/tooltip.js')}}"></script>

        <!--Internal  Clipboard js-->
        <script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

        <!-- Internal Prism js-->
        <script src="{{asset('assets/plugins/prism/prism.js')}}"></script>
    
        <!--Internal  Datepicker js -->
		<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection