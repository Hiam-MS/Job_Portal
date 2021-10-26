@extends('header')
@section('content')
<style>
    .form-control{
        font-size:20px;
        font-family: Arial, Helvetica, sans-serif;

    }
	span{
		font-size:18px;
	}
</style>
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
				
		
					<form action="{{url('/resume/store')}}" method="POST" id="resume" >
                    @csrf
                    <span style="color:red"> @error('user_id'){{$message}}@enderror</span>
					<div class="form-group">
							<label>الاسم <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="" name="fname" value="{{old('fname')}}" style="width:58%" data-parsly-trigger="keyup" >
							@if($errors->any('fname'))
								<span style="color:red">{{$errors->first('fname')}}</span>
							@endif
						</div>

						<div class="form-group">
							<label>اسم الاب <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="" name="father_name" value="{{old('fatherName')}}" style="width:58%" data-parsly-trigger="keyup" >
							@if($errors->any('father_name'))
								<span style="color:red">{{$errors->first('father_name')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>الكنية <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="" name="Lname" value="{{old('Lname')}}" style="width:58%" data-parsly-trigger="keyup" >
							@if($errors->any('Lname'))
								<span style="color:red">{{$errors->first('Lname')}}</span>
							@endif
						</div>
						
						<div class="form-group">
							<label>عنوان البريد الالكتروني<span style="color:red">(اختياري)</span></label>
							<input type="email" class="form-control" placeholder="info@gmail.com" name="email" value="{{old('email')}}"  style="width:58%" data-parsly-trigger="keyup">
							@if($errors->any('email'))
								<span style="color:red">{{$errors->first('email')}}</span>
							@endif
						</div>
                        <div class="form-group">
							<label>الرقم الوطني <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="" name="national_number" value="{{old('national_number')}}"  style="width:58% "  data-parsly-trigger="keyup">
							@if($errors->any('national_number'))
								<span style="color:red">{{$errors->first('national_number')}}</span>
							@endif
						</div>


						<div class="form-group" >
							<label> الجنس <span style="color:red">*</span>
							<select name="gender" class="form-control  form-control-lg" style="width:300px;" >
								<option selected disabled >يرجى الاختيار</option>
								<option value="انثى" {{(old('gender') && old('gender')=='انثى' )?'selected':''}}>انثى</option>
								<option value="ذكر" {{(old('gender') && old('gender')=='ذكر' )?'selected':''}}>ذكر</option>
							
								
								
								
							</select> 
							@if($errors->any('gender'))
								<span style="color:red">{{$errors->first('gender')}}</span>
							@endif

						</label>
                            
							<label style="padding-right:60px">  خدمة العلم <span style="color:red">*</span>
							 <select name="military_service"  class="form-control  form-control-lg" style="width:300px;">
							<option  selected disabled>يرجى الاختيار</option>
							<option value="منتهية" {{(old('military_service') && old('military_service')=='منتهية' )?'selected':''}}>منتهية</option>
							<option value="غير منتهية" {{(old('military_service') && old('military_service')=='غير منتهية' )?'selected':''}}>غير منتهية</option>
							<option value="معفى" {{(old('military_service') && old('military_service')=='معفى' )?'selected':''}}>معفى</option>
							<option value="*" {{(old('military_service') && old('military_service')=='*' )?'selected':''}}>اختر اذا كنت انثى</option>
							
								
                            
								
								
							</select>
							@if($errors->any('military_service'))
								<span style="color:red">{{$errors->first('military_service')}}</span>
							@endif
						</label>

						
							
							
						</div>
						<div class="form-group" >
							<label> الوضع العائلي <span style="color:red">*</span>
							<select name="marital_status" class="form-control  form-control-lg" style="width:660px" >
								<option  selected disabled>يرجى الاختيار</option>
								<option value="عازب" {{(old('marital_status') && old('marital_status')=='عازب' )?'selected':''}}>عازب   </option>
								<option value="غير عازب" {{(old('marital_status') && old('marital_status')=='غير عازب' )?'selected':''}}> غير عازب </option>
						
								
								
								
							</select>	
							@if($errors->any('marital_status'))
								<span style="color:red">{{$errors->first('marital_status')}}</span>
							@endif
						 </label>
                            
						
							
						</div>
					

						
                        
						<div class="form-group">
							<label>تاريخ الميلاد <span style="color:red">*</span></label>
							<input type="date" class="form-control" placeholder=" "  value="{{old('dob')}}" name="dob" style="width:58%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('dob'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>مكان الولادة <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder=""  name="place_Of_b" value="{{old('place_Of_b')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('place_Of_b'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>عنوان الاقامة الحالي <span style="color:red">*</span></label>
							
                             <!--<textarea  name="" id="" cols="90" rows="10" class="form-control" name="Current_address" form="resume"></textarea>-->
                            <input type="text" class="form-control" placeholder=""  name="Current_address" value="{{old('Current_address')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('Current_address'){{$message}}@enderror</span>
						</div>

                        
                            <div class="form-group">
							<label>الهاتف الأرضي <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="3333333" pattern="[0-9]{7}" name="fixed_phone" value="{{old('fixed_phone')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('fixed_phone'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>رقم الخليوي <span style="color:red">*</span></label>
							<input type="text" class="form-control" placeholder="0933333333"  name="mobile_number"  pattern="[0]{1}[9]{1}[0-9]{8}" value="{{old('mobile_number')}}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('mobile_number'){{$message}}@enderror</span>
						</div>
					

						<div class="form-group" >
							<label>  اللغات <span style="color:red">*</span></label><br>
						
							<select class="js-example-basic-multiple" name="lang[]" multiple="multiple" style="width: 58%">
							
							<option value="عربي">عربي</option>
							<option value="اسباني">اسباني</option>
							<option value="ايطالي">ايطالي</option>
							<option value="انكليزي">انكليزي</option>
							</select>
							@if($errors->any('lang'))
								<span style="color:red">{{$errors->first('lang')}}</span>
							@endif	
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
