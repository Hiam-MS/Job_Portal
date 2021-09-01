<!DOCTYPE html>
<html dir="rtl" lang="ar">


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
	<link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE -->
	<title>JobBoard - HTML Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-1.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/datepicker/css/bootstrap-datetimepicker.min.css')}}"/>
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/navigation.css')}}">
	<!-- Revolution Navigation Style -->
</head>
<body id="bg">
<div class="page-wraper">

	<!-- header -->
    <header class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index-2.html"><img src="{{ asset('images/logo.png')}}" class="logo" alt=""></a>
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
							<li class="active">
								<a href="index-3.html">الرئيسية </i></a>
								<!--<ul class="sub-menu">
									<li><a href="index-2.html" class="dez-page">Home 1</a></li>
									<li><a href="index-3.html" class="dez-page">Home 2</a></li>
								</ul>
							</li>-->
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
							 <!--<li>
								<a href="#">Blog <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="blog-classic.html" class="dez-page">Classic</a></li>
									<li><a href="blog-classic-sidebar.html" class="dez-page">Classic Sidebar</a></li>
									<li><a href="blog-detailed-grid.html" class="dez-page">Detailed Grid</a></li>
									<li><a href="blog-detailed-grid-sidebar.html" class="dez-page">Detailed Grid Sidebar</a></li>
									<li><a href="blog-left-img.html" class="dez-page">Left Image Sidebar</a></li>
									<li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
								</ul> -->
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
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
        
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">السيرة الذاتية</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
                    <h6 class="text-white"> التعليم</h1>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->

        <div  class="content-block">
			<!-- Submit Resume -->
			<div class="section-full bg-white submit-resume content-inner-2">
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					<form action="/resume/store" method="POST" id="resume" >
                    @csrf
                    
						<div class="form-group">
							<h2>خبرات العمل</h2>
							
                            <a href="browse-job.html" style="ho" >اضف خبرة عمل جديدة</a>
						</div>
						
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
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
<script src="plugins/paroller/skrollr.min.js"></script><!-- PAROLLER -->
<script type="text/javascript">

			$("#exp-slider-range").slider({
				range: true,
				min: 0,
				max: 10,
				//values: [0, 10],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val( min + " year - " + max + " year");
				}
			});
			
			$("#salary-slider-range").slider({
				range: true,
				min: 10,
				max: 100,
				//values: [10, 1000],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val(min + "K - " + max + "K");
				}
			});
		
</script>
</body>


</html>
