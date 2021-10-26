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
												<img  src="images/blog/grid/6.jpg" alt="">
											</div>
										</div>


									<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                    <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="#" > لوحة التحكم<a></h4>
                                    <ul>
                                                
									<li><strong class="font-weight-700 text-black"> <a href="/resume/create" >انشاء السيرة الذاتية</a></strong><span class="text-black-light"> </span></li>
													<li><strong class="font-weight-700 text-black"><li><a href="#" >تعديل السيرة الذاتية</a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><li><a href="/resume/createEdu" >اضافة/تعديل التعليم و المهارات  </a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><a href="/resume/ViewpersonalInfo" >  معاينةالسيرة الذاتية</a>  </strong></li>
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
											<td> {{$Person->name}} </td>
													
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
										<td> الرقم الوطني : </td>
										<td> {{$Person->national_number}} </td>
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


									<br>
									<h3 class="font-weight-600">  الخبرات </h5>
									
									<br>
									<table >
										@if(count($Person->PersonExperience))
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
										@else
										<tr>
											<td>لايوجد خبرات سابقة</td>
											
										</tr>
										@endif
									</table>
								


										<br>
									
							
									
									
									<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->
									
										
									
								
					<br>
									<h3 class="font-weight-600">  التعليم </h5>
									<br>
									<table >
									@if(count($Person->PersonEducation))
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
										@else
										<tr>
											<td>لايوجد شهادات علمية سابقة</td>
										</tr>
										@endif
									</table>	<br><br>
									<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->
									
									
										
									
								

									<h3 class="font-weight-600">  المهارات </h5>
									<br>
									
									<table id ="skill" dir="rtl">
											<tr>
												<th>رقم  </th>
												<th>اسم المهارة   </th>
												
											</tr>

											@foreach($Person->PersonSkill as $exp)
												<tr>
													<td> {{$exp['id'] }}</td>
													<td>{{$exp['name'] }} </td>
													
													
												</tr>
											@endforeach
										
										</table><br><br>
										<!-- <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->

										<h3 class="font-weight-600">  الدورات </h3>
										<br>
									
									<table dir="rtl">
											<tr>
												<th>رقم  </th>
												<th>اسم الدورة   </th>
												
											</tr>

											@foreach($Person->PersonSkill as $exp)
												<tr>
													<td> {{$exp['id'] }}</td>
													<td>{{$exp['name'] }} </td>
													
													
												</tr>
											@endforeach
										
										</table>
<!-- 
										<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div> -->
								
									
									

										<br>
							<button type="submit" class="button btn btn-primary">طباعة</button>
							
							<button type="submit" class=" button btn btn-primary" ">رجوع</button>
									
										
									
								

									
									
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