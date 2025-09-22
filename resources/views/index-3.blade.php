@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper bg-six">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="{{ URL::asset('assets/images/loader.svg') }}" alt="" class="m-auto d-block"> <span></span></div>
				<div class="txt-loading">
					<span data-text-preloader="P" class="letters-loading">
						P
					</span>
					<span data-text-preloader="I" class="letters-loading">
						I
					</span>
					<span data-text-preloader="K" class="letters-loading">
						K
					</span>
					<span data-text-preloader="U" class="letters-loading">
						U
					</span>
				</div>
			</div>
		</div>


		
		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-three sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index" class="d-flex align-items-center">
								<img src="{{ URL::asset('assets/images/logo/logo_05.svg') }}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li>
									<a href="login" class="login-btn-one fw-500 d-flex align-items-center tran3s"><img src="{{ URL::asset('assets/images/icon/icon_18.svg') }}" alt="" class="me-2"> <span>Login</span></a>
                                </li>
								<li class="d-none d-md-inline-block ms-4">
                                    <a href="contact-v1" class="btn-seven">Let’s Started</a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index" class="d-block"><img src="{{ URL::asset('assets/images/logo/logo_05.svg') }}" alt=""></a></div></li>
									<li class="nav-item dropdown mega-dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Home
										</a>
										<ul class="dropdown-menu">
											<li class="pe-3 ps-3">
												<div class="row gx-3">
													<div class="col-lg-3">
														<a href="index" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home01.jpg') }}" alt="" class="w-100"></div>
															<span>Payment Service</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-2" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home02.jpg') }}" alt="" class="w-100"></div>
															<span>AI Writer</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-3" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home03.jpg') }}" alt="" class="w-100"></div>
															<span>Website Builder</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-4" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home04.jpg') }}" alt="" class="w-100"></div>
															<span>CRM</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-5" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home05.jpg') }}" alt="" class="w-100"></div>
															<span>Project Management </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-6" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home06.jpg') }}" alt="" class="w-100"></div>
															<span>Mobile App Landing</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-7" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home07.jpg') }}" alt="" class="w-100"></div>
															<span>Digital Agency</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-8" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home08.jpg') }}" alt="" class="w-100"></div>
															<span>Help Desk</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-9" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home09.jpg') }}" alt="" class="w-100"></div>
															<span>Web Hosting </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-10" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home10.jpg') }}" alt="" class="w-100"></div>
															<span>Cyber Security</span>
														</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="nav-item dropdown mega-dropdown-sm">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages
										</a>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Essential</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="about-us-v1" class="dropdown-item"><span>About Us-1</span></a></li>
															<li><a href="about-us-v2" class="dropdown-item"><span>About Us-2</span></a></li>
															<li><a href="about-us-v3" class="dropdown-item"><span>About Us-3</span></a></li>
															<li><a href="team-v1" class="dropdown-item"><span>Team-1</span></a></li>
															<li><a href="team-v2" class="dropdown-item"><span>Team-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Features</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="service-v1" class="dropdown-item"><span>Service-1</span></a></li>
															<li><a href="service-v2" class="dropdown-item"><span>Service-2</span></a></li>
															<li><a href="service-v3" class="dropdown-item"><span>Service-3</span></a></li>
															<li><a href="service-details" class="dropdown-item"><span>Service Details</span></a></li>
															<li><a href="pricing-v1" class="dropdown-item"><span>Pricing-1</span></a></li>
															<li><a href="pricing-v2" class="dropdown-item"><span>Pricing-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Others</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="faq-v1" class="dropdown-item"><span>FAQ-1</span></a></li>
															<li><a href="faq-v2" class="dropdown-item"><span>FAQ-2</span></a></li>
															<li><a href="login" class="dropdown-item"><span>Login</span></a></li>
															<li><a href="signup" class="dropdown-item"><span>Sign Up</span></a></li>
															<li><a href="404" class="dropdown-item"><span>404 Error</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
						            </li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Project
										</a>
										<ul class="dropdown-menu">
											<li><a href="project-v1" class="dropdown-item"><span>Project-1</span></a></li>
											<li><a href="project-v2" class="dropdown-item"><span>Project-2</span></a></li>
											<li><a href="project-v3" class="dropdown-item"><span>Project-3</span></a></li>
											<li><a href="project-v4" class="dropdown-item"><span>Project-4</span></a></li>
											<li><a href="project-v5" class="dropdown-item"><span>Project-5</span></a></li>
											<li><a href="project-v6" class="dropdown-item"><span>Project-6</span></a></li>
											<li><a href="project-details" class="dropdown-item"><span>Project Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a>
										<ul class="dropdown-menu">
											<li><a href="blog-v1" class="dropdown-item"><span>Blog Full Width</span></a></li>
											<li><a href="blog-v2" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog-v3" class="dropdown-item"><span>Blog 2 column</span></a></li>
											<li><a href="blog-details" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Contact
										</a>
										<ul class="dropdown-menu">
											<li><a href="contact-v1" class="dropdown-item"><span>Contact Us-1</span></a></li>
											<li><a href="contact-v2" class="dropdown-item"><span>Contact Us-2</span></a></li>
										</ul>
									</li>
									<li class="d-md-none ps-3 pe-3 mt-20">
										<a href="contact-v1" class="btn-seven w-100">Let’s Started</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
		<div class="hero-banner-three z-1 position-relative pt-200 lg-pt-150">
			<div class="container position-relative">
				<div class="row">
					<div class="col-xl-10 col-lg-10 m-auto text-center">
						<h1 class="hero-heading wow fadeInUp">Design website without Coding Experience</h1>
						<p class="fs-28 text-dark pt-40 lg-pt-30 pb-35 lg-pb-20 wow fadeInUp" data-wow-delay="0.1s">What kind of website would you like to create? Let’s Get started</p>
						<form action="#" class="m-auto position-relative">
							<input type="text" placeholder="Ex: Business, Marketing">
							<button class="tran3s">Build Now</button>
						</form>
					</div>
				</div>
			</div>
			<div class="media d-flex justify-content-center mt-100 lg-mt-60">
				<div class="position-relative">
					<img src="{{ URL::asset('assets/images/assets/ils_11.png') }}" alt="" >
					<img src="{{ URL::asset('assets/images/assets/ils_11_01.png') }}" alt="" class="shapes card_01">
					<img src="{{ URL::asset('assets/images/assets/ils_11_02.png') }}" alt="" class="shapes card_02">
				</div>
			</div>
            <img src="{{ URL::asset('assets/images/shape/shape_29.png') }}" alt="" class="shapes shape_01">
            <img src="{{ URL::asset('assets/images/shape/shape_30.png') }}" alt="" class="shapes shape_02">
		</div>
		<!-- /.hero-banner-three -->


		


		<!--
		=====================================================
			BLock Feature Eight
		=====================================================
		-->
		<div class="block-feature-eight pt-250 xl-pt-200 md-pt-150 sm-pt-100 pb-180 xl-pb-150 lg-pb-80">
			<div class="container">
                <div class="row">
					<div class="col-lg-6">
						<div class="title-four md-mb-20">
							<h2 class="text-white">Trusted choice for 1000+ Firms</h2>
						</div>
					</div>
					<div class="col-xxl-5 col-lg-6 ms-auto">
						<p class="font-manrope fs-24 pb-25 text-white">Go paperless. Back up important to all devices, & keep the information not the clutter.</p>
						<a href="about-us-v3" class="btn-eight d-inline-flex align-items-center">More Details <img src="{{ URL::asset('assets/images/icon/icon_19.svg') }}" alt="" class="ms-3"></a>
					</div>
				</div>
				<div class="wrapper mt-100 lg-mt-40">
					<div class="counter-slider-one">
						<div class="item">
							<div class="card-style-four position-relative" style="background-image: url(assets/images/assets/bg_02.png);">
								<div class="d-flex justify-content-between align-items-center">
									<img src="{{ URL::asset('assets/images/logo/p_logo_09.png') }}" alt="">
									<img src="{{ URL::asset('assets/images/shape/shape_31.svg') }}" alt="">
								</div>
								<div class="main-count">$<span class="counter">1.3</span>b+</div>
								<p class="font-manrope fs-24 text-dark">Membership Sale</p>
							</div>
							<!-- /.card-style-four -->
						</div>
						<div class="item">
							<div class="card-style-four position-relative" style="background-image: url(assets/images/assets/bg_03.png) ;">
								<div class="d-flex justify-content-between align-items-center">
									<img src="{{ URL::asset('assets/images/logo/p_logo_10.png') }}" alt="">
									<img src="{{ URL::asset('assets/images/shape/shape_32.svg') }}" alt="">
								</div>
								<div class="main-count"><span class="counter">4.0</span>X</div>
								<p class="font-manrope fs-24 text-dark">Smooth Integration</p>
							</div>
							<!-- /.card-style-four -->
						</div>
						<div class="item">
							<div class="card-style-four position-relative" style="background-image: url(assets/images/assets/bg_04.png);">
								<div class="d-flex justify-content-between align-items-center">
									<img src="{{ URL::asset('assets/images/logo/p_logo_11.png') }}" alt="">
									<img src="{{ URL::asset('assets/images/shape/shape_33.svg') }}" alt="">
								</div>
								<div class="main-count"><span class="counter">1200</span>+</div>
								<p class="font-manrope fs-24 text-dark">Faster Server Speed</p>
							</div>
							<!-- /.card-style-four -->
						</div>
						<div class="item">
							<div class="card-style-four position-relative" style="background-image: url(assets/images/assets/bg_05.png);">
								<div class="d-flex justify-content-between align-items-center">
									<img src="{{ URL::asset('assets/images/logo/p_logo_10.png') }}" alt="">
									<img src="{{ URL::asset('assets/images/shape/shape_33.svg') }}" alt="">
								</div>
								<div class="main-count"><span class="counter">2.8</span>m</div>
								<p class="font-manrope fs-24 text-dark">Application Views</p>
							</div>
							<!-- /.card-style-four -->
						</div>
						<div class="item">
							<div class="card-style-four position-relative" style="background-image: url(assets/images/assets/bg_04.png);">
								<div class="d-flex justify-content-between align-items-center">
									<img src="{{ URL::asset('assets/images/logo/p_logo_11.png') }}" alt="">
									<img src="{{ URL::asset('assets/images/shape/shape_33.svg') }}" alt="">
								</div>
								<div class="main-count"><span class="counter">1200</span>+</div>
								<p class="font-manrope fs-24 text-dark">Faster Server Speed</p>
							</div>
							<!-- /.card-style-four -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-eight -->



        <!--
		=====================================================
			BLock Feature Nine
		=====================================================
		-->
		<div class="block-feature-nine pt-180 xl-pt-150 lg-pt-80">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-6 order-lg-last">
						<div class="ps-xl-5 ms-xxl-3">
							<div class="title-four">
								<h2>Make website without any coding</h2>
							</div>
							<p class="fs-24 font-manrope mt-45 lg-mt-30 mb-45 lg-mb-30">Go paperless. Back up important to all devices, & keep the information not the clutter. Lorem ipsum dolor sit amet.</p>
							<a href="project-details" class="btn-seven">Get Started</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 col-md-10 m-auto">
						<div class="img-holder d-flex align-items-center justify-content-center md-mt-40">
							<img src="{{ URL::asset('assets/images/assets/ils_12.png') }}" alt="">
						</div>
					</div>
				</div>
				<div class="row align-items-center mt-150 xl-mt-100 lg-mt-60">
					<div class="col-xl-5 col-lg-6 order-lg-last">
						<div class="ps-xl-5 ms-xxl-3">
							<div class="title-four">
								<h2>Smart widget for you</h2>
							</div>
							<p class="fs-24 font-manrope mt-45 lg-mt-30 mb-45 lg-mb-30">The intuitive and flexible drag & drop editor saves time on development with great speed. great sapped</p>
							<a href="project-details" class="btn-seven">Learn More</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 col-md-10 m-auto">
						<div class="img-holder d-flex align-items-center justify-content-center md-mt-40">
							<img src="{{ URL::asset('assets/images/assets/ils_13.png') }}" alt="">
						</div>
					</div>
				</div>
				<div class="row align-items-center mt-150 xl-mt-100 lg-mt-60">
					<div class="col-xl-5 col-lg-6 order-lg-last">
						<div class="ps-xl-5 ms-xxl-3">
							<div class="title-four">
								<h2>Application Integrate</h2>
							</div>
							<p class="fs-24 font-manrope mt-45 lg-mt-30 mb-45 lg-mb-30">Share content across apps. Evernote connects with the productivity tools you already use, so you can work your way.</p>
							<a href="project-details" class="btn-seven">Learn More</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 col-md-10 m-auto">
						<div class="img-holder d-flex align-items-center justify-content-center md-mt-40">
							<img src="{{ URL::asset('assets/images/assets/ils_14.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-nine -->




		<!--
		=====================================================
			BLock Feature Ten
		=====================================================
		-->
		<div class="block-feature-ten position-relative z-2 pt-150 lg-pt-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-8 m-auto">
						<div class="title-four text-center mb-35 lg-mb-30">
							<h2>What’s things makes us different?</h2>
						</div>
					</div>
				</div>
				<p class="fs-24 text-dark text-center font-manrope pb-70 lg-pb-40">Piku for every business you need. we’r provide best offer with best services</p>

				<div class="row justify-content-between">
					<div class="col-xxl-3 col-lg-4">
						<div class="card-style-five text-center mb-25">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_20.svg') }}" alt=""></div>
							<span>User friendly</span>
							<p class="font-manrope fw-600 lh-base fs-24 text-dark">Quick, easy and <br> very user friendly interface</p>
						</div>
						<!-- /.card-style-five -->
					</div>
					<div class="col-xxl-3 col-lg-4">
						<div class="card-style-five text-center mb-25">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_20.svg') }}" alt=""></div>
							<span>Lowest Price</span>
							<p class="font-manrope fw-600 lh-base fs-24 text-dark">Get Membership <br>in very  affordable price</p>
						</div>
						<!-- /.card-style-five -->
					</div>
					<div class="col-xxl-3 col-lg-4">
						<div class="card-style-five text-center mb-25">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_20.svg') }}" alt=""></div>
							<span>#1 platform</span>
							<p class="font-manrope fw-600 lh-base fs-24 text-dark">Over 12,000+ <br> Template ready to use</p>
						</div>
						<!-- /.card-style-five -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-ten -->



		<!--
		=====================================================
			BLock Feature Eleven
		=====================================================
		-->
		<div class="block-feature-eleven z-1 bg-seven pt-150 lg-pt-80 mt-150 lg-mt-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="title-five md-mb-20">
							<h2 class="text-white">Design & Built website</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="position-relative z-1 ps-xl-5">
							<p class="font-manrope text-white fs-28 fw-500 pb-15">Pickup from 13,000+ stunning template library start building now!</p>
							<ul class="style-none d-flex flex-wrap align-items-center">
								<li class="me-4 mt-10"><a href="project-v3" class="btn-nine">Explore All</a></li>
								<li class="mt-10"><a href="project-details" class="btn-ten">Become an expert</a></li>
							</ul>
							<img src="{{ URL::asset('assets/images/shape/shape_34.svg') }}" alt="" class="shapes shape_01">
						</div>
					</div>
				</div>
			</div>

			<div class="slide-one pr-slide mt-100 lg-mt-50">
				<div class="pr-slider-one">
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_02.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_03.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_04.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_05.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_03.jpg') }}" alt="" class="w-100"></a>
					</div>
				</div>
			</div>
			<!-- /.slide-one -->

			<div class="slide-two pr-slide mt-50 lg-mt-30">
				<div class="pr-slider-one">
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_06.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_07.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_06.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_08.jpg') }}" alt="" class="w-100"></a>
					</div>
					<div class="item">
						<a href="#" class="d-block"><img src="{{ URL::asset('assets/images/media/img_09.jpg') }}" alt="" class="w-100"></a>
					</div>
				</div>
			</div>
			<!-- /.slide-one -->
		</div>
		<!-- /.block-feature-eleven -->




		<!--
		=====================================================
			Feedback Section Three
		=====================================================
		-->
		<div class="feedback-section-three mt-180 xl-mt-150 lg-mt-80">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-6">
						<h3 class="m0">12,0000+</h3>
						<p class="text1">Customer love our product</p>
					</div>
					<div class="col-lg-5 col-md-6 ms-auto">
						<div class="d-inline-flex position-relative z-1 sm-mt-40">
							<img src="{{ URL::asset('assets/images/media/img_10.jpg') }}" alt="" class="rounded-circle avatar-group">
							<img src="{{ URL::asset('assets/images/media/img_11.jpg') }}" alt="" class="rounded-circle avatar-group">
							<img src="{{ URL::asset('assets/images/media/img_12.jpg') }}" alt="" class="rounded-circle avatar-group">
							<img src="{{ URL::asset('assets/images/media/img_13.jpg') }}" alt="" class="rounded-circle avatar-group">
							<img src="{{ URL::asset('assets/images/shape/shape_35.svg') }}" alt="" class="shapes shape_01">
						</div>
						<p class="fs-24 text-dark mt-20 lg-mt-10">Client satisfaction speaks louder than our words. Hear from them.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="slider-wrapper mt-80 lg-mt-40 mb-130 lg-mb-80">
					<div class="feedback-slider-two">
						<div class="item">
							<div class="feedback-block-two">
								<blockquote>Game-changer! Boosted efficiency, simplified tasks, and saved time. Highly recommended!</blockquote>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h6>Rashed Kabir</h6>
										<span>Claifornia</span>
									</div>
									<img src="{{ URL::asset('assets/images/media/img_10.jpg') }}" alt="" class="rounded-circle client-avatar">
								</div>
							</div>
							<!-- /.feedback-block-two -->
						</div>
						<!-- /.item -->

						<div class="item">
							<div class="feedback-block-two">
								<blockquote>“Reliable and professional. Delivers high-quality products that exceed our expectations.”</blockquote>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h6>Marry Gorge</h6>
										<span>Milan</span>
									</div>
									<img src="{{ URL::asset('assets/images/media/img_11.jpg') }}" alt="" class="rounded-circle client-avatar">
								</div>
							</div>
							<!-- /.feedback-block-two -->
						</div>
						<!-- /.item -->

						<div class="item">
							<div class="feedback-block-two">
								<blockquote>"Highly recommend this reliable SaaS provider for seamless workflow optimization."</blockquote>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h6>Stefan Jong</h6>
										<span>Miami</span>
									</div>
									<img src="{{ URL::asset('assets/images/media/img_11.jpg') }}" alt="" class="rounded-circle client-avatar">
								</div>
							</div>
							<!-- /.feedback-block-two -->
						</div>
						<!-- /.item -->

						<div class="item">
							<div class="feedback-block-two">
								<blockquote>“Exceptional service and quality. Exceeded expectations. Recommend for future projects.”</blockquote>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h6>Zubayer Hasan</h6>
										<span>India</span>
									</div>
									<img src="{{ URL::asset('assets/images/media/img_12.jpg') }}" alt="" class="rounded-circle client-avatar">
								</div>
							</div>
							<!-- /.feedback-block-two -->
						</div>
						<!-- /.item -->
					</div>
					<!-- /.feedback-slider-two -->
				</div>
				<!-- /.slider-wrapper -->
			</div>
			<!-- /.container -->

			<div class="container">
				<h6 class="fs-20 text-uppercase text-center mb-20 md-mb-10">Some of Our Clients</h6>

				<div class="row gx-5 justify-content-center align-items-center">
					<div class="col-lg-3 col-4 mt-60 lg-mt-30">
						<img src="{{ URL::asset('assets/images//logo/p_logo_33.png') }}" alt="" class="m-auto">
					</div>
					<div class="col-lg-3 col-4 mt-60 lg-mt-30">
						<img src="{{ URL::asset('assets/images//logo/p_logo_34.png') }}" alt="" class="m-auto">
					</div>
					<div class="col-lg-3 col-4 mt-60 lg-mt-30">
						<img src="{{ URL::asset('assets/images//logo/p_logo_35.png') }}" alt="" class="m-auto">
					</div>
					<div class="col-lg-3 col-4 mt-60 lg-mt-30">
						<img src="{{ URL::asset('assets/images//logo/p_logo_36.png') }}" alt="" class="m-auto">
					</div>
					<div class="col-lg-3 col-4 mt-60 lg-mt-30">
						<img src="{{ URL::asset('assets/images//logo/p_logo_37.png') }}" alt="" class="m-auto">
					</div>
					<div class="col-lg-3 col-4 mt-60 lg-mt-30">
						<img src="{{ URL::asset('assets/images//logo/p_logo_38.png') }}" alt="" class="m-auto">
					</div>
					<div class="col-lg-3 col-4 mt-60 lg-mt-30">
						<img src="{{ URL::asset('assets/images//logo/p_logo_39.png') }}" alt="" class="m-auto">
					</div>
				</div>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.feedback-section-three -->




		<!--
		=====================================================
			Pricing Section Two
		=====================================================
		-->
		<div class="pricing-section-two position-relative z-1 mt-170 xl-mt-150 lg-mt-80 pt-140 lg-pt-80 pb-150 xl-pb-120 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-xxl-9 col-lg-8 m-auto">
						<div class="title-four text-center mb-50 lg-mb-30">
							<h2 class="text-white">All-inclusive great options pick your  Plan</h2>
						</div>
						<p class="fs-24 text-white text-center mb-40 lg-mb-10">Try Team plan features for 14 days · No credit card required</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="pr-table-wrapper position-relative z-1 mt-40" style="background-image: url(assets/images/assets/bg_06.png);">
					<div class="row">
						<div class="col-lg-3 ms-auto">
							<div class="price">$89.00</div>
							<p class="fs-22 text-dark">Individual Plan</p>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-7">
							<ul class="style-none mt-20">
								<li>Designing Style</li>
								<li>Budget Minimization</li>
								<li>Venue Booking</li>
								<li>Caterers & Desserts</li>
								<li>Photography</li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-5 text-center">
							<a href="#" class="btn-seven text-uppercase mt-40">Choose Plan</a>
							<strong class="fs-20 fw-bold d-block text-dark text-uppercase mt-20">15% OFF</strong>
							<p class="fs-20 text-dark">Full Payment</p>
						</div>
					</div>
					<img src="{{ URL::asset('assets/images/shape/shape_36.svg') }}" alt="" class="shapes shape_01">
				</div>
				<!-- /.pr-table-wrapper -->

				<div class="pr-table-wrapper position-relative z-1 mt-40" style="background-image: url(assets/images/assets/bg_07.png);">
					<div class="row">
						<div class="col-lg-3 ms-auto">
							<div class="price">$69.00</div>
							<p class="fs-22 text-dark">Team Plan</p>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-7">
							<ul class="style-none mt-20">
								<li>Designing Style</li>
								<li>Budget Minimization</li>
								<li>Venue Booking</li>
								<li>Caterers & Desserts</li>
								<li>Photography</li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-5 text-center">
							<a href="#" class="btn-seven text-uppercase mt-40">Choose Plan</a>
							<strong class="fs-20 fw-bold d-block text-dark text-uppercase mt-20">13% OFF</strong>
							<p class="fs-20 text-dark">Full Payment</p>
						</div>
					</div>
					<img src="{{ URL::asset('assets/images/shape/shape_37.svg') }}" alt="" class="shapes shape_01">
				</div>
				<!-- /.pr-table-wrapper -->

				<div class="pr-table-wrapper position-relative z-1 mt-40" style="background-image: url(assets/images/assets/bg_08.png);">
					<div class="row">
						<div class="col-lg-3 ms-auto">
							<div class="price">$129.00</div>
							<p class="fs-22 text-dark">Business Plan</p>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-7">
							<ul class="style-none mt-20">
								<li>Designing Style</li>
								<li>Budget Minimization</li>
								<li>Venue Booking</li>
								<li>Caterers & Desserts</li>
								<li>Photography</li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-5 text-center">
							<a href="#" class="btn-seven text-uppercase mt-40">Choose Plan</a>
							<strong class="fs-20 fw-bold d-block text-dark text-uppercase mt-20">20% OFF</strong>
							<p class="fs-20 text-dark">Full Payment</p>
						</div>
					</div>
					<img src="{{ URL::asset('assets/images/shape/shape_38.svg') }}" alt="" class="shapes shape_01">
				</div>
				<!-- /.pr-table-wrapper -->
			</div>
		</div>
		<!-- /.pricing-section-two -->



		
		<!--
		=====================================================
			Fancy Banner Three
		=====================================================
		-->
		<div class="fancy-banner-three pt-150 lg-pt-80 pb-150 lg-pb-80 position-relative z-1">
			<div class="container">
				<img src="{{ URL::asset('assets/images/logo/logo_06.svg') }}" alt="" class="m-auto">
				<div class="row">
					<div class="col-xl-8 m-auto text-center">
						<h2 class="mt-30 mb-40 lg-mb-30">Unlock the power of piku Try it now!</h2>
						<p class="fs-28 mb-50 lg-mb-30">Try it risk free — we don’t charge cancellation fees</p>
						<a href="pricing-v2" class="btn-eleven">Try it Now!</a>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/shape/shape_39.svg') }}" alt="" class="shapes shape_01">
			<img src="{{ URL::asset('assets/images/shape/shape_40.svg') }}" alt="" class="shapes shape_02">
		</div>


	



		<!--
		=====================================================
			Footer Four
		=====================================================
		-->
		<div class="footer-four">
			<div class="container">
				<div class="wrapper">
					<div class="row">
						<div class="col-lg-2">
							<div class="footer-intro mb-30">
								<div class="logo mt-15">
									<a href="index">
										<img src="{{ URL::asset('assets/images/logo/logo_07.svg') }}" alt="">
									</a>
								</div> 
								<!-- logo -->
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="footer-nav mb-20">
								<ul class="footer-nav-link style-none">
									<li><a href="about-us-v1">About </a></li>
									<li><a href="project-v1">Work Gallery</a></li>
									<li><a href="pricing-v1">Pricing</a></li>
									<li><a href="blog-v1">Blog</a></li>
									<li><a href="contact-v1">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6">
							<div class="footer-nav mb-20">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1">Faq’s</a></li>
									<li><a href="service-v1">Service</a></li>
									<li><a href="login">Login</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6">
							<div class="footer-nav mb-20">
								<ul class="footer-nav-link style-none">
									<li><a href="project-v2">Portfolio</a></li>
									<li><a href="faq-v1">Cookies Policy</a></li>
									<li><a href="blog-v2">Reports</a></li>
									<li><a href="team-v1">Team</a></li>
									<li><a href="blog-v3">Article</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer-newsletter mb-20">
								<h6>Join Our Newsletter</h6>
								<form action="#" class="position-relative">
									<input type="email" placeholder="Your email address">
									<button class="tran3s">Sign Up</button>
								</form>
								<p class="fs-16 mt-15">We only send interesting and relevant emails.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="container">
				<div class="bottom-footer">
					<p class="copyright-text text-center"><strong class="text-dark">@2024.</strong> All Right Reserved. </p>
				</div>
			</div>
		</div> <!-- /.footer-four -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>
		@endsection

		@section('js')
		@endsection