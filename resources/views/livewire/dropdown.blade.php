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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Dropdowns</span>
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
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="basic">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">Wrap the dropdown’s toggle (your button or link) and the dropdown menu within .dropdown, or another element that declares position relative. Dropdowns can be triggered from link or button elements to better fit your potential needs.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-bs-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
											<div  class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code" data-bs-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
	data-bs-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown Menu <i class="fas fa-caret-down ms-1"></i></button>
	<div  class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="up">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropup</h6>
									<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropup class to the parent element.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown dropup">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-bs-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-up ms-1"></i></button>
											<div class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code2" data-bs-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown dropup">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary"
	data-bs-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-down ms-1"></i></button>
	<div class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown2"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="right">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropright & Dropleft</h6>
									<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropright & dropleft class to the parent element.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs custom-cls-res">
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<div class="dropdown dropstart">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle-left" data-bs-toggle="dropdown" id="dropstartMenuButton" type="button">Dropleft Menu<i class="fas fa-caret-left ms-1"></i></button>
													<div aria-labelledby="dropstartMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropend">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-bs-toggle="dropdown" id="dropendMenuButton" type="button"><i class="fas fa-caret-right ms-1"></i>Dropright Menu</button>
													<div aria-labelledby="dropendMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code3" data-bs-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs">
	<div class="col-sm-6 col-md-3">
		<div class="dropdown dropend">
			<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-bs-toggle="dropdown" id="dropendMenuButton" type="button"><i class="fas fa-caret-right ms-1"></i>Dropright Menu</button>
			<div aria-labelledby="dropendMenuButton" class="dropdown-menu tx-13">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<div class="dropdown dropstart">
			<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle-left" data-bs-toggle="dropdown" id="dropstartMenuButton" type="button">Dropleft Menu<i class="fas fa-caret-left ms-1"></i></button>
			<div aria-labelledby="dropstartMenuButton" class="dropdown-menu tx-13">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="active">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Active Menu Item</h6>
									<p class="text-muted card-sub-title">Add active class to items in the dropdown to style them as active.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
											<div class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item active" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code4" data-bs-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning"
		data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
	<div class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item active" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown4"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="disabled">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Disabled Menu Item</h6>
									<p class="text-muted card-sub-title">Add disabled class to items in the dropdown to style them as disabled.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
											<div class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item disabled" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code5" data-bs-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
	data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
	<div class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item disabled" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown5"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="header">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropdown Header</h6>
									<p class="text-muted card-sub-title">Add a header to label sections of actions in any dropdown menu.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
											<div class="dropdown-menu tx-13">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code6" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code6" data-bs-toggle="tab" href="#html-code6" role="tab" aria-controls="html-code6" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary"
	data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
	<div class="dropdown-menu tx-13">
		<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown6"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="divider">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropdown Divider</h6>
									<p class="text-muted card-sub-title">Separate groups of related menu items with a divider.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info btn-b" data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
											<div class="dropdown-menu tx-13">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
												<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code7" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code7" data-bs-toggle="tab" href="#html-code7" role="tab" aria-controls="html-code7" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown7"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
	data-bs-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ms-1"></i></button>
	<div class="dropdown-menu tx-13">
		<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
		<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown7"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

        <!--Internal  Clipboard js-->
        <script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

        <!-- Internal Prism js-->
        <script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection