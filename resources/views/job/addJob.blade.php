@extends ('header')
@section('content')

<style>
    .form-control{
        font-size:20px;
        font-family: Arial, Helvetica, sans-serif;

    }
	span{
		font-size:18px;
		color:red;
	}
</style>
<div class="dez-bnr-inr overlay-black-dark" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
    <div class="container">
         <div class="dez-bnr-inr-entry">
                <h1 class="text-white"> نشر فرصة عمل </h1>
		</div>
    </div>
</div>
<div class="content-block">
    <div class="section-full content-inner-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="sticky-top">
						<div class="row">
							<div class="col-lg-8 col-md-6">
								<div class="m-b30">
									<img src="{{asset('images/blog/grid/6.jpg')}}" alt="">
								</div>
							</div>
							

							<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
								<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                    <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="{{route('CompanyDash')}}" > لوحة التحكم<a></h4>
									<ul>
										@if(isset(auth()->user()->GetCompany))
											<li>
												<strong class="font-weight-700 text-black"> 
													<a href="{{route('CompanyAdditionalInfo')}}" > عرض/ تعديل/اضافة معلومات أخرى   </a>
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
										@else
											<li><strong class="font-weight-700 text-black"><li><a href="{{route('CompanyProfile')}}" > ادخال معلومات الشركة </a></li></strong> </li>
										@endif
										<div class="dropdown " >
											<li>
												<strong class="font-weight-700 text-black"><h5 ><i class="fa fa-chevron-down"></i>      ادارة الحساب</h5></strong>
											</li>
											<div class="dropdown-content">
												<ul>
													<li><a href="{{route('edit.form')}}" >   تعديل   اسم المستخدم</a></li>
												</ul>
												<ul>
													<li><a href="{{route('edit.formEmail')}}" >   تعديل   البريد الالكتروني </a></li>
												</ul>
												<ul>
													<li><a href="{{route('password.change')}}" >    تغيير كلمة المرور</a></li>
												</ul>
												<ul>
													<li><a href="{{route('profile.delete')}}" >  حذف الحساب </a></li>
												</ul>	
											</div>
										</div>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">	
						@if(Session::get('success'))
							<div class="alert alert-success" style="font-size:20px">
								{{Session::get('success')}}
							</div>
						@endif
						@if(Session::get('fail'))
							<div class="alert alert-danger" style="font-size:20px">
								{{Session::get('fail')}}
							</div>
						@endif

						<form  action="{{route('storeJob')}}" method="POST" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right; padding-right:40px">
						@csrf
						<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label> الشركة<span>*</span></label>
										<input type="text" name="company_name" value="{{$company->company_name}} " class="form-control" placeholder=""  " style="width:100% " readonly>
										@if($errors->any('job_title'))
											<span>{{$errors->first('job_title')}}</span>
										@endif
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label> مكان العمل <span>*</span></label>
										<input type="text" name="city" value="{{$company->location}} " class="form-control" placeholder=""  " style="width:100% " readonly>
										@if($errors->any('category'))
										<span >{{$errors->first('category')}}</span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label> المسمى الوظيفي<span>*</span></label>
										<input type="text" class="form-control form-control-lg" placeholder="" name="job_title" value="{{old('job_title')}} " data-parsly-trigger="keyup">
										@if($errors->any('job_title'))
											<span>{{$errors->first('job_title')}}</span>
										@endif
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label> اختصاص العمل<span>*</span></label>
										<select class="form-control form-control-lg" id="jobcategory" name="category">
											<option selected disabled>اختر اختصاص العمل</option>
												@foreach ($categories as $category)
													<option value="{{$category->id}}" {{(old('category') && old('category')==$category->id )?'selected':''}} >{{$category->name}}</option>
												@endforeach
										</select>
										@if($errors->any('category'))
										<span >{{$errors->first('category')}}</span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group" >
										<label> الجنس  <span>*</span></label> 
										<select name="gender" class="form-control form-control-lg" >
											<option  selected disabled>يرجى الاختيار</option>
											<option value="ذكر" {{(old('gender') && old('gender')=='ذكر' )?'selected':''}}>ذكر</option>
											<option value="أنثى" {{(old('gender') && old('gender')=='أنثى' )?'selected':''}}>أنثى</option>
											<option value="لايهم" {{(old('gender') && old('gender')=='لايهم' )?'selected':''}}>لايهم</option>
										</select>
										@if($errors->any('gender'))
											<span >{{$errors->first('gender')}}</span>
										@endif
									</div>
								</div>


								<div class="col-sm-6">
									<div class="form-group" >
										<label> 	خدمة العلم   <span>*</span> </label> 
										<select name="military_service" class="form-control form-control-lg" >
											<option  selected disabled>يرجى الاختيار</option>
											<option value="معفى" {{(old('military_service') && old('military_service')=='معفى' )?'selected':''}}>معفى</option>
											<option value="منتهية" {{(old('military_service') && old('military_service')=='منتهية' )?'selected':''}}>منتهية</option>
											<option value="غير منتهية" {{(old('military_service') && old('military_service')=='غير منتهية' )?'selected':''}}>غير منتهية</option>
											<option value="لايهم" {{(old('military_service') && old('military_service')=='لايهم' )?'selected':''}}>لايهم</option>
										</select> 
										@if($errors->any('military_service'))
											<span >{{$errors->first('military_service')}}</span>
										@endif
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label> الحد الأدنى من المستوى التعليمي <span>*</span> </label>
										<select name="degree" class="form-control form-control-lg" >
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
											<span>{{$errors->first('degree')}}</span>
										@endif
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label> طبيعة العمل   <span>*</span></label>
										<select name="job_type"  class="form-control form-control-lg"  >
											<option  selected disabled>يرجى الاختيار</option>
											<option value=" دوام كامل " {{(old('job_type') && old('job_type')=='دوام كامل' )?'selected':''}}>دوام كامل  </option>
											<option value=" دوام جزئي " {{(old('job_type') && old('job_type')=='دوام جزئي' )?'selected':''}}>دوام جزئي  </option>
											<option value=" تدريب " {{(old('job_type') && old('job_type')=='تدريب' )?'selected':''}}>تدريب  </option>	
											<option value=" دوام ليلي " {{(old('job_type') && old('job_type')=='دوام ليلي' )?'selected':''}}>دوام ليلي  </option>
										</select>
										@if($errors->any('job_type'))
											<span>{{$errors->first('job_type')}}</span>
										@endif
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label> الراتب والفوائد<span>(اختياري)</span>  </label>
										<textarea name="budget" id="budget" class="form-control" >{{old('budget')}}</textarea>
										@if($errors->any('budget'))
											<span >{{$errors->first('budget')}}</span>
										@endif
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>  متطلبات خاصة بالوظيفة (المؤهلات) <span>(اختياري)</span></label>
										<textarea name="job_requirement"  id="article-ckeditor" class="form-control" >{{old('job_requirement')}}</textarea>
										@if($errors->any('job_requirement'))
											<span >{{$errors->first('job_requirement')}}</span>
										@endif
									</div>
								</div>
							</div>
						
                    		<div class="form-group">
								<label>  المهام الوظيفية <span>(اختياري)</span>  </label>
								<textarea name="functional_tasks" id="functional_tasks" class="form-control" >{{old('functional_tasks')}}</textarea>
								@if($errors->any('functional_tasks'))
									<span >{{$errors->first('functional_tasks')}}</span>
								@endif
							</div>
							<table>
								<tr>
									<td><form><input type="button" value="رجوع" onclick="history.back()" class="btn btn-primary"></form></td>
									<td><button type="submit" class="btn btn-primary">نشر</button></td>
									
								</tr>
							</table>
							
							
						</form>
					</div>
				</div>
      		</div>
		</div>
	</div>
</div>

<script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection