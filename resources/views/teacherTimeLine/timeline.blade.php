@extends('layouts.app')

@section('styles')

		<!---Internal  Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Timeline css-->
		<link href="{{asset('assets/plugins/timeline/css/timeline.min.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{trans('Timeline/timeline.Timeline')}}</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{trans('Timeline/timeline.Teacher Timeline')}}</span>
						</div>
					</div>
					<!-- <div class="d-flex my-xl-auto right-content">
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
							<div class="btn-group dropdown"> -->
								<!-- <button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
									id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false"> -->
									<!-- @if (session()->has('NoTeacherTimeLine'))
									<span class="sr-only">you have no courses</span>
									@endif -->
								<!-- </button> -->
								<!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate"
									x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div> -->
							<!-- </div>
						</div> 
					</div> -->
				</div>
				<!-- breadcrumb -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-header custom-card-header">
								<h6 class="card-title mb-0">{{trans('Timeline/timeline.Vertical Timeline')}}</h6>
							</div>
							@if (!empty('message'))
							<div class="card-header custom-card-header">
								<h6 class="card-title mb-0">{{trans('Timeline/timeline.you have no courses')}}</h6>
							</div>
							@endif
						<div class="card-body">
							@if (count($courses) > 0)
								<div class="vtimeline">
								@foreach ($courses as $key => $course)
									@if($key % 2 == 0)
									<div class="timeline-wrapper timeline-wrapper-primary">
										<div class="timeline-badge success"><img class="timeline-image" alt="img"
												src="{{asset('assets/img/faces/3.jpg')}}"> </div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">{{ $course->title }}</h6>
											</div>
											<div class="timeline-body">
												<p>{{$course->desc}}</p>
												<a class="btn ripple btn-primary text-white mb-3" href="{{ route('calendar.index', ['id'=>$course->id]) }}">{{trans('Timeline/timeline.calendar')}}</a>
											</div>															
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="si si-notebook  text-muted me-1"></i>
												<span>{{count($course->lectures)}}</span>
												<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>{{$course->lectures->first()->start_date}}</span>
											</div>
										</div>
									</div>

									@else
									<div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
										<div class="timeline-badge success"><img class="timeline-image" alt="img"
												src="{{asset('assets/img/faces/12.jpg')}}"> </div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">{{ $course->title }}</h6>
											</div>
											<div class="timeline-body">
												<p>{{$course->desc}}</p>
												<a class="btn ripple btn-primary text-white mb-3" href="{{ route('calendar.index', ['id'=>$course->id]) }}">{{trans('Timeline/timeline.calendar')}}</a>
											</div>														
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="si si-notebook  text-muted me-1"></i>
												<span>{{count($course->lectures)}}</span>
												<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>{{$course->lectures->first()->start_date}}</span>
											</div>
										</div>
									</div>
									@endif
									@endforeach
							
									<!-- <div class="timeline-wrapper timeline-wrapper-info">
										<div class="timeline-badge"><i class="las la-user-circle"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Arlind Nushi checked in at New York</h6>
											</div>
											<div class="timeline-body">
												<p>Alpha 5 has arrived just over a month after Alpha 4 with some major
													feature improvements and a boat load of bug fixes.</p>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted me-1"></i>
												<span>19</span>
												<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>5th
													Oct 2019</span>
											</div>
										</div>
									</div> -->
									
									<!-- <div class="timeline-wrapper timeline-inverted timeline-wrapper-secondary">
										<div class="timeline-badge"><i class="las la-business-time"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">{{ $course->title }}</h6>
											</div>
											<div class="timeline-body">
												<p>{{$course->desc}}</p>
												<a class="btn ripple btn-primary text-white mb-3">Read more</a>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted me-1"></i>
												<span>{{count($course->lectures)}}</span>
												<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>{{$course->lectures->first()->start_date}}</span>
											</div>
										</div>
									</div> -->





									<!-- <div class="timeline-wrapper timeline-wrapper-success">
										<div class="timeline-badge"><i class="las la-envelope-open-text"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Support Team sent you an email</h6>
											</div>
											<div class="timeline-body">
												<p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
													weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah
													plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora
													plaxo ideeli hulu weebly balihoo....</p>
												<a class="btn ripple btn-primary text-white mb-3">Read more</a>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted me-1"></i>
												<span>25</span>
												<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>25th
													Sep 2017</span>
											</div>
										</div>
									</div> -->
									<!-- <div class="timeline-wrapper timeline-inverted timeline-wrapper-warning">
										<div class="timeline-badge success"><img class="timeline-image" alt="img"
												src="{{asset('assets/img/faces/15.jpg')}}"> </div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Mr. Doe shared a video</h6>
											</div>
											<div class="timeline-body">
												<div class="embed-responsive embed-responsive-16by9 mb-3">
													<iframe class="embed-responsive-item"
														src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&amp;controls=0&amp;showinfo=0"
														allowfullscreen></iframe>
												</div>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted me-1"></i>
												<span>32</span>
												<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>19th
													Sep 2017</span>
											</div>
										</div>
									</div> -->
									<!-- <div class="timeline-wrapper timeline-wrapper-dark">
										<div class="timeline-badge"><i class="las la-check-circle"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Sarah Young accepted your friend request</h6>
											</div>
											<div class="timeline-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
													cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga
													iste magni maxime</p>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart text-muted me-1"></i>
												<span>26</span>
												<span class="ms-auto"><i class="fe fe-calendar text-muted me-1"></i>15th
													Sep 2017</span>
											</div>
										</div>
									</div> -->
								</div>
							</div>
							@endif
						</div>
					</div>
				</div>
				<!-- End Row -->

@endsection('content')

@section('scripts')

        <!--Internal  Datepicker js -->
		<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection