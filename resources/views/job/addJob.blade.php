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
                                                
                                                <li><strong class="font-weight-700 text-black"> <a href="{{route('CompanyProfile')}}" > عرض الملف الشخصي </a></strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black"><li><a href="{{route('addJob')}}" > نشر فرصة عمل جديدة </a></li></strong> </li>
                                                <li><strong class="font-weight-700 text-black"><li><a href="{{route('CompanyJob')}}" > عرض فرص العمل المنشورة  </a></li></strong> </li>
                                                <li><strong class="font-weight-700 text-black"><a href="{{route('resuems')}}" >   عرض السير الذاتية المتاحة</a>  </strong></li>
                                            </ul>
									</div>
								</div>

							</div>
						</div>
					</div>
						
				@if(Session::get('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
					@endif
					@if(Session::get('fail'))
						<div class="alert alert-danger">
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
						    	<option selected disabled value="0">اختر اختصاص العمل</option>
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
							<input type="text" name="budget" value="{{old('budget')}} " class="form-control" placeholder=" الراتب والفوائد" style="width:100% ">
							@if($errors->any('budget'))
								<span class="text-danger">{{$errors->first('budget')}}</span>
							@endif
						</div>
					

						<div class="form-group">
							<label>  متطلبات خاصة بالوظيفة (المؤهلات) </label>
							<input type="text" name="job_requirement" value="{{old('job_requirement')}} " class="form-control" placeholder=" متطلبات خاصة بالوظيفة" style="width:100% ">
							@if($errors->any('job_requirement'))
								<span class="text-danger">{{$errors->first('job_requirement')}}</span>
							@endif
						</div>

						<div class="form-group">
							<label>  المهام الوظيفية  </label>
							<input type="text" name="functional_tasks" value="{{old('functional_tasks')}} " class="form-control" placeholder=" المهام الوظيفية" style="width:100% ">
							@if($errors->any('functional_tasks'))
								<span class="text-danger">{{$errors->first('functional_tasks')}}</span>
							@endif
						</div>

						
                        <div class="form-group" >
							<label>الدولة  
							<select name="country" class="form-control form-control-lg" style="width:300px">
								<option  selected disabled>يرجى الاختيار</option>
								<option value="سورية" > سورية </option>
								
								
							</select> 
							@if($errors->any('country'))
								<span class="text-danger">{{$errors->first('country')}}</span>
							@endif
						</label>
                            
							<label style="padding-right:60px"> المدينة 
							 <select name="city"  class="form-control form-control-lg" style="width:300px">
							<option  selected disabled>يرجى الاختيار</option>
								<option value="دمشق">دمشق</option>
								<option value="ريف دمشق">ريف دمشق</option>
								
								
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
								<option value="ذكر">ذكر</option>
								<option value="أنثى">أنثى</option>
								<option value="لايهم">لايهم</option>
								
								
							</select>
							@if($errors->any('gender'))
								<span class="text-danger">{{$errors->first('gender')}}</span>
							@endif
						 </label>
							<label style="padding-right:60px">خدمة العلم  
							<select name="military_service" class="form-control form-control-lg" style="width:300px">
								<option  selected disabled>يرجى الاختيار</option>
								<option value="معفى">معفى</option>
								<option value="منتهية">منتهية</option>
								<option value="غير منتهية">غير منتهية</option>
								<option value="لايهم">لايهم</option>
								
								
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

							<option value="أقل من ثانوية عامة"> أقل من ثانوية عامة</option>
							<option value="ثانوية عامة"> ثانوية عامة</option>
							<option value="معهد متوسط"> معهد متوسط</option>
							<option value="بكالوريس/إجازة"> بكالوريس/إجازة</option>
							<option value="دبلوم دراسات عليا"> دبلوم دراسات عليا</option>
							<option value="ماجستير"> ماجستير</option>
							<option value="دكتوراة">  دكتوراة</option>
								
								
								
							</select>
							@if($errors->any('degree'))
								<span class="text-danger">{{$errors->first('degree')}}</span>
							@endif
						 </label>
							

							<label style="padding-right:60px"> طبيعة العمل 
							 <select name="job_type"  class="form-control form-control-lg" style="width:300px" >
							<option  selected disabled>يرجى الاختيار</option>
								<option value="دوام كامل">دوام كامل</option>
								<option value="دوام جزئي">دوام جزئي</option>
								<option value="تدريب">تدريب</option>
								<option value="دوام ليلي">دوام ليلي</option>

								
							</select></label>
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