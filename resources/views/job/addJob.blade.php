@extends ('header')
@section('content')

<style>
    .form-control{
        font-size:20px;
        font-family: Arial, Helvetica, sans-serif;

    }
</style>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"> نشر فرصة عمل </h1>
					<!-- Breadcrumb row -->
				
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Submit Resume -->
			<div class="section-full bg-white submit-resume content-inner-2">
				<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="sticky-top">
							<div class="row">
								<div class="col-lg-12 col-md-6">
									<div class="m-b30">
									<img src="{{asset('images/blog/grid/6.jpg')}}" alt="">
									</div>
								</div>
										
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                         <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="#" > لوحة التحكم<a></h4>
										 <ul>
											
											@if(isset(auth()->user()->GetCompany))
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
											@else
												<li><strong class="font-weight-700 text-black"><li><a href="{{route('company.profile')}}" > ادخال معلومات الشركة </a></li></strong> </li>

											@endif
											
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
						
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

					<form  action="storeJob" method="POST" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right; padding-right:40px">
					@csrf
						<div class="form-group">
							<label>اسم الجهة </label>
							<input type="text" name="company_name" value="{{$company->company_name_ar}} " class="form-control" placeholder="اسم الشركة بالعربي" style="width:100% ">
						</div>
						<div class="form-group">
							<label>المسمى الوظيفي  </label>
							<input type="text" name="job_title" value="{{old('job_title')}} " class="form-control" placeholder="المسمى الوظيفي" style="width:100% ">
							@if($errors->any('job_title'))
								<span class="text-danger">{{$errors->first('job_title')}}</span>
							@endif
						</div>
						<div class="form-group">
						<label for="jobcategory"> اختصاص العمل</label>
						<select class="form-control form-control-lg" id="jobcategory" name="category">
						    	<option selected disabled>اختر اختصاص العمل</option>
			                        @foreach ($categories as $category)
			                            <option value="{{$category->id}}" {{(old('category') && old('category')==$category->id )?'selected':''}} >{{$category->name}}</option>
			                        @endforeach
						    </select>
							@if($errors->any('category'))
							<span class="text-danger">{{$errors->first('category')}}</span>
							@endif
						</div>
						
                        <div class="form-group">
							<label>   عدد الموظفين المطلوب  </label>
							<input type="text" class="form-control"   name="number_of_employess" value="{{old('number_of_employess')}} " placeholder="" style="width:100% ">
							@if($errors->any('number_of_employess'))
								<span class="text-danger">{{$errors->first('number_of_employess')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label> الراتب والفوائد  </label>
							<!-- <input type="text" name="budget" value="{{old('budget')}} " class="form-control" placeholder=" الراتب والفوائد" style="width:100% "> -->
							<textarea name="budget" id="budget" class="form-control" style="width:100% ">{{old('budget')}}</textarea>
							@if($errors->any('budget'))
								<span class="text-danger">{{$errors->first('budget')}}</span>
							@endif
						</div>
					

						<div class="form-group">
							<label>  متطلبات خاصة بالوظيفة (المؤهلات) </label>
							<!-- <input type="text" name="job_requirement" value="{{old('job_requirement')}} " class="form-control" placeholder=" متطلبات خاصة بالوظيفة" style="width:100% "> -->
							<textarea name="job_requirement" id="job_requirement" class="form-control" style="width:100% ">{{old('job_requirement')}}</textarea>
							@if($errors->any('job_requirement'))
								<span class="text-danger">{{$errors->first('job_requirement')}}</span>
							@endif
						</div>

						<div class="form-group">
							<label>  المهام الوظيفية  </label>
							<!-- <input type="text" name="functional_tasks" value="{{old('functional_tasks')}} " class="form-control" placeholder=" المهام الوظيفية" style="width:100% "> -->
							<textarea name="functional_tasks" id="functional_tasks" class="form-control" style="width:100% ">{{old('functional_tasks')}}</textarea>
							@if($errors->any('functional_tasks'))
								<span class="text-danger">{{$errors->first('functional_tasks')}}</span>
							@endif
						</div>

						<div class="form-group">
							<label> مدة عرض فرصة العمل </label>
							<select name="end_job" class="form-control form-control-lg" style="width:300px">
								<option  selected disabled>يرجى الاختيار</option>
								<option value="30" selected>شهر</option>
								<option value="60">شهرين</option>
								<option value="90">ثلاث شهور</option>
								
								
							</select> 
						</div>

                        <div class="form-group" >
							<label>الدولة  
							<select name="country" class="form-control form-control-lg" style="width:300px">
								<option  selected disabled>يرجى الاختيار</option>
								
								<option value="سورية" selected>سورية</option>
								
								
								
							</select> 
							@if($errors->any('country'))
								<span class="text-danger">{{$errors->first('country')}}</span>
							@endif
						</label>
                            
							<label style="padding-right:60px"> المدينة 
							 <select name="city"  class="form-control form-control-lg" style="width:300px">
							<option  selected disabled>يرجى الاختيار</option>
							<option value="دمشق" {{(old('city') && old('city')=='دمشق' )?'selected':''}}>دمشق</option>
							<option value="ريف دمشق" {{(old('city') && old('city')=='ريف دمشق' )?'selected':''}}>ريف دمشق</option>
							
								
								
								
							</select>
							@if($errors->any('city'))
								<span class="text-danger">{{$errors->first('city')}}</span>
							@endif
						</label>
							
							
						</div>
						<div class="form-group" >
						<label> الجنس  
							<select name="gender" class="form-control form-control-lg" style="width:300px">
								<option  selected disabled>يرجى الاختيار</option>
								<option value="ذكر" {{(old('gender') && old('gender')=='ذكر' )?'selected':''}}>ذكر</option>
								<option value="أنثى" {{(old('gender') && old('gender')=='أنثى' )?'selected':''}}>أنثى</option>
								<option value="لايهم" {{(old('gender') && old('gender')=='لايهم' )?'selected':''}}>لايهم</option>
								
								
								
							</select>
							@if($errors->any('gender'))
								<span class="text-danger">{{$errors->first('gender')}}</span>
							@endif
						 </label>
							<label style="padding-right:60px">خدمة العلم  
							<select name="military_service" class="form-control form-control-lg" style="width:300px">
								<option  selected disabled>يرجى الاختيار</option>
								<option value="معفى" {{(old('military_service') && old('military_service')=='معفى' )?'selected':''}}>معفى</option>
								<option value="منتهية" {{(old('military_service') && old('military_service')=='منتهية' )?'selected':''}}>منتهية</option>
								<option value="غير منتهية" {{(old('military_service') && old('military_service')=='غير منتهية' )?'selected':''}}>غير منتهية</option>
								<option value="لايهم" {{(old('military_service') && old('military_service')=='لايهم' )?'selected':''}}>لايهم</option>
								
								
								
							</select> 
							@if($errors->any('military_service'))
								<span class="text-danger">{{$errors->first('military_service')}}</span>
							@endif
						</label>

                            
							
							
							
						</div>


                        <div class="form-group">
						
						</div>
						<div class="form-group">
							<label> الحد الأدنى من المستوى التعليمي 
							<select name="degree" class="form-control form-control-lg" style="width:300px" >
							<option  selected disabled>يرجى الاختيار</option>
							<option value="أقل من ثانوية عامة" {{(old('degree') && old('degree')=='أقل من ثانوية عامة' )?'selected':''}}>أقل من ثانوية عامة</option>
							<option value="  ثانوية عامة" {{(old('degree') && old('degree')=='ثانوية عامة' )?'selected':''}}>  ثانوية عامة</option>
							<option value="معهد متوسط" {{(old('degree') && old('degree')=='معهد متوسط' )?'selected':''}}>معهد متوسط</option>
							<option value="بكالوريس/إجازة" {{(old('degree') && old('degree')=='بكالوريس/إجازة' )?'selected':''}}>بكالوريس/إجازة</option>
							<option value="دبلوم دراسات عليا" {{(old('degree') && old('degree')=='دبلوم دراسات عليا' )?'selected':''}}>دبلوم دراسات عليا</option>
							<option value=" ماجستير " {{(old('degree') && old('degree')=='ماجستير' )?'selected':''}}>ماجستير  </option>
							<option value=" دكتوراة " {{(old('degree') && old('degree')=='دكتوراة' )?'selected':''}}>دكتوراة  </option>
							
							

								
								
							</select>
							@if($errors->any('degree'))
								<span class="text-danger">{{$errors->first('degree')}}</span>
							@endif
						 </label>
							

							<label style="padding-right:60px"> طبيعة العمل 
							 <select name="job_type"  class="form-control form-control-lg" style="width:300px" >
							<option  selected disabled>يرجى الاختيار</option>
							<option value=" دوام كامل " {{(old('job_type') && old('job_type')=='دوام كامل' )?'selected':''}}>دوام كامل  </option>
							<option value=" دوام جزئي " {{(old('job_type') && old('job_type')=='دوام جزئي' )?'selected':''}}>دوام جزئي  </option>
							<option value=" تدريب " {{(old('job_type') && old('job_type')=='تدريب' )?'selected':''}}>تدريب  </option>	
							<option value=" دوام ليلي " {{(old('job_type') && old('job_type')=='دوام ليلي' )?'selected':''}}>دوام ليلي  </option>
							
							
						

								
							</select>
							@if($errors->any('job_type'))
								<span class="text-danger">{{$errors->first('job_type')}}</span>
							@endif</label>
						</div>
						<button type="submit" class="btn btn-primary">نشر</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
</div>
    </div>
    <!-- Content END-->
	@endsection