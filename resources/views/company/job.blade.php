<!DOCTYPE html>
<html  lang="ar">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
		<meta name="description" content="JobBoard - HTML Template" />
	<meta property="og:title" content="JobBoard - HTML Template" />
	<meta property="og:description" content="JobBoard - HTML Template" />
	<meta property="og:image" content="JobBoard - HTML Template" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>JobBoard - HTML Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
	<!-- Revolution Navigation Style -->
</head>
<body id="bg">
<div class="page-wraper">

	<!-- header -->
    <!-- header -->
    <header dir="rtl" lang="ar" class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index-2.html"><img src="images/logo.png" class="logo" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div  class="extra-nav">
                        <div  class="extra-cell">
                           <!-- <a href="register.html" class="site-button"><i class="fa fa-user"></i> تسجيل حساب</a>-->
                            <a href="login.html" class="site-button"><i class="fa fa-lock"></i> تسجيل دخول</a>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<!-- <li class="active">
								<a href="index-3.html">الرئيسية </i></a>
								<ul class="sub-menu">
									<li><a href="index-2.html" class="dez-page">Home 1</a></li>
									<li><a href="index-3.html" class="dez-page">Home 2</a></li>
								</ul>
							</li> -->
							<li>
								<a href="#">التسجيل في الموقع <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="browse-job.html" class="dez-page">باحث عن موظف</a></li>
									<li><a href="companies.html" class="dez-page">باحث عن عمل</a></li>
									
								</ul>
							</li>
							
							<li>
								<a href="#">فرص العمل <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="job-country.html#country" class="dez-page">حسب المدينة</a></li>
									<li><a href="job-country.html#specialty" class="dez-page">حسب الاختصاص</a></li>
									
									
								</ul>
							</li>
							<li>
								<a href="#aboutUs">عن الشركة</i></a>
								<ul class="sub-menu">
									
								</ul>
							</li>
						
						</ul>			
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Browse Jobs</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Browse Jobs</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
			<div class="section-full bg-white browse-job content-inner-2">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8">
							<h5 class="widget-title font-weight-700 text-uppercase"> الفرص الحالية  </h5>
							<ul class="post-job-bx">
                                <form action="">
                               
                                
                                    
                                <li>
                                @foreach($job as $item)
									<a href="job/details/{{ $item->id }}">
										<div class="d-flex m-b30">
											<div class="job-post-company">
												<span><img src="images/logo/icon1.png"/></span>
											</div>
											<div class="job-post-info">
												<h4>{{$item-> company_name}}</h4>
												<ul>
													<li><i class="fa fa-map-marker"></i> {{$item->city}}</li>
													<li><i class="fa fa-bookmark-o"></i> {{$item->job_type}}</li>
													<li><i class="fa fa-clock-o"></i> Published 11 months ago</li>
												</ul>
											</div>
										</div>
										<div class="d-flex">
											<div class="job-time mr-auto">
												<span>{{$item->job_type}}</span>
											</div>
											<div class="salary-bx">
												<span>{{$item->salary}} ل.س</span>
											</div>
										</div>
										<span class="post-like fa fa-heart-o"></span>
									</a>
                                    @endforeach
								</li>
                                
                                </form>
								
								
								
								
								
							
							</ul>
						
						</div>
						<div class="col-xl-3 col-lg-4">
							<div class="sticky-top">
								<div class="clearfix m-b30">
									<h5 class="widget-title font-weight-700 text-uppercase">Keywords</h5>
									<div class="">
										<input type="text" class="form-control" placeholder="Search">
									</div>
								</div>
							
								
							
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <img src="images/logo-white.png" width="180" class="m-b15" alt=""/>
							<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the..</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="http://job-board.w3itexperts.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Id" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="#" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="site-button white google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="site-button white instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="site-button white twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Frequently Asked Questions</h5>
                            <ul class="list-2 list-line">
                                <li><a href="#">Privacy & Seurty</a></li>
                                <li><a href="#">Terms of Serice</a></li>
                                <li><a href="#">Communications</a></li>
                                <li><a href="#">Referral Terms</a></li>
                                <li><a href="#">Lending Licnses</a></li>
								<li><a href="#">Support</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">For Employers</a></li>
                                <li><a href="#">Underwriting</a></li>
                                <li><a href="#">Contact Us</a></li>
								<li><a href="#">Lending Licnses</a></li>
								<li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Find Jobs</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#">US Jobs</a></li>
                                <li><a href="#">Canada Jobs</a></li>
                                <li><a href="#">UK Jobs</a></li>
                                <li><a href="#">Emplois en Fnce</a></li>
                                <li><a href="#">Jobs in Deuts</a></li>
								<li><a href="#">Vacatures China</a></li>
                            </ul>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src='js/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
</body>


</html>