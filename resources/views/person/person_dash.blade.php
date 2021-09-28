
@extends('header')
@section('content')
    <!-- header END -->
    <!-- Content -->
   
    

    
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
		
        
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">لوحة التحكم</h1>
					<div class="breadcrumb-row">
                    <h6 class="text-white"></h1>
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
												<h4 class="text-black font-weight-700 p-t10 m-b15"><a href="#" > لوحة التحكم<a></h4>
												<ul>
                                                
													<li><strong class="font-weight-700 text-black"> <a href="#" >انشاء السيرة الذاتية</a></strong><span class="text-black-light"> </span></li>
													<li><strong class="font-weight-700 text-black"><li><a href="#" >تعديل السيرة الذاتية</a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><li><a href="#" >اضافة التعليم و المهارات  </a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><a href="#" >  معاينةالسيرة الذاتية</a>  </strong></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div> 
						
							@csrf
							<div class="col-lg-8" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
                                </div>
                                </div>
									
		</div>

		
       
    </div>
    <!-- Content END-->
	<!-- Footer -->
    
  @endsection