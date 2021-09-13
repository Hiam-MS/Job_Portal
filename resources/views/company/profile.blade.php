@extends('header')
@section('content')
    <!-- header END -->
    <!-- Content -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
        
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

		
					<form action="/resume/store" method="POST" id="resume" >
                    @csrf
                    
						<div class="form-group">
							<label>اسم الشركة بالعربي</label>
							<input type="text" class="form-control" placeholder="" name="name" style="width:60%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('name'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>اسم الشركة بالانكليزي</label>
							<input type="text" class="form-control" placeholder="" name="name" style="width:60%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('name'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>عنوان البريد الالكتروني</label>
							<input type="text" class="form-control" placeholder="info@gmail.com" name="email" style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>
                       
                        <div class="form-group">
							<label>  الهاتف الأرضي</label>
							<input type="text" class="form-control" placeholder="963-11-2222222+" name="email" style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>  رقم الفاكس </label>
							<input type="text" class="form-control" placeholder=" 963-11-2222222+" name="email" style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>

                        <div class="form-group">
							<label>  العنوان  </label>
							<input type="text" class="form-control" placeholder="" name="email" style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>  اختصاص الشركة  </label>
							<input type="text" class="form-control" placeholder="" name="email" style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
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
