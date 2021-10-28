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

<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
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
					<div class="col-lg-8">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">	
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

					<form action="storeProfile" method="POST" style="padding-right:20px" >
                    @csrf
                    
						<div class="form-group">
							<label>اسم الشركة بالعربي<span style="color:red">*</span></label>
							<input type="text"  class="form-control" placeholder="" name="company_name_ar" value="{{old('company_name_ar')}}" style="width:60%" data-parsly-trigger="keyup"  >
							@if($errors->any('company_name_ar'))  
								<span>{{$errors->first('company_name_ar')}}</span>
							@endif
						</div>
                        <div class="form-group">
							<label>اسم الشركة بالانكليزي<span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="" name="company_name_en" value="{{old('company_name_en')}}" style="width:60%" data-parsly-trigger="keyup" >
							@if($errors->any('company_name_en'))
								<span >{{$errors->first('company_name_en')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>عنوان البريد الالكتروني<span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="info@gmail.com" name="email" value="{{old('email')}} " style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('email'))
								<span >{{$errors->first('email')}}</span>
							@endif
						</div>
                       
                        <div class="form-group">
							<label>  الهاتف الأرضي<span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="963-11-2222222+" name="fixed_phone" value="{{old('fixed_phone')}} " s style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('fixed_phone'))
								<span >{{$errors->first('fixed_phone')}}</span>
							@endif
						</div>
                        <div class="form-group">
							<label>  رقم الفاكس <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder=" 963-11-2222222+" name="fax_phone" value="{{old('fax_phone')}} " style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('fax_phone'))
								<span >{{$errors->first('fax_phone')}}</span>
							@endif
						</div>

                        <div class="form-group">
							<label>  العنوان  <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="" name="location" value="{{old('location')}} " style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('location'))
								<span>{{$errors->first('location')}}</span>
							@endif
						</div>
                        <div class="form-group">
							<label>  اختصاص الشركة  <span style="color:red">*</span></label>
							<textarea name="company_specialist" id="company_specialist" class="form-control" style="width:60%"></textarea>
							<!-- <input type="text" class="form-control" placeholder="" name="company_specialist"  value="{{old('company_specialist')}} " style=width:60% data-parsly-trigger="keyup"> -->
							@if($errors->any('company_specialist'))
								<span >{{$errors->first('company_specialist')}}</span>
							@endif
							
						</div>
						<div class="form-group">
							<label>   السجل التجاري  <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="" name="commercial_record"  value="{{old('commercial_record')}} " style=width:60% data-parsly-trigger="keyup">
							@if($errors->any('commercial_record'))
								<span >{{$errors->first('commercial_record')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>  السجل  الصناعي <span style="color:red">*</span> </label>
							<input type="text" class="form-control" placeholder="" name="industria_record"  value="{{old('industria_record')}}" style=width:60% data-parsly-trigger="keyup">
							@if($errors->any('industria_record'))
								<span >{{$errors->first('industria_record')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>  موقع الانترنت   <span style="color:red">(اختياري)</span> </label>
							<input type="text" class="form-control" placeholder="" name="website"  value="{{old('website')}}" style=width:60% data-parsly-trigger="keyup">
							@if($errors->any('website'))
								<span >{{$errors->first('website')}}</span>
							@endif
						</div>
						
						
            <button type="submit" class="btn btn-primary" >ادخال</button>
					</form>
					</div>
			</div>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
</div>
    </div>
    <!-- Content END-->


	@endsection