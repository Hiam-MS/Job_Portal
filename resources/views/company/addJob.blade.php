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
					<form  action="/store/job" method="POST" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					@csrf
						<div class="form-group">
							<label>اسم الجهة </label>
							<input type="text" name="company_name" class="form-control" placeholder="اسم الشركة بالعربي" style="width:60% ">
						</div>
						<div class="form-group">
							<label>المسمى الوظيفي  </label>
							<input type="text" name="job_position" class="form-control" placeholder="المسمى الوظيفي" style="width:60% ">
						</div>

						
                        <div class="form-group">
							<label>   عدد الموظفين المطلوب  </label>
							<input type="number" class="form-control"  name="number_of_employess" placeholder="" style="width:60% ">
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
							<select name="city">
							<option  >يرجى الاختيار</option>
								<option value="دمشق">دمشق</option>
								<option value="ريف دمشق">ريف دمشق</option>
								
								
							</select>
						</div>


                        <div class="form-group">
							<label>اختصاص العمل  </label>
							<select name="job_specialist">
							@foreach ($job->JobCategory as $category)
							
			                            <option value="">{{$edu['job_specialist'] }}</option>
			                        @endforeach
								
								
							</select>
						</div>


                        <!-- <div class="form-group">
							<label>طبيعة العمل  </label>
							<select>
							<option  >يرجى الاختيار</option>
								<option> دوام كامل</option>
								<option>  دوام جزئي </option>
								<option>  دوام ليلي </option>
								
							</select>
						</div> -->


                        <!-- <div class="form-group">
							<label>الحد  الادنى للمستوى الوظيفي  </label>

							<select>
							<option  >يرجى الاختيار</option>
								<option>  ثانوية</option>
								<option>بكالوريس   </option>
								<option>   اجازة جامعية </option>
								
							</select>
						</div> -->


                        <!-- <div class="form-group">
							<label>الجنس   </label>
							<select>
							<option  >يرجى الاختيار</option>
								<option>  لايهم</option>
								<option>ذكر   </option>
								<option>   انثى </option>
								
							</select>
							
						</div> -->


                        <!-- <div class="form-group">
							<label>خدمة العلم   </label>

							<select>
							<option  >يرجى الاختيار</option>
								<option>  معفى</option>
								<option>منتهية   </option>
								<option>   غير منتهية  </option>
								
							</select>
						</div> -->


                        <!-- <div class="form-group">
							<label>المهام الوظيفة المطلوبة   </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
							
						</div> -->


                        <!-- <div class="form-group">
							<label> المؤهلات المطلوبة  </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
						</div> -->


                        <!-- <div class="form-group">
							<label> الراتب والفوائد المطلوبة  </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
						</div> -->

                        <!-- <div class="form-group">
							<label> لمحة عن الجهة الوظيفية  </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
						</div> -->
						
						<!-- <div class="form-group">
							<label>  البريد الالكتروني </label>
							<input type="email" class="form-control" placeholder="info@gmail.com">
						</div> -->
						
						
						
						<button type="submit" class="site-button">Submit</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	@endsection