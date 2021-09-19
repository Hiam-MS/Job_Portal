@extends('header')
@section('content')
    <!-- Content -->
    @csrf
    

    
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
        
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Job Detail</h1>
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
												<h4 class="text-black font-weight-700 p-t10 m-b15">تفاصيل العمل</h4>
												<ul>
													<li><i  class="ti-location-pin"></i><strong class="font-weight-700 text-black">العنوان: {{$job->city}} </strong><span class="text-black-light"> </span></li>
													<li><i class="ti-money"></i><strong class="font-weight-700 text-black">الراتب</strong> </li>
													<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">عدد الاشخاص المطلوبين:  {{$job->number_of_employess}} </strong>6 Year Experience</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						

							<div class="col-lg-8">
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
									<h3 class="m-t0 m-b10 font-weight-700 title-head">
										<a href="#" class="text-secondry m-r30"></a>
										<p>
											العمل لدى شركة  : 
											<h5>{{$job->company_name}}</h5>
										</p>
									</h3>


									<br>
									<h5 class="font-weight-600"> الحد الأدنى للمستوى التعليمي:{{$job->educational_lvl}} </h5>
									<p>
										
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
									
								

									<h5 class="font-weight-600">المهام الوظيفية</h5>
									<p>
									{{$job->job_task}}
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								

										
									<h5 class="font-weight-600">الراتب و الفوائد </h5>
									<p>
                                    {{$job->salary}}
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
									<h5 class="font-weight-600">متطلبات خاصة بهذه الفرصة</h5>

									<p>
                                    
										   
									
									</p>
                                    <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
									
								

									<h5 class="font-weight-600">اختصاص العمل المطلوب: </h5>
									<p>
									{{$job->job_specialist}}
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
                                    
									<p>
									عدد الاشخاص المطلوبين :
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<ul class="list-num-count no-round">
										<!-- <li>T•الخبرة العملية السابقة غير مطلوبة , الافضلية لمن لديه خبرة في نفس المجال.
											
											
										</li> -->
										
									</ul>
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