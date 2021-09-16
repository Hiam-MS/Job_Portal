
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
							<div class="col-lg-8" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
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
									
                                    <button type="submit" class="btn btn-primary" > أضف</button>
									</p>
									<br>
									
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
                                      </form>
									  

									<br>
									<h3 class="font-weight-600" > الشهادات التعليمية  </h3>

									<!-- Submit Resume EDU -->
		
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					<form action="/resume/storePersonEdu" method="POST" id="resume" >
                    @csrf
                   
                    <table >
						<tr>
						  <th style="width: 20%" >اسم الشهادة :</th>
						  <td style="width: 50%"><input type="text" class="form-control" placeholder="  " name="degree_name" style="width:40%" >
						  <span style="color:red"> @error('degree_name'){{$message}}@enderror</span></td>
						  </tr>
						  <tr>
						  <th style="width: 20%" > المؤسسة التعليمية :</th>
						  <td style="width: 50%"><input type="text" class="form-control" placeholder="" name="Institution" style="width:40%">
						  <span style="color:red"> @error('Institution'){{$message}}@enderror</span></td>
                        </tr>
						<tr>
						  <th style="width: 20%" >  الاختصاص :</th>
						  <td style="width: 50%"><input type="text" class="form-control" placeholder="" name="Major" style="width:40%">
							<span style="color:red"> @error('Major'){{$message}}@enderror</span></td>
                        </tr>
						<tr>
						  <th style="width: 20%" >  الدرجة/ الشهادة   :</th>
						  <td style="width: 50%" ><select name="Degree" style="width:40%" >
                            <option  >يرجى الاختيار</option>
								
                                <option value="f+"  > أقل من ثانوية عامة </option>
                                <option value="f"  > ثانوية عامة </option>
                                <option value="a"  > معهد متوسط </option>
                                <option value="B"  > بكالوريوس / اجازة </option>
                                <option value="m"  > دبلوم دراسات عليا </option>
                                <option value="M"  > ماجستير </option>
								<option value="D"  > دكتوراه </option>
                                
								
							</select></td>
                        </tr>
						<tr>
						  <th style="width: 20%" >    سنة التخرج :</th>
						  <td style="width: 50%"><input type="date" class="form-control" placeholder="Web Designer"  name="Graduation_year" style="width:40%">
							<span style="color:red"> @error('Graduation_year'){{$message}}@enderror</span>
                        </tr>

						<tr>
						  <th style="width: 20%" >     دولة الدراسة :</th>
						  <td><input type="text" class="form-control" placeholder=""  name="Country" style="width:40%">
							<span style="color:red"> @error('Country'){{$message}}@enderror</span></td>
							
                        </tr>

                   </table>

					 <input type="hidden" class="form-control" placeholder=""  name="pid" value="{{$Person->id}}">
						
						
						<button type="submit"  class="btn btn-primary" > أضف شهادة تعليمية جديدة</button>
						</form>
					
				</div><br>
				
			
            <!-- Submit Resume END EDU -->
								
									<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
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
										<th style=" color:black;"><a href="/resume/editEdu/{{ $Person->id }}/{{$edu['id']}}" >تعديل</a> / <a href="/resume/deleteEdu/{{$edu['id']}}" >  حذف</a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									
									
									
									@else
									<p>لاتوجد شهادات تعليمية مذكورة حالياً - أضف الشهادات التعليمية في حال وجودها </p>
									@endif
									
									
									
									 

									
                                    <p>
									<!-- <a href="/resume/addEducation/{{ $Person->id }}" class="site-button" >أضف شهادة تعليمية جديدة</a> -->
									</p>
</div>
<br><br>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<br>

									
										
									
								<!-- Message -->
     

									<h3 class="font-weight-600" id="sdiv">المهارات </h3>
									<!-- contact area  SKILL -->

        
			<!-- Submit Resume SKILL -->
			
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					<form action="/resume/storePersonSkill" method="POST" id="resume" >
                    @csrf
                    
                    

						<div class="form-group">
							<label>    اسم المهارة </label>
							<input type="text"class="form-control"  placeholder="" name="name" style="width:80% "  >
                            <span style="color:red"> @error('name'){{$message}}@enderror</span>
                        </div>
						
                       
                        <input type="hidden" class="form-control" placeholder=""  name="pid" value="{{$Person->id}}">
						
						
						<button type="submit" class="btn btn-primary" > أضف مهارة جديدة</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
<br>
   
	
    <!-- Content END SKILL-->
	
									
	<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
									
									@if(count($Person->PersonSkill) > 0)
									 <table>
									<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                        <th> المهارة</th>
                                        
										<th>خيارات</th>
                                    </tr>
									@foreach($Person->PersonSkill as $edu)
									 <tr>
									<th style=" color:black;">{{$edu['name']}} </th>
                                    <th style=" color:black;"><a href="/resume/editSkill/{{ $Person->id }}/{{$edu['id']}}" >تعديل</a> / <a href="/resume/deleteSkill/{{$edu['id']}}" >  حذف</a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									@else
									<p>
									لا توجد مهارات مذكورة ضمن سيرتك الذاتية
</p>
									
									@endif
</div>
									<!-- @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif -->
	@if(session()->has('success'))
	<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endif 
    

									<!-- <p>
									<a href="/resume/addSkill/{{ $Person->id }}"  class="site-button" >أضف مهارة جديدة</a>
									</p> -->

									<br><br>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<br>
								

										
									<h3 class="font-weight-600">الدورات التدريبية المتبعة  </h3>
									<!-- Submit Resume COURSE -->
			
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					<form action="/resume/storePersonCourse" method="POST" id="resume" >
                    @csrf
                    
                    

						<div class="form-group">
							<label>     اسم الدورة  </label>
							<input type="text" class="form-control" placeholder="Your Full Name" name="name"  >
                            <span style="color:red"> @error('name'){{$message}}@enderror</span>
                        </div>
						
                       
                        <input type="hidden" class="form-control" placeholder=""  name="pid" value="{{$Person->id}}">
						
						
						<button type="submit" class="btn btn-primary" > أضف دورة تدريبية جديدة</button>
					</form>
				</div>
			
            <!-- Submit Resume END COURSE-->
			<br>

			<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">

									@if(count($Person->PersonCousre) > 0)
									 <table>
									<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                        <th> اسم الدورة</th>
                                        
										<th>خيارات</th>
                                    </tr>
									@foreach($Person->PersonCousre as $edu)
									 <tr>
									<th style=" color:black;">{{$edu['name']}} </th>
                                    <th style=" color:black;"><a href="/resume/editCourse/{{ $Person->id }}/{{$edu['id']}}" >تعديل</a> / <a href="/resume/deleteCourse/{{$edu['id']}}" >  حذف</a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									@else
									<p>
									لاتوجد دورات مذكورة حالياً - أضف الدورات المتبعة في حال وجودها
                                    </p>
									
									@endif
									
									
									<!-- <p><a href="/resume/addCourse/{{ $Person->id }}"  class="site-button" >أضف دورة تدريبية جديدة</a>
									</p> -->
</div>
<br><br>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<br>
									
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
										<th style=" color:black;"><a href="#" >تعديل</a> / <a href="/resume/deleteExperience/{{$edu['id']}}" > حذف </a></th>
                                    </tr>
                                    
									@endforeach
									</table>
									
									
									
									@else
									<p>
									لايوجد خبرات عمل مذكورة حالياً - أضف خبراتك في حال وجودها
                                    </p>
									@endif
									
									
									<p><a href="/resume/addExperience/{{ $Person->id }}"  class="btn btn-primary" >أضف خبرة عمل جديدة</a>
									</p>


                                    
									
									<!-- <a href="#" class="site-button">تقدم الآن</a> -->
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