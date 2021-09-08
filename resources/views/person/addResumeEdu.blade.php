
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
									<form action="/resume/storePersonJobCat" method="POST" id="resume" >
                                    @csrf

									<br>
									<h3 class="font-weight-600">  اختصاص العمل المطلوب  </h3>
									<p> </p>
									<p>  </p>
									
                                   

                                    <select name="category[]" id="category" multiple="multiple" size="13">
                                    @foreach($jobCat as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                     @endforeach
                                   </select>

								  
                                   <br>

								
									<br>
                                    <p>
                                    <input type="hidden" class="form-control" placeholder=""  name="pid" value="{{$Person->id}}">
									
                                    <button type="submit" class="site-button" > أضف</button>
									</p>
									
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
                                      </form>
									  

									<br>
									<h3 class="font-weight-600" > الشهادات التعليمية  </h3>
									<!-- <p>لاتوجد شهادات تعليمية مذكورة حالياً - أضف الشهادات التعليمية في حال وجودها </p> -->
									@if(count($Person->PersonEducation) > 0)
									 <table>
									<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                        <th>اسم الشهادة</th>
                                        <th>الاختصاص</th>
										<th>سنة التخرج</th>
										<th>خيارات</th>
                                    </tr>
									@foreach($Person->PersonEducation as $edu)
									 <tr>
									
									
                                        <th style=" color:black;">{{$edu['degree_name']}} </th>
                                        <th style=" color:black;">{{$edu['Major']}}</th>
										<th style=" color:black;">{{$edu['Graduation_year']}} </th>
										<th style=" color:black;"><a href="#" >تعديل</a> / <a href="#" >  حذف</a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									
									
									
									@else
									<p>لاتوجد شهادات تعليمية مذكورة حالياً - أضف الشهادات التعليمية في حال وجودها </p>
									@endif
									
									
									
									 

									
                                    <p>
									<a href="/resume/addEducation/{{ $Person->id }}" class="site-button" >أضف شهادة تعليمية جديدة</a>
									</p>
									
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
									
								

									<h3 class="font-weight-600" id="sdiv">المهارات </h3>
									
									@if(count($Person->PersonSkill) > 0)
									 <table>
									<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                        <th> المهارة</th>
                                        
										<th>خيارات</th>
                                    </tr>
									@foreach($Person->PersonSkill as $edu)
									 <tr>
									<th style=" color:black;">{{$edu['name']}} </th>
                                    <th style=" color:black;"><a href="#" >تعديل</a> / <a href="#" >  حذف</a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									@else
									<p>
									لا توجد مهارات مذكورة ضمن سيرتك الذاتية
</p>
									
									@endif
									<p>
									<a href="/resume/addSkill/{{ $Person->id }}"  class="site-button" >أضف مهارة جديدة</a>
									</p>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								

										
									<h3 class="font-weight-600">الدورات التدريبية المتبعة  </h3>
									@if(count($Person->PersonCousre) > 0)
									 <table>
									<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                        <th> اسم الدورة</th>
                                        
										<th>خيارات</th>
                                    </tr>
									@foreach($Person->PersonCousre as $edu)
									 <tr>
									<th style=" color:black;">{{$edu['name']}} </th>
                                    <th style=" color:black;"><a href="#" >تعديل</a> / <a href="#" >  حذف</a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									@else
									<p>
									لاتوجد دورات مذكورة حالياً - أضف الدورات المتبعة في حال وجودها
                                    </p>
									
									@endif
									
									
									<p><a href="/resume/addCourse/{{ $Person->id }}"  class="site-button" >أضف دورة تدريبية جديدة</a>
									</p>


									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
									<h3 class="font-weight-600">خبرات العمل </h3>
									
									@if(count($Person->PersonExperience) > 0)
									 <table>
									<tr style="border-bottom: 1px solid #ddd;background-color: rgba(250, 247, 246); color:black;font-size: 105%;">
                                        <th> اسم الشركة </th>
                                        <th> اختصاص العمل</th>
										<th> تاريخ الالتحاق  </th>
										<th> تاريخ الانتهاء </th>
										<th>خيارات</th>
                                    </tr>
									@foreach($Person->PersonExperience as $edu)
									 <tr>
									
									
                                        <th style=" color:black;">{{$edu['company_name']}} </th>
                                        <th style=" color:black;">{{$edu['job_Specialize']}}</th>
										<th style=" color:black;">{{$edu['Start_date']}} </th>
										<th style=" color:black;">{{$edu['end_date']}} </th>
										<th style=" color:black;"><a href="#" >تعديل</a> / <a href="#" >  حذف</a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									
									
									
									@else
									<p>
									لايوجد خبرات عمل مذكورة حالياً - أضف خبراتك في حال وجودها
                                    </p>
									@endif
									
									
									<p><a href="/resume/addExperience/{{ $Person->id }}"  class="site-button" >أضف خبرة عمل جديدة</a>
									</p>


                                    
									
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