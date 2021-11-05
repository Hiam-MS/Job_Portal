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
	<link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')}}" rel="stylesheet" />

	
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
<link rel="stylesheet" type="text/css" href="{{asset('semantic/dist/semantic.min.css')}}">
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css')}}" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<link rel="stylesheet" type="text/css" href="{{asset('semantic/dist/semantic.min.css')}}">
<script
  src="{{asset('https://code.jquery.com/jquery-3.1.1.min.js')}}"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="{{asset('semantic/dist/semantic.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script>
<style>
	   body {
  color: black;}
</style>
<style>
	.form-control{
		color:black;
		
	}
</style>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
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
						<a href="{{ asset('https://ccdcp.net/')}}"><img src="{{ asset('images/logo.png')}}" class="logo" alt=""></a>
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
							
							<li>
								<a href="/#aboutUs">  نبذة عن الموقع</i></a>
								<ul class="sub-menu">
									
								</ul>
							</li>
							<li>
								<a href="{{ asset('https://ccdcp.net/')}}">موقع الغرفة      </i></a>
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
<script src="{{ asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('plugins/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{ asset('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{ asset('plugins/rangeslider/rangeslider.js')}}" ></script><!-- Rangeslider -->
<script src="{{ asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('js/recaptcha/api.js')}}"></script> <!-- Google API For Recaptcha  -->
<script src="{{ asset('js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
<script src="{{ asset('plugins/paroller/skrollr.min.js')}}"></script><!-- PAROLLER -->

<!-- select2 -->
<!--select2 -->


<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js')}}" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js')}}" defer></script>

<!-- <script src="D:\job\Job_Portal\public\js\jquery.multiselect.js"></script>
<script src="D:\job\Job_Portal\public\js\multiselect.core.js"></script>
<script src="D:\job\Job_Portal\public\js\multiselect.min.js"></script>
<script src="D:\job\Job_Portal\public\js\multiselect.js"></script> -->


												<!--select2 -->
												<script
  src="{{ asset('https://code.jquery.com/jquery-3.1.1.min.js')}}"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="{{ asset('semantic/dist/semantic.min.js')}}"></script>



@yield('javascript')


</body>


</html>
