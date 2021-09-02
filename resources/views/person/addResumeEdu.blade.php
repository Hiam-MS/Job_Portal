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
@extends('header')
@section('content')
    <!-- header END -->
    <!-- Content -->
   
    

    
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
		
        
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">السيرة الذاتية</h1>
					<div class="breadcrumb-row">
                    <h6 class="text-white">التعليم</h1>
					</div>
					<!-- Breadcrumb row -->
					<!--<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Job Detail</li>
						</ul>
					</div> -->
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
             <!-- Job Detail -->
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
					
							<div class="col-lg-4">
								<div class="sticky-top">
									<div class="row">
										<div class="col-lg-12 col-md-6">
											<div class="m-b30">
												<img src="images/blog/grid/6.jpg" alt="">
											</div>
										</div>
										
										<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;"
 class="col-lg-12 col-md-6">
											<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
												<h4 class="text-black font-weight-700 p-t10 m-b15">لوحة التحكم</h4>
												<ul>
													<li><strong class="font-weight-700 text-black"> <a href="#" >عرض الملف الشخصي</a></strong><span class="text-black-light"> </span></li>
													
													<li><strong class="font-weight-700 text-black"><li><a href="#" >تعديل كلمة المرور</a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><a href="#" >تعديل المعلومات الشخصية  </a>  </strong></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div> 
						
							@csrf
							<div class="col-lg-8">
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
									<!-- <h3 class="m-t0 m-b10 font-weight-700 title-head">
										<a href="#" class="text-secondry m-r30"></a>
										<p>
											لدى شركة :
									</h3> -->


									<br>
									<h3 class="font-weight-600"> الشهادات التعليمية  </h3>
									<p>لاتوجد شهادات تعليمية مذكورة حالياً - أضف الشهادات التعليمية في حال وجودها </p>
									<p>  </p>

									<!-- <table>
									<tr>
                                        <th>اسم الشهادة</th>
                                        <th>الاختصاص</th>
										<th>سنة التخرج</th>
										<th>خيارات</th>
                                    </tr>

									<tr></tr>
                                     
                                    </table> -->
									
                                    <p>
									<a href="/resume/addEducation/{{ $Person->id }}" class="site-button" >أضف شهادة تعليمية جديدة</a>
									</p>
									
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
									
								

									<h3 class="font-weight-600">المهارات </h3>
									<p>
									لا توجد مهارات مذكورة ضمن سيرتك الذاتية
									</p>
									<p>
									<a href="blog-detailed-grid.html"  class="site-button" >أضف مهارة جديدة</a>
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								

										
									<h3 class="font-weight-600">الدورات التدريبية المتبعة  </h3>
									<p>
									لاتوجد دورات مذكورة حالياً - أضف الدورات المتبعة في حال وجودها
                                    </p>
									<p><a href="blog-detailed-grid.html"  class="site-button" >أضف دورة تدريبية جديدة</a>
									</p>


									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
									<h3 class="font-weight-600">خبرات العمل </h3>
									<p>
									لايوجد خبرات عمل مذكورة حالياً - أضف خبراتك في حال وجودها
                                    </p>
									<p><a href="blog-detailed-grid.html"  class="site-button" >أضف خبرة عمل جديدة</a>
									</p>


                                    
									<!-- <!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
                                    
									<p>
									عدد الاشخاص المطلوبين :
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<ul class="list-num-count no-round">
										<!-- <li>T•الخبرة العملية السابقة غير مطلوبة , الافضلية لمن لديه خبرة في نفس المجال.
											
											
										</li> -->
										
									<!-- </ul>   -->
									<a href="#" class="site-button">تقدم الآن</a>
								</div>
							</div>
						
					</div>
				</div>
			</div>
			<br><br>
            <!-- Job Detail -->
			<!-- Our Jobs -->
			
			<!-- Our Jobs END -->
		</div>

		
       
    </div>
    <!-- Content END-->
	<!-- Footer -->
    
  @endsection