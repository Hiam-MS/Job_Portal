@extends('header')
@section('content')

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
									<h3 class="m-t0 m-b10 font-weight-700 title-head">
										<a href="#" class="text-secondry m-r30"></a>
										<p>
											المعلومات الشخصية
										</p>
										<br>


									</h3>

									<h5 class="font-weight-600">  المعلومات الاساسية : </h5>
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
									
							
					
								
										
									
									
										
										
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>


									<br>
									<h5 class="font-weight-600">  الخبرات </h5>
									<br>
									<table id="expr" dir="rtl">
										<thead >
											<tr>
												<td> رقم الوظيفة</th>
												<td>عنوان العمل</td>
												<td> اختصاص العمل</td>
												<td> اسم الشركة</td>
												<td> عنوان الشركة</td>
												<td>  تاريخ بدء العمل</td>
												<td> تاريخ انتهاء العمل</td>
												<td>  المسؤوليات</td>

											</tr>
											
										</thead>
										<tbody>
											@foreach($Person->PersonExperience as $exp)
												<tr>
													<td> {{$exp['id'] }}</td>
													<td>{{$exp['Job_title'] }} </td>
													<td>{{$exp['job_Specialize'] }} </td>
													<td>{{$exp['company_name'] }} </td>
													<td>{{$exp['company_address'] }} </td>
													<td>{{$exp['Start_date'] }} </td>
													<td>{{$exp['end_date'] }} </td>
													<td>{{$exp['Responsibilities'] }} </td>
													

													
												</tr>
											@endforeach
										</tbody>


										
									
							
									
									</table>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
									
								

									<h5 class="font-weight-600"> التعليم</h5>
									<br>
										<table id="edu" dir="rtl">
											<tr>
												<th>رقم الشهادة</th>
												<th>اسم الشهادة </th>
												<th>  المؤسسة التعليمية</th>
												<th> الدرجة </th>
												<th> الاختصاص  </th>
												<th>سنة التخرج </th>
												<th>  البلد </th>
												
											</tr>

											@foreach($Person->PersonEducation as $exp)
												<tr>
													<td> {{$exp['id'] }}</td>
													<td>{{$exp['degree_name'] }} </td>
													<td>{{$exp['Institution'] }} </td>
													<td>{{$exp['Degree'] }} </td>
													<td>{{$exp['Major'] }} </td>
													<td>{{$exp['Graduation_year'] }} </td>
													<td>{{$exp['Country'] }} </td>
													
													

													
												</tr>
											@endforeach
										
										</table>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
									
										
									
								

									<h5 class="font-weight-600"> المهارات</h5>
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
										
										</table>
										<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>

										<h5 class="font-weight-600"> الدورات</h5>
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

										<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								
									
									

                                    
									
										
									
								

									
									
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