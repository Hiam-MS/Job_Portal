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
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Submit Resume</li>
						</ul>
					</div>
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

					<form  action="storeJob" method="POST" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					@csrf
						<div class="form-group">
							<label>اسم الجهة </label>
							<input type="text" name="company_name" value="{{old('company_name')}} " class="form-control" placeholder="اسم الشركة بالعربي" style="width:60% ">
						</div>
						<div class="form-group">
							<label>المسمى الوظيفي  </label>
							<input type="text" name="job_position" value="{{old('job_position')}} " class="form-control" placeholder="المسمى الوظيفي" style="width:60% ">
						</div>

						
                        <div class="form-group">
							<label>   عدد الموظفين المطلوب  </label>
							<input type="text" class="form-control"   name="number_of_employess" value="{{old('number_of_employess')}} " placeholder="" style="width:60% ">
						</div>
						<div class="form-group">
							<label> الراتب والفوائد  </label>
							<input type="text" name="job_position" value="{{old('job_position')}} " class="form-control" placeholder="المسمى الوظيفي" style="width:60% ">
						</div>

						<div class="form-group">
							<label>  متطلبات خاصة بالوظيفة  </label>
							<input type="text" name="job_position" value="{{old('job_position')}} " class="form-control" placeholder="المسمى الوظيفي" style="width:60% ">
						</div>

						<div class="form-group">
							<label>  المهام الوظيفية  </label>
							<input type="text" name="job_position" value="{{old('job_position')}} " class="form-control" placeholder="المسمى الوظيفي" style="width:60% ">
						</div>

						
                        <div class="form-group" >
							<label>الدولة   </label>
                            <select name="country">
								<option  >يرجى الاختيار</option>
								<option value="سورية" > سورية </option>
								<option value="امارات" >امارات</option>
								<option value="مصر" >مصر</option>
								<option value="السودان" >السودان</option>
								
							</select>
							
						</div>


                        <div class="form-group">
							<label> المدينة  </label>
							<select name="city"  class="form-control">
							<option  >يرجى الاختيار</option>
								<option value="دمشق">دمشق</option>
								<option value="ريف دمشق">ريف دمشق</option>
								
								
							</select>
						</div>
						<div class="form-group">
							<label> الحد الأدنى من المستوى التعليمي  </label>
							<select name="city" class="form-control">
							<option  >يرجى الاختيار</option>

							<option value=""> بكالوريا</option>
							<option value=""> ماجستير</option>
							<option value=""> دراسات عليا</option>
								
								
								
							</select>
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