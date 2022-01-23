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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Listgroup</span>
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
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Example
								</div>
								<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<div class="listgroup-example ">
											<ul class="list-group">
												<li>Dapibus ac facilisis in</li>
												<li>Morbi leo risus</li>
												<li>Cras justo odio
													<ul class="list-style-disc l-c-r">
														<li>Lorem </li>
														<li>established</li>
														<li>Contrary</li>
													</ul>
												</li>
												<li>Porta ac consectetur ac</li>
												<li>Vestibulum at eros</li>
											</ul>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code" data-bs-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="listgroup-example ">
	<ul class="list-group">
		<li>Dapibus ac facilisis in</li>
		<li>Morbi leo risus</li>
		<li>Cras justo odio
			<ul class="list-style-disc">
				<li>Lorem </li>
				<li>established</li>
				<li>Contrary</li>
			</ul>
		</li>
		<li>Porta ac consectetur ac</li>
		<li>Vestibulum at eros</li>
	</ul>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list01"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Active Item
								</div>
								<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<div class="listgroup-example2">
											<ul class="list-group">
												<li>Dapibus ac facilisis in</li>
												<li>Morbi leo risus</li>
												<li>Cras justo odio
													<ul class="list-style-disc l-c-r">
														<li>Lorem </li>
														<li>established</li>
														<li>Contrary</li>
													</ul>
												</li>
												<li>Porta ac consectetur ac</li>
												<li>Vestibulum at eros</li>
											</ul>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code2" data-bs-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="listgroup-example2">
	<ul class="list-group">
		<li>Dapibus ac facilisis in</li>
		<li>Morbi leo risus</li>
		<li>Cras justo odio
			<ul class="list-style-disc">
				<li>Lorem </li>
				<li>established</li>
				<li>Contrary</li>
			</ul>
		</li>
		<li>Porta ac consectetur ac</li>
		<li>Vestibulum at eros</li>
	</ul>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list02"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-xl-6 col-md-12">
						<div class="card mg-b-20" id="list1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Custom content
								</div>
								<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<div class="list-group">
											<a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
											<div class="d-flex w-100 justify-content-between">
												<h5 class="mb-2 tx-14">List group item heading</h5><small>3 ago days</small>
											</div>
											<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small></a> <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
											<div class="d-flex w-100 justify-content-between">
												<h5 class="mb-2 tx-14">List group item heading</h5><small class="text-muted">3 ago days</small>
											</div>
											<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small></a> <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
											<div class="d-flex w-100 justify-content-between">
												<h5 class="mb-2 tx-14">List group item heading</h5><small class="text-muted">3 ago days</small>
											</div>
											<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small></a>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code2" data-bs-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list05"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="listgroup-example2">
	<ul class="list-group">
		<li>Dapibus ac facilisis in</li>
		<li>Morbi leo risus</li>
		<li>Cras justo odio
			<ul class="list-style-disc">
				<li>Lorem </li>
				<li>established</li>
				<li>Contrary</li>
			</ul>
		</li>
		<li>Porta ac consectetur ac</li>
		<li>Vestibulum at eros</li>
	</ul>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list05"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-xl-6 col-md-12">
						<div class="card mg-b-20" id="list1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Custom content with image
								</div>
								<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<div class="list-group">
											<a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
												<span class="d-flex">
													<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/3.jpg')}}">
													<div class="">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-2 tx-14">List group item heading</h5><small>3 ago days</small>
														</div>
														<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small>
													</div>
												</span>
											</a>
											<a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
												<span class="d-flex">
													<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/8.jpg')}}">
													<div class="">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-2 tx-14">List group item heading</h5><small>3 ago days</small>
														</div>
														<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small>
													</div>
												</span>
											</a>
											<a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
												<span class="d-flex">
													<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/11.jpg')}}">
													<div class="">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-2 tx-14">List group item heading</h5><small>3 ago days</small>
														</div>
														<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small>
													</div>
												</span>
											</a>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code2" data-bs-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="listgroup-example2">
	<ul class="list-group">
		<li>Dapibus ac facilisis in</li>
		<li>Morbi leo risus</li>
		<li>Cras justo odio
			<ul class="list-style-disc">
				<li>Lorem </li>
				<li>established</li>
				<li>Contrary</li>
			</ul>
		</li>
		<li>Porta ac consectetur ac</li>
		<li>Vestibulum at eros</li>
	</ul>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list03"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-xl-6 col-md-12">
						<div class="card mg-b-20" id="list3">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									USER LIST
								</div>
								<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<div class="list-group">
											<div class="list-group-item pd-y-20">
												<div class="media">
													<div class="d-flex mg-r-10 wd-50">
														<img class="custom-mr-lc rounded-circle avatar-md" src="{{asset('assets/img/faces/17.jpg')}}" alt="avatar">
													</div>
													<div class="media-body">
														<div class="media-body d-flex">
															<h6 class="tx-15 mb-2">Blake Vanessa</h6>
															<span class="tx-12 float-end ms-auto text-muted">4 ago hours</span>
														</div>
														<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
													</div>
												</div>
											</div>
											<div class="list-group-item pd-y-20">
												<div class="media">
													<div class="d-flex mg-r-10 wd-50">
														<img class="custom-mr-lc rounded-circle avatar-md" src="{{asset('assets/img/faces/5.jpg')}}" alt="avatar">
													</div>
													<div class="media-body">
														<div class="media-body d-flex">
															<h6 class="tx-15 mb-2">Elizabeth Parsons</h6>
															<span class="tx-12 float-end ms-auto text-muted">8 ago hours</span>
														</div>
														<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
													</div>
												</div>
											</div>
											<div class="list-group-item pd-y-20">
												<div class="media">
													<div class="d-flex mg-r-10 wd-50">
														<img class="custom-mr-lc rounded-circle avatar-md" src="{{asset('assets/img/faces/12.jpg')}}" alt="avatar">
													</div>
													<div class="media-body">
														<div class="media-body d-flex">
															<h6 class="tx-15 mb-2">Nicola Lambert</h6>
															<span class="tx-12 float-end text-muted ms-auto">12 ago hours</span>
														</div>
														<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
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
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="list-group">
	<div class="list-group-item pd-y-20">
		<div class="media">
			<div class="d-flex mg-r-10 wd-50">
				<img class="custom-mr-lc rounded-circle avatar-md" src="{{asset('assets/img/faces/17.jpg')}}" alt="avatar">
			</div>
			<div class="media-body">
				<div class="media-body d-flex">
					<h6 class="tx-15 mb-2">Blake Vanessa</h6>
					<span class="tx-12 float-end ms-auto text-muted">4 ago hours</span>
				</div>
				<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
			</div>
		</div>
	</div>
	<div class="list-group-item pd-y-20">
		<div class="media">
			<div class="d-flex mg-r-10 wd-50">
				<img class="custom-mr-lc rounded-circle avatar-md" src="{{asset('assets/img/faces/5.jpg')}}" alt="avatar">
			</div>
			<div class="media-body">
				<div class="media-body d-flex">
					<h6 class="tx-15 mb-2">Elizabeth Parsons</h6>
					<span class="tx-12 float-end ms-auto text-muted">8 ago hours</span>
				</div>
				<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
			</div>
		</div>
	</div>
	<div class="list-group-item pd-y-20">
		<div class="media">
			<div class="d-flex mg-r-10 wd-50">
				<img class="custom-mr-lc rounded-circle avatar-md" src="{{asset('assets/img/faces/12.jpg')}}" alt="avatar">
			</div>
			<div class="media-body">
				<div class="media-body d-flex">
					<h6 class="tx-15 mb-2">Nicola Lambert</h6>
					<span class="tx-12 float-end text-muted ms-auto">12 ago hours</span>
				</div>
				<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
			</div>
		</div>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list04"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-xl-6 col-md-12">
						<div class="card mg-b-20" id="list8">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Using Image
								</div>
								<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group wd-md-100p users-list-group">
											<li class="list-group-item d-flex align-items-center">
												<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/5.jpg')}}">
												<div>
													<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-13 text-muted">Premium Member</span>
												</div>
												<div class="d-flex float-start ms-auto">
													<a href="#" class="btn btn-outline-light btn-icon me-2">
														<div class=""><i class="bx bx-plus"></i></div>
													</a>
													<a href="#" class="btn btn-outline-light btn-icon">
														<div class=""><i class="bx bx-minus"></i></div>
													</a>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/6.jpg')}}">
												<div>
													<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-13 text-muted">Premium Member</span>
												</div>
												<div class="d-flex float-start ms-auto">
													<a href="#" class="btn btn-outline-light btn-icon me-2">
														<div class=""><i class="bx bx-plus"></i></div>
													</a>
													<a href="#" class="btn btn-outline-light btn-icon">
														<div class=""><i class="bx bx-minus"></i></div>
													</a>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/15.jpg')}}">
												<div>
													<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-13 text-muted">Premium Member</span>
												</div>
												<div class="d-flex float-start ms-auto">
													<a href="#" class="btn btn-outline-light btn-icon me-2">
														<div class=""><i class="bx bx-plus"></i></div>
													</a>
													<a href="#" class="btn btn-outline-light btn-icon">
														<div class=""><i class="bx bx-minus"></i></div>
													</a>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/12.jpg')}}">
												<div>
													<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-13 text-muted">Premium Member</span>
												</div>
												<div class="d-flex float-start ms-auto">
													<a href="#" class="btn btn-outline-light btn-icon me-2">
														<div class=""><i class="bx bx-plus"></i></div>
													</a>
													<a href="#" class="btn btn-outline-light btn-icon">
														<div class=""><i class="bx bx-minus"></i></div>
													</a>
												</div>
											</li>
										</ul>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code8" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code8" data-bs-toggle="tab" href="#html-code8" role="tab" aria-controls="html-code8" aria-selected="true"><i class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list08"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group wd-md-100p users-list-group">
	<li class="list-group-item d-flex align-items-center">
		<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/5.jpg')}}">
		<div>
			<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-13 text-muted">Premium Member</span>
		</div>
		<div class="d-flex float-start ms-auto">
			<a href="#" class="btn btn-outline-light btn-icon me-2">
				<div class=""><i class="bx bx-plus"></i></div>
			</a>
			<a href="#" class="btn btn-outline-light btn-icon">
				<div class=""><i class="bx bx-minus"></i></div>
			</a>
		</div>
	</li>
	<li class="list-group-item d-flex align-items-center">
		<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/6.jpg')}}">
		<div>
			<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-13 text-muted">Premium Member</span>
		</div>
		<div class="d-flex float-start ms-auto">
			<a href="#" class="btn btn-outline-light btn-icon me-2">
				<div class=""><i class="bx bx-plus"></i></div>
			</a>
			<a href="#" class="btn btn-outline-light btn-icon">
				<div class=""><i class="bx bx-minus"></i></div>
			</a>
		</div>
	</li>
	<li class="list-group-item d-flex align-items-center">
		<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/6.jpg')}}">
		<div>
			<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-13 text-muted">Premium Member</span>
		</div>
		<div class="d-flex float-start ms-auto">
			<a href="#" class="btn btn-outline-light btn-icon me-2">
				<div class=""><i class="bx bx-plus"></i></div>
			</a>
			<a href="#" class="btn btn-outline-light btn-icon">
				<div class=""><i class="bx bx-minus"></i></div>
			</a>
		</div>
	</li>
	<li class="list-group-item d-flex align-items-center">
		<img alt="" class="m-e-c-3 rounded-circle avatar-md" src="{{asset('assets/img/faces/12.jpg')}}">
		<div>
			<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-13 text-muted">Premium Member</span>
		</div>
		<div class="d-flex float-start ms-auto">
			<a href="#" class="btn btn-outline-light btn-icon me-2">
				<div class=""><i class="bx bx-plus"></i></div>
			</a>
			<a href="#" class="btn btn-outline-light btn-icon">
				<div class=""><i class="bx bx-minus"></i></div>
			</a>
		</div>
	</li>
	</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list08"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts')

        <!--Internal  Datepicker js -->
		<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

        <!--Internal  Clipboard js-->
        <script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

        <!-- Internal Prism js-->
        <script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection