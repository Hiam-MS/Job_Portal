@extends('header')
@section('content')
    <!-- header END -->
    <!-- Content -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
        
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">السيرة الذاتية</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
                    <h6 class="text-white">المعلومات الشخصية</h1>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->

        <div  class="content-block">
			<!-- Submit Resume -->
			<div class="section-full bg-white submit-resume content-inner-2">
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
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
							<label>اسم الشركة بالعربي</label>
							<input type="text" class="form-control" placeholder="" name="company_name_ar" value="{{old('company_name_ar')}}" style="width:60%" data-parsly-trigger="keyup" >
							@if($errors->any('company_name_ar'))
								<span class="text-danger">{{$errors->first('company_name_ar')}}</span>
							@endif
						</div>
                        <div class="form-group">
							<label>اسم الشركة بالانكليزي</label>
							<input type="text" class="form-control" placeholder="" name="company_name_en" value="{{old('company_name_en')}}" style="width:60%" data-parsly-trigger="keyup" >
							@if($errors->any('company_name_en'))
								<span class="text-danger">{{$errors->first('company_name_en')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>عنوان البريد الالكتروني</label>
							<input type="text" class="form-control" placeholder="info@gmail.com" name="email" value="{{old('email')}} " style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('email'))
								<span class="text-danger">{{$errors->first('email')}}</span>
							@endif
						</div>
                       
                        <div class="form-group">
							<label>  الهاتف الأرضي</label>
							<input type="text" class="form-control" placeholder="963-11-2222222+" name="fixed_phone" value="{{old('fixed_phone')}} " s style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('fixed_phone'))
								<span class="text-danger">{{$errors->first('fixed_phone')}}</span>
							@endif
						</div>
                        <div class="form-group">
							<label>  رقم الفاكس </label>
							<input type="text" class="form-control" placeholder=" 963-11-2222222+" name="fax_phone" value="{{old('fax_phone')}} " style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('fax_phone'))
								<span class="text-danger">{{$errors->first('fax_phone')}}</span>
							@endif
						</div>

                        <div class="form-group">
							<label>  العنوان  </label>
							<input type="text" class="form-control" placeholder="" name="location" value="{{old('location')}} " style="width:60%" data-parsly-trigger="keyup">
							@if($errors->any('location'))
								<span class="text-danger">{{$errors->first('location')}}</span>
							@endif
						</div>
                        <div class="form-group">
							<label>  اختصاص الشركة  </label>
							<textarea name="company_specialist" id="company_specialist" class="form-control" style="width:60%"></textarea>
							<!-- <input type="text" class="form-control" placeholder="" name="company_specialist"  value="{{old('company_specialist')}} " style=width:60% data-parsly-trigger="keyup"> -->
							@if($errors->any('company_specialist'))
								<span class="text-danger">{{$errors->first('company_specialist')}}</span>
							@endif
							
						</div>
						<div class="form-group">
							<label>   السجل التجاري  </label>
							<input type="text" class="form-control" placeholder="" name="commercial_record"  value="{{old('commercial_record')}} " style=width:60% data-parsly-trigger="keyup">
							@if($errors->any('commercial_record'))
								<span class="text-danger">{{$errors->first('commercial_record')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>  السجل  الصناعي  </label>
							<input type="text" class="form-control" placeholder="" name="industria_record"  value="{{old('industria_record')}}" style=width:60% data-parsly-trigger="keyup">
							@if($errors->any('industria_record'))
								<span class="text-danger">{{$errors->first('industria_record')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>  موقع الانترنت    </label>
							<input type="text" class="form-control" placeholder="" name="website"  value="{{old('website')}}" style=width:60% data-parsly-trigger="keyup">
							@if($errors->any('website'))
								<span class="text-danger">{{$errors->first('website')}}</span>
							@endif
						</div>
						
						
            
            
						
                       
                        
						
					
                     

                        
                      
						
					
						
						
						<button type="submit" class="btn btn-primary" >ادخال</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
@endsection
