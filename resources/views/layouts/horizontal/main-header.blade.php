			<!-- main-header opened -->
			<div class="main-header nav nav-item hor-header">
				<div class="container">
					<div class="main-header-left ">
						<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
						<a class="header-brand" href="{{url('index')}}">
							<img src="{{asset('assets/img/brand/logo-white.png')}}" class="desktop-dark">
							<img src="{{asset('assets/img/brand/logo.png')}}" class="desktop-logo">
							<img src="{{asset('assets/img/brand/favicon.png')}}" class="desktop-logo-1">
							<img src="{{asset('assets/img/brand/favicon-white.png')}}" class="desktop-logo-dark">
						</a>
						<div class="main-header-center  ms-4">
							<input class="form-control" placeholder="Search for anything..." type="search"><button class="btn"><i class="fe fe-search"></i></button>
						</div>
					</div><!-- search -->
					<div class="main-header-right">
						<ul class="nav nav-item  navbar-nav-right ms-auto">
							<li class="nav-link">
									<div class="dropdown  nav-itemd-none d-md-flex">
										<a href="#" class="d-flex  nav-item country-flag1" data-bs-toggle="dropdown" aria-expanded="false">
											<span class="avatar country-Flag me-0 align-self-center bg-transparent"><img src="{{asset('assets/img/flags/us_flag.jpg')}}" alt="img"></span>
											<div class="my-auto">
												<strong class="me-2 ms-2 my-auto">English</strong>
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
											<a href="#" class="dropdown-item d-flex ">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img src="{{asset('assets/img/flags/french_flag.jpg')}}" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">French</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img src="{{asset('assets/img/flags/germany_flag.jpg')}}" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">Germany</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img src="{{asset('assets/img/flags/italy_flag.jpg')}}" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">Italy</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img src="{{asset('assets/img/flags/russia_flag.jpg')}}" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">Russia</span>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex">
												<span class="avatar  m-e-c-3 align-self-center bg-transparent"><img src="{{asset('assets/img/flags/spain_flag.jpg')}}" alt="img"></span>
												<div class="d-flex">
													<span class="mt-2">spain</span>
												</div>
											</a>
										</div>
									</div>
							</li>
							<li class="nav-link" id="bs-example-navbar-collapse-1">
								<form class="navbar-form" role="search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button type="reset" class="btn btn-default">
												<i class="fas fa-times"></i>
											</button>
											<button type="submit" class="btn btn-default nav-link resp-btn">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
											</button>
										</span>
									</div>
								</form>
							</li>
							<li class="dropdown nav-item main-header-message ">
								<a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary text-start">
										<div class="d-flex">
											<h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">Messages</h6>
											<span class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark All Read</span>
										</div>
										<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread messages</p>
									</div>
									<div class="main-message-list chat-scroll">
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="  drop-img  cover-image  " data-bs-image-src="{{asset('assets/img/faces/3.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Petey Cruiser</h5>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
												<p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-bs-image-src="{{asset('assets/img/faces/2.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Jimmy Changa</h5>
												</div>
												<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
												<p class="time mb-0 text-start float-start ms-2 mt-2">Mar 06 01:12 AM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-bs-image-src="{{asset('assets/img/faces/9.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Graham Cracker</h5>
												</div>
												<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
												<p class="time mb-0 text-start float-start ms-2 mt-2">Feb 25 10:35 AM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-bs-image-src="{{asset('assets/img/faces/12.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Donatella Nobatti</h5>
												</div>
												<p class="mb-0 desc">Here are some products ...</p>
												<p class="time mb-0 text-start float-start ms-2 mt-2">Feb 12 05:12 PM</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-bs-image-src="{{asset('assets/img/faces/5.jpg')}}">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Anne Fibbiyon</h5>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
												<p class="time mb-0 text-start float-start ms-2 mt-2">Jan 29 03:16 PM</p>
											</div>
										</a>
									</div>
									<div class="text-center dropdown-footer">
										<a href="{{url('chat')}}">VIEW ALL</a>
									</div>
								</div>
							</li>
							<li class="dropdown nav-item main-header-notification">
								<a class="new nav-link" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary text-start">
										<div class="d-flex">
											<h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">Notifications</h6>
											<span class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark All Read</span>
										</div>
										<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
									</div>
									<div class="main-notification-list Notification-scroll">
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-pink">
												<i class="la la-file-alt text-white"></i>
											</div>
											<div class="ms-3">
												<h5 class="notification-label mb-1">New files available</h5>
												<div class="notification-subtext">10 ago hour</div>
											</div>
											<div class="ms-auto" >
												<i class="las la-angle-left text-end text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-purple">
												<i class="la la-gem text-white"></i>
											</div>
											<div class="ms-3">
												<h5 class="notification-label mb-1">Updates Available</h5>
												<div class="notification-subtext">2 ago days</div>
											</div>
											<div class="ms-auto" >
												<i class="las la-angle-left text-end text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-success">
												<i class="la la-shopping-basket text-white"></i>
											</div>
											<div class="ms-3">
												<h5 class="notification-label mb-1">New Order Received</h5>
												<div class="notification-subtext">1 ago hour</div>
											</div>
											<div class="ms-auto" >
												<i class="las la-angle-left text-end text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-warning">
												<i class="la la-envelope-open text-white"></i>
											</div>
											<div class="ms-3">
												<h5 class="notification-label mb-1">New review received</h5>
												<div class="notification-subtext">1 ago day</div>
											</div>
											<div class="ms-auto" >
												<i class="las la-angle-left text-end text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-danger">
												<i class="la la-user-check text-white"></i>
											</div>
											<div class="ms-3">
												<h5 class="notification-label mb-1">22 verified registrations</h5>
												<div class="notification-subtext">2 ago hour</div>
											</div>
											<div class="ms-auto" >
												<i class="las la-angle-left text-end text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-primary">
												<i class="la la-check-circle text-white"></i>
											</div>
											<div class="ms-3">
												<h5 class="notification-label mb-1">Project has been approved</h5>
												<div class="notification-subtext">4 ago hour</div>
											</div>
											<div class="ms-auto" >
												<i class="las la-angle-left text-end text-muted"></i>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a href="{{url('notification')}}">VIEW ALL</a>
									</div>
								</div>
							</li>
							<li class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
							</li>
							<li class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><img alt="" src="{{asset('assets/img/faces/6.jpg')}}"></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/6.jpg')}}" class=""></div>
											<div class="ms-3 my-auto">
												<h6>Petey Cruiser</h6><span>Premium Member</span>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href="{{url('profile')}}"><i class="bx bx-user-circle"></i>Profile</a>
									<a class="dropdown-item" href="{{url('editprofile')}}"><i class="bx bx-cog"></i> Edit Profile</a>
									<a class="dropdown-item" href="{{url('mail')}}"><i class="bx bxs-inbox"></i>Inbox</a>
									<a class="dropdown-item" href="{{url('mail-compose')}}"><i class="bx bx-envelope"></i>Messages</a>
									<a class="dropdown-item" href="{{url('mail-settings')}}"><i class="bx bx-slider-alt"></i> Account Settings</a>
									<a class="dropdown-item" href="{{url('signin')}}"><i class="bx bx-log-out"></i> Sign Out</a>
								</div>
							</li>
							<li class="dropdown main-header-message right-toggle">
								<a class="nav-link pe-0" data-bs-toggle="sidebar-left" data-bs-target=".sidebar-left">
									<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /main-header -->