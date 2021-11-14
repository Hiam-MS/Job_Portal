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
            <h1 class="text-white">  تسجيل المعلومات الاضافية  </h1>
		</div>
    </div>
</div>


<div class="section-full bg-white submit-resume content-inner-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="sticky-top">
					<div class="row">
						<div class="col-lg-8">
							<div class="m-b30">
								<img src="{{asset('images/blog/grid/6.jpg')}}" alt="">
							</div>
						</div>
										
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" >
							<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
								<h4 class="text-black font-weight-700 p-t10 m-b15"><a href="{{route('CompanyDash')}}" > لوحة التحكم<a></h4>
								<ul>
									@if(isset(auth()->user()->GetCompany))
										<li>
											<strong class="font-weight-700 text-black"> 
												<a href="{{route('CompanyViewProfile')}}" > عرض الملف الشخصي </a>
											</strong><span class="text-black-light"> </span>
										</li>
										<li>
											<strong class="font-weight-700 text-black"> 
												<a href="{{route('CompanyViewProfile')}}" > اضافة معلومات أخرى   </a>
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
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<div class="col-lg-9">
				<div style="margin: right 20px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">	
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
					<div class="card card-warning">
						<div class="card-header">
							<h3 class="card-title" style="color:#200080">المعلومات الاضافية </h3>
						</div>
              			
						<div class="card-body">
							
							<form action="{{url('company/storeAdditionalInfo',auth()->user()->GetCompany->id)}}" method="POST" id="resume" >
						
							@csrf

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>   السجل التجاري  </label>
											<input type="text" class="form-control" placeholder="" name="commercial_record"  value="{{old('commercial_record')}} "  data-parsly-trigger="keyup">
											@if($errors->any('commercial_record'))
												<span >{{$errors->first('commercial_record')}}</span>
													@endif
												</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>  السجل  الصناعي  </label>
												<input type="text" class="form-control" placeholder="" name="industria_record"  value="{{old('industria_record')}}"  data-parsly-trigger="keyup">
												@if($errors->any('industria_record'))
													<span >{{$errors->first('industria_record')}}</span>
												@endif
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>  موقع الانترنت   </label>
										<input type="text" class="form-control" placeholder="" name="website"  value="{{old('website')}}" data-parsly-trigger="keyup">
										@if($errors->any('website'))
											<span >{{$errors->first('website')}}</span>
										@endif
									</div>

									<button type="submit" class="btn btn-primary" >إرسال</button>
								</form>
							</div>
             			</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    <!-- Content END-->


	@endsection