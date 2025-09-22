@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper home-six-bg">
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
		<header class="theme-main-menu menu-style-seven sticky-menu menu-overlay">
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
								<li class="d-md-inline-block">
                                    <div class="dropdown">
                                        <a class="download-btn-one dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Download
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <li><a class="dropdown-item" href="#">For Windows</a></li>
                                          <li><a class="dropdown-item" href="#">For iOS</a></li>
                                          <li><a class="dropdown-item" href="#">For Mobile</a></li>
                                        </ul>
                                    </div>
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
		<div class="hero-banner-six z-1 position-relative">
			<div class="wrapper position-relative z-1 pt-250 xl-pt-200 md-pt-150 pb-180 xl-pb-100 lg-pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <h1 class="hero-heading wow fadeInUp pe-xxl-5">Crafted with <span>humans,</span> Productivity in mind</h1>
                            <p class="fs-24 pt-35 pb-20 pe-xxl-5 wow fadeInUp" data-wow-delay="0.1s">Piku delivered blazing fast performance, striking word solution</p>
                            
                            <div class="d-flex align-items-center flex-wrap wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#" class="btn-seven color-two mt-10 me-3">Download - It’s free</a>
                                <a class="btn-sixteen mt-10" href="contact-v2">Contact</a>
                            </div>

							<div class="d-flex align-items-center mt-75 md-mt-40">
								<img src="{{ URL::asset('assets/images/assets/avatar.png') }}" alt="">
								<div class="rating">
									<div class="fw-500 text-dark fs-20">Rated 5.0 on clutch</div>
									<ul class="style-none d-flex">
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
									</ul>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="illustration">
					<img src="{{ URL::asset('assets/images/assets/card_13.png') }}" alt="" class="w-100">
					<img src="{{ URL::asset('assets/images/assets/card_13.1.png') }}" alt="" class="shapes shape_01">
					<img src="{{ URL::asset('assets/images/assets/card_13.2.png') }}" alt="" class="shapes shape_02">
					<img src="{{ URL::asset('assets/images/assets/card_13.3.png') }}" alt="" class="shapes shape_03">
				</div>
				<img src="{{ URL::asset('assets/images/assets/bg_09.png') }}" alt="" class="shapes bg-shape">
            </div>
		</div>
		<!-- /.hero-banner-six -->


		


		<!--
		=====================================================
			Fancy Banner Six
		=====================================================
		-->
		<div class="fancy-banner-six position-relative z-1 mt-60 lg-mt-30">
			<div class="wrapper position-relative">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<h2>We’ve people company maintain</h2>
						</div>
						<div class="col-xl-5 col-lg-6 ms-auto">
							<div class="row">
								<div class="col-sm-7">
									<div class="counter-block-two">
										<div class="main-count fw-500 color-dark">$<span class="counter">9.1</span>b+</div>
										<p class="fs-22">Coverage</p>
									</div>
									<!-- /.counter-block-two -->
								</div>
								<div class="col-sm-5">
									<div class="counter-block-two">
										<div class="main-count fw-500 color-dark"><span class="counter">1.2</span>m</div>
										<p class="fs-22">Low interest rate</p>
									</div>
									<!-- /.counter-block-two -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/shape/shape_51.svg') }}" alt="" class="shapes shape_01">
			<img src="{{ URL::asset('assets/images/shape/shape_52.svg') }}" alt="" class="shapes shape_02">
			<img src="{{ URL::asset('assets/images/shape/shape_53.svg') }}" alt="" class="shapes shape_03">
		</div>
		<!-- /.fancy-banner-six -->






		<!--
		=====================================================
			Block Feature Seventeen
		=====================================================
		-->
		<div class="block-feature-seventeen position-relative z-1 mt-150 lg-mt-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-6 m-auto">
						<div class="title-nine text-center mb-60 lg-mb-10">
							<div class="upper-title">Main Features</div>
							<h2>Creative power that goes beyond the app</h2>
						</div>
						<!-- /.title-nine -->
					</div>
				</div>

				<div class="row gx-xxl-5">
					<div class="col-lg-4">
						<div class="card-style-eight text-center mt-35 wow fadeInUp">
							<img src="{{ URL::asset('assets/images/icon/icon_34.png') }}" alt="" class="icon m-auto">
							<h5>Open Account</h5>
							<p class="ps-xxl-4 pe-xxl-4">You design, we generate the code — for everything from fully custom layouts to</p>
						</div>
						<!-- /.card-style-eight -->
					</div>
					<div class="col-lg-4">
						<div class="card-style-eight text-center mt-35 wow fadeInUp" data-wow-delay="0.1s">
							<img src="{{ URL::asset('assets/images/icon/icon_35.png') }}" alt="" class="icon m-auto">
							<h5>Dashboard</h5>
							<p class="ps-xxl-4 pe-xxl-4">You design, we generate the code — for everything from fully custom layouts to</p>
						</div>
						<!-- /.card-style-eight -->
					</div>
					<div class="col-lg-4">
						<div class="card-style-eight text-center mt-35 wow fadeInUp" data-wow-delay="0.2s">
							<img src="{{ URL::asset('assets/images/icon/icon_36.png') }}" alt="" class="icon m-auto">
							<h5>Expert Support</h5>
							<p class="ps-xxl-4 pe-xxl-4">You design, we generate the code — for everything from fully custom layouts to</p>
						</div>
						<!-- /.card-style-eight -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-seventeen -->





		<!--
		=====================================================
			BLock Feature Eighteen
		=====================================================
		-->
		<div class="block-feature-eighteen pt-180 lg-pt-100">
			<div class="container">
				<div class="row gx-xxl-5">
					<div class="col-12">
						<div class="feature-block block-one md-pt-30 w-100">
							<div class="row align-items-center">
								<div class="col-lg-5 order-lg-last">
									<div class="ps-xxl-4 pe-xxl-3">
										<h3>Award winning Application</h3>
										<p class="fs-24 pt-35 lg-pt-20 pb-20">Go paperless. Back up important to all your devices, & keep the information not the clutter.</p>
										<a href="about-us-v3" class="btn-seven">Learn More</a>
									</div>
								</div>
								<div class="col-lg-7">
									<img src="{{ URL::asset('assets/images/assets/card_14.png') }}" alt="" class="me-auto ms-auto">
								</div>
							</div>
							
						</div>
						<!-- /.feature-block -->
					</div>
					<div class="col-lg-6 d-flex">
						<div class="feature-block block-one w-100 mt-50 lg-mt-30 pt-55 lg-pt-30">
							<h3>Major Application Integration</h3>
							<p class="fs-24 pt-30 md-pt-20">Go paperless. Back up important to all devices, & keep the information not the clutter.</p>
							<div class="position-relative">
								<img src="{{ URL::asset('assets/images/assets/card_15.png') }}" alt="" class="me-auto ms-auto">
								<img src="{{ URL::asset('assets/images/shape/shape_54.svg') }}" alt="" class="shapes shape_01">
							</div>
						</div>
						<!-- /.feature-block -->
					</div>
					<div class="col-lg-6 d-flex">
						<div class="feature-block block-one w-100 mt-50 lg-mt-30 pt-55 lg-pt-30 md-pb-40">
							<h3>Cool Features & Widgets</h3>
							<p class="fs-24 pt-30 md-pt-20 pb-20">Go paperless. Back up important to all devices, & keep the information not the clutter. keep quis information not the </p>
							<div class="position-relative">
								<img src="{{ URL::asset('assets/images/assets/card_16.png') }}" alt="" class="me-auto ms-auto card-three">
							</div>
						</div>
						<!-- /.feature-block -->
					</div>
					<div class="col-12">
						<div class="feature-block block-one w-100 mt-50 lg-mt-30 pt-70 lg-pt-40">
							<div class="row align-items-center">
								<div class="col-xl-5 col-lg-6 m-auto text-center">
									<h3>Standby, A full New Experiences</h3>
								</div>
							</div>
							<img src="{{ URL::asset('assets/images/assets/card_17.png') }}" alt="" class="me-auto ms-auto mt-70 xs-mt-40">
							<img src="{{ URL::asset('assets/images/assets/card_17.1.png') }}" alt="" class="shapes shape_02">
							<img src="{{ URL::asset('assets/images/shape/shape_55.svg') }}" alt="" class="shapes shape_03">
						</div>
						<!-- /.feature-block -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-eighteen -->




		<!--
		=====================================================
			Feedback Section Six
		=====================================================
		-->
		<div class="feedback-section-six text-center position-relative z-1 mt-200 xl-mt-150 lg-mt-100">
			<div class="container">
				<img src="{{ URL::asset('assets/images/assets/card_18.png') }}" alt="" class="mb-50 lg-mb-10">
				<div class="text-uppercase mb-15 xs-mb-30"><span class="fw-bold text-dark">1.2m+ </span>Customers </div>
				<div class="row">
					<div class="col-lg-10 m-auto">
						<div class="feedback-slider-four">
							<div class="item">
								<blockquote>"Extraordinary performance! <span>Quick solutions.</span> Highly Recommended."</blockquote>
								<h6>-  Jesica Harris</h6>
							</div>
							<div class="item">
								<blockquote>"Extraordinary performance! <span>Quick solutions.</span> Highly Recommended."</blockquote>
								<h6>-  Rashid Kabir</h6>
							</div>
							<div class="item">
								<blockquote>"Extraordinary performance! <span>Quick solutions.</span> Highly Recommended."</blockquote>
								<h6>-  Al Hasan</h6>
							</div>
						</div>
					</div>
				</div>
				<img src="{{ URL::asset('assets/images/assets/card_19.png') }}" alt="" class="mt-50 lg-mt-10">
				<img src="{{ URL::asset('assets/images/assets/bg_10.png') }}" alt="" class="shapes shape_01">
				<img src="{{ URL::asset('assets/images/shape/shape_56.svg') }}" alt="" class="shapes shape_02">
				<img src="{{ URL::asset('assets/images/shape/shape_57.svg') }}" alt="" class="shapes shape_03">
			</div>
		</div>
		<!-- /.feedback-section-six -->




		<!--
		=====================================================
			Pricing Section Five
		=====================================================
		-->
		<div class="pricing-section-five position-relative z-1 mt-180 xl-mt-150 lg-mt-80 pt-130 lg-pt-80 pb-150 xl-pb-130 lg-pb-80">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-xl-6 col-lg-6">
						<div class="title-nine">
							<h2 class="text-white">No Hidden Charge, Get your plan</h2>
						</div>
						<!-- /.title-nine -->
					</div>
					<div class="col-xl-4 col-lg-5 ms-auto">
						<p class="text-white fs-24 md-mt-20">Go paperless. Back up important to all devices, & keep the information not the clutter.</p>
					</div>
				</div>

				<div class="mt-50 lg-mt-20">
					<div class="row gx-xxl-5">
						<div class="col-lg-4 d-flex mt-35">
							<div class="pr-column w-100 d-flex flex-column">
								<div class="pr-header text-center">
									<div class="plane-name fw-500 text-uppercase">Free Plan</div>
									<div class="price fw-500">0</div>
								</div>
								<!-- /.pr-header -->
								<ul class="style-none package-feature mt-50 lg-mt-20 mb-35">
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> 60-day chat history</li>
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> Basic widget customization</li>
									<li><img src="{{ URL::asset('assets/images/icon/cross.svg') }}" alt="" class="icon"> Ticketing system</li>
									<li><img src="{{ URL::asset('assets/images/icon/cross.svg') }}" alt="" class="icon"> Data security</li>
								</ul>
								<div class="mt-auto"><a href="#" class="btn-seven w-100">Subscribe Now</a></div>
								<img src="{{ URL::asset('assets/images/shape/shape_58.svg') }}" alt="" class="shapes shape_01">
							</div>
							<!-- /.pr-column -->
						</div>
						<div class="col-lg-4 d-flex mt-35">
							<div class="pr-column w-100 d-flex flex-column">
								<div class="pr-header text-center">
									<div class="plane-name fw-500 text-uppercase">STandard</div>
									<div class="price fw-500">$13</div>
								</div>
								<!-- /.pr-header -->
								<ul class="style-none package-feature mt-50 lg-mt-20 mb-35">
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> 60-day chat history</li>
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> Basic widget customization</li>
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> Ticketing system</li>
									<li><img src="{{ URL::asset('assets/images/icon/cross.svg') }}" alt="" class="icon"> Data security</li>
								</ul>
								<div class="mt-auto"><a href="#" class="btn-seven w-100">Subscribe Now</a></div>
							</div>
							<!-- /.pr-column -->
						</div>
						<div class="col-lg-4 d-flex mt-35">
							<div class="pr-column w-100 d-flex flex-column">
								<div class="pr-header text-center">
									<div class="plane-name fw-500 text-uppercase">BUSINESS</div>
									<div class="price fw-500">$99</div>
								</div>
								<!-- /.pr-header -->
								<ul class="style-none package-feature mt-50 lg-mt-20 mb-35">
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> 60-day chat history</li>
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> Basic widget customization</li>
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> Ticketing system</li>
									<li><img src="{{ URL::asset('assets/images/icon/check.svg') }}" alt="" class="icon"> Data security</li>
								</ul>
								<div class="mt-auto"><a href="#" class="btn-seven w-100">Subscribe Now</a></div>
								<img src="{{ URL::asset('assets/images/shape/shape_58.svg') }}" alt="" class="shapes shape_02">
							</div>
							<!-- /.pr-column -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.pricing-section-five -->



		
		<!--
		=====================================================
			Fancy Banner Seven
		=====================================================
		-->
		<div class="fancy-banner-seven position-relative z-1 mt-150 lg-mt-80">
			<div class="container">
				<img src="{{ URL::asset('assets/images/shape/shape_59.svg') }}" alt="" class="m-auto shape_01">
				<div class="row">
					<div class="col-xxl-9 col-lg-8 m-auto text-center">
						<div class="title-four mt-40 lg-mt-20">
							<h2>Love Application? Save $20 by grab it today</h2>
						</div>
						<!-- /.title-eight -->
						<p class="fs-28 mt-40 lg-mt-30 mb-40 lg-mb-30">Try it risk free — we don’t charge cancellation fees</p>
						<div class="d-flex align-items-center justify-content-center flex-wrap platform-button-group">
							<a href="#" class="d-flex align-items-center ios-button">
								<img src="{{ URL::asset('assets/images/icon/apple.svg') }}" alt="" class="icon">
								<div>
									<span>Download on the</span>
									<strong>App store</strong>
								</div>
							</a>
							<a href="#" class="d-flex align-items-center windows-button">
								<img src="{{ URL::asset('assets/images/icon/playstore.svg') }}" alt="" class="icon">
								<div>
									<span>Get it on</span>
									<strong>Google play</strong>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-seven -->


	

		<!--
		=====================================================
			Footer Five
		=====================================================
		-->
		<div class="footer-five">
			<div class="wrapper">
				<div class="container">
					<div class="position-relative">
						<div class="newsletter">
							<div class="row">
								<div class="col-xl-6 col-lg-5 col-md-6">
									<h3 class="sm-mb-40">Signup for Regular Newsletter</h3>
								</div>
								<div class="col-md-6 ms-auto">
									<form action="#" class="position-relative">
										<h6>Newsletter</h6>
										<input type="email" placeholder="rakabir@gmail.com">
										<button class="tran3s"><img src="{{ URL::asset('assets/images/icon/icon_34.svg') }}" alt="" class="m-auto"></button>
									</form>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-3 me-auto">
								<div class="footer-intro mb-30">
									<div class="logo mt-15">
										<a href="index">
											<img src="{{ URL::asset('assets/images/logo/logo_07.svg') }}" alt="">
										</a>
									</div> 
									<!-- logo -->
								</div>
							</div>
							<div class="col-xl-3 col-md-4 col-6">
								<div class="footer-nav mb-20">
									<ul class="footer-nav-link style-none">
										<li><a href="about-us-v1">About </a></li>
										<li><a href="project-v1">Work Gallery</a></li>
										<li><a href="pricing-v2">Pricing</a></li>
										<li><a href="blog-v1">Blog</a></li>
										<li><a href="contact-v2">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-2 col-md-4 col-6">
								<div class="footer-nav mb-40">
									<ul class="footer-nav-link style-none">
										<li><a href="faq-v2">Faq’s</a></li>
										<li><a href="faq-v2">Privacy Policy</a></li>
										<li><a href="faq-v2">Terms</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xxl-2 col-xl-3 col-md-4">
								<div class="footer-contact mb-20">
									<p class="fw-500">210 Wallent Street, California, Main OC, USA</p>
									<a href="#" class="tel fw-500 tran3s">(+91) 0187 34 377</a>
									<ul class="style-none d-flex align-items-center social-icon">
										<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="copyright-text text-center m0"><strong class="text-dark">@2024.</strong> All Right Reserved. </p>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/assets/bg_12.png') }}" alt="" class="shapes bg_01">
			<img src="{{ URL::asset('assets/images/shape/shape_56.svg') }}" alt="" class="shapes shape_02">
			<img src="{{ URL::asset('assets/images/shape/shape_57.svg') }}" alt="" class="shapes shape_03">
		</div> <!-- /.footer-five -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>


		@endsection

		@section('js')
		@endsection