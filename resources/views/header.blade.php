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
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	
	<!-- PAGE TITLE HERE -->
	<title>منصة التوظيف</title>
	
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
<!-- select2 -->
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>

<style>
	   body {
  color: black;
</style>
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
						@guest
                            @if (Route::has('login'))
                            <a href="{{ route('register') }}" class="btn btn-primary"><i class="fa fa-user"></i> تسجيل حساب</a>
							@endif
							@if (Route::has('register'))
                            <a href="{{ route('login') }}" class="btn btn-primary"><i class="fa fa-lock"></i>  دخول</a>
							@endif
						@else
						<a href="#"> {{ Auth::user()->name }} <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">

							@if(auth::user())
							@if(auth()->user()->role == 'p')
								<li ><a  href="{{ asset('/resume/dashboard')}}" class="dez-page" > لوحة التحكم</a></li>
								@endif
								@if(auth()->user()->role == 'c')
								<li ><a  href="{{ asset('/company/dashboard')}}" class="dez-page" > لوحة التحكم</a></li>
								@endif
								@if(auth()->user()->role == 'a')
								<li ><a  href="{{ asset('/admin/dashboard')}}" class="dez-page" > لوحة التحكم</a></li>
								@endif
								@endif
									<li><a  class="dez-page" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> 
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
								</ul>

                              @endguest
									</li>
							<li class="sub-menu">
								<a href="{{ asset('/')}}">الرئيسية </i></a>
								<!--<ul class="sub-menu">
									<li><a href="index-2.html" class="dez-page">Home 1</a></li>
									<li><a href="index-3.html" class="dez-page">Home 2</a></li>
								</ul>
							</li>-->
							<!-- <li>
								<a href="#">التسجيل في الموقع <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('register') }}" class="dez-page">باحث عن موظف</a></li>
									<li><a href="{{ route('register') }}" class="dez-page">باحث عن عمل</a></li>
									
								</ul>
							</li> -->
							
							<!--<li>
								<a href="#">فرص العمل <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('job') }}" class="dez-page">حسب المدينة</a></li>
									<li><a href="{{ route('job') }}" class="dez-page">حسب الاختصاص</a></li>
									
									
								</ul>
							</li>-->
							<li>
								<a href="{{ route('job') }}">  فرص العمل</i></a>
								<ul class="sub-menu">
									
								</ul>
							</li>
							@if(auth::user())
							@if(auth()->user()->role == 'c')
							<li>
								<a href="{{ route('resuems') }}">السير الذاتية الحالية</i></a>
								<ul class="sub-menu">
									
								</ul>
							</li>
							@endif
							@endif
							<!--<li>
								<a href="{{ route('resuem.create') }}">  انشاء سيرة ذاتية</i></a>
								<ul class="sub-menu">
									
								</ul>
							</li>-->
							<li>
								<a href="{{ route('company.show') }}">    الشركات الحالية</i></a>
								<ul class="sub-menu">
									
								</ul>
							</li>
							<li>
								<a href="/#aboutUs">  نبذة عن الموقع</i></a>
								<ul class="sub-menu">
									
								</ul>
							</li>
							<li>
								<a href="{{ asset('https://ccdcp.net/new/')}}">موقع الغرفة      </i></a>
								<ul class="sub-menu">
									
								</ul>
							
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

    <main class="py-4">
            @yield('content')
    </main>


		<footer class="site-footer">
		
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
                            <img src="{{ asset('images/logo.png')}}" width="180" class="m-b15" alt=""/>
							
							
							<p class="text-capitalize m-b20">

								<ul class="list-inline m-a0">
								<li><a href="#" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="site-button white google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="site-button white instagram circle "><i class="fa fa-instagram"></i></a></li>
								
							</ul> 
                        </div>
                    </div>
					<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12"  style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">اتصل بنا</h5>
                            <ul >
                                <li><p>أزبكية – دمشق</p></li>
                                <li><p>  بريد الكتروني : ccdcp@ccdcp.net </p>
                                <li><p>هاتف رباعي : 9841</p></li>
                                <li><p>فاكس: 2313798</p></li>
							
                                
								
                               
							
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

<!-- select2 -->
<!--select2 -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="D:\job\Job_Portal\public\js\jquery.multiselect.js"></script>
<script src="D:\job\Job_Portal\public\js\multiselect.core.js"></script>
<script src="D:\job\Job_Portal\public\js\multiselect.min.js"></script>
<script src="D:\job\Job_Portal\public\js\multiselect.js"></script>


												<!--select2 -->
												<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>





</body>


</html>
