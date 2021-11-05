@extends('header')
@section('content')
<style>
	td{
		font-size:20px;
	}
	h3{
		border: 1px solid DodgerBlue;
		background-color:LightGray;
		text-align:center;
	}
</style>

    <!-- header END -->
    <!-- Content -->
    @csrf
    

    
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
		
        
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">تفاصيل السيرة الذاتية</h1>
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
												<!-- <img  src="images/blog/grid/6.jpg" alt=""> -->
											</div>
										</div>


									<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
										
                                    <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="#" > لوحة التحكم<a></h4>
									<ul>
									@if(auth()->user()->role == 'a')
											<li><strong class="font-weight-700 text-black"> <a href="{{route('company.show')}}" > الشركات الحالية </a></strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black"><a href="{{route('resuems')}}" >   عرض السير الذاتية المتاحة</a>  </strong></li>	
												<li><strong class="font-weight-700 text-black"><a href="{{route('pendingJob')}}" >      وظائف معلقة</a>  </strong></li>	
                                            
											@endif
									</ul>

									
									<ul>
									
									@if(auth()->user()->role == 'c')
												<li>
													<strong class="font-weight-700 text-black"> 
														<a href="{{route('CompanyViewProfile')}}" > عرض الملف الشخصي </a>
													</strong><span class="text-black-light"> </span>
												</li>
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('addJob')}}" > نشر فرصة عمل جديدة </a>
													</strong> 
												</li>
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('CompanyJob')}}" > عرض فرص العمل المنشورة  </a>
													</strong>
												</li>
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('resuems')}}" >   عرض السير الذاتية المتاحة</a> 
													 </strong>
												</li>	
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('CompanyEndJobs')}}" >   الوظائف المنتهية  </a>  
													</strong>
												</li>
												<div class="dropdown " >
													<li>
														<strong class="font-weight-700 text-black">
															<h5 ><i class="fa fa-chevron-down"></i>      ادارة الحساب</h5> 
														 </strong>
													</li>
											 		<div class="dropdown-content">
											 			<ul>
															<li>
																<a href="{{route('edit.form')}}" >   تعديل   اسم المستخدم</a> 
															</li>
														</ul>
														<ul>
															<li>
																<a href="{{route('edit.formEmail')}}" >   تعديل   البريد الالكتروني </a>
															</li>
														</ul>
														<ul>
															<li>
																<a href="{{route('password.change')}}" >    تغيير كلمة المرور</a> 
															</li>
														</ul>
														<ul>
															<li>
																<a href="{{route('profile.delete')}}" >  حذف الحساب </a>
															 </li>
														</ul>	
									 				</div>
												</div>

												

											@endif
											
											
											
										</ul>
                                    <ul>
									@if(isset(auth()->user()->GetPerson))  
									<li><strong class="font-weight-700 text-black"> <a href="/resume/create" >انشاء السيرة الذاتية</a></strong><span class="text-black-light"> </span></li>
													<li><strong class="font-weight-700 text-black"><li><a href="#" >تعديل السيرة الذاتية</a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><li><a href="/resume/createEdu" >اضافة/تعديل التعليم و المهارات  </a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><a href="/resume/ViewpersonalInfo" >  معاينةالسيرة الذاتية</a>  </strong></li>
                                            
											@endif

											
							
												</ul>
									</div>
								</div>
										
									
									</div>
								</div>
							</div>
						

							<div class="col-lg-8">
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
									<!-- <h3 class="m-t0 m-b10 font-weight-700 title-head">
										<a href="#" class="text-secondry m-r30"></a>
										<p>
											المعلومات الشخصية
										</p>
										<br>


									</h3> -->
									@if(Session::get('success'))
						<div class="alert alert-success" style="font-size:20px">
							{{Session::get('success')}}
						</div>
					@endif
					@if(Session::get('fail'))
						<div class="alert alert-danger" style="font-size:20px">
							{{Session::get('success')}}
						</div>
					@endif
									<h3 class="font-weight-600">  المعلومات الاساسية : </h5>
									<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->
									<br>
								<table  id ="gen_info" dir="rtl">
									<tr>
										
											<td> الاسم الكامل</td>
											<td> {{$Person->Fname}} {{$Person->Father_name}} {{$Person->Lname}}</td>
													
									</tr>
									<tr>
										<td> البريد الالكتروني : </td>
										<td> {{$Person->email}} </td>

									</tr>
									<tr>
										<td> الجنس : </td>
										<td>{{$Person->gender}}</td>
									</tr>
									<tr>
										<td> تاريخ الميلاد : </td>
										<td> {{$Person->dob}} </td>
									</tr>
									
									<tr>
										<td> مكان الولادة : </td>
										<td> {{$Person->place_Of_b}} </td>
									</tr>

								

									<tr>
										<td> الوضع  العائلي : </td>
										<td>{{$Person->marital_status}}</td>
									</tr>

									<tr>
										<td> خدمة العلم </td>
										<td> {{$Person->military_service}} </td>
									</tr>

									<tr>
										<td> السكن الحالي :  </td>
										<td> {{$Person->Current_address}} </td>
									</tr>
									<tr>
										<td> الهاتف الارضي  </td>
										<td> {{$Person->fixed_phone}} </td>
									</tr>
									<tr>
										<td> رقم الموبايل  </td>
										<td> {{$Person->mobile_number}} </td>
									</tr>
									
									

									
								</table>
									
							
					
								
										
									<br>
									
										
										
									<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->


									<br>@if(count($Person->PersonExperience) > 0)
									<h3 class="font-weight-600">  خبرات العمل </h5>
									
									<br>
									<table >
										
									@foreach($Person->PersonExperience as $exp)
										<tr>
											<td>  المنصب الوظيفي</td>
											
											<td>{{$exp['Job_title'] }}</td>
											
										</tr>
										<tr>
											<td> اختصاص العمل</td>
											<td>{{$exp['job_Specialize'] }}</td>
										</tr>
										<tr>
											<td> اسم الشركة</td>
											<td>{{$exp['company_name'] }}</td>
										</tr>
										<tr>
											<td> عنوان الشركة</td>
											<td>{{$exp['company_address'] }}</td>
										</tr>
										<tr>
											<td> تاريخ بدء العمل </td>
											<td>{{$exp['Start_date'] }}</td>
										</tr>
										<tr>
											<td>تاريخ انتهاء العمل </td>
											<td>{{$exp['end_date'] }}</td>
										</tr>
										<tr>
											<td> المسؤوليات  </td>
											<td>{{$exp['Responsibilities'] }}</td>
										</tr>
										@endforeach <br>
										
										
									</table>
									@endif


										<br>
									
							
									
									
									<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->
									
										
									
								
					<br>	@if(count($Person->PersonEducation) > 0)
									<h3 class="font-weight-600">  الشهادات التعليمية </h5>
									<br>
									<table >
								
									@foreach($Person->PersonEducation as $exp)
										<tr>
											<td> اسم الشهادة</td>
											
											<td>{{$exp['degree_name'] }}</td>
											
										</tr>
										<tr>
											<td>المؤسسة التعليمية</td>
											<td>{{$exp['Institution'] }}</td>
										</tr>
										<tr>
											<td> الدرجة</td>
											<td>{{$exp['Degree'] }}</td>
										</tr>
										<tr>
											<td> الاختصاص</td>
											<td>{{$exp['Major'] }}</td>
										</tr>
										<tr>
											<td> سنة التخرج</td>
											<td>{{$exp['Graduation_year'] }}</td>
										</tr>
										<tr>
											<td>البلد </td>
											<td>{{$exp['Country'] }}</td>
										</tr>
										
										@endforeach
										
										
									</table>	@endif<br><br>
									<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->
									
									
										
									
								

									@if(count($Person->PersonSkill) > 0)
									<h3 class="font-weight-600">  المهارات </h5>
									<br>

									<br>

									
									@foreach($Person->PersonSkill as $exp)
									<table  id ="skill" dir="rtl">
									<tr>
										
											<td style="font-weight:bold;">  المهارة</td>
											<td>{{$exp['name'] }}</td>
													
									</tr>
									</table>
									@endforeach
									@endif
										<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->

										@if(count($Person->PersonCousre) > 0)
										<h3 class="font-weight-600">  الدورات التدريبية المتبعة </h5>
									<br>

									<br>

									
									@foreach($Person->PersonCousre as $exp)
									<table  id ="skill" dir="rtl">
									<tr>
										
											<td style="font-weight:bold;"> الدورة المتبعة  </td>
											<td>{{$exp['name'] }}</td>
													
									</tr>
									</table>
									@endforeach
									@endif
									@if(!empty($Person->lang))
									<h3 class="font-weight-600">  االلغات </h5>
									
									
									@foreach($Person->lang as $lan)
									
										<p  style="font-weight:bold;"> {{ $lan}} </p>
										@endforeach
										@endif
										

									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
<!-- 
										<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->
								
									
									

										<br>
							<button type="submit" class="button btn btn-primary">طباعة</button>
							
							<button type="submit" onclick="history.back()" class="  btn btn-primary" ">رجوع</button>
									
										
									
								

									
									
									<ul class="list-num-count no-round">
										<!-- <li>T•الخبرة العملية السابقة غير مطلوبة , الافضلية لمن لديه خبرة في نفس المجال.
											
											
										</li> -->
										
									</ul>
										
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