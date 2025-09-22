
@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper dark-bg p-30">
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
		<header class="theme-main-menu menu-style-one">
			<div class="inner-content bg-wrapper bg-one border-20">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index" class="d-flex align-items-center">
								<img src="{{ URL::asset('assets/images/logo/logo_01.svg') }}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-md-inline-block ms-3">
                                    <a href="login" class="btn-one">Let’s Started</a>
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
									<li class="d-block d-lg-none"><div class="logo"><a href="index" class="d-block"><img src="{{ URL::asset('assets/images/logo/logo_01.svg') }}" alt=""></a></div></li>
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
										<a href="login" class="btn-one w-100">Let’s Started</a>
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
			Inner Banner Two
		============================================== 
		-->
		<div class="inner-banner-two bg-one border-30 z-1 pt-100 lg-pt-60 pb-90 lg-pb-50 mt-30 lg-mt-20 position-relative">
			<div class="container">
                <div class="title-one text-center">
                    <h2>Contact Us</h2>
                </div>
			</div>
            <img src="{{ URL::asset('assets/images/shape/shape_89.svg') }}" alt="" class="shapes shape_01">
		</div>
		<!-- /.inner-banner-two -->


		<!--
		=====================================================
			Contact Section Two
		=====================================================
		-->
		<div class="contact-section-two bg-one position-relative z-1 pt-110 lg-pt-80 pb-120 lg-pb-80 border-30 mb-30 lg-mb-20 mt-30 lg-mt-20">
			<div class="contact-banner-one">
                <div class="container">
                    <div class="row align-items-center">
						<div class="col-xl-3 col-lg-4">
							<div class="block d-flex align-items-center">
								<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_43.svg') }}" alt=""></div>
								<div class="text">
									<div class="title">We’r happy to help</div>
									<span class="fs-20">ask@homy.com</span>
								</div>
							</div>
							<!-- /.block -->
						</div>
						<div class="col-xl-6 col-lg-4">
							<div class="block d-flex align-items-center justify-content-lg-center position-relative z-1 skew-line pt-5 pb-5 md-mt-20 md-mb-20">
								<div class="d-flex align-items-center">
									<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_44.svg') }}" alt=""></div>
									<div class="text">
										<div class="title">Hotline number</div>
										<span class="fs-20">+757 699 4478,  +991 377 9731</span>
									</div>
								</div>
							</div>
							<!-- /.block -->
						</div>
						<div class="col-xl-3 col-lg-4">
							<div class="block d-flex align-items-center ps-xl-5">
								<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_45.svg') }}" alt=""></div>
								<div class="text">
									<div class="title">Live chat</div>
									<span class="fs-20">www.pikuchat.com</span>
								</div>
							</div>
							<!-- /.block -->
						</div>
					</div>
                </div>
            </div>
            <!-- /.contact-banner-one -->

            <div class="container">
                <div class="form-style-one mt-120 lg-mt-80">
                    <h3 class="font-Montserrat text-center pb-20">Any inquiries? Send us message</h3>
                    <form action="inc/contact.php" id="contact-form" data-toggle="validator">
                        <div class="messages"></div>
                        <div class="row controls">
                            <div class="col-sm-6">
                                <div class="input-group-meta form-group mb-30">
                                    <label for="">Name*</label>
                                    <input type="text" placeholder="Full Name*" name="name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group-meta form-group mb-30">
                                    <label for="">Email*</label>
                                    <input type="email" placeholder="Email Address*" name="email" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-35">
                                    <label for="">Subject (optional)</label>
                                    <input type="text" placeholder="Write your subject..." name="subject" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-35">
                                    <textarea placeholder="Write Message here.." name="message" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 mt-20"><button class="btn-five tran3s m-auto">Send Message</button></div>
                        </div>
                    </form>
                </div> <!-- /.form-style-one -->
            </div>
		</div>



		<!--
		=====================================================
			Footer One
		=====================================================
		-->
		<div class="footer-one border-30 bg-one">
			<div class="position-relative z-1">
				<div class="container">
					<div class="email-banner position-relative z-1 bg-three border-30">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h3>Subscribe Now!</h3>
							</div>
							<div class="col-lg-6">
								<form action="#" class="position-relative">
									<input type="email" placeholder="Your email address">
									<button class="tran3s"><img src="{{ URL::asset('assets/images/icon/icon_05.svg') }}" alt="" class="m-auto"></button>
								</form>
							</div>
						</div>
					</div>
					<!-- /.email-banner -->
					<div class="position-relative">
						<div class="row">
							<div class="col-lg-3">
								<div class="footer-intro mb-30">
									<div class="logo">
										<a href="index">
											<img src="{{ URL::asset('assets/images/logo/logo_01.svg') }}" alt="">
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
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-contact mb-20">
									<p class="fw-500 fs-20 text-dark mb-30 md-mb-20">210 Wallent Street, California, Main OC, USA</p>
									<a href="#" class="tel fw-500 fs-24 tran3s mb-40">(+91) 0187 34 377</a>
									<ul class="style-none d-flex align-items-center social-icon">
										<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="copyright-text m0"><strong class="text-dark">@2024.</strong> All Right Reserved. </p>
					</div>
				</div>
			</div>
		</div> <!-- /.footer-one -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>


		@endsection

		@section('js')
		@endsection