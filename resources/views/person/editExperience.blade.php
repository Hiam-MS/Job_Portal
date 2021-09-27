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
                    <h3 class="text-white">اضافة شهادة تعليمية جديدة</h3>
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
					<form action="/resume/updatExperience" method="POST" id="resume" >
                    @csrf
                    @method('PUT')
                    
                    
                    

						<div class="form-group">
							<label>   المنصب الوظيفي</label>
							<input type="text" class="form-control" value="{{ $Exp->Job_title }}" name="Job_title" style="width:70%"  >
							<span style="color:red"> @error('Job_title'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>  اختصاص عملك</label>
							<input type="text" class="form-control" value="{{ $Exp->job_Specialize }}" name="job_Specialize" style="width:70%">
							<span style="color:red"> @error('job_Specialize'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label> اسم الشركة </label>
							<input type="text" class="form-control" value="{{ $Exp->company_name }}" name="company_name" style="width:70%">
							<span style="color:red"> @error('company_name'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>  عنوان الشركة </label>
							<input type="text" class="form-control" value="{{ $Exp->company_address }}" name="company_address" style="width:70%">
							<span style="color:red"> @error('company_address'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>  تاريخ الالتحاق </label>
							<input type="date" class="form-control"  value="{{ $Exp->Start_date }}"  name="Start_date" style="width:70%">
							<span style="color:red"> @error('Start_date'){{$message}}@enderror</span>
						</div>
                       
						<div class="form-group">
							<label>    تاريخ الانتهاء   </label>
							<input type="date" class="form-control"  value="{{ $Exp->end_date }}"  name="end_date" style="width:70%">
							<span style="color:red"> @error('end_date'){{$message}}@enderror</span>
						</div>
                        
						<div class="form-group">
							<label>    المهام الوظيفية  </label>
							<input type="text" class="form-control" value="{{ $Exp->Responsibilities }}"  name="Responsibilities" style="width:70%">
							<span style="color:red"> @error('Responsibilities'){{$message}}@enderror</span>
							
                            <input type="hidden" class="form-control" placeholder=""  name="cid" value="{{$Exp->id}}">
							
						</div>
                        
						
						
						<button type="submit" class="site-button" > تعديل</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
@endsection