@extends('layouts.app')

@section('styles')

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Icons</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Icons</span>
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
						
						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Bootstrap 5 SVG Icons</h6>
									<p class="text-muted mb-2 card-sub-title">Simply beautiful open source icons.<span class="">See more Bootstrap 5 icons at <a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap 5</a></span></p>
									<p><code>&lt;i class="bi bi-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list bootstrap-5">
									<ul class="icons-list">
										<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
											<path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
											<path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
											<path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-align-bottom" viewBox="0 0 16 16">
											<rect width="4" height="12" x="6" y="1" rx="1"/>
											<path d="M1.5 14a.5.5 0 0 0 0 1v-1zm13 1a.5.5 0 0 0 0-1v1zm-13 0h13v-1h-13v1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-align-center" viewBox="0 0 16 16">
											<path d="M8 1a.5.5 0 0 1 .5.5V6h-1V1.5A.5.5 0 0 1 8 1zm0 14a.5.5 0 0 1-.5-.5V10h1v4.5a.5.5 0 0 1-.5.5zM2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-align-end" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
											<path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-align-middle" viewBox="0 0 16 16">
											<path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8zm14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-align-start" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
											<path d="M3 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-align-top" viewBox="0 0 16 16">
											<rect width="4" height="12" rx="1" transform="matrix(1 0 0 -1 6 15)"/>
											<path d="M1.5 2a.5.5 0 0 1 0-1v1zm13-1a.5.5 0 0 1 0 1V1zm-13 0h13v1h-13V1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alt" viewBox="0 0 16 16">
											<path d="M1 13.5a.5.5 0 0 0 .5.5h3.797a.5.5 0 0 0 .439-.26L11 3h3.5a.5.5 0 0 0 0-1h-3.797a.5.5 0 0 0-.439.26L5 13H1.5a.5.5 0 0 0-.5.5zm10 0a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-app" viewBox="0 0 16 16">
											<path d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
											<path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
											<path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
											<path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
											<path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M4.854 14.854a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V3.5A2.5 2.5 0 0 1 6.5 1h8a.5.5 0 0 1 0 1h-8A1.5 1.5 0 0 0 5 3.5v9.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-up" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M4.854 1.146a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L4 2.707V12.5A2.5 2.5 0 0 0 6.5 15h8a.5.5 0 0 0 0-1h-8A1.5 1.5 0 0 1 5 12.5V2.707l3.146 3.147a.5.5 0 1 0 .708-.708l-4-4z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
											<path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
											<path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
											<path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
											<path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
											<path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
											<path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
											<path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-left-circle" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-5.904 2.803a.5.5 0 1 0 .707-.707L6.707 6h2.768a.5.5 0 1 0 0-1H5.5a.5.5 0 0 0-.5.5v3.975a.5.5 0 0 0 1 0V6.707l4.096 4.096z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-left-circle-fill" viewBox="0 0 16 16">
											<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-5.904 2.803a.5.5 0 1 0 .707-.707L6.707 6h2.768a.5.5 0 1 0 0-1H5.5a.5.5 0 0 0-.5.5v3.975a.5.5 0 0 0 1 0V6.707l4.096 4.096z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-left-square" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.096 8.803a.5.5 0 1 0 .707-.707L6.707 6h2.768a.5.5 0 1 0 0-1H5.5a.5.5 0 0 0-.5.5v3.975a.5.5 0 0 0 1 0V6.707l4.096 4.096z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-left-square-fill" viewBox="0 0 16 16">
											<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm8.096 10.803L6 6.707v2.768a.5.5 0 0 1-1 0V5.5a.5.5 0 0 1 .5-.5h3.975a.5.5 0 1 1 0 1H6.707l4.096 4.096a.5.5 0 1 1-.707.707z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
											<path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
											<path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-square" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
											<path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H3.707l10.147 10.146a.5.5 0 0 1-.708.708L3 3.707V8.5a.5.5 0 0 1-1 0v-6z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-angle-contract" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M.172 15.828a.5.5 0 0 0 .707 0l4.096-4.096V14.5a.5.5 0 1 0 1 0v-3.975a.5.5 0 0 0-.5-.5H1.5a.5.5 0 0 0 0 1h2.768L.172 15.121a.5.5 0 0 0 0 .707zM15.828.172a.5.5 0 0 0-.707 0l-4.096 4.096V1.5a.5.5 0 1 0-1 0v3.975a.5.5 0 0 0 .5.5H14.5a.5.5 0 0 0 0-1h-2.768L15.828.879a.5.5 0 0 0 0-.707z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-collapse" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-expand" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-move" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10zM.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708l-2-2zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
											<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
											<path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-aspect-ratio-fill" viewBox="0 0 16 16">
											<path d="M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1h-3zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1h3z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
											<path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
											<path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
											<path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
											<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
											<path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
											<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
											<path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
											<path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
											<path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
											<path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-reverse" viewBox="0 0 16 16">
											<path d="M9.854 5.146a.5.5 0 0 1 0 .708L7.707 8l2.147 2.146a.5.5 0 0 1-.708.708L7 8.707l-2.146 2.147a.5.5 0 0 1-.708-.708L6.293 8 4.146 5.854a.5.5 0 1 1 .708-.708L7 7.293l2.146-2.147a.5.5 0 0 1 .708 0z"/>
											<path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7.08a2 2 0 0 0 1.519-.698l4.843-5.651a1 1 0 0 0 0-1.302L10.6 1.7A2 2 0 0 0 9.08 1H2zm7.08 1a1 1 0 0 1 .76.35L14.682 8l-4.844 5.65a1 1 0 0 1-.759.35H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h7.08z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-reverse-fill" viewBox="0 0 16 16">
											<path d="M0 3a2 2 0 0 1 2-2h7.08a2 2 0 0 1 1.519.698l4.843 5.651a1 1 0 0 1 0 1.302L10.6 14.3a2 2 0 0 1-1.52.7H2a2 2 0 0 1-2-2V3zm9.854 2.854a.5.5 0 0 0-.708-.708L7 7.293 4.854 5.146a.5.5 0 1 0-.708.708L6.293 8l-2.147 2.146a.5.5 0 0 0 .708.708L7 8.707l2.146 2.147a.5.5 0 0 0 .708-.708L7.707 8l2.147-2.146z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-3d" viewBox="0 0 16 16">
											<path d="M4.52 8.368h.664c.646 0 1.055.378 1.06.9.008.537-.427.919-1.086.919-.598-.004-1.037-.325-1.068-.756H3c.03.914.791 1.688 2.153 1.688 1.24 0 2.285-.66 2.272-1.798-.013-.953-.747-1.38-1.292-1.432v-.062c.44-.07 1.125-.527 1.108-1.375-.013-.906-.8-1.57-2.053-1.565-1.31.005-2.043.734-2.074 1.67h1.103c.022-.391.383-.751.936-.751.532 0 .928.33.928.813.004.479-.383.835-.928.835h-.632v.914zm3.606-3.367V11h2.189C12.125 11 13 9.893 13 7.985c0-1.894-.861-2.984-2.685-2.984H8.126zm1.187.967h.844c1.112 0 1.621.686 1.621 2.04 0 1.353-.505 2.02-1.621 2.02h-.844v-4.06z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-3d-fill" viewBox="0 0 16 16">
											<path d="M10.157 5.968h-.844v4.06h.844c1.116 0 1.621-.667 1.621-2.02 0-1.354-.51-2.04-1.621-2.04z"/>
											<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm5.184 4.368c.646 0 1.055.378 1.06.9.008.537-.427.919-1.086.919-.598-.004-1.037-.325-1.068-.756H3c.03.914.791 1.688 2.153 1.688 1.24 0 2.285-.66 2.272-1.798-.013-.953-.747-1.38-1.292-1.432v-.062c.44-.07 1.125-.527 1.108-1.375-.013-.906-.8-1.57-2.053-1.565-1.31.005-2.043.734-2.074 1.67h1.103c.022-.391.383-.751.936-.751.532 0 .928.33.928.813.004.479-.383.835-.928.835h-.632v.914h.663zM8.126 11h2.189C12.125 11 13 9.893 13 7.985c0-1.894-.861-2.984-2.685-2.984H8.126V11z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-4k" viewBox="0 0 16 16">
											<path d="M4.807 5.001C4.021 6.298 3.203 7.6 2.5 8.917v.971h2.905V11h1.112V9.888h.733V8.93h-.733V5.001h-1.71zm-1.23 3.93v-.032a46.781 46.781 0 0 1 1.766-3.001h.062V8.93H3.577zm9.831-3.93h-1.306L9.835 7.687h-.057V5H8.59v6h1.187V9.075l.615-.699L12.072 11H13.5l-2.232-3.415 2.14-2.584z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-4k-fill" viewBox="0 0 16 16">
											<path d="M3.577 8.9v.03h1.828V5.898h-.062a46.781 46.781 0 0 0-1.766 3.001z"/>
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm2.372 3.715.435-.714h1.71v3.93h.733v.957h-.733V11H5.405V9.888H2.5v-.971c.574-1.077 1.225-2.142 1.872-3.202zm7.73-.714h1.306l-2.14 2.584L13.5 11h-1.428l-1.679-2.624-.615.7V11H8.59V5.001h1.187v2.686h.057L12.102 5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-8k" viewBox="0 0 16 16">
											<path d="M4.837 11.114c1.406 0 2.333-.725 2.333-1.766 0-.945-.712-1.38-1.256-1.49v-.053c.496-.15 1.02-.55 1.02-1.331 0-.914-.831-1.587-2.084-1.587-1.257 0-2.087.673-2.087 1.587 0 .773.51 1.177 1.02 1.331v.053c-.546.11-1.258.54-1.258 1.494 0 1.042.906 1.762 2.312 1.762zm.013-3.643c-.545 0-.95-.356-.95-.866s.405-.852.95-.852c.545 0 .945.343.945.852 0 .51-.4.866-.945.866zm0 2.786c-.65 0-1.142-.395-1.142-.984S4.2 8.28 4.85 8.28c.646 0 1.143.404 1.143.993s-.497.984-1.143.984zM13.408 5h-1.306L9.835 7.685h-.057V5H8.59v5.998h1.187V9.075l.615-.699 1.679 2.623H13.5l-2.232-3.414L13.408 5z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-8k-fill" viewBox="0 0 16 16">
											<path d="M3.9 6.605c0 .51.405.866.95.866.545 0 .945-.356.945-.866s-.4-.852-.945-.852c-.545 0-.95.343-.95.852zm-.192 2.668c0 .589.492.984 1.142.984.646 0 1.143-.395 1.143-.984S5.496 8.28 4.85 8.28c-.65 0-1.142.404-1.142.993z"/>
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm5.17 7.348c0 1.041-.927 1.766-2.333 1.766-1.406 0-2.312-.72-2.312-1.762 0-.954.712-1.384 1.257-1.494v-.053c-.51-.154-1.02-.558-1.02-1.331 0-.914.831-1.587 2.088-1.587 1.253 0 2.083.673 2.083 1.587 0 .782-.523 1.182-1.02 1.331v.053c.545.11 1.257.545 1.257 1.49zM12.102 5h1.306l-2.14 2.584 2.232 3.415h-1.428l-1.679-2.624-.615.699v1.925H8.59V5h1.187v2.685h.057L12.102 5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-ad" viewBox="0 0 16 16">
											<path d="m3.7 11 .47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11h1.2zm1.503-4.852.734 2.426H4.416l.734-2.426h.053zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-cc" viewBox="0 0 16 16">
											<path d="M3.708 7.755c0-1.111.488-1.753 1.319-1.753.681 0 1.138.47 1.186 1.107H7.36V7c-.052-1.186-1.024-2-2.342-2C3.414 5 2.5 6.05 2.5 7.751v.747c0 1.7.905 2.73 2.518 2.73 1.314 0 2.285-.792 2.342-1.939v-.114H6.213c-.048.615-.496 1.05-1.186 1.05-.84 0-1.319-.62-1.319-1.727v-.743zm6.14 0c0-1.111.488-1.753 1.318-1.753.682 0 1.139.47 1.187 1.107H13.5V7c-.053-1.186-1.024-2-2.342-2C9.554 5 8.64 6.05 8.64 7.751v.747c0 1.7.905 2.73 2.518 2.73 1.314 0 2.285-.792 2.342-1.939v-.114h-1.147c-.048.615-.497 1.05-1.187 1.05-.839 0-1.318-.62-1.318-1.727v-.743z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-ar-fill" viewBox="0 0 16 16">
											<path d="m6.031 8.574-.734-2.426h-.052L4.51 8.574h1.52zm3.642-2.641v1.938h1.033c.66 0 1.068-.316 1.068-.95 0-.64-.422-.988-1.05-.988h-1.05z"/>
											<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm4.265 5.458h2.004L6.739 11H8L5.996 5.001H4.607L2.595 11h1.2l.47-1.542zM8.5 5v6h1.173V8.763h1.064L11.787 11h1.327L11.91 8.583C12.455 8.373 13 7.779 13 6.9c0-1.147-.773-1.9-2.105-1.9H8.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-ar" viewBox="0 0 16 16">
											<path d="m3.794 11 .47-1.542H6.27L6.739 11H8L5.996 5.001H4.607L2.595 11h1.2zm1.503-4.852.734 2.426h-1.52l.734-2.426h.052zm5.598-1.147H8.5V11h1.173V8.763h1.064L11.787 11h1.327L11.91 8.583C12.455 8.373 13 7.779 13 6.9c0-1.147-.773-1.9-2.105-1.9zm-1.222 2.87V5.933h1.05c.63 0 1.05.347 1.05.989 0 .633-.408.95-1.067.95H9.673z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-ad-fill" viewBox="0 0 16 16">
											<path d="M11.35 8.337c0-.699-.42-1.138-1.001-1.138-.584 0-.954.444-.954 1.239v.453c0 .8.374 1.248.972 1.248.588 0 .984-.44.984-1.2v-.602zm-5.413.237-.734-2.426H5.15l-.734 2.426h1.52z"/>
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm6.209 6.32c0-1.28.694-2.044 1.753-2.044.655 0 1.156.294 1.336.769h.053v-2.36h1.16V11h-1.138v-.747h-.057c-.145.474-.69.804-1.367.804-1.055 0-1.74-.764-1.74-2.043v-.695zm-4.04 1.138L3.7 11H2.5l2.013-5.999H5.9L7.905 11H6.644l-.47-1.542H4.17z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-cc-fill" viewBox="0 0 16 16">
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm3.027 4.002c-.83 0-1.319.642-1.319 1.753v.743c0 1.107.48 1.727 1.319 1.727.69 0 1.138-.435 1.186-1.05H7.36v.114c-.057 1.147-1.028 1.938-2.342 1.938-1.613 0-2.518-1.028-2.518-2.729v-.747C2.5 6.051 3.414 5 5.018 5c1.318 0 2.29.813 2.342 2v.11H6.213c-.048-.638-.505-1.108-1.186-1.108zm6.14 0c-.831 0-1.319.642-1.319 1.753v.743c0 1.107.48 1.727 1.318 1.727.69 0 1.139-.435 1.187-1.05H13.5v.114c-.057 1.147-1.028 1.938-2.342 1.938-1.613 0-2.518-1.028-2.518-2.729v-.747c0-1.7.914-2.751 2.518-2.751 1.318 0 2.29.813 2.342 2v.11h-1.147c-.048-.638-.505-1.108-1.187-1.108z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-hd" viewBox="0 0 16 16">
											<path d="M7.396 11V5.001H6.209v2.44H3.687V5H2.5v6h1.187V8.43h2.522V11h1.187zM8.5 5.001V11h2.188c1.811 0 2.685-1.107 2.685-3.015 0-1.894-.86-2.984-2.684-2.984H8.5zm1.187.967h.843c1.112 0 1.622.686 1.622 2.04 0 1.353-.505 2.02-1.622 2.02h-.843v-4.06z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-hd-fill" viewBox="0 0 16 16">
											<path d="M10.53 5.968h-.843v4.06h.843c1.117 0 1.622-.667 1.622-2.02 0-1.354-.51-2.04-1.622-2.04z"/>
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm5.396 3.001V11H6.209V8.43H3.687V11H2.5V5.001h1.187v2.44h2.522V5h1.187zM8.5 11V5.001h2.188c1.824 0 2.685 1.09 2.685 2.984C13.373 9.893 12.5 11 10.69 11H8.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-tm" viewBox="0 0 16 16">
											<path d="M5.295 11V5.995H7V5H2.403v.994h1.701V11h1.19zm3.397 0V7.01h.058l1.428 3.239h.773l1.42-3.24h.057V11H13.5V5.001h-1.2l-1.71 3.894h-.039l-1.71-3.894H7.634V11h1.06z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-tm-fill" viewBox="0 0 16 16">
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm3.295 3.995V11H4.104V5.995h-1.7V5H7v.994H5.295zM8.692 7.01V11H7.633V5.001h1.209l1.71 3.894h.039l1.71-3.894H13.5V11h-1.072V7.01h-.057l-1.42 3.239h-.773L8.75 7.008h-.058z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-vo" viewBox="0 0 16 16">
											<path d="M4.508 11h1.429l1.99-5.999H6.61L5.277 9.708H5.22L3.875 5.001H2.5L4.508 11zM13.5 8.39v-.77c0-1.696-.962-2.733-2.566-2.733-1.604 0-2.571 1.029-2.571 2.734v.769c0 1.691.967 2.724 2.57 2.724 1.605 0 2.567-1.033 2.567-2.724zm-1.204-.778v.782c0 1.156-.571 1.732-1.362 1.732-.796 0-1.363-.576-1.363-1.732v-.782c0-1.156.567-1.736 1.363-1.736.79 0 1.362.58 1.362 1.736z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-vo-fill" viewBox="0 0 16 16">
											<path d="M12.296 8.394v-.782c0-1.156-.571-1.736-1.362-1.736-.796 0-1.363.58-1.363 1.736v.782c0 1.156.567 1.732 1.363 1.732.79 0 1.362-.576 1.362-1.732z"/>
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm11.5 5.62v.77c0 1.691-.962 2.724-2.566 2.724-1.604 0-2.571-1.033-2.571-2.724v-.77c0-1.704.967-2.733 2.57-2.733 1.605 0 2.567 1.037 2.567 2.734zM5.937 11H4.508L2.5 5.001h1.375L5.22 9.708h.057L6.61 5.001h1.318L5.937 11z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-vr" viewBox="0 0 16 16">
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											<path d="M4.508 11h1.429l1.99-5.999H6.61L5.277 9.708H5.22L3.875 5.001H2.5L4.508 11zm6.387-5.999H8.5V11h1.173V8.763h1.064L11.787 11h1.327L11.91 8.583C12.455 8.373 13 7.779 13 6.9c0-1.147-.773-1.9-2.105-1.9zm-1.222 2.87V5.933h1.05c.63 0 1.05.347 1.05.989 0 .633-.408.95-1.067.95H9.673z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-vr-fill" viewBox="0 0 16 16">
											<path d="M9.673 5.933v1.938h1.033c.66 0 1.068-.316 1.068-.95 0-.64-.422-.988-1.05-.988h-1.05z"/>
											<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm5.937 7 1.99-5.999H6.61L5.277 9.708H5.22L3.875 5.001H2.5L4.508 11h1.429zM8.5 5.001V11h1.173V8.763h1.064L11.787 11h1.327L11.91 8.583C12.455 8.373 13 7.779 13 6.9c0-1.147-.773-1.9-2.105-1.9H8.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-wc" viewBox="0 0 16 16">
											<path d="M10.348 7.643c0-1.112.488-1.754 1.318-1.754.682 0 1.139.47 1.187 1.108H14v-.11c-.053-1.187-1.024-2-2.342-2-1.604 0-2.518 1.05-2.518 2.751v.747c0 1.7.905 2.73 2.518 2.73 1.314 0 2.285-.792 2.342-1.939v-.114h-1.147c-.048.615-.497 1.05-1.187 1.05-.839 0-1.318-.62-1.318-1.727v-.742zM4.457 11l1.02-4.184h.045L6.542 11h1.006L9 5.001H7.818l-.82 4.355h-.056L5.97 5.001h-.94l-.972 4.355h-.053l-.827-4.355H2L3.452 11h1.005z"/>
											<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-badge-wc-fill" viewBox="0 0 16 16">
											<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm11.666 1.89c.682 0 1.139.47 1.187 1.107H14v-.11c-.053-1.187-1.024-2-2.342-2-1.604 0-2.518 1.05-2.518 2.751v.747c0 1.7.905 2.73 2.518 2.73 1.314 0 2.285-.792 2.342-1.939v-.114h-1.147c-.048.615-.497 1.05-1.187 1.05-.839 0-1.318-.62-1.318-1.727v-.742c0-1.112.488-1.754 1.318-1.754zm-6.188.926h.044L6.542 11h1.006L9 5.001H7.818l-.82 4.355h-.056L5.97 5.001h-.94l-.972 4.355h-.053l-.827-4.355H2L3.452 11h1.005l1.02-4.184z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
											<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
											<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-dash" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
											<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-dash-fill" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM6 9.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
											<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
											<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
											</svg></li>
									<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
											</svg></li>
											<li class="icons-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-range" viewBox="0 0 16 16">
											<path d="M9 7a1 1 0 0 1 1-1h5v2h-5a1 1 0 0 1-1-1zM1 9h4a1 1 0 0 1 0 2H1V9z"/>
											<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
											</svg></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">FontAwesome5 Free Icons</h6>
									<p class="text-muted mb-2 card-sub-title">The world’s most popular and easiest to use icon set just got an upgrade. More icons, More styles, More options .<span class="">See more FontAwesome icons at <a href="https://fontawesome.com/icons" target="_blank">FontAwesome Icons.</a></span></p>
									<p><code>&lt;i class="far fa-ICON_NAME"&gt;&lt;/i&gt;</code>,  <code>&lt;i class="fab fa-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list font-awesome">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="fab fa-500px"></i></li>
										<li class="icons-list-item"><i class="fa fa-address-book" ></i></li>
										<li class="icons-list-item"><i class="far fa-address-book"></i></li>
										<li class="icons-list-item"><i class="fa fa-address-card"></i></li>
										<li class="icons-list-item"><i class="far fa-address-card"></i></li>
										<li class="icons-list-item"><i class="fa fa-adjust"></i></li>
										<li class="icons-list-item"><i class="fab fa-adn"></i></li>
										<li class="icons-list-item"><i class="fa fa-align-center"></i></li>
										<li class="icons-list-item"><i class="fa fa-align-justify"></i></li>
										<li class="icons-list-item"><i class="fa fa-align-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-align-right"></i></li>
										<li class="icons-list-item"><i class="fab fa-amazon"></i></li>
										<li class="icons-list-item"><i class="fa fa-ambulance"></i></li>
										<li class="icons-list-item"><i class="fa fa-american-sign-language-interpreting"></i></li>
										<li class="icons-list-item"><i class="fa fa-anchor"></i></li>
										<li class="icons-list-item"><i class="fab fa-android"></i></li>
										<li class="icons-list-item"><i class="fab fa-angellist"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-double-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-double-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-double-right"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-double-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-right"></i></li>
										<li class="icons-list-item"><i class="fa fa-angle-up"></i></li>
										<li class="icons-list-item"><i class="fab fa-apple"></i></li>
										<li class="icons-list-item"><i class="fa fa-archive"></i></li>
										<li class="icons-list-item"><i class="fas fa-chart-area"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-circle-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-circle-left"></i></li>
										<li class="icons-list-item"><i class="far fa-arrow-alt-circle-down"></i></li>
										<li class="icons-list-item"><i class="far fa-arrow-alt-circle-left"></i></li>
										<li class="icons-list-item"><i class="far fa-arrow-alt-circle-right"></i></li>
										<li class="icons-list-item"><i class="far fa-arrow-alt-circle-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-circle-right"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-circle-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-right"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrow-up"></i></li>
										<li class="icons-list-item"><i class="fas fa-arrows-alt"></i></li>
										<li class="icons-list-item"><i class="fa fa-arrows-alt"></i></li>
										<li class="icons-list-item"><i class="fas fa-arrows-alt-h"></i></li>
										<li class="icons-list-item"><i class="fas fa-arrows-alt-v" ></i></li>
										<li class="icons-list-item"><i class="fas fa-american-sign-language-interpreting"></i></li>
										<li class="icons-list-item"><i class="fa fa-assistive-listening-systems"></i></li>
										<li class="icons-list-item"><i class="fa fa-asterisk"></i></li>
										<li class="icons-list-item"><i class="fa fa-at"></i></li>
										<li class="icons-list-item"><i class="fa fa-audio-description"></i></li>
										<li class="icons-list-item"><i class="fas fa-car-alt"></i></li>
										<li class="icons-list-item"><i class="fa fa-backward" ></i></li>
										<li class="icons-list-item"><i class="fa fa-balance-scale"></i></li>
										<li class="icons-list-item"><i class="fa fa-ban"></i></li>
										<li class="icons-list-item"><i class="fab fa-bandcamp"></i></li>
										<li class="icons-list-item"><i class="fas fa-university"></i></li>
										<li class="icons-list-item"><i class="fa fa-barcode" ></i></li>
										<li class="icons-list-item"><i class="fa fa-bars"></i></li>
										<li class="icons-list-item"><i class="fa fa-bath"></i></li>
										<li class="icons-list-item"><i class="fas fa-battery-full"></i></li>
										<li class="icons-list-item"><i class="fas fa-battery-empty"></i></li>
										<li class="icons-list-item"><i class="fas fa-battery-quarter"></i></li>
										<li class="icons-list-item"><i class="fas fa-battery-half"></i></li>
										<li class="icons-list-item"><i class="fas fa-battery-three-quarters"></i></li>
										<li class="icons-list-item"><i class="fa fa-battery-empty"></i></li>
										<li class="icons-list-item"><i class="fa fa-bed"></i></li>
										<li class="icons-list-item"><i class="fa fa-beer"></i></li>
										<li class="icons-list-item"><i class="fab fa-behance"></i></li>
										<li class="icons-list-item"><i class="fab fa-behance-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-bell"></i></li>
										<li class="icons-list-item"><i class="far fa-bell"></i></li>
										<li class="icons-list-item"><i class="fa fa-bell-slash"></i></li>
										<li class="icons-list-item"><i class="far fa-bell-slash" ></i></li>
										<li class="icons-list-item"><i class="fas fa-bicycle"></i></li>
										<li class="icons-list-item"><i class="fa fa-binoculars"></i></li>
										<li class="icons-list-item"><i class="fa fa-birthday-cake"></i></li>
										<li class="icons-list-item"><i class="fab fa-bitbucket"></i></li>
										<li class="icons-list-item"><i class="fab fa-bitcoin"></i></li>
										<li class="icons-list-item"><i class="fab fa-black-tie"></i></li>
										<li class="icons-list-item"><i class="fa fa-blind"></i></li>
										<li class="icons-list-item"><i class="fab fa-bluetooth"></i></li>
										<li class="icons-list-item"><i class="fab fa-bluetooth-b"></i></li>
										<li class="icons-list-item"><i class="fa fa-bold"></i></li>
										<li class="icons-list-item"><i class="fa fa-bolt"></i></li>
										<li class="icons-list-item"><i class="fa fa-bomb"></i></li>
										<li class="icons-list-item"><i class="fa fa-book"></i></li>
										<li class="icons-list-item"><i class="fa fa-bookmark"></i></li>
										<li class="icons-list-item"><i class="far fa-bookmark"></i></li>
										<li class="icons-list-item"><i class="fa fa-braille"></i></li>
										<li class="icons-list-item"><i class="fa fa-briefcase"></i></li>
										<li class="icons-list-item"><i class="fab fa-btc"></i></li>
										<li class="icons-list-item"><i class="fa fa-bug"></i></li>
										<li class="icons-list-item"><i class="fa fa-building"></i></li>
										<li class="icons-list-item"><i class="far fa-building"></i></li>
										<li class="icons-list-item"><i class="fas fa-bullhorn"></i></li>
										<li class="icons-list-item"><i class="fa fa-bus"></i></li>
										<li class="icons-list-item"><i class="fab fa-buysellads"></i></li>
										<li class="icons-list-item"><i class="fas fa-taxi"></i></li>
										<li class="icons-list-item"><i class="fa fa-calculator"></i></li>
										<li class="icons-list-item"><i class="fa fa-calendar"></i></li>
										<li class="icons-list-item"><i class="far fa-calendar-check"></i></li>
										<li class="icons-list-item"><i class="far fa-calendar-minus"></i></li>
										<li class="icons-list-item"><i class="far fa-calendar"></i></li>
										<li class="icons-list-item"><i class="far fa-calendar-plus"></i></li>
										<li class="icons-list-item"><i class="far fa-calendar-times"></i></li>
										<li class="icons-list-item"><i class="fa fa-camera" ></i></li>
										<li class="icons-list-item"><i class="fa fa-camera-retro" ></i></li>
										<li class="icons-list-item"><i class="fa fa-car"></i></li>
										<li class="icons-list-item"><i class="fa fa-caret-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-caret-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-caret-right"></i></li>
										<li class="icons-list-item"><i class="far fa-caret-square-down"></i></li>
										<li class="icons-list-item"><i class="far fa-caret-square-left"></i></li>
										<li class="icons-list-item"><i class="far fa-caret-square-right"></i></li>
										<li class="icons-list-item"><i class="far fa-caret-square-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-caret-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-cart-arrow-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-cart-plus"></i></li>
										<li class="icons-list-item"><i class="far fa-closed-captioning"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-amex"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-diners-club"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-discover"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-jcb"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-mastercard"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-paypal"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-stripe"></i></li>
										<li class="icons-list-item"><i class="fab fa-cc-visa"></i></li>
										<li class="icons-list-item"><i class="fa fa-certificate"></i></li>
										<li class="icons-list-item"><i class="fas fa-link"></i></li>
										<li class="icons-list-item"><i class="fas fa-unlink"></i></li>
										<li class="icons-list-item"><i class="fa fa-check"></i></li>
										<li class="icons-list-item"><i class="fa fa-check-circle"></i></li>
										<li class="icons-list-item"><i class="far fa-check-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-check-square"></i></li>
										<li class="icons-list-item"><i class="far fa-check-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-circle-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-circle-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-circle-right"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-circle-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-right"></i></li>
										<li class="icons-list-item"><i class="fa fa-chevron-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-child"></i></li>
										<li class="icons-list-item"><i class="fab fa-chrome"></i></li>
										<li class="icons-list-item"><i class="fa fa-circle"></i></li>
										<li class="icons-list-item"><i class="far fa-circle"></i></li>
										<li class="icons-list-item"><i class="fas fa-circle-notch"></i></li>
										<li class="icons-list-item"><i class="fa fa-clipboard"></i></li>
										<li class="icons-list-item"><i class="far fa-clock"></i></li>
										<li class="icons-list-item"><i class="fa fa-clone"></i></li>
										<li class="icons-list-item"><i class="fas fa-times"></i></li>
										<li class="icons-list-item"><i class="fa fa-cloud"></i></li>
										<li class="icons-list-item"><i class="fas fa-cloud-download-alt"></i></li>
										<li class="icons-list-item"><i class="fas fa-cloud-upload-alt"></i></li>
										<li class="icons-list-item"><i class="fas fa-yen-sign"></i></li>
										<li class="icons-list-item"><i class="fa fa-code"></i></li>
										<li class="icons-list-item"><i class="fas fa-code-branch"></i></li>
										<li class="icons-list-item"><i class="fab fa-codepen"></i></li>
										<li class="icons-list-item"><i class="fab fa-codiepie"></i></li>
										<li class="icons-list-item"><i class="fa fa-coffee"></i></li>
										<li class="icons-list-item"><i class="fa fa-cog"></i></li>
										<li class="icons-list-item"><i class="fa fa-cogs"></i></li>
										<li class="icons-list-item"><i class="fa fa-columns"></i></li>
										<li class="icons-list-item"><i class="fa fa-comment"></i></li>
										<li class="icons-list-item"><i class="far fa-comment"></i></li>
										<li class="icons-list-item"><i class="fas fa-comment-dots"></i></li>
										<li class="icons-list-item"><i class="far fa-comment-dots"></i></li>
										<li class="icons-list-item"><i class="fa fa-comments"></i></li>
										<li class="icons-list-item"><i class="far fa-comments"></i></li>
										<li class="icons-list-item"><i class="fa fa-compass"></i></li>
										<li class="icons-list-item"><i class="fa fa-compress"></i></li>
										<li class="icons-list-item"><i class="fab fa-connectdevelop"></i></li>
										<li class="icons-list-item"><i class="fab fa-contao"></i></li>
										<li class="icons-list-item"><i class="fa fa-copy"></i></li>
										<li class="icons-list-item"><i class="fa fa-copyright"></i></li>
										<li class="icons-list-item"><i class="fab fa-creative-commons"></i></li>
										<li class="icons-list-item"><i class="fa fa-credit-card"></i></li>
										<li class="icons-list-item"><i class="far fa-credit-card"></i></li>
										<li class="icons-list-item"><i class="fa fa-crop"></i></li>
										<li class="icons-list-item"><i class="fa fa-crosshairs"></i></li>
										<li class="icons-list-item"><i class="fab fa-css3"></i></li>
										<li class="icons-list-item"><i class="fa fa-cube"></i></li>
										<li class="icons-list-item"><i class="fa fa-cubes"></i></li>
										<li class="icons-list-item"><i class="fa fa-cut"></i></li>
										<li class="icons-list-item"><i class="fas fa-utensils"></i></li>
										<li class="icons-list-item"><i class="fas fa-tachometer-alt"></i></li>
										<li class="icons-list-item"><i class="fab fa-dashcube"></i></li>
										<li class="icons-list-item"><i class="fa fa-database"></i></li>
										<li class="icons-list-item"><i class="fa fa-deaf"></i></li>
										<li class="icons-list-item"><i class="fab fa-delicious"></i></li>
										<li class="icons-list-item"><i class="fa fa-desktop"></i></li>
										<li class="icons-list-item"><i class="fab fa-deviantart"></i></li>
										<li class="icons-list-item"><i class="fas fa-gem"></i></li>
										<li class="icons-list-item"><i class="fab fa-digg"></i></li>
										<li class="icons-list-item"><i class="fas fa-dollar-sign"></i></li>
										<li class="icons-list-item"><i class="far fa-dot-circle"></i></li>
										<li class="icons-list-item"><i class="fas fa-download"></i></li>
										<li class="icons-list-item"><i class="fab fa-dribbble"></i></li>
										<li class="icons-list-item"><i class="fab fa-dropbox"></i></li>
										<li class="icons-list-item"><i class="fab fa-drupal"></i></li>
										<li class="icons-list-item"><i class="fab fa-edge"></i></li>
										<li class="icons-list-item"><i class="fa fa-edit"></i></li>
										<li class="icons-list-item"><i class="fa fa-eject"></i></li>
										<li class="icons-list-item"><i class="fa fa-ellipsis-h"></i></li>
										<li class="icons-list-item"><i class="fa fa-ellipsis-v"></i></li>
										<li class="icons-list-item"><i class="fab fa-empire"></i></li>
										<li class="icons-list-item"><i class="fa fa-envelope"></i></li>
										<li class="icons-list-item"><i class="far fa-envelope"></i></li>
										<li class="icons-list-item"><i class="fa fa-envelope-open"></i></li>
										<li class="icons-list-item"><i class="far fa-envelope-open"></i></li>
										<li class="icons-list-item"><i class="fas fa-envelope-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-envira"></i></li>
										<li class="icons-list-item"><i class="fas fa-eraser"></i></li>
										<li class="icons-list-item"><i class="fab fa-etsy"></i></li>
										<li class="icons-list-item"><i class="fas fa-euro-sign"></i></li>
										<li class="icons-list-item"><i class="fas fa-exchange-alt"></i></li>
										<li class="icons-list-item"><i class="fas fa-exclamation"></i></li>
										<li class="icons-list-item"><i class="fas fa-exclamation-circle"></i></li>
										<li class="icons-list-item"><i class="fas fa-exclamation-triangle"></i></li>
										<li class="icons-list-item"><i class="fas fa-expand-alt"></i></li>
										<li class="icons-list-item"><i class="fab fa-expeditedssl"></i></li>
										<li class="icons-list-item"><i class="fas fa-external-link-alt"></i></li>
										<li class="icons-list-item"><i class="fas fa-external-link-alt"></i></li>
										<li class="icons-list-item"><i class="fas fa-eye"></i></li>
										<li class="icons-list-item"><i class="fas fa-eye-slash"></i></li>
										<li class="icons-list-item"><i class="fas fa-eye-dropper"></i></li>
										<li class="icons-list-item"><i class="fas fa-flag"></i></li>
										<li class="icons-list-item"><i class="fab fa-facebook"></i></li>
										<li class="icons-list-item"><i class="fab fa-facebook-f"></i></li>
										<li class="icons-list-item"><i class="fab fa-facebook-square"></i></li>
										<li class="icons-list-item"><i class="fas fa-fast-backward"></i></li>
										<li class="icons-list-item"><i class="fas fa-fast-forward"></i></li>
										<li class="icons-list-item"><i class="fas fa-fax"></i></li>
										<li class="icons-list-item"><i class="fas fa-rss"></i></li>
										<li class="icons-list-item"><i class="fas fa-female"></i></li>
										<li class="icons-list-item"><i class="fas fa-fighter-jet"></i></li>
										<li class="icons-list-item"><i class="fa fa-file"></i></li>
										<li class="icons-list-item"><i class="far fa-file-archive"></i></li>
										<li class="icons-list-item"><i class="far fa-file-audio"></i></li>
										<li class="icons-list-item"><i class="far fa-file-code"></i></li>
										<li class="icons-list-item"><i class="far fa-file-excel"></i></li>
										<li class="icons-list-item"><i class="far fa-file-image"></i></li>
										<li class="icons-list-item"><i class="far fa-file-video"></i></li>
										<li class="icons-list-item"><i class="far fa-file"></i></li>
										<li class="icons-list-item"><i class="far fa-file-pdf"></i></li>
										<li class="icons-list-item"><i class="far fa-file-powerpoint"></i></li>
										<li class="icons-list-item"><i class="fas fa-file-alt"></i></li>
										<li class="icons-list-item"><i class="far fa-file-alt"></i></li>
										<li class="icons-list-item"><i class="far fa-file-word"></i></li>
										<li class="icons-list-item"><i class="fas fa-film"></i></li>
										<li class="icons-list-item"><i class="fas fa-filter"></i></li>
										<li class="icons-list-item"><i class="fa fa-fire" ></i></li>
										<li class="icons-list-item"><i class="fa fa-fire-extinguisher"></i></li>
										<li class="icons-list-item"><i class="fab fa-firefox"></i></li>
										<li class="icons-list-item"><i class="fab fa-first-order" ></i></li>
										<li class="icons-list-item"><i class="fa fa-flag"></i></li>
										<li class="icons-list-item"><i class="fa fa-flag-checkered"></i></li>
										<li class="icons-list-item"><i class="far fa-flag"></i></li>
										<li class="icons-list-item"><i class="fa fa-flask"></i></li>
										<li class="icons-list-item"><i class="fab fa-flickr"></i></li>
										<li class="icons-list-item"><i class="fa fa-folder"></i></li>
										<li class="icons-list-item"><i class="far fa-folder"></i></li>
										<li class="icons-list-item"><i class="fa fa-folder-open"></i></li>
										<li class="icons-list-item"><i class="far fa-folder-open"></i></li>
										<li class="icons-list-item"><i class="fa fa-font"></i></li>
										<li class="icons-list-item"><i class="fab fa-font-awesome"></i></li>
										<li class="icons-list-item"><i class="fab fa-fonticons"></i></li>
										<li class="icons-list-item"><i class="fab fa-fort-awesome"></i></li>
										<li class="icons-list-item"><i class="fab fa-forumbee"></i></li>
										<li class="icons-list-item"><i class="fas fa-forward"></i></li>
										<li class="icons-list-item"><i class="fab fa-foursquare"></i></li>
										<li class="icons-list-item"><i class="fab fa-free-code-camp"></i></li>
										<li class="icons-list-item"><i class="far fa-frown"></i></li>
										<li class="icons-list-item"><i class="far fa-futbol"></i></li>
										<li class="icons-list-item"><i class="fa fa-gamepad"></i></li>
										<li class="icons-list-item"><i class="fa fa-gavel"></i></li>
										<li class="icons-list-item"><i class="fa fa-genderless"></i></li>
										<li class="icons-list-item"><i class="fab fa-get-pocket"></i></li>
										<li class="icons-list-item"><i class="fab fa-gg"></i></li>
										<li class="icons-list-item"><i class="fab fa-gg-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-gift"></i></li>
										<li class="icons-list-item"><i class="fab fa-git"></i></li>
										<li class="icons-list-item"><i class="fab fa-git-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-github"></i></li>
										<li class="icons-list-item"><i class="fab fa-github-alt"></i></li>
										<li class="icons-list-item"><i class="fab fa-github-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-gitlab"></i></li>
										<li class="icons-list-item"><i class="fab fa-glide"></i></li>
										<li class="icons-list-item"><i class="fab fa-glide-g" ></i></li>
										<li class="icons-list-item"><i class="fa fa-globe"></i></li>
										<li class="icons-list-item"><i class="fab fa-google"></i></li>
										<li class="icons-list-item"><i class="fab fa-google-plus"></i></li>
										<li class="icons-list-item"><i class="fab fa-google-wallet"></i></li>
										<li class="icons-list-item"><i class="fa fa-graduation-cap"></i></li>
										<li class="icons-list-item"><i class="fab fa-gratipay"></i></li>
										<li class="icons-list-item"><i class="fab fa-grav"></i></li>
										<li class="icons-list-item"><i class="fa fa-h-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-hacker-news"></i></li>
										<li class="icons-list-item"><i class="far fa-hand-lizard"></i></li>
										<li class="icons-list-item"><i class="far fa-hand-paper"></i></li>
										<li class="icons-list-item"><i class="far fa-hand-peace"></i></li>
										<li class="icons-list-item"><i class="far fa-hand-pointer"></i></li>
										<li class="icons-list-item"><i class="far fa-hand-rock"></i></li>
										<li class="icons-list-item"><i class="far fa-hand-scissors"></i></li>
										<li class="icons-list-item"><i class="far fa-hand-spock"></i></li>
										<li class="icons-list-item"><i class="far fa-handshake"></i></li>
										<li class="icons-list-item"><i class="fa fa-hashtag"></i></li>
										<li class="icons-list-item"><i class="far fa-hdd"></i></li>
										<li class="icons-list-item"><i class="fa fa-headphones"></i></li>
										<li class="icons-list-item"><i class="fa fa-heart"></i></li>
										<li class="icons-list-item"><i class="far fa-heart"></i></li>
										<li class="icons-list-item"><i class="fa fa-heartbeat"></i></li>
										<li class="icons-list-item"><i class="fa fa-history"></i></li>
										<li class="icons-list-item"><i class="fa fa-home"></i></li>
										<li class="icons-list-item"><i class="far fa-hospital"></i></li>
										<li class="icons-list-item"><i class="fa fa-hotel" ></i></li>
										<li class="icons-list-item"><i class="fa fa-hourglass"></i></li>
										<li class="icons-list-item"><i class="fa fa-hourglass-end"></i></li>
										<li class="icons-list-item"><i class="fa fa-hourglass-half"></i></li>
										<li class="icons-list-item"><i class="far fa-hourglass"></i></li>
										<li class="icons-list-item"><i class="fa fa-hourglass-start"></i></li>
										<li class="icons-list-item"><i class="fab fa-houzz"></i></li>
										<li class="icons-list-item"><i class="fab fa-html5"></i></li>
										<li class="icons-list-item"><i class="fa fa-i-cursor"></i></li>
										<li class="icons-list-item"><i class="fa fa-id-badge"></i></li>
										<li class="icons-list-item"><i class="fa fa-id-card"></i></li>
										<li class="icons-list-item"><i class="far fa-id-card"></i></li>
										<li class="icons-list-item"><i class="fa fa-image"></i></li>
										<li class="icons-list-item"><i class="fab fa-imdb"></i></li>
										<li class="icons-list-item"><i class="fas fa-inbox"></i></li>
										<li class="icons-list-item"><i class="fa fa-indent" ></i></li>
										<li class="icons-list-item"><i class="fa fa-industry"></i></li>
										<li class="icons-list-item"><i class="fa fa-info"></i></li>
										<li class="icons-list-item"><i class="fa fa-info-circle"></i></li>
										<li class="icons-list-item"><i class="fab fa-instagram"></i></li>
										<li class="icons-list-item"><i class="fab fa-internet-explorer" ></i></li>
										<li class="icons-list-item"><i class="fab fa-ioxhost"></i></li>
										<li class="icons-list-item"><i class="fa fa-italic"></i></li>
										<li class="icons-list-item"><i class="fab fa-joomla"></i></li>
										<li class="icons-list-item"><i class="fab fa-jsfiddle"></i></li>
										<li class="icons-list-item"><i class="fa fa-key"></i></li>
										<li class="icons-list-item"><i class="far fa-keyboard"></i></li>
										<li class="icons-list-item"><i class="fa fa-language"></i></li>
										<li class="icons-list-item"><i class="fa fa-laptop"></i></li>
										<li class="icons-list-item"><i class="fab fa-lastfm"></i></li>
										<li class="icons-list-item"><i class="fab fa-lastfm-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-leaf"></i></li>
										<li class="icons-list-item"><i class="fab fa-leanpub"></i></li>
										<li class="icons-list-item"><i class="far fa-lemon"></i></li>
										<li class="icons-list-item"><i class="fa fa-life-ring"></i></li>
										<li class="icons-list-item"><i class="far fa-lightbulb"></i></li>
										<li class="icons-list-item"><i class="fas fa-chart-line"></i></li>
										<li class="icons-list-item"><i class="fa fa-link" ></i></li>
										<li class="icons-list-item"><i class="fab fa-linkedin"></i></li>
										<li class="icons-list-item"><i class="fab fa-linode"></i></li>
										<li class="icons-list-item"><i class="fab fa-linux"></i></li>
										<li class="icons-list-item"><i class="fa fa-list"></i></li>
										<li class="icons-list-item"><i class="fa fa-list-alt"></i></li>
										<li class="icons-list-item"><i class="fa fa-list-ol"></i></li>
										<li class="icons-list-item"><i class="fa fa-list-ul"></i></li>
										<li class="icons-list-item"><i class="fa fa-location-arrow"></i></li>
										<li class="icons-list-item"><i class="fa fa-lock"></i></li>
										<li class="icons-list-item"><i class="fa fa-low-vision"></i></li>
										<li class="icons-list-item"><i class="fa fa-magic"></i></li>
										<li class="icons-list-item"><i class="fa fa-magnet"></i></li>
										<li class="icons-list-item"><i class="fa fa-male" ></i></li>
										<li class="icons-list-item"><i class="fa fa-map"></i></li>
										<li class="icons-list-item"><i class="fa fa-map-marker"></i></li>
										<li class="icons-list-item"><i class="far fa-map"></i></li>
										<li class="icons-list-item"><i class="fa fa-map-pin"></i></li>
										<li class="icons-list-item"><i class="fa fa-map-signs"></i></li>
										<li class="icons-list-item"><i class="fa fa-mars"></i></li>
										<li class="icons-list-item"><i class="fa fa-mars-double"></i></li>
										<li class="icons-list-item"><i class="fa fa-mars-stroke"></i></li>
										<li class="icons-list-item"><i class="fa fa-mars-stroke-h"></i></li>
										<li class="icons-list-item"><i class="fa fa-mars-stroke-v"></i></li>
										<li class="icons-list-item"><i class="fab fa-maxcdn"></i></li>
										<li class="icons-list-item"><i class="fab fa-medium"></i></li>
										<li class="icons-list-item"><i class="fa fa-medkit"></i></li>
										<li class="icons-list-item"><i class="fab fa-meetup"></i></li>
										<li class="icons-list-item"><i class="far fa-meh"></i></li>
										<li class="icons-list-item"><i class="fa fa-mercury"></i></li>
										<li class="icons-list-item"><i class="fa fa-microchip"></i></li>
										<li class="icons-list-item"><i class="fa fa-microphone"></i></li>
										<li class="icons-list-item"><i class="fa fa-microphone-slash" ></i></li>
										<li class="icons-list-item"><i class="fa fa-minus" ></i></li>
										<li class="icons-list-item"><i class="fa fa-minus-circle" ></i></li>
										<li class="icons-list-item"><i class="fa fa-minus-square"></i></li>
										<li class="icons-list-item"><i class="far fa-minus-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-mixcloud"></i></li>
										<li class="icons-list-item"><i class="fa fa-mobile"></i></li>
										<li class="icons-list-item"><i class="fab fa-modx"></i></li>
										<li class="icons-list-item"><i class="far fa-moon"></i></li>
										<li class="icons-list-item"><i class="fa fa-motorcycle"></i></li>
										<li class="icons-list-item"><i class="fa fa-mouse-pointer" ></i></li>
										<li class="icons-list-item"><i class="fa fa-music"></i></li>
										<li class="icons-list-item"><i class="fas fa-neuter"></i></li>
										<li class="icons-list-item"><i class="far fa-newspaper"></i></li>
										<li class="icons-list-item"><i class="fa fa-object-group"></i></li>
										<li class="icons-list-item"><i class="fa fa-object-ungroup"></i></li>
										<li class="icons-list-item"><i class="fab fa-odnoklassniki"></i></li>
										<li class="icons-list-item"><i class="fab fa-odnoklassniki-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-opencart"></i></li>
										<li class="icons-list-item"><i class="fab fa-openid"></i></li>
										<li class="icons-list-item"><i class="fab fa-opera"></i></li>
										<li class="icons-list-item"><i class="fab fa-optin-monster"></i></li>
										<li class="icons-list-item"><i class="fa fa-outdent"></i></li>
										<li class="icons-list-item"><i class="fab fa-pagelines"></i></li>
										<li class="icons-list-item"><i class="fa fa-paint-brush"></i></li>
										<li class="icons-list-item"><i class="fa fa-paper-plane"></i></li>
										<li class="icons-list-item"><i class="far fa-paper-plane"></i></li>
										<li class="icons-list-item"><i class="fa fa-paperclip"></i></li>
										<li class="icons-list-item"><i class="fa fa-paragraph"></i></li>
										<li class="icons-list-item"><i class="fa fa-paste"></i></li>
										<li class="icons-list-item"><i class="fa fa-pause"></i></li>
										<li class="icons-list-item"><i class="fa fa-pause-circle"></i></li>
										<li class="icons-list-item"><i class="far fa-pause-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-paw"></i></li>
										<li class="icons-list-item"><i class="fab fa-paypal"></i></li>
										<li class="icons-list-item"><i class="fas fa-percent"></i></li>
										<li class="icons-list-item"><i class="fa fa-phone" ></i></li>
										<li class="icons-list-item"><i class="fa fa-phone-square"></i></li>
										<li class="icons-list-item"><i class="fas fa-chart-pie"></i></li>
										<li class="icons-list-item"><i class="fab fa-pied-piper"></i></li>
										<li class="icons-list-item"><i class="fab fa-pied-piper-alt"></i></li>
										<li class="icons-list-item"><i class="fab fa-pied-piper-pp"></i></li>
										<li class="icons-list-item"><i class="fab fa-pinterest"></i></li>
										<li class="icons-list-item"><i class="fab fa-pinterest-p"></i></li>
										<li class="icons-list-item"><i class="fab fa-pinterest-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-plane"></i></li>
										<li class="icons-list-item"><i class="fa fa-play"></i></li>
										<li class="icons-list-item"><i class="fa fa-play-circle"></i></li>
										<li class="icons-list-item"><i class="far fa-play-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-plug"></i></li>
										<li class="icons-list-item"><i class="fa fa-plus"></i></li>
										<li class="icons-list-item"><i class="fa fa-plus-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-plus-square"></i></li>
										<li class="icons-list-item"><i class="far fa-plus-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-podcast"></i></li>
										<li class="icons-list-item"><i class="fa fa-power-off"></i></li>
										<li class="icons-list-item"><i class="fa fa-print"></i></li>
										<li class="icons-list-item"><i class="fab fa-product-hunt"></i></li>
										<li class="icons-list-item"><i class="fa fa-puzzle-piece"></i></li>
										<li class="icons-list-item"><i class="fab fa-qq"></i></li>
										<li class="icons-list-item"><i class="fa fa-qrcode"></i></li>
										<li class="icons-list-item"><i class="fa fa-question"></i></li>
										<li class="icons-list-item"><i class="fa fa-question-circle"></i></li>
										<li class="icons-list-item"><i class="far fa-question-circle"></i></li>
										<li class="icons-list-item"><i class="fab fa-quora"></i></li>
										<li class="icons-list-item"><i class="fa fa-quote-left"></i></li>
										<li class="icons-list-item"><i class="fa fa-quote-right"></i></li>
										<li class="icons-list-item"><i class="fa fa-random"></i></li>
										<li class="icons-list-item"><i class="fab fa-ravelry"></i></li>
										<li class="icons-list-item"><i class="fab fa-rebel"></i></li>
										<li class="icons-list-item"><i class="fa fa-recycle"></i></li>
										<li class="icons-list-item"><i class="fab fa-reddit"></i></li>
										<li class="icons-list-item"><i class="fab fa-reddit-alien"></i></li>
										<li class="icons-list-item"><i class="fab fa-reddit-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-registered"></i></li>
										<li class="icons-list-item"><i class="fab fa-renren"></i></li>
										<li class="icons-list-item"><i class="fa fa-reply" ></i></li>
										<li class="icons-list-item"><i class="fa fa-reply-all"></i></li>
										<li class="icons-list-item"><i class="fa fa-retweet"></i></li>
										<li class="icons-list-item"><i class="fa fa-road"></i></li>
										<li class="icons-list-item"><i class="fa fa-rocket"></i></li>
										<li class="icons-list-item"><i class="fa fa-rss"></i></li>
										<li class="icons-list-item"><i class="fa fa-rss-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-safari"></i></li>
										<li class="icons-list-item"><i class="fa fa-save"></i></li>
										<li class="icons-list-item"><i class="fab fa-scribd"></i></li>
										<li class="icons-list-item"><i class="fa fa-search"></i></li>
										<li class="icons-list-item"><i class="fa fa-search-minus"></i></li>
										<li class="icons-list-item"><i class="fa fa-search-plus"></i></li>
										<li class="icons-list-item"><i class="fab fa-sellsy"></i></li>
										<li class="icons-list-item"><i class="fa fa-server"></i></li>
										<li class="icons-list-item"><i class="fa fa-share" ></i></li>
										<li class="icons-list-item"><i class="fa fa-share-alt"></i></li>
										<li class="icons-list-item"><i class="fa fa-share-alt-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-share-square"></i></li>
										<li class="icons-list-item"><i class="far fa-share-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-ship"></i></li>
										<li class="icons-list-item"><i class="fab fa-shirtsinbulk"></i></li>
										<li class="icons-list-item"><i class="fa fa-shopping-bag" ></i></li>
										<li class="icons-list-item"><i class="fa fa-shopping-basket" ></i></li>
										<li class="icons-list-item"><i class="fa fa-shopping-cart"></i></li>
										<li class="icons-list-item"><i class="fa fa-shower"></i></li>
										<li class="icons-list-item"><i class="fa fa-sign-language"></i></li>
										<li class="icons-list-item"><i class="fa fa-signal"></i></li>
										<li class="icons-list-item"><i class="fab fa-simplybuilt" ></i></li>
										<li class="icons-list-item"><i class="fa fa-sitemap"></i></li>
										<li class="icons-list-item"><i class="fab fa-skyatlas"></i></li>
										<li class="icons-list-item"><i class="fab fa-skype"></i></li>
										<li class="icons-list-item"><i class="fab fa-slack" ></i></li>
										<li class="icons-list-item"><i class="fab fa-slideshare"></i></li>
										<li class="icons-list-item"><i class="far fa-smile"></i></li>
										<li class="icons-list-item"><i class="fab fa-snapchat"></i></li>
										<li class="icons-list-item"><i class="fab fa-snapchat-ghost"></i></li>
										<li class="icons-list-item"><i class="fab fa-snapchat-square"></i></li>
										<li class="icons-list-item"><i class="far fa-snowflake"></i></li>
										<li class="icons-list-item"><i class="fa fa-sort"></i></li>
										<li class="icons-list-item"><i class="fa fa-sort-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-sort-up"></i></li>
										<li class="icons-list-item"><i class="fab fa-soundcloud"></i></li>
										<li class="icons-list-item"><i class="fa fa-space-shuttle"></i></li>
										<li class="icons-list-item"><i class="fa fa-spinner"></i></li>
										<li class="icons-list-item"><i class="fab fa-spotify"></i></li>
										<li class="icons-list-item"><i class="fa fa-square"></i></li>
										<li class="icons-list-item"><i class="far fa-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-stack-exchange"></i></li>
										<li class="icons-list-item"><i class="fab fa-stack-overflow"></i></li>
										<li class="icons-list-item"><i class="fa fa-star"></i></li>
										<li class="icons-list-item"><i class="fa fa-star-half" ></i></li>
										<li class="icons-list-item"><i class="fas fa-star-half-alt"></i></li>
										<li class="icons-list-item"><i class="far fa-star-half"></i></li>
										<li class="icons-list-item"><i class="far fa-star"></i></li>
										<li class="icons-list-item"><i class="fab fa-steam"></i></li>
										<li class="icons-list-item"><i class="fab fa-steam-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-step-backward" ></i></li>
										<li class="icons-list-item"><i class="fa fa-step-forward"></i></li>
										<li class="icons-list-item"><i class="fa fa-stethoscope"></i></li>
										<li class="icons-list-item"><i class="fa fa-sticky-note"></i></li>
										<li class="icons-list-item"><i class="far fa-sticky-note"></i></li>
										<li class="icons-list-item"><i class="fa fa-stop"></i></li>
										<li class="icons-list-item"><i class="fa fa-stop-circle" ></i></li>
										<li class="icons-list-item"><i class="far fa-stop-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-street-view" ></i></li>
										<li class="icons-list-item"><i class="fa fa-strikethrough"></i></li>
										<li class="icons-list-item"><i class="fab fa-stumbleupon"></i></li>
										<li class="icons-list-item"><i class="fab fa-stumbleupon-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-subscript"></i></li>
										<li class="icons-list-item"><i class="fa fa-subway" ></i></li>
										<li class="icons-list-item"><i class="fa fa-suitcase"></i></li>
										<li class="icons-list-item"><i class="far fa-sun"></i></li>
										<li class="icons-list-item"><i class="fab fa-superpowers" ></i></li>
										<li class="icons-list-item"><i class="fa fa-superscript"></i></li>
										<li class="icons-list-item"><i class="fa fa-table" ></i></li>
										<li class="icons-list-item"><i class="fa fa-tablet"></i></li>
										<li class="icons-list-item"><i class="fa fa-tag" ></i></li>
										<li class="icons-list-item"><i class="fa fa-tags" ></i></li>
										<li class="icons-list-item"><i class="fa fa-tasks" ></i></li>
										<li class="icons-list-item"><i class="fa fa-taxi"></i></li>
										<li class="icons-list-item"><i class="fab fa-telegram" ></i></li>
										<li class="icons-list-item"><i class="fab fa-tencent-weibo" ></i></li>
										<li class="icons-list-item"><i class="fa fa-terminal" ></i></li>
										<li class="icons-list-item"><i class="fa fa-text-height"></i></li>
										<li class="icons-list-item"><i class="fa fa-text-width"></i></li>
										<li class="icons-list-item"><i class="fa fa-th"></i></li>
										<li class="icons-list-item"><i class="fa fa-th-large"></i></li>
										<li class="icons-list-item"><i class="fa fa-th-list"></i></li>
										<li class="icons-list-item"><i class="fab fa-themeisle"></i></li>
										<li class="icons-list-item"><i class="fa fa-thermometer"></i></li>
										<li class="icons-list-item"><i class="fa fa-thermometer-full" ></i></li>
										<li class="icons-list-item"><i class="fa fa-thermometer-half"></i></li>
										<li class="icons-list-item"><i class="fa fa-thermometer-quarter" ></i></li>
										<li class="icons-list-item"><i class="fa fa-thermometer-three-quarters"></i></li>
										<li class="icons-list-item"><i class="fa fa-thumbs-down" ></i></li>
										<li class="icons-list-item"><i class="far fa-thumbs-down"></i></li>
										<li class="icons-list-item"><i class="far fa-thumbs-up" ></i></li>
										<li class="icons-list-item"><i class="fa fa-thumbs-up"></i></li>
										<li class="icons-list-item"><i class="fa fa-times"></i></li>
										<li class="icons-list-item"><i class="fa fa-times-circle"></i></li>
										<li class="icons-list-item"><i class="far fa-times-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-tint" ></i></li>
										<li class="icons-list-item"><i class="fa fa-toggle-off"></i></li>
										<li class="icons-list-item"><i class="fa fa-toggle-on"></i></li>
										<li class="icons-list-item"><i class="fa fa-trademark" ></i></li>
										<li class="icons-list-item"><i class="fa fa-train" ></i></li>
										<li class="icons-list-item"><i class="fa fa-transgender"></i></li>
										<li class="icons-list-item"><i class="fa fa-transgender-alt"></i></li>
										<li class="icons-list-item"><i class="fa fa-trash"></i></li>
										<li class="icons-list-item"><i class="far fa-trash-alt" ></i></li>
										<li class="icons-list-item"><i class="fa fa-tree" ></i></li>
										<li class="icons-list-item"><i class="fab fa-trello"></i></li>
										<li class="icons-list-item"><i class="fab fa-tripadvisor"></i></li>
										<li class="icons-list-item"><i class="fa fa-trophy"></i></li>
										<li class="icons-list-item"><i class="fa fa-truck"></i></li>
										<li class="icons-list-item"><i class="fa fa-tty"></i></li>
										<li class="icons-list-item"><i class="fab fa-tumblr"></i></li>
										<li class="icons-list-item"><i class="fab fa-tumblr-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-tv"></i></li>
										<li class="icons-list-item"><i class="fab fa-twitch"></i></li>
										<li class="icons-list-item"><i class="fab fa-twitter"></i></li>
										<li class="icons-list-item"><i class="fab fa-twitter-square"></i></li>
										<li class="icons-list-item"><i class="fa fa-umbrella" ></i></li>
										<li class="icons-list-item"><i class="fa fa-underline"></i></li>
										<li class="icons-list-item"><i class="fa fa-undo"></i></li>
										<li class="icons-list-item"><i class="fa fa-universal-access"></i></li>
										<li class="icons-list-item"><i class="fa fa-university"></i></li>
										<li class="icons-list-item"><i class="fa fa-unlink" ></i></li>
										<li class="icons-list-item"><i class="fa fa-unlock"></i></li>
										<li class="icons-list-item"><i class="fa fa-unlock-alt"></i></li>
										<li class="icons-list-item"><i class="fa fa-upload"></i></li>
										<li class="icons-list-item"><i class="fab fa-usb" ></i></li>
										<li class="icons-list-item"><i class="fa fa-user"></i></li>
										<li class="icons-list-item"><i class="fa fa-user-circle"></i></li>
										<li class="icons-list-item"><i class="far fa-user-circle"></i></li>
										<li class="icons-list-item"><i class="fa fa-user-md"></i></li>
										<li class="icons-list-item"><i class="far fa-user"></i></li>
										<li class="icons-list-item"><i class="fa fa-user-plus"></i></li>
										<li class="icons-list-item"><i class="fa fa-user-secret"></i></li>
										<li class="icons-list-item"><i class="fa fa-user-times" ></i></li>
										<li class="icons-list-item"><i class="fa fa-users"></i></li>
										<li class="icons-list-item"><i class="fa fa-venus"></i></li>
										<li class="icons-list-item"><i class="fa fa-venus-double"></i></li>
										<li class="icons-list-item"><i class="fa fa-venus-mars"></i></li>
										<li class="icons-list-item"><i class="fab fa-viacoin" ></i></li>
										<li class="icons-list-item"><i class="fab fa-viadeo"></i></li>
										<li class="icons-list-item"><i class="fab fa-viadeo-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-vimeo"></i></li>
										<li class="icons-list-item"><i class="fab fa-vimeo-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-vine"></i></li>
										<li class="icons-list-item"><i class="fab fa-vk" ></i></li>
										<li class="icons-list-item"><i class="fa fa-volume-down"></i></li>
										<li class="icons-list-item"><i class="fa fa-volume-off"></i></li>
										<li class="icons-list-item"><i class="fa fa-volume-up"></i></li>
										<li class="icons-list-item"><i class="fab fa-weibo"></i></li>
										<li class="icons-list-item"><i class="fab fa-weixin"></i></li>
										<li class="icons-list-item"><i class="fab fa-whatsapp"></i></li>
										<li class="icons-list-item"><i class="fa fa-wheelchair"></i></li>
										<li class="icons-list-item"><i class="fa fa-wifi"></i></li>
										<li class="icons-list-item"><i class="fab fa-wikipedia-w" ></i></li>
										<li class="icons-list-item"><i class="fa fa-window-close"></i></li>
										<li class="icons-list-item"><i class="far fa-window-close"></i></li>
										<li class="icons-list-item"><i class="fa fa-window-maximize"></i></li>
										<li class="icons-list-item"><i class="fa fa-window-minimize"></i></li>
										<li class="icons-list-item"><i class="fa fa-window-restore"></i></li>
										<li class="icons-list-item"><i class="fab fa-windows"></i></li>
										<li class="icons-list-item"><i class="fab fa-wordpress"></i></li>
										<li class="icons-list-item"><i class="fab fa-wpbeginner"></i></li>
										<li class="icons-list-item"><i class="fab fa-wpexplorer"></i></li>
										<li class="icons-list-item"><i class="fab fa-wpforms"></i></li>
										<li class="icons-list-item"><i class="fa fa-wrench"></i></li>
										<li class="icons-list-item"><i class="fab fa-xing"></i></li>
										<li class="icons-list-item"><i class="fab fa-xing-square"></i></li>
										<li class="icons-list-item"><i class="fab fa-y-combinator"></i></li>
										<li class="icons-list-item"><i class="fab fa-yahoo"></i></li>
										<li class="icons-list-item"><i class="fab fa-yelp"></i></li>
										<li class="icons-list-item"><i class="fab fa-yoast"></i></li>
										<li class="icons-list-item"><i class="fab fa-youtube" ></i></li>
										<li class="icons-list-item"><i class="fab fa-youtube-square"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Ionicons Icons</h6>
									<p class="text-muted mb-2 card-sub-title">Premium designed icons for use in web, iOS, Android, and desktop apps. Support for SVG and web font.<span class="">See more Ionicons icons at <a href="https://ionicons.com" target="_blank">Ionicons</a></span></p>
									<p><code>&lt;i class="icon ion-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="icon ion-md-alarm"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-chatboxes"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-copy"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-cube"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-filing"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-eye"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-globe"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-images"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-laptop"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-paper"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-paper-plane"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-pricetags"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-settings"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-stats"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-share-alt"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-rocket"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-rainy"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-print"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-pie"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-mic"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-locate"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-list-box"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-add"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-add-circle"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-airplane"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-alert"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-albums"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-analytics"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-aperture"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-appstore"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-archive"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-arrow-back"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-arrow-down"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-arrow-dropdown-circle"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-arrow-dropleft"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-arrow-dropleft-circle"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-arrow-dropdown"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-at"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-backspace"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-barcode"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-basket"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-basketball"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-battery-charging"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-battery-dead"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-battery-full"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-sad"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-save"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-school"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-search"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-send"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-settings"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-share"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-share-alt"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-shirt"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-shuffle"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-skip-backward"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-skip-forward"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-snow"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-speedometer"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-square"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-star"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-star-half"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-star-outline"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-stats"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-stopwatch"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-subway"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-sunny"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-switch"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-sync"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-tablet-landscape"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-tablet-portrait"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-tennisball"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-text"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-thermometer"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-thumbs-down"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-thumbs-up"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-thunderstorm"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-time"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-timer"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-today"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-train"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-transgender"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-trash"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-trending-down"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-trending-up"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-trophy"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-tv"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-umbrella"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-undo"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-unlock"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-videocam"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-volume-high"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-volume-low"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-volume-mute"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-volume-off"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-walk"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-wallet"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-warning"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-watch"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-water"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-wifi"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-wine"></i></li>
										<li class="icons-list-item"><i class="icon ion-md-woman"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-attach"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-boat"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bluetooth"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bonfire"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-book"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bookmark"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bookmarks"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bowtie"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-briefcase"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-browsers"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-brush"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bug"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-build"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bulb"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-bus"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-business"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cafe"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-calculator"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-calendar"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-call"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-camera"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-car"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-card"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cart"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cash"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cellular"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-chatboxes"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-chatbubbles"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-checkbox"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-checkbox-outline"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-checkmark"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-checkmark-circle"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-checkmark-circle-outline"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-clipboard"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-clock"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-close"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-close-circle"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-close-circle-outline"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloud"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloud-circle"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloud-done"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloud-download"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloud-outline"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloud-upload"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloudy"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cloudy-night"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-code"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-code-download"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-code-working"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cog"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-color-fill"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-color-filter"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-color-palette"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-color-wand"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-compass"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-construct"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-contact"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-contacts"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-contract"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-contrast"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-copy"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-create"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-crop"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cube"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-cut"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-desktop"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-disc"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-document"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-done-all"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-download"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-easel"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-egg"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-exit"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-expand"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-eye"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-eye-off"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-fastforward"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-female"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-filing"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-film"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-finger-print"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-fitness"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-flag"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-flame"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-flash"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-flash-off"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-flashlight"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-flask"></i></li>
										<li class="icons-list-item"><i class="icon ion-ios-flower"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Line Awesome</h6>
									<p class="text-muted mb-2 card-sub-title">Replace Font Awesome with modern line icons with a single line of code.<span class="">See more Line Awesome icons at <a href="https://icons8.com/line-awesome" target="_blank">Line Awesome</a></span></p>
									<p><code>&lt;i class="la la-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="la la-archive"></i></li>
										<li class="icons-list-item"><i class="la la-bar-chart"></i></li>
										<li class="icons-list-item"><i class="la la-bell"></i></li>
										<li class="icons-list-item"><i class="la la-bug"></i></li>
										<li class="icons-list-item"><i class="la la-calendar"></i></li>
										<li class="icons-list-item"><i class="la la-camera"></i></li>
										<li class="icons-list-item"><i class="la la-cog"></i></li>
										<li class="icons-list-item"><i class="la la-cube"></i></li>
										<li class="icons-list-item"><i class="la la-envelope"></i></li>
										<li class="icons-list-item"><i class="la la-film"></i></li>
										<li class="icons-list-item"><i class="la la-folder"></i></li>
										<li class="icons-list-item"><i class="la la-gift"></i></li>
										<li class="icons-list-item"><i class="la la-home"></i></li>
										<li class="icons-list-item"><i class="la la-inbox"></i></li>
										<li class="icons-list-item"><i class="la la-image"></i></li>
										<li class="icons-list-item"><i class="la la-life-buoy"></i></li>
										<li class="icons-list-item"><i class="la la-lock"></i></li>
										<li class="icons-list-item"><i class="la la-microphone"></i></li>
										<li class="icons-list-item"><i class="la la-phone"></i></li>
										<li class="icons-list-item"><i class="la la-pie-chart"></i></li>
										<li class="icons-list-item"><i class="la la-rocket"></i></li>
										<li class="icons-list-item"><i class="la la-ship"></i></li>
										<li class="icons-list-item"><i class="la la-sticky-note"></i></li>
										<li class="icons-list-item"><i class="la la-tags"></i></li>
										<li class="icons-list-item"><i class="la la-tags"></i></li>
										<li class="icons-list-item"><i class="lab la-accessible-icon"></i></li>
										<li class="icons-list-item"><i class="las la-american-sign-language-interpreting"></i></li>
										<li class="icons-list-item"><i class="las la-assistive-listening-systems"></i></li>
										<li class="icons-list-item"><i class="las la-audio-description"></i></li>
										<li class="icons-list-item"><i class="las la-deaf"></i></li>
										<li class="icons-list-item"><i class="las la-universal-access"></i></li>
										<li class="icons-list-item"><i class="las la-tty"></i></li>
										<li class="icons-list-item"><i class="las la-phone-volume"></i></li>
										<li class="icons-list-item"><i class="las la-wheelchair"></i></li>
										<li class="icons-list-item"><i class="las la-bell"></i></li>
										<li class="icons-list-item"><i class="las la-bell-slash"></i></li>
										<li class="icons-list-item"><i class="las la-exclamation"></i></li>
										<li class="icons-list-item"><i class="las la-exclamation-circle"></i></li>
										<li class="icons-list-item"><i class="las la-exclamation-triangle"></i></li>
										<li class="icons-list-item"><i class="las la-radiation"></i></li>
										<li class="icons-list-item"><i class="las la-radiation-alt"></i></li>
										<li class="icons-list-item"><i class="las la-paw"></i></li>
										<li class="icons-list-item"><i class="las la-angle-double-down"></i></li>
										<li class="icons-list-item"><i class="las la-angle-double-up"></i></li>
										<li class="icons-list-item"><i class="las la-angle-double-left"></i></li>
										<li class="icons-list-item"><i class="las la-angle-double-right"></i></li>
										<li class="icons-list-item"><i class="las la-angle-down"></i></li>
										<li class="icons-list-item"><i class="las la-angle-up"></i></li>
										<li class="icons-list-item"><i class="las la-angle-left"></i></li>
										<li class="icons-list-item"><i class="las la-angle-right"></i></li>
										<li class="icons-list-item"><i class="lar la-arrow-alt-circle-down"></i></li>
										<li class="icons-list-item"><i class="lar la-arrow-alt-circle-up"></i></li>
										<li class="icons-list-item"><i class="lar la-arrow-alt-circle-left"></i></li>
										<li class="icons-list-item"><i class="lar la-arrow-alt-circle-right"></i></li>
										<li class="icons-list-item"><i class="las la-arrow-down"></i></li>
										<li class="icons-list-item"><i class="las la-arrow-up"></i></li>
										<li class="icons-list-item"><i class="las la-arrow-left"></i></li>
										<li class="icons-list-item"><i class="las la-arrow-right"></i></li>
										<li class="icons-list-item"><i class="las la-arrows-alt"></i></li>
										<li class="icons-list-item"><i class="las la-arrows-alt-h"></i></li>
										<li class="icons-list-item"><i class="las la-arrows-alt-v"></i></li>
										<li class="icons-list-item"><i class="las la-caret-down"></i></li>
										<li class="icons-list-item"><i class="las la-caret-up"></i></li>
										<li class="icons-list-item"><i class="las la-caret-up"></i></li>
										<li class="icons-list-item"><i class="las la-caret-left"></i></li>
										<li class="icons-list-item"><i class="las la-caret-right"></i></li>
										<li class="icons-list-item"><i class="las la-caret-square-down"></i></li>
										<li class="icons-list-item"><i class="las la-caret-square-up"></i></li>
										<li class="icons-list-item"><i class="las la-caret-square-left"></i></li>
										<li class="icons-list-item"><i class="las la-caret-square-right"></i></li>
										<li class="icons-list-item"><i class="las la-exchange-alt"></i></li>
										<li class="icons-list-item"><i class="las la-hand-point-down"></i></li>
										<li class="icons-list-item"><i class="las la-hand-point-up"></i></li>
										<li class="icons-list-item"><i class="las la-hand-point-left"></i></li>
										<li class="icons-list-item"><i class="las la-hand-point-right"></i></li>
										<li class="icons-list-item"><i class="las la-music"></i></li>
										<li class="icons-list-item"><i class="las la-volume-off"></i></li>
										<li class="icons-list-item"><i class="las la-volume-up"></i></li>
										<li class="icons-list-item"><i class="las la-headphones"></i></li>
										<li class="icons-list-item"><i class="las la-video"></i></li>
										<li class="icons-list-item"><i class="las la-car"></i></li>
										<li class="icons-list-item"><i class="las la-campground"></i></li>
										<li class="icons-list-item"><i class="las la-cloud-sun"></i></li>
										<li class="icons-list-item"><i class="las la-tractor"></i></li>
										<li class="icons-list-item"><i class="lab la-codepen"></i></li>
										<li class="icons-list-item"><i class="lab la-hotjar"></i></li>
										<li class="icons-list-item"><i class="las la-city"></i></li>
										<li class="icons-list-item"><i class="las la-hospital"></i></li>
										<li class="icons-list-item"><i class="las la-store"></i></li>
										<li class="icons-list-item"><i class="las la-industry"></i></li>
										<li class="icons-list-item"><i class="las la-address-card"></i></li>
										<li class="icons-list-item"><i class="las la-balance-scale-left"></i></li>
										<li class="icons-list-item"><i class="las la-briefcase"></i></li>
										<li class="icons-list-item"><i class="las la-bullhorn"></i></li>
										<li class="icons-list-item"><i class="las la-envelope"></i></li>
										<li class="icons-list-item"><i class="las la-paste"></i></li>
										<li class="icons-list-item"><i class="las la-envelope-open"></i></li>
										<li class="icons-list-item"><i class="las la-compass"></i></li>
										<li class="icons-list-item"><i class="las la-tree"></i></li>
										<li class="icons-list-item"><i class="las la-dollar-sign"></i></li>
										<li class="icons-list-item"><i class="las la-donate"></i></li>
										<li class="icons-list-item"><i class="las la-gift"></i></li>
										<li class="icons-list-item"><i class="las la-handshake"></i></li>
										<li class="icons-list-item"><i class="las la-comment"></i></li>
										<li class="icons-list-item"><i class="las la-comment-alt"></i></li>
										<li class="icons-list-item"><i class="las la-sms"></i></li>
										<li class="icons-list-item"><i class="las la-video"></i></li>
										<li class="icons-list-item"><i class="las la-video-slash"></i></li>
										<li class="icons-list-item"><i class="las la-gamepad"></i></li>
										<li class="icons-list-item"><i class="las la-cookie"></i></li>
										<li class="icons-list-item"><i class="las la-cookie-bite"></i></li>
										<li class="icons-list-item"><i class="las la-archive"></i></li>
										<li class="icons-list-item"><i class="las la-bath"></i></li>
										<li class="icons-list-item"><i class="las la-bug"></i></li>
										<li class="icons-list-item"><i class="las la-code"></i></li>
										<li class="icons-list-item"><i class="las la-file-code"></i></li>
										<li class="icons-list-item"><i class="las la-filter"></i></li>
										<li class="icons-list-item"><i class="las la-fire-extinguisher"></i></li>
										<li class="icons-list-item"><i class="las la-terminal"></i></li>
										<li class="icons-list-item"><i class="las la-sitemap"></i></li>
										<li class="icons-list-item"><i class="las la-folder"></i></li>
										<li class="icons-list-item"><i class="las la-address-book"></i></li>
										<li class="icons-list-item"><i class="las la-address-card"></i></li>
										<li class="icons-list-item"><i class="las la-envelope-square"></i></li>
										<li class="icons-list-item"><i class="las la-rss"></i></li>
										<li class="icons-list-item"><i class="las la-wifi"></i></li>
										<li class="icons-list-item"><i class="las la-inbox"></i></li>
										<li class="icons-list-item"><i class="las la-database"></i></li>
										<li class="icons-list-item"><i class="las la-desktop"></i></li>
										<li class="icons-list-item"><i class="las la-download"></i></li>
										<li class="icons-list-item"><i class="las la-hdd"></i></li>
										<li class="icons-list-item"><i class="las la-headphones"></i></li>
										<li class="icons-list-item"><i class="las la-print"></i></li>
										<li class="icons-list-item"><i class="las la-save"></i></li>
										<li class="icons-list-item"><i class="las la-brush"></i></li>
										<li class="icons-list-item"><i class="las la-drafting-compass"></i></li>
										<li class="icons-list-item"><i class="las la-pencil-ruler"></i></li>
										<li class="icons-list-item"><i class="las la-hammer"></i></li>
										<li class="icons-list-item"><i class="las la-toolbox"></i></li>
										<li class="icons-list-item"><i class="lab la-bitcoin"></i></li>
										<li class="icons-list-item"><i class="lab la-gg"></i></li>
										<li class="icons-list-item"><i class="las la-money-check-alt"></i></li>
										<li class="icons-list-item"><i class="lab la-ethereum"></i></li>
										<li class="icons-list-item"><i class="las la-calendar-check"></i></li>
										<li class="icons-list-item"><i class="las la-calendar"></i></li>
										<li class="icons-list-item"><i class="las la-calendar-alt"></i></li>
										<li class="icons-list-item"><i class="las la-calendar-check"></i></li>
										<li class="icons-list-item"><i class="las la-hourglass"></i></li>
										<li class="icons-list-item"><i class="las la-stopwatch"></i></li>
										<li class="icons-list-item"><i class="las la-eraser"></i></li>
										<li class="icons-list-item"><i class="las la-crosshairs"></i></li>
										<li class="icons-list-item"><i class="las la-brush"></i></li>
										<li class="icons-list-item"><i class="las la-pencil-ruler"></i></li>
										<li class="icons-list-item"><i class="las la-palette"></i></li>
										<li class="icons-list-item"><i class="las la-paste"></i></li>
										<li class="icons-list-item"><i class="las la-fill-drip"></i></li>
										<li class="icons-list-item"><i class="las la-eye"></i></li>
										<li class="icons-list-item"><i class="las la-tint"></i></li>
										<li class="icons-list-item"><i class="las la-align-center"></i></li>
										<li class="icons-list-item"><i class="las la-clipboard"></i></li>
										<li class="icons-list-item"><i class="las la-file-alt"></i></li>
										<li class="icons-list-item"><i class="las la-heading"></i></li>
										<li class="icons-list-item"><i class="las la-trash"></i></li>
										<li class="icons-list-item"><i class="las la-trash-alt"></i></li>
										<li class="icons-list-item"><i class="las la-trash-restore-alt"></i></li>
										<li class="icons-list-item"><i class="las la-tools"></i></li>
										<li class="icons-list-item"><i class="las la-unlink"></i></li>
										<li class="icons-list-item"><i class="las la-graduation-cap"></i></li>
										<li class="icons-list-item"><i class="las la-school"></i></li>
										<li class="icons-list-item"><i class="las la-book-reader"></i></li>
										<li class="icons-list-item"><i class="las la-smile"></i></li>
										<li class="icons-list-item"><i class="las la-photo-video"></i></li>
										<li class="icons-list-item"><i class="las la-clone"></i></li>
										<li class="icons-list-item"><i class="las la-balance-scale"></i></li>
										<li class="icons-list-item"><i class="las la-bicycle"></i></li>
										<li class="icons-list-item"><i class="las la-burn"></i></li>
										<li class="icons-list-item"><i class="las la-dice-d6"></i></li>
										<li class="icons-list-item"><i class="lab la-xbox"></i></li>
										<li class="icons-list-item"><i class="las la-broom"></i></li>
										<li class="icons-list-item"><i class="las la-ambulance"></i></li>
										<li class="icons-list-item"><i class="las la-hospital"></i></li>
										<li class="icons-list-item"><i class="las la-stethoscope"></i></li>
										<li class="icons-list-item"><i class="las la-snowflake"></i></li>
										<li class="icons-list-item"><i class="las la-utensils"></i></li>
										<li class="icons-list-item"><i class="las la-adjust"></i></li>
										<li class="icons-list-item"><i class="las la-sliders-h"></i></li>
										<li class="icons-list-item"><i class="las la-award"></i></li>
										<li class="icons-list-item"><i class="las la-medal"></i></li>
										<li class="icons-list-item"><i class="las la-quote-left"></i></li>
										<li class="icons-list-item"><i class="las la-quote-left"></i></li>
										<li class="icons-list-item"><i class="las la-question-circle"></i></li>
										<li class="icons-list-item"><i class="las la-shield-alt"></i></li>
										<li class="icons-list-item"><i class="las la-trophy"></i></li>
										<li class="icons-list-item"><i class="las la-box"></i></li>
										<li class="icons-list-item"><i class="las la-boxes"></i></li>
										<li class="icons-list-item"><i class="las la-clipboard-list"></i></li>
										<li class="icons-list-item"><i class="las la-dolly"></i></li>
										<li class="icons-list-item"><i class="las la-ambulance"></i></li>
										<li class="icons-list-item"><i class="las la-flask"></i></li>
										<li class="icons-list-item"><i class="las la-life-ring"></i></li>
										<li class="icons-list-item"><i class="las la-ship"></i></li>
										<li class="icons-list-item"><i class="las la-umbrella"></i></li>
										<li class="icons-list-item"><i class="las la-tags"></i></li>
										<li class="icons-list-item"><i class="las la-shopping-basket"></i></li>
										<li class="icons-list-item"><i class="las la-shopping-cart"></i></li>
										<li class="icons-list-item"><i class="las la-shower"></i></li>
										<li class="icons-list-item"><i class="las la-suitcase"></i></li>
										<li class="icons-list-item"><i class="las la-compass"></i></li>
										<li class="icons-list-item"><i class="las la-poll"></i></li>
										<li class="icons-list-item"><i class="las la-mail-bulk"></i></li>
										<li class="icons-list-item"><i class="las la-ad"></i></li>
										<li class="icons-list-item"><i class="las la-search-dollar"></i></li>
										<li class="icons-list-item"><i class="las la-comment-dollar"></i></li>
										<li class="icons-list-item"><i class="las la-calculator"></i></li>
										<li class="icons-list-item"><i class="las la-radiation-alt"></i></li>
										<li class="icons-list-item"><i class="las la-microphone"></i></li>
										<li class="icons-list-item"><i class="las la-anchor"></i></li>
										<li class="icons-list-item"><i class="las la-cogs"></i></li>
										<li class="icons-list-item"><i class="las la-gifts"></i></li>
										<li class="icons-list-item"><i class="las la-globe"></i></li>
										<li class="icons-list-item"><i class="las la-cogs"></i></li>
										<li class="icons-list-item"><i class="lab la-dropbox"></i></li>
										<li class="icons-list-item"><i class="lab la-cc-mastercard"></i></li>
										<li class="icons-list-item"><i class="las la-yin-yang"></i></li>
										<li class="icons-list-item"><i class="las la-birthday-cake"></i></li>
										<li class="icons-list-item"><i class="las la-thumbtack"></i></li>
										<li class="icons-list-item"><i class="las la-atom"></i></li>
										<li class="icons-list-item"><i class="las la-futbol"></i></li>
										<li class="icons-list-item"><i class="las la-signal"></i></li>
										<li class="icons-list-item"><i class="las la-futbol"></i></li>
										<li class="icons-list-item"><i class="las la-users-cog"></i></li>
										<li class="icons-list-item"><i class="las la-futbol"></i></li>
										<li class="icons-list-item"><i class="las la-users"></i></li>
										<li class="icons-list-item"><i class="las la-cloud"></i></li>
										<li class="icons-list-item"><i class="las la-bolt"></i></li>
										<li class="icons-list-item"><i class="las la-mitten"></i></li>
										<li class="icons-list-item"><i class="las la-microphone-alt"></i></li>
										<li class="icons-list-item"><i class="las la-asterisk"></i></li>
										<li class="icons-list-item"><i class="las la-folder"></i></li>
										<li class="icons-list-item"><i class="las la-user-lock"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Typicons Icons</h6>
									<p class="text-muted mb-2 card-sub-title">Typicons are free-to-use vector icons embedded in a webfont for easy use in any UI, whether it be on the web or in a native app.<span class="">See more Typicons icons at <a href="https://www.s-ings.com/typicons/" target="_blank">Typicons Icons</a></span></p>
									<p><code>&lt;i class="typcn typcn-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="typcn typcn-chart-pie-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chart-pie"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-left-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-left"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-right-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-right"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-clipboard"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cloud-storage"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cloud-storage-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-code-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-code"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-coffee"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cog-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cog"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-compass"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-contacts"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-credit-card"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-css3"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-database"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-delete-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-delete"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-desktop"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-laptop"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-phone"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-tablet"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-directions"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-divide-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-divide"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document-add"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document-delete"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document-text"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-download-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-download"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-dropbox"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-edit"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eject-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eject"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-equals-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-equals"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-export-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-export"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eye-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eye"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-feather"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-film"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-filter"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flag-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flag"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flash-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flash"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-children"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-merge"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-parallel"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-switch"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder-add"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder-delete"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder-open"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-gift"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-globe-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-globe"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-group-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-group"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-headphones"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart-full-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart-half-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-home-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-home"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-html5"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-image-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-image"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-infinity-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info-large-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info-large"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-input-checked-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-input-checked"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-key-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-key"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-keyboard"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-leaf"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lightbulb"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-link-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-link"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location-arrow-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location-arrow"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-closed-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-closed"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-open-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-open"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-mail"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-map"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-eject-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-eject"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-fast-forward-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-fast-forward"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-pause-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-pause"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play-reverse-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play-reverse"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-record-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-record"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-rewind-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-rewind"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-stop-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-stop"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-message-typing"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-message"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-messages"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-microphone-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-microphone"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-minus-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-minus"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-mortar-board"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-news"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-notes-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-notes"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pen"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pencil"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-phone-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-phone"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pi-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pi"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pin-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pin"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pipette"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plane-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plane"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plug"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plus-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plus"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-point-of-interest-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-point-of-interest"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-power-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-power"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-printer"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-puzzle-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-puzzle"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-radar-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-radar"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-refresh-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-refresh"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-rss-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-rss"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-scissors-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-scissors"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-shopping-bag"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-shopping-cart"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-at-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-dribbble-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-dribbble"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-facebook-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-facebook"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-flickr-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-flickr"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-github-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-github"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-google-plus-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-google-plus"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-instagram-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-instagram"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-last-fm-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-last-fm"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-linkedin-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-linkedin"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-pinterest-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-pinterest"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-skype-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-skype"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-tumbler-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-tumbler"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-twitter-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-twitter"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-vimeo-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-vimeo"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-youtube-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-youtube"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-alphabetically-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-alphabetically"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-numerically-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-numerically"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-spanner-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-spanner"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-spiral"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-full-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-half-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-half"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-starburst-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-starburst"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-stopwatch"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-support"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-tabs-outline"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Feather Icons</h6>
									<p class="text-muted mb-2 card-sub-title">Simply beautiful open source icons.<span class="">See more feather icons at <a href="https://feathericons.com/" target="_blank">Feather Icons</a></span></p>
									<p><code>&lt;i class="fe fe-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="fe fe-activity"></i></li>
										<li class="icons-list-item"><i class="fe fe-airplay"></i></li>
										<li class="icons-list-item"><i class="fe fe-alert-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-alert-octagon"></i></li>
										<li class="icons-list-item"><i class="fe fe-alert-triangle"></i></li>
										<li class="icons-list-item"><i class="fe fe-align-center"></i></li>
										<li class="icons-list-item"><i class="fe fe-align-justify"></i></li>
										<li class="icons-list-item"><i class="fe fe-align-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-align-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-anchor"></i></li>
										<li class="icons-list-item"><i class="fe fe-aperture"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-down"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-down-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-down-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-down-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-left-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-right-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-up"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-up-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-up-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-arrow-up-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-at-sign"></i></li>
										<li class="icons-list-item"><i class="fe fe-award"></i></li>
										<li class="icons-list-item"><i class="fe fe-pie-chart"></i></li>

										<li class="icons-list-item"><i class="fe fe-battery"></i></li>
										<li class="icons-list-item"><i class="fe fe-battery-charging"></i></li>
										<li class="icons-list-item"><i class="fe fe-bell"></i></li>
										<li class="icons-list-item"><i class="fe fe-bell-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-bluetooth"></i></li>
										<li class="icons-list-item"><i class="fe fe-bold"></i></li>
										<li class="icons-list-item"><i class="fe fe-book"></i></li>
										<li class="icons-list-item"><i class="fe fe-book-open"></i></li>
										<li class="icons-list-item"><i class="fe fe-bookmark"></i></li>
										<li class="icons-list-item"><i class="fe fe-box"></i></li>
										<li class="icons-list-item"><i class="fe fe-briefcase"></i></li>
										<li class="icons-list-item"><i class="fe fe-calendar"></i></li>
										<li class="icons-list-item"><i class="fe fe-camera"></i></li>
										<li class="icons-list-item"><i class="fe fe-camera-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-cast"></i></li>
										<li class="icons-list-item"><i class="fe fe-check"></i></li>
										<li class="icons-list-item"><i class="fe fe-check-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-check-square"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevron-down"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevron-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevron-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevron-up"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevrons-down"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevrons-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevrons-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-chevrons-up"></i></li>
										<li class="icons-list-item"><i class="fe fe-chrome"></i></li>
										<li class="icons-list-item"><i class="fe fe-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-clipboard"></i></li>
										<li class="icons-list-item"><i class="fe fe-clock"></i></li>
										<li class="icons-list-item"><i class="fe fe-cloud"></i></li>
										<li class="icons-list-item"><i class="fe fe-cloud-drizzle"></i></li>
										<li class="icons-list-item"><i class="fe fe-cloud-lightning"></i></li>
										<li class="icons-list-item"><i class="fe fe-cloud-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-cloud-rain"></i></li>
										<li class="icons-list-item"><i class="fe fe-cloud-snow"></i></li>
										<li class="icons-list-item"><i class="fe fe-code"></i></li>
										<li class="icons-list-item"><i class="fe fe-codepen"></i></li>
										<li class="icons-list-item"><i class="fe fe-command"></i></li>
										<li class="icons-list-item"><i class="fe fe-compass"></i></li>
										<li class="icons-list-item"><i class="fe fe-copy"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-down-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-down-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-left-down"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-left-up"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-right-down"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-right-up"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-up-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-corner-up-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-cpu"></i></li>
										<li class="icons-list-item"><i class="fe fe-credit-card"></i></li>
										<li class="icons-list-item"><i class="fe fe-crop"></i></li>
										<li class="icons-list-item"><i class="fe fe-crosshair"></i></li>
										<li class="icons-list-item"><i class="fe fe-database"></i></li>
										<li class="icons-list-item"><i class="fe fe-delete"></i></li>
										<li class="icons-list-item"><i class="fe fe-disc"></i></li>
										<li class="icons-list-item"><i class="fe fe-dollar-sign"></i></li>
										<li class="icons-list-item"><i class="fe fe-download"></i></li>
										<li class="icons-list-item"><i class="fe fe-download-cloud"></i></li>
										<li class="icons-list-item"><i class="fe fe-droplet"></i></li>
										<li class="icons-list-item"><i class="fe fe-edit"></i></li>
										<li class="icons-list-item"><i class="fe fe-edit-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-edit-3"></i></li>
										<li class="icons-list-item"><i class="fe fe-external-link"></i></li>
										<li class="icons-list-item"><i class="fe fe-eye"></i></li>
										<li class="icons-list-item"><i class="fe fe-eye-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-facebook"></i></li>
										<li class="icons-list-item"><i class="fe fe-fast-forward"></i></li>
										<li class="icons-list-item"><i class="fe fe-feather"></i></li>
										<li class="icons-list-item"><i class="fe fe-file"></i></li>
										<li class="icons-list-item"><i class="fe fe-file-minus"></i></li>
										<li class="icons-list-item"><i class="fe fe-file-plus"></i></li>
										<li class="icons-list-item"><i class="fe fe-file-text"></i></li>
										<li class="icons-list-item"><i class="fe fe-film"></i></li>
										<li class="icons-list-item"><i class="fe fe-filter"></i></li>
										<li class="icons-list-item"><i class="fe fe-flag"></i></li>
										<li class="icons-list-item"><i class="fe fe-folder"></i></li>
										<li class="icons-list-item"><i class="fe fe-folder-minus"></i></li>
										<li class="icons-list-item"><i class="fe fe-folder-plus"></i></li>
										<li class="icons-list-item"><i class="fe fe-git-branch"></i></li>
										<li class="icons-list-item"><i class="fe fe-git-commit"></i></li>
										<li class="icons-list-item"><i class="fe fe-git-merge"></i></li>
										<li class="icons-list-item"><i class="fe fe-git-pull-request"></i></li>
										<li class="icons-list-item"><i class="fe fe-github" ></i></li>
										<li class="icons-list-item"><i class="fe fe-gitlab" ></i></li>
										<li class="icons-list-item"><i class="fe fe-globe" ></i></li>
										<li class="icons-list-item"><i class="fe fe-grid"></i></li>
										<li class="icons-list-item"><i class="fe fe-hard-drive"></i></li>
										<li class="icons-list-item"><i class="fe fe-hash"></i></li>
										<li class="icons-list-item"><i class="fe fe-headphones"></i></li>
										<li class="icons-list-item"><i class="fe fe-heart"></i></li>
										<li class="icons-list-item"><i class="fe fe-help-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-home"></i></li>
										<li class="icons-list-item"><i class="fe fe-image"></i></li>
										<li class="icons-list-item"><i class="fe fe-inbox"></i></li>
										<li class="icons-list-item"><i class="fe fe-info"></i></li>
										<li class="icons-list-item"><i class="fe fe-instagram"></i></li>
										<li class="icons-list-item"><i class="fe fe-italic"></i></li>
										<li class="icons-list-item"><i class="fe fe-layers"></i></li>
										<li class="icons-list-item"><i class="fe fe-layout"></i></li>
										<li class="icons-list-item"><i class="fe fe-life-buoy"></i></li>
										<li class="icons-list-item"><i class="fe fe-link"></i></li>
										<li class="icons-list-item"><i class="fe fe-link-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-linkedin"></i></li>
										<li class="icons-list-item"><i class="fe fe-list"></i></li>
										<li class="icons-list-item"><i class="fe fe-loader"></i></li>
										<li class="icons-list-item"><i class="fe fe-lock"></i></li>
										<li class="icons-list-item"><i class="fe fe-log-in"></i></li>
										<li class="icons-list-item"><i class="fe fe-log-out"></i></li>
										<li class="icons-list-item"><i class="fe fe-mail"></i></li>
										<li class="icons-list-item"><i class="fe fe-map"></i></li>
										<li class="icons-list-item"><i class="fe fe-map-pin"></i></li>
										<li class="icons-list-item"><i class="fe fe-maximize"></i></li>
										<li class="icons-list-item"><i class="fe fe-maximize-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-menu"></i></li>
										<li class="icons-list-item"><i class="fe fe-message-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-message-square"></i></li>
										<li class="icons-list-item"><i class="fe fe-mic"></i></li>
										<li class="icons-list-item"><i class="fe fe-mic-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-minimize"></i></li>
										<li class="icons-list-item"><i class="fe fe-minimize-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-minus"></i></li>
										<li class="icons-list-item"><i class="fe fe-minus-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-minus-square"></i></li>
										<li class="icons-list-item"><i class="fe fe-monitor"></i></li>
										<li class="icons-list-item"><i class="fe fe-moon"></i></li>
										<li class="icons-list-item"><i class="fe fe-more-horizontal"></i></li>
										<li class="icons-list-item"><i class="fe fe-more-vertical"></i></li>
										<li class="icons-list-item"><i class="fe fe-move"></i></li>
										<li class="icons-list-item"><i class="fe fe-music"></i></li>
										<li class="icons-list-item"><i class="fe fe-navigation"></i></li>
										<li class="icons-list-item"><i class="fe fe-navigation-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-octagon"></i></li>
										<li class="icons-list-item"><i class="fe fe-package"></i></li>
										<li class="icons-list-item"><i class="fe fe-paperclip"></i></li>
										<li class="icons-list-item"><i class="fe fe-pause"></i></li>
										<li class="icons-list-item"><i class="fe fe-pause-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-percent"></i></li>
										<li class="icons-list-item"><i class="fe fe-phone"></i></li>
										<li class="icons-list-item"><i class="fe fe-phone-call"></i></li>
										<li class="icons-list-item"><i class="fe fe-phone-forwarded"></i></li>
										<li class="icons-list-item"><i class="fe fe-phone-incoming"></i></li>
										<li class="icons-list-item"><i class="fe fe-phone-missed"></i></li>
										<li class="icons-list-item"><i class="fe fe-phone-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-phone-outgoing"></i></li>
										<li class="icons-list-item"><i class="fe fe-pie-chart"></i></li>
										<li class="icons-list-item"><i class="fe fe-play"></i></li>
										<li class="icons-list-item"><i class="fe fe-play-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-plus"></i></li>
										<li class="icons-list-item"><i class="fe fe-plus-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-plus-square"></i></li>
										<li class="icons-list-item"><i class="fe fe-pocket"></i></li>
										<li class="icons-list-item"><i class="fe fe-power"></i></li>
										<li class="icons-list-item"><i class="fe fe-printer"></i></li>
										<li class="icons-list-item"><i class="fe fe-radio"></i></li>
										<li class="icons-list-item"><i class="fe fe-refresh-ccw"></i></li>
										<li class="icons-list-item"><i class="fe fe-refresh-cw"></i></li>
										<li class="icons-list-item"><i class="fe fe-repeat"></i></li>
										<li class="icons-list-item"><i class="fe fe-rewind"></i></li>
										<li class="icons-list-item"><i class="fe fe-rotate-ccw"></i></li>
										<li class="icons-list-item"><i class="fe fe-rotate-cw"></i></li>
										<li class="icons-list-item"><i class="fe fe-rss"></i></li>
										<li class="icons-list-item"><i class="fe fe-save"></i></li>
										<li class="icons-list-item"><i class="fe fe-scissors"></i></li>
										<li class="icons-list-item"><i class="fe fe-search"></i></li>
										<li class="icons-list-item"><i class="fe fe-send"></i></li>
										<li class="icons-list-item"><i class="fe fe-server"></i></li>
										<li class="icons-list-item"><i class="fe fe-settings"></i></li>
										<li class="icons-list-item"><i class="fe fe-share"></i></li>
										<li class="icons-list-item"><i class="fe fe-share-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-shield"></i></li>
										<li class="icons-list-item"><i class="fe fe-shield-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-shopping-bag"></i></li>
										<li class="icons-list-item"><i class="fe fe-shopping-cart"></i></li>
										<li class="icons-list-item"><i class="fe fe-shuffle"></i></li>
										<li class="icons-list-item"><i class="fe fe-sidebar"></i></li>
										<li class="icons-list-item"><i class="fe fe-skip-back"></i></li>
										<li class="icons-list-item"><i class="fe fe-skip-forward"></i></li>
										<li class="icons-list-item"><i class="fe fe-slack"></i></li>
										<li class="icons-list-item"><i class="fe fe-slash"></i></li>
										<li class="icons-list-item"><i class="fe fe-sliders"></i></li>
										<li class="icons-list-item"><i class="fe fe-smartphone"></i></li>
										<li class="icons-list-item"><i class="fe fe-speaker"></i></li>
										<li class="icons-list-item"><i class="fe fe-square"></i></li>
										<li class="icons-list-item"><i class="fe fe-star"></i></li>
										<li class="icons-list-item"><i class="fe fe-stop-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-sun"></i></li>
										<li class="icons-list-item"><i class="fe fe-sunrise"></i></li>
										<li class="icons-list-item"><i class="fe fe-sunset"></i></li>
										<li class="icons-list-item"><i class="fe fe-tablet"></i></li>
										<li class="icons-list-item"><i class="fe fe-tag"></i></li>
										<li class="icons-list-item"><i class="fe fe-target"></i></li>
										<li class="icons-list-item"><i class="fe fe-terminal"></i></li>
										<li class="icons-list-item"><i class="fe fe-thermometer"></i></li>
										<li class="icons-list-item"><i class="fe fe-thumbs-down"></i></li>
										<li class="icons-list-item"><i class="fe fe-thumbs-up"></i></li>
										<li class="icons-list-item"><i class="fe fe-toggle-left"></i></li>
										<li class="icons-list-item"><i class="fe fe-toggle-right"></i></li>
										<li class="icons-list-item"><i class="fe fe-trash"></i></li>
										<li class="icons-list-item"><i class="fe fe-trash-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-trending-down"></i></li>
										<li class="icons-list-item"><i class="fe fe-trending-up"></i></li>
										<li class="icons-list-item"><i class="fe fe-triangle"></i></li>
										<li class="icons-list-item"><i class="fe fe-truck"></i></li>
										<li class="icons-list-item"><i class="fe fe-tv"></i></li>
										<li class="icons-list-item"><i class="fe fe-twitter"></i></li>
										<li class="icons-list-item"><i class="fe fe-type"></i></li>
										<li class="icons-list-item"><i class="fe fe-umbrella"></i></li>
										<li class="icons-list-item"><i class="fe fe-underline"></i></li>
										<li class="icons-list-item"><i class="fe fe-unlock"></i></li>
										<li class="icons-list-item"><i class="fe fe-upload"></i></li>
										<li class="icons-list-item"><i class="fe fe-upload-cloud"></i></li>
										<li class="icons-list-item"><i class="fe fe-user"></i></li>
										<li class="icons-list-item"><i class="fe fe-user-check"></i></li>
										<li class="icons-list-item"><i class="fe fe-user-minus"></i></li>
										<li class="icons-list-item"><i class="fe fe-user-plus"></i></li>
										<li class="icons-list-item"><i class="fe fe-user-x"></i></li>
										<li class="icons-list-item"><i class="fe fe-users"></i></li>
										<li class="icons-list-item"><i class="fe fe-video"></i></li>
										<li class="icons-list-item"><i class="fe fe-video-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-voicemail"></i></li>
										<li class="icons-list-item"><i class="fe fe-volume"></i></li>
										<li class="icons-list-item"><i class="fe fe-volume-1"></i></li>
										<li class="icons-list-item"><i class="fe fe-volume-2"></i></li>
										<li class="icons-list-item"><i class="fe fe-volume-x"></i></li>
										<li class="icons-list-item"><i class="fe fe-watch"></i></li>
										<li class="icons-list-item"><i class="fe fe-wifi"></i></li>
										<li class="icons-list-item"><i class="fe fe-wifi-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-wind"></i></li>
										<li class="icons-list-item"><i class="fe fe-x"></i></li>
										<li class="icons-list-item"><i class="fe fe-x-circle"></i></li>
										<li class="icons-list-item"><i class="fe fe-x-square"></i></li>
										<li class="icons-list-item"><i class="fe fe-zap"></i></li>
										<li class="icons-list-item"><i class="fe fe-zap-off"></i></li>
										<li class="icons-list-item"><i class="fe fe-zoom-in"></i></li>
										<li class="icons-list-item"><i class="fe fe-zoom-out"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Material Design Icons</h6>
									<p class="text-muted mb-2 card-sub-title">Simply beautiful open source icons.<span class="">See more material design icons at <a href="http://materialdesignicons.com/" target="_blank"> Material Design Icons</a></span></p>
									<p><code>&lt;i class="mdi mdi-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="mdi mdi-access-point"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-access-point-network"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-alert"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-box-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-card-details"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-check"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-convert"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-edit"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-key"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-location"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-minus"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-multiple"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-multiple-minus"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-multiple-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-multiple-plus"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-network"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-off"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-plus"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-remove"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-search"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-settings"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-settings-variant"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-star"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-account-switch"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-adjust"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-air-conditioner"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-airballoon"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-airplane"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-airplane-landing"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-airplane-off"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-airplane-takeoff"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-airplay"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm-bell"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm-check"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm-light"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm-multiple"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm-off"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm-plus"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alarm-snooze"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-album"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert-decagram"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert-octagon"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert-octagram"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alert-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-all-inclusive"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alpha"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-alphabetical"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-altimeter"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-amazon"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-amazon-clouddrive"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-ambulance"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-amplifier"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-anchor"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-android"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-android-debug-bridge"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-android-head"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-android-studio"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-angular"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-angularjs"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-animation"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-finder"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-ios"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-keyboard-caps"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-keyboard-command"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-keyboard-control"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-keyboard-option"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-keyboard-shift"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-mobileme"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apple-safari"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-application"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-approval"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-apps"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-archive"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrange-bring-forward"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrange-send-to-back"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrange-bring-to-front"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrange-send-backward"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-all"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-bottom-left"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-bottom-right"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-collapse"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-collapse-all"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-collapse-down"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-collapse-left"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-collapse-right"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-collapse-up"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-bold"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-bold-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-bold-box-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-bold-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-bold-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-bold-hexagon-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-drop-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-drop-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-down-thick"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-expand"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-expand-all"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-expand-down"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-expand-left"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-expand-right"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-expand-up"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-bold"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-bold-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-bold-box-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-bold-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-bold-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-bold-hexagon-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-drop-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-drop-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-left-thick"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-bold"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-bold-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-bold-box-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-bold-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-bold-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-bold-hexagon-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-drop-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-drop-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-right-thick"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-top-left"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-top-right"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-bold"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-bold-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-bold-box-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-bold-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-bold-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-bold-hexagon-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-drop-circle"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-drop-circle-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-arrow-up-thick"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-assistant"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-asterisk"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-at"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-atom"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-attachment"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-audiobook"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-auto-fix"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-auto-upload"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-autorenew"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-av-timer"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-baby"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-baby-buggy"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-backburger"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-backspace"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-backup-restore"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-bandcamp"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-bank"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-barcode"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-barcode-scan"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-barley"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-barrel"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-basecamp"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-basket"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-basket-fill"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-basket-unfill"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-10"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-20"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-30"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-40"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-50"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-60"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-70"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-80"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-90"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-alert"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging-100"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging-20"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging-30"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging-40"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging-60"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging-80"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-charging-90"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-minus"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-negative"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-outline"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-plus"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-battery-unknown"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-beach"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-blank"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-zip-box"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-youtube-play"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-yin-yang"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-yelp"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-yammer"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-xmpp"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-xml"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-wrench"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-wrap"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-wunderlist"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-wrench"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-vpn"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-volume-off"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-volume-mute"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-vlc"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-video"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-usb"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-upload-network"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-update"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-unity"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-undo"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-ubuntu"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-tune"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-truck-trailer"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-truck"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-svg"></i></li>
										<li class="icons-list-item"><i class="mdi mdi-subway"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Themify</h6>
									<p class="text-muted mb-2 card-sub-title">Simply beautiful open source icons.<span class="">See more Themify icons at <a href="https://themify.me/themify-icons" target="_blank"> Themify Icons</a></span></p>
									<p><code>&lt;i class="ti-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list simple-icons">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="typcn typcn-chart-pie-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chart-pie"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-left-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-left"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-right-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-chevron-right"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-clipboard"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cloud-storage"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cloud-storage-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-code-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-code"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-coffee"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cog-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-cog"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-compass"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-contacts"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-credit-card"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-css3"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-database"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-delete-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-delete"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-desktop"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-laptop"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-phone"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-device-tablet"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-directions"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-divide-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-divide"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document-add"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document-delete"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document-text"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-document"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-download-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-download"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-dropbox"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-edit"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eject-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eject"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-equals-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-equals"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-export-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-export"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eye-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-eye"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-feather"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-film"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-filter"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flag-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flag"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flash-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flash"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-children"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-merge"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-parallel"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-flow-switch"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder-add"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder-delete"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder-open"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-folder"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-gift"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-globe-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-globe"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-group-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-group"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-headphones"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart-full-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart-half-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-heart"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-home-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-home"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-html5"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-image-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-image"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-infinity-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info-large-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info-large"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-info"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-input-checked-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-input-checked"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-key-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-key"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-keyboard"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-leaf"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lightbulb"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-link-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-link"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location-arrow-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location-arrow"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-location"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-closed-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-closed"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-open-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-lock-open"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-mail"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-map"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-eject-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-eject"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-fast-forward-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-fast-forward"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-pause-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-pause"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play-reverse-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play-reverse"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-play"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-record-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-record"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-rewind-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-rewind"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-stop-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-media-stop"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-message-typing"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-message"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-messages"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-microphone-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-microphone"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-minus-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-minus"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-mortar-board"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-news"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-notes-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-notes"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pen"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pencil"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-phone-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-phone"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pi-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pi"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pin-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pin"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-pipette"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plane-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plane"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plug"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plus-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-plus"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-point-of-interest-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-point-of-interest"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-power-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-power"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-printer"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-puzzle-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-puzzle"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-radar-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-radar"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-refresh-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-refresh"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-rss-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-rss"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-scissors-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-scissors"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-shopping-bag"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-shopping-cart"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-at-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-dribbble-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-dribbble"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-facebook-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-facebook"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-flickr-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-flickr"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-github-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-github"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-google-plus-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-google-plus"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-instagram-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-instagram"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-last-fm-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-last-fm"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-linkedin-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-linkedin"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-pinterest-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-pinterest"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-skype-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-skype"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-tumbler-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-tumbler"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-twitter-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-twitter"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-vimeo-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-vimeo"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-youtube-circular"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-social-youtube"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-alphabetically-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-alphabetically"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-numerically-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-sort-numerically"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-spanner-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-spanner"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-spiral"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-full-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-half-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-half"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-star"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-starburst-outline"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-starburst"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-stopwatch"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-support"></i></li>
										<li class="icons-list-item"><i class="typcn typcn-tabs-outline"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Crypto</h6>
									<p class="text-muted mb-2 card-sub-title">Simply beautiful open source icons.<span class="">See more Crypto icons at <a href="http://cryptofont.com/" target="_blank"> Crypto Icons</a></span></p>
									<p><code>&lt;i class="cf cf-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list simple-icons">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="cf cf-adc"></i></li>
										<li class="icons-list-item"><i class="cf cf-aeon"></i></li>
										<li class="icons-list-item"><i class="cf cf-amp"></i></li>
										<li class="icons-list-item"><i class="cf cf-anc"></i></li>
										<li class="icons-list-item"><i class="cf cf-ardr"></i></li>
										<li class="icons-list-item"><i class="cf cf-aur"></i></li>
										<li class="icons-list-item"><i class="cf cf-bay"></i></li>
										<li class="icons-list-item"><i class="cf cf-bcn"></i></li>
										<li class="icons-list-item"><i class="cf cf-brk"></i></li>
										<li class="icons-list-item"><i class="cf cf-brx"></i></li>
										<li class="icons-list-item"><i class="cf cf-bsd"></i></li>
										<li class="icons-list-item"><i class="cf cf-bta"></i></li>
										<li class="icons-list-item"><i class="cf cf-btc"></i></li>
										<li class="icons-list-item"><i class="cf cf-btc-alt"></i></li>
										<li class="icons-list-item"><i class="cf cf-btcd"></i></li>
										<li class="icons-list-item"><i class="cf cf-bts"></i></li>
										<li class="icons-list-item"><i class="cf cf-clam"></i></li>
										<li class="icons-list-item"><i class="cf cf-cloak"></i></li>
										<li class="icons-list-item"><i class="cf cf-dash"></i></li>
										<li class="icons-list-item"><i class="cf cf-dcr"></i></li>
										<li class="icons-list-item"><i class="cf cf-dgb"></i></li>
										<li class="icons-list-item"><i class="cf cf-dgx"></i></li>
										<li class="icons-list-item"><i class="cf cf-dmd"></i></li>
										<li class="icons-list-item"><i class="cf cf-doge"></i></li>
										<li class="icons-list-item"><i class="cf cf-emc"></i></li>
										<li class="icons-list-item"><i class="cf cf-erc"></i></li>
										<li class="icons-list-item"><i class="cf cf-etc"></i></li>
										<li class="icons-list-item"><i class="cf cf-eth"></i></li>
										<li class="icons-list-item"><i class="cf cf-fct"></i></li>
										<li class="icons-list-item"><i class="cf cf-flo"></i></li>
										<li class="icons-list-item"><i class="cf cf-frk"></i></li>
										<li class="icons-list-item"><i class="cf cf-ftc"></i></li>
										<li class="icons-list-item"><i class="cf cf-game"></i></li>
										<li class="icons-list-item"><i class="cf cf-gld"></i></li>
										<li class="icons-list-item"><i class="cf cf-gnt"></i></li>
										<li class="icons-list-item"><i class="cf cf-grc"></i></li>
										<li class="icons-list-item"><i class="cf cf-grs"></i></li>
										<li class="icons-list-item"><i class="cf cf-heat"></i></li>
										<li class="icons-list-item"><i class="cf cf-icn"></i></li>
										<li class="icons-list-item"><i class="cf cf-ifc"></i></li>
										<li class="icons-list-item"><i class="cf cf-incnt"></i></li>
										<li class="icons-list-item"><i class="cf cf-ioc"></i></li>
										<li class="icons-list-item"><i class="cf cf-kmd"></i></li>
										<li class="icons-list-item"><i class="cf cf-kobo"></i></li>
										<li class="icons-list-item"><i class="cf cf-kore"></i></li>
										<li class="icons-list-item"><i class="cf cf-lbc"></i></li>
										<li class="icons-list-item"><i class="cf cf-ldoge"></i></li>
										<li class="icons-list-item"><i class="cf cf-lsk"></i></li>
										<li class="icons-list-item"><i class="cf cf-ltc"></i></li>
										<li class="icons-list-item"><i class="cf cf-maid"></i></li>
										<li class="icons-list-item"><i class="cf cf-mint"></i></li>
										<li class="icons-list-item"><i class="cf cf-mona"></i></li>
										<li class="icons-list-item"><i class="cf cf-mue"></i></li>
										<li class="icons-list-item"><i class="cf cf-neos"></i></li>
										<li class="icons-list-item"><i class="cf cf-nlg"></i></li>
										<li class="icons-list-item"><i class="cf cf-nmc"></i></li>
										<li class="icons-list-item"><i class="cf cf-note"></i></li>
										<li class="icons-list-item"><i class="cf cf-nuc"></i></li>
										<li class="icons-list-item"><i class="cf cf-nxt"></i></li>
										<li class="icons-list-item"><i class="cf cf-ok"></i></li>
										<li class="icons-list-item"><i class="cf cf-omni"></i></li>
										<li class="icons-list-item"><i class="cf cf-pink"></i></li>
										<li class="icons-list-item"><i class="cf cf-pivx"></i></li>
										<li class="icons-list-item"><i class="cf cf-pot"></i></li>
										<li class="icons-list-item"><i class="cf cf-ppc"></i></li>
										<li class="icons-list-item"><i class="cf cf-qrk"></i></li>
										<li class="icons-list-item"><i class="cf cf-rby"></i></li>
										<li class="icons-list-item"><i class="cf cf-rdd"></i></li>
										<li class="icons-list-item"><i class="cf cf-rep"></i></li>
										<li class="icons-list-item"><i class="cf cf-rise"></i></li>
										<li class="icons-list-item"><i class="cf cf-sjcx"></i></li>
										<li class="icons-list-item"><i class="cf cf-sls"></i></li>
										<li class="icons-list-item"><i class="cf cf-steem"></i></li>
										<li class="icons-list-item"><i class="cf cf-strat"></i></li>
										<li class="icons-list-item"><i class="cf cf-sys"></i></li>
										<li class="icons-list-item"><i class="cf cf-trig"></i></li>
										<li class="icons-list-item"><i class="cf cf-ubq"></i></li>
										<li class="icons-list-item"><i class="cf cf-unity"></i></li>
										<li class="icons-list-item"><i class="cf cf-usdt"></i></li>
										<li class="icons-list-item"><i class="cf cf-vrc"></i></li>
										<li class="icons-list-item"><i class="cf cf-vtc"></i></li>
										<li class="icons-list-item"><i class="cf cf-waves"></i></li>
										<li class="icons-list-item"><i class="cf cf-xcp"></i></li>
										<li class="icons-list-item"><i class="cf cf-xmr"></i></li>
										<li class="icons-list-item"><i class="cf cf-xrp"></i></li>
										<li class="icons-list-item"><i class="cf cf-zec"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->

						<!-- card -->
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Simple line Icons</h6>
									<p class="text-muted mb-2 card-sub-title">Simply beautiful open source icons.<span class="">See more Simple line Icons at <a href="https://simplelineicons.github.io/" target="_blank"> Simple line Icons</a></span></p>
									<p><code>&lt;i class="si si-ICON_NAME"&gt;&lt;/i&gt;</code></p>
								</div>
								<div class="main-icon-group main-icon-list simple-icons ">
									<ul class="icons-list">
										<li class="icons-list-item"><i class="si si-user"></i></li>
										<li class="icons-list-item"><i class="si si-people"></i></li>
										<li class="icons-list-item"><i class="si si-user-female"></i></li>
										<li class="icons-list-item"><i class="si si-user-follow"></i></li>
										<li class="icons-list-item"><i class="si si-user-following"></i></li>
										<li class="icons-list-item"><i class="si si-user-unfollow"></i></li>
										<li class="icons-list-item"><i class="si si-login"></i></li>
										<li class="icons-list-item"><i class="si si-logout"></i></li>
										<li class="icons-list-item"><i class="si si-emotsmile"></i></li>
										<li class="icons-list-item"><i class="si si-phone"></i></li>
										<li class="icons-list-item"><i class="si si-call-end"></i></li>
										<li class="icons-list-item"><i class="si si-call-in"></i></li>
										<li class="icons-list-item"><i class="si si-call-out"></i></li>
										<li class="icons-list-item"><i class="si si-map"></i></li>
										<li class="icons-list-item"><i class="si si-location-pin"></i></li>
										<li class="icons-list-item"><i class="si si-direction"></i></li>
										<li class="icons-list-item"><i class="si si-directions"></i></li>
										<li class="icons-list-item"><i class="si si-compass"></i></li>
										<li class="icons-list-item"><i class="si si-layers"></i></li>
										<li class="icons-list-item"><i class="si si-menu"></i></li>
										<li class="icons-list-item"><i class="si si-list"></i></li>
										<li class="icons-list-item"><i class="si si-options-vertical"></i></li>
										<li class="icons-list-item"><i class="si si-options"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-down"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-left"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-right"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-up"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-up-circle"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-left-circle"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-right-circle"></i></li>
										<li class="icons-list-item"><i class="si si-arrow-down-circle"></i></li>
										<li class="icons-list-item"><i class="si si-check"></i></li>
										<li class="icons-list-item"><i class="si si-clock"></i></li>
										<li class="icons-list-item"><i class="si si-plus"></i></li>
										<li class="icons-list-item"><i class="si si-minus"></i></li>
										<li class="icons-list-item"><i class="si si-close"></i></li>
										<li class="icons-list-item"><i class="si si-event"></i></li>
										<li class="icons-list-item"><i class="si si-exclamation"></i></li>
										<li class="icons-list-item"><i class="si si-organization"></i></li>
										<li class="icons-list-item"><i class="si si-trophy"></i></li>
										<li class="icons-list-item"><i class="si si-screen-smartphone"></i></li>
										<li class="icons-list-item"><i class="si si-screen-desktop"></i></li>
										<li class="icons-list-item"><i class="si si-plane"></i></li>
										<li class="icons-list-item"><i class="si si-notebook"></i></li>
										<li class="icons-list-item"><i class="si si-mustache"></i></li>
										<li class="icons-list-item"><i class="si si-mouse"></i></li>
										<li class="icons-list-item"><i class="si si-magnet"></i></li>
										<li class="icons-list-item"><i class="si si-energy"></i></li>
										<li class="icons-list-item"><i class="si si-disc"></i></li>
										<li class="icons-list-item"><i class="si si-cursor"></i></li>
										<li class="icons-list-item"><i class="si si-cursor-move"></i></li>
										<li class="icons-list-item"><i class="si si-crop"></i></li>
										<li class="icons-list-item"><i class="si si-chemistry"></i></li>
										<li class="icons-list-item"><i class="si si-speedometer"></i></li>
										<li class="icons-list-item"><i class="si si-shield"></i></li>
										<li class="icons-list-item"><i class="si si-screen-tablet"></i></li>
										<li class="icons-list-item"><i class="si si-magic-wand"></i></li>
										<li class="icons-list-item"><i class="si si-hourglass"></i></li>
										<li class="icons-list-item"><i class="si si-graduation"></i></li>
										<li class="icons-list-item"><i class="si si-ghost"></i></li>
										<li class="icons-list-item"><i class="si si-game-controller"></i></li>
										<li class="icons-list-item"><i class="si si-fire"></i></li>
										<li class="icons-list-item"><i class="si si-eyeglass"></i></li>
										<li class="icons-list-item"><i class="si si-envelope-open"></i></li>
										<li class="icons-list-item"><i class="si si-envelope-letter"></i></li>
										<li class="icons-list-item"><i class="si si-bell"></i></li>
										<li class="icons-list-item"><i class="si si-badge"></i></li>
										<li class="icons-list-item"><i class="si si-anchor"></i></li>
										<li class="icons-list-item"><i class="si si-wallet"></i></li>
										<li class="icons-list-item"><i class="si si-vector"></i></li>
										<li class="icons-list-item"><i class="si si-speech"></i></li>
										<li class="icons-list-item"><i class="si si-puzzle"></i></li>
										<li class="icons-list-item"><i class="si si-printer"></i></li>
										<li class="icons-list-item"><i class="si si-present"></i></li>
										<li class="icons-list-item"><i class="si si-playlist"></i></li>
										<li class="icons-list-item"><i class="si si-pin"></i></li>
										<li class="icons-list-item"><i class="si si-picture"></i></li>
										<li class="icons-list-item"><i class="si si-handbag"></i></li>
										<li class="icons-list-item"><i class="si si-globe-alt"></i></li>
										<li class="icons-list-item"><i class="si si-globe"></i></li>
										<li class="icons-list-item"><i class="si si-folder-alt"></i></li>
										<li class="icons-list-item"><i class="si si-folder"></i></li>
										<li class="icons-list-item"><i class="si si-film"></i></li>
										<li class="icons-list-item"><i class="si si-feed"></i></li>
										<li class="icons-list-item"><i class="si si-drop"></i></li>
										<li class="icons-list-item"><i class="si si-drawer"></i></li>
										<li class="icons-list-item"><i class="si si-docs"></i></li>
										<li class="icons-list-item"><i class="si si-doc"></i></li>
										<li class="icons-list-item"><i class="si si-diamond"></i></li>
										<li class="icons-list-item"><i class="si si-cup"></i></li>
										<li class="icons-list-item"><i class="si si-calculator"></i></li>
										<li class="icons-list-item"><i class="si si-bubbles"></i></li>
										<li class="icons-list-item"><i class="si si-briefcase"></i></li>
										<li class="icons-list-item"><i class="si si-book-open"></i></li>
										<li class="icons-list-item"><i class="si si-basket-loaded"></i></li>
										<li class="icons-list-item"><i class="si si-basket"></i></li>
										<li class="icons-list-item"><i class="si si-bag"></i></li>
										<li class="icons-list-item"><i class="si si-action-undo"></i></li>
										<li class="icons-list-item"><i class="si si-action-redo"></i></li>
										<li class="icons-list-item"><i class="si si-wrench"></i></li>
										<li class="icons-list-item"><i class="si si-umbrella"></i></li>
										<li class="icons-list-item"><i class="si si-trash"></i></li>
										<li class="icons-list-item"><i class="si si-tag"></i></li>
										<li class="icons-list-item"><i class="si si-support"></i></li>
										<li class="icons-list-item"><i class="si si-frame"></i></li>
										<li class="icons-list-item"><i class="si si-size-fullscreen"></i></li>
										<li class="icons-list-item"><i class="si si-size-actual"></i></li>
										<li class="icons-list-item"><i class="si si-shuffle"></i></li>
										<li class="icons-list-item"><i class="si si-share-alt"></i></li>
										<li class="icons-list-item"><i class="si si-share"></i></li>
										<li class="icons-list-item"><i class="si si-rocket"></i></li>
										<li class="icons-list-item"><i class="si si-question"></i></li>
										<li class="icons-list-item"><i class="si si-pie-chart"></i></li>
										<li class="icons-list-item"><i class="si si-pencil"></i></li>
										<li class="icons-list-item"><i class="si si-note"></i></li>
										<li class="icons-list-item"><i class="si si-loop"></i></li>
										<li class="icons-list-item"><i class="si si-home"></i></li>
										<li class="icons-list-item"><i class="si si-grid"></i></li>
										<li class="icons-list-item"><i class="si si-graph"></i></li>
										<li class="icons-list-item"><i class="si si-microphone"></i></li>
										<li class="icons-list-item"><i class="si si-music-tone-alt"></i></li>
										<li class="icons-list-item"><i class="si si-music-tone"></i></li>
										<li class="icons-list-item"><i class="si si-earphones-alt"></i></li>
										<li class="icons-list-item"><i class="si si-earphones"></i></li>
										<li class="icons-list-item"><i class="si si-equalizer"></i></li>
										<li class="icons-list-item"><i class="si si-like"></i></li>
										<li class="icons-list-item"><i class="si si-dislike"></i></li>
										<li class="icons-list-item"><i class="si si-control-start"></i></li>
										<li class="icons-list-item"><i class="si si-control-rewind"></i></li>
										<li class="icons-list-item"><i class="si si-control-play"></i></li>
										<li class="icons-list-item"><i class="si si-control-pause"></i></li>
										<li class="icons-list-item"><i class="si si-control-forward"></i></li>
										<li class="icons-list-item"><i class="si si-control-end"></i></li>
										<li class="icons-list-item"><i class="si si-volume-1"></i></li>
										<li class="icons-list-item"><i class="si si-volume-2"></i></li>
										<li class="icons-list-item"><i class="si si-volume-off"></i></li>
										<li class="icons-list-item"><i class="si si-calendar"></i></li>
										<li class="icons-list-item"><i class="si si-bulb"></i></li>
										<li class="icons-list-item"><i class="si si-chart"></i></li>
										<li class="icons-list-item"><i class="si si-ban"></i></li>
										<li class="icons-list-item"><i class="si si-bubble"></i></li>
										<li class="icons-list-item"><i class="si si-camrecorder"></i></li>
										<li class="icons-list-item"><i class="si si-camera"></i></li>
										<li class="icons-list-item"><i class="si si-cloud-download"></i></li>
										<li class="icons-list-item"><i class="si si-cloud-upload"></i></li>
										<li class="icons-list-item"><i class="si si-envelope"></i></li>
										<li class="icons-list-item"><i class="si si-eye"></i></li>
										<li class="icons-list-item"><i class="si si-flag"></i></li>
										<li class="icons-list-item"><i class="si si-heart"></i></li>
										<li class="icons-list-item"><i class="si si-info"></i></li>
										<li class="icons-list-item"><i class="si si-key"></i></li>
										<li class="icons-list-item"><i class="si si-link"></i></li>
										<li class="icons-list-item"><i class="si si-lock"></i></li>
										<li class="icons-list-item"><i class="si si-lock-open"></i></li>
										<li class="icons-list-item"><i class="si si-magnifier"></i></li>
										<li class="icons-list-item"><i class="si si-magnifier-add"></i></li>
										<li class="icons-list-item"><i class="si si-magnifier-remove"></i></li>
										<li class="icons-list-item"><i class="si si-paper-clip"></i></li>
										<li class="icons-list-item"><i class="si si-paper-plane"></i></li>
										<li class="icons-list-item"><i class="si si-power"></i></li>
										<li class="icons-list-item"><i class="si si-refresh"></i></li>
										<li class="icons-list-item"><i class="si si-reload"></i></li>
										<li class="icons-list-item"><i class="si si-settings"></i></li>
										<li class="icons-list-item"><i class="si si-star"></i></li>
										<li class="icons-list-item"><i class="si si-symbol-female"></i></li>
										<li class="icons-list-item"><i class="si si-symbol-male"></i></li>
										<li class="icons-list-item"><i class="si si-target"></i></li>
										<li class="icons-list-item"><i class="si si-credit-card"></i></li>
										<li class="icons-list-item"><i class="si si-paypal"></i></li>
										<li class="icons-list-item"><i class="si si-social-tumblr"></i></li>
										<li class="icons-list-item"><i class="si si-social-twitter"></i></li>
										<li class="icons-list-item"><i class="si si-social-facebook"></i></li>
										<li class="icons-list-item"><i class="si si-social-instagram"></i></li>
										<li class="icons-list-item"><i class="si si-social-linkedin"></i></li>
										<li class="icons-list-item"><i class="si si-social-pinterest"></i></li>
										<li class="icons-list-item"><i class="si si-social-github"></i></li>
										<li class="icons-list-item"><i class="si si-social-google"></i></li>
										<li class="icons-list-item"><i class="si si-social-reddit"></i></li>
										<li class="icons-list-item"><i class="si si-social-skype"></i></li>
										<li class="icons-list-item"><i class="si si-social-dribbble"></i></li>
										<li class="icons-list-item"><i class="si si-social-behance"></i></li>
										<li class="icons-list-item"><i class="si si-social-foursqare"></i></li>
										<li class="icons-list-item"><i class="si si-social-soundcloud"></i></li>
										<li class="icons-list-item"><i class="si si-social-spotify"></i></li>
										<li class="icons-list-item"><i class="si si-social-stumbleupon"></i></li>
										<li class="icons-list-item"><i class="si si-social-youtube"></i></li>
										<li class="icons-list-item"><i class="si si-social-dropbox"></i></li>
										<li class="icons-list-item"><i class="si si-social-vkontakte"></i></li>
										<li class="icons-list-item"><i class="si si-social-steam"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
				</div>
				<!--/row -->

@endsection('content')

@section('scripts')

@endsection