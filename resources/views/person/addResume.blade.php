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
                    <span style="color:red"> @error('user_id'){{$message}}@enderror</span>
						<div class="form-group">
							<label>الاسم الكامل</label>
							<input type="text" class="form-control" placeholder="Your Full Name" name="name" value="{{old('name')}}" style="width:58%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('name'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>عنوان البريد الالكتروني</label>
							<input type="email" class="form-control" placeholder="info@gmail.com" name="email" value="{{old('email')}}"  style="width:58%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>الرقم الوطني</label>
							<input type="text" class="form-control" placeholder="" name="national_number" value="{{old('national_number')}}" style="width:58% "  data-parsly-trigger="keyup">
							<span style="color:red"> @error('national_number'){{$message}}@enderror</span>
						</div>


						<div class="form-group" >
							<label> الجنس 
							<select name="gender" class="form-control" style="width:300px;" >
								<option  >يرجى الاختيار</option>
								<option value="انثى"  > انثى </option>
                                <option value="ذكر"  > ذكر </option>
								
								
								
							</select> </label>
                            
							<label style="padding-right:60px">  خدمة العلم 
							 <select name="military_service"  class="form-control" style="width:300px;">
							<option  >يرجى الاختيار</option>
							<option  value="منتهية">منتهية</option>
								<option  value="غير منتهية">غير منتهية</option>
                                <option value="معفى">معفى</option>
								<option value="*">اختر* اذا كنت أنثى</option>
								
								
							</select></label>

						
							
							
						</div>
						<div class="form-group" >
							<label> الوضع العائلي 
							<select name="marital_status" class="form-control" style="width:660px" >
								<option  >يرجى الاختيار</option>
								<option value="عازب">عازب</option>
								<option  value="غير عازب">غير عازب</option>
								
								
								
							</select> </label>
                            
						
							
						</div>
					

						
                        
						<div class="form-group">
							<label>تاريخ الميلاد</label>
							<input type="date" class="form-control" placeholder="Web Designer"  value="{{old('dob')}}" name="dob" style="width:58%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('dob'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>مكان الولادة</label>
							<input type="text" class="form-control" placeholder=""  name="place_Of_b" value="{{old('place_Of_b')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('place_Of_b'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>عنوان الاقامة الحالي</label>
							
                             <!--<textarea  name="" id="" cols="90" rows="10" class="form-control" name="Current_address" form="resume"></textarea>-->
                            <input type="text" class="form-control" placeholder=""  name="Current_address" value="{{old('Current_address')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('Current_address'){{$message}}@enderror</span>
						</div>

                        
                            <div class="form-group">
							<label>الهاتف الأرضي</label>
							<input type="text" class="form-control" placeholder="" name="fixed_phone" value="{{old('fixed_phone')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('fixed_phone'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>رقم الخليوي</label>
							<input type="text" class="form-control" placeholder=""  name="mobile_number" value="{{old('mobile_number')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('mobile_number'){{$message}}@enderror</span>
						</div>
					

						<div class="form-group" >
							<label>  اللغات </label><br>
							<!-- <select name="lang[]" id="category" multiple='multiple' size="3" data-parsly-trigger="keyup" class="form-control" style="width:660px" >
								<option  >يرجى الاختيار</option>
								<option  ></option>
								<option value="عربي">عربي</option>
                                     <option value="الماني">الماني</option>
                                     <option value="اسباني">اسباني</option>
									 <option value="تركي">تركي</option>
									 <option value="ايطالي">ايطالي</option>
									 <option value="انكليزي">انكليزي</option>
								
								
								
							</select>  -->
							<select class="js-example-basic-multiple" name="lang[]" multiple="multiple" style="width: 58%">
							
							<option value="عربي">عربي</option>
							<option value="اسباني">اسباني</option>
							<option value="ايطالي">ايطالي</option>
							<option value="انكليزي">انكليزي</option>
</select>
                            </div>						
							
			


<script> 
$(document).ready(function() {
    $('.js-example-basic-multiple').select2({
    placeholder: "يرجى الاختيار",
	width: 'resolve',
    allowClear: true ,
	closeOnSelect: false
	
});
    
});


</script>
						
							
						
					
						
						
						
						<button type="submit" class="btn btn-primary" >إرسال</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
@endsection
