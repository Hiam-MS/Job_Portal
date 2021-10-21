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
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
					@endif
					@if(Session::get('fail'))
						<div class="alert alert-danger">
							{{Session::get('success')}}
						</div>
					@endif
		
					<form action="storeProfile" method="POST" style="padding-right:20px" >
                    @csrf
                    
						<div class="form-group">
							<label>اسم الشركة بالعربي</label>
							<input type="text" class="form-control" placeholder="" name="company_name_ar" value="{{old('company_name_ar')}}" style="width:60%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('name'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>اسم الشركة بالانكليزي</label>
							<input type="text" class="form-control" placeholder="" name="company_name_en" value="{{old('company_name_en')}}" style="width:60%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('name'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>عنوان البريد الالكتروني</label>
							<input type="text" class="form-control" placeholder="info@gmail.com" name="email" value="{{old('email')}} " style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>
                       
                        <div class="form-group">
							<label>  الهاتف الأرضي</label>
							<input type="text" class="form-control" placeholder="963-11-2222222+" name="fixed_phone" value="{{old('fixed_phone')}} " s style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('fixed_phone'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>  رقم الفاكس </label>
							<input type="text" class="form-control" placeholder=" 963-11-2222222+" name="fax_phone" value="{{old('fax_phone')}} " style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('fax_phone'){{$message}}@enderror</span>
						</div>

                        <div class="form-group">
							<label>  العنوان  </label>
							<input type="text" class="form-control" placeholder="" name="location" value="{{old('location')}} "style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('location'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>  اختصاص الشركة  </label>
							<input type="text" class="form-control" placeholder="" name="company_specialist"  value="{{old('company_specialist')}} " style=width:60% data-parsly-trigger="keyup">
							<span style="color:red"> @error('company_specialist'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>   السجل التجاري  </label>
							<input type="text" class="form-control" placeholder="" name="commercial_record"  value="{{old('commercial_record')}} " style=width:60% data-parsly-trigger="keyup">
							<span style="color:red"> @error('commercial_record'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>  السجل  الصناعي  </label>
							<input type="text" class="form-control" placeholder="" name="industria_record"  value="{{old('industria_record')}}" style=width:60% data-parsly-trigger="keyup">
							<span style="color:red"> @error('industria_record'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>  موقع الانترنت    </label>
							<input type="text" class="form-control" placeholder="" name="website"  value="{{old('website')}}" style=width:60% data-parsly-trigger="keyup">
							<span style="color:red"> @error('website'){{$message}}@enderror</span>
						</div>
						
						
            
            
						
                       
                        
						
					
                     

                        
                      
						
					
						
						
						<button type="submit" class="btn btn-primary" >Submit</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
@endsection
