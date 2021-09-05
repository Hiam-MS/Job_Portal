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
					<form style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
						<div class="form-group">
							<label>اسم الجهة </label>
							<input type="text" class="form-control" placeholder="اسم الشركة بالعربي" style="width:60% ">
						</div>
						<div class="form-group">
							<label>المسمى الوظيفي  </label>
							<input type="email" class="form-control" placeholder="المسمى الوظيفي" style="width:60% ">
						</div>
                        <div class="form-group">
							<label> عرض فترة العمل  </label>
							<input type="email" class="form-control" placeholder="" style="width:60% ">
						</div>
                        <div class="form-group" >
							<label>الدولة   </label>
                            <select>
								<option>سورية</option>
								<option>امارات</option>
								<option>مصر</option>
								<option>السودان</option>
								
							</select>
							
						</div>
                        <div class="form-group">
							<label> المدينة  </label>
							<select>
								<option>دمشق</option>
								<option>ريف دمشق</option>
								<option>حلب</option>
								<option>حمص</option>
								<option>در</option>
								
							</select>
						</div>
                        <div class="form-group">
							<label>اختصاص العمل  </label>
							<select>
								<option>مستودعات/تزويد</option>
								<option> انتاج</option>
								<option>دعاية و اعلان</option>
								<option>سكرتاريا</option>
								<option>محاسبة/إدارة مالية</option>
								<option>مصارف/تأمين</option>
								
								
							</select>
						</div>
                        <div class="form-group">
							<label>طبيعة العمل  </label>
							<select>
								<option> دوام كامل</option>
								<option>  دوام جزئي </option>
								<option>  دوام ليلي </option>
								
							</select>
						</div>
                        <div class="form-group">
							<label>الحد  الادنى للمستوى الوظيفي  </label>

							<select>
								<option>  ثانوية</option>
								<option>بكالوريس   </option>
								<option>   اجازة جامعية </option>
								
							</select>
						</div>
                        <div class="form-group">
							<label>الجنس   </label>
							<select>
								<option>  لايهم</option>
								<option>ذكر   </option>
								<option>   انثى </option>
								
							</select>
							
						</div>
                        <div class="form-group">
							<label>خدمة العلم   </label>

							<select>
								<option>  معفى</option>
								<option>منتهية   </option>
								<option>   غير منتهية  </option>
								
							</select>
						</div>
                        <div class="form-group">
							<label>المهام الوظيفة المطلوبة   </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
							
						</div>
                        <div class="form-group">
							<label> المؤهلات المطلوبة  </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
						</div>
                        <div class="form-group">
							<label> الراتب والفوائد المطلوبة  </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
						</div>
                        <div class="form-group">
							<label> لمحة عن الجهة الوظيفية  </label>
							<textarea  name="" id="" cols="130" rows="10"></textarea>
						</div><div class="form-group">
							<label>  البريد الالكتروني </label>
							<input type="email" class="form-control" placeholder="info@gmail.com">
						</div>
						
						
						
						<button type="submit" class="site-button">Submit</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	@endsection