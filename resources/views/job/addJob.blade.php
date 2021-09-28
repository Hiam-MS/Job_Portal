@extends ('header')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"> اضافة فرصة عمل </h1>
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
							<input type="text" name="company_name" value="{{$company->company_name_ar}} " class="form-control" placeholder="اسم الشركة بالعربي" style="width:60% ">
						</div>
						<div class="form-group">
							<label>المسمى الوظيفي  </label>
							<input type="text" name="job_title" value="{{old('job_title')}} " class="form-control" placeholder="المسمى الوظيفي" style="width:60% ">
						</div>

						
                        <div class="form-group">
							<label>   عدد الموظفين المطلوب  </label>
							<input type="text" class="form-control"   name="number_of_employess" value="{{old('number_of_employess')}} " placeholder="" style="width:60% ">
						</div>
						<div class="form-group">
							<label> الراتب والفوائد  </label>
							<input type="text" name="salary" value="{{old('salary')}} " class="form-control" placeholder=" الراتب والفوائد" style="width:60% ">
						</div>

						<div class="form-group">
							<label>  متطلبات خاصة بالوظيفة  </label>
							<input type="text" name="job_requirement" value="{{old('job_requirement')}} " class="form-control" placeholder=" متطلبات خاصة بالوظيفة" style="width:60% ">
						</div>

						<div class="form-group">
							<label>  المهام الوظيفية  </label>
							<input type="text" name="functional_tasks" value="{{old('functional_tasks')}} " class="form-control" placeholder=" المهام الوظيفية" style="width:60% ">
						</div>

						
                        <div class="form-group" >
							<label>الدولة  
							<select name="country" class="form-control" style="width:300px">
								<option  >يرجى الاختيار</option>
								<option value="سورية" > سورية </option>
								
								
							</select> </label>
                            
							<label style="padding-right:60px"> المدينة 
							 <select name="city"  class="form-control" style="width:300px">
							<option  >يرجى الاختيار</option>
								<option value="دمشق">دمشق</option>
								<option value="ريف دمشق">ريف دمشق</option>
								
								
							</select></label>
							
							
						</div>
						<div class="form-group" >
						<label> الجنس  
							<select name="gender" class="form-control" style="width:300px">
								<option  >يرجى الاختيار</option>
								<option value="ذكر">ذكر</option>
								<option value="أنثى">أنثى</option>
								<option value="لايهم">لايهم</option>
								
								
							</select> </label>
							<label style="padding-right:60px">خدمة العلم  
							<select name="military_service" class="form-control" style="width:300px">
								<option  >يرجى الاختيار</option>
								<option value="معفى">معفى</option>
								<option value="منتهية">منتهية</option>
								<option value="غير منتهية">غير منتهية</option>
								<option value="لايهم">لايهم</option>
								
								
							</select> </label>

                            
							
							
							
						</div>


                        <div class="form-group">
						
						</div>
						<div class="form-group">
							<label> الحد الأدنى من المستوى التعليمي 
							<select name="degree" class="form-control" style="width:300px">
							<option  >يرجى الاختيار</option>

							<option value="أقل من ثانوية عامة"> أقل من ثانوية عامة</option>
							<option value="ثانوية عامة"> ثانوية عامة</option>
							<option value="معهد متوسط"> معهد متوسط</option>
							<option value="بكالوريس/إجازة"> بكالوريس/إجازة</option>
							<option value="دبلوم دراسات عليا"> دبلوم دراسات عليا</option>
							<option value="ماجستير"> ماجستير</option>
							<option value="دكتوراة">  دكتوراة</option>
								
								
								
							</select>
						 </label>
							

							<label style="padding-right:60px"> طبيعة العمل 
							 <select name="job_type"  class="form-control" style="width:300px">
							<option  >يرجى الاختيار</option>
								<option value="دوام كامل">دوام كامل</option>
								<option value="دوام جزئي">دوام جزئي</option>
								<option value="تدريب">تدريب</option>
								<option value="دوام ليلي">دوام ليلي</option>

								
							</select></label>
						</div>
						<button type="submit" class="btn btn-primary">إضافة</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	@endsection