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
							<label>الاسم الكامل</label>
							<input type="text" class="form-control" placeholder="Your Full Name" name="name" value="{{old(' name')}}" style="width:60%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('name'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>عنوان البريد الالكتروني</label>
							<input type="email" class="form-control" placeholder="info@gmail.com" name="email" value="{{old(' email')}}"  style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>الرقم الوطني</label>
							<input type="text" class="form-control" placeholder="" name="national_number" value="{{old(' national_number')}}" style="width:60% "  data-parsly-trigger="keyup">
							<span style="color:red"> @error('national_number'){{$message}}@enderror</span>
						</div>
						<div class="form-group" >
							<label>     الجنس :              </label>
							<select name="gender" style="width:15%  "  >
                            <option  >يرجى الاختيار</option>
								
                                <option value="f"  > انثى </option>
                                <option value="m"  > ذكر </option>
								
							</select>
                            <spam> &nbsp                                     </spam>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            

                            <label>&nbsp                                      الوضع العائلي:</label>
                            
							<select name="marital_status" style="width:15%" >
                            
                            <option >يرجى الاختيار</option>
								<option value="single">عازب</option>
								<option  value="single">غير عازب</option>
								
							</select>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label>&nbsp                                        خدمة العلم :</label>
							<select name="military_service" style="width:15%" >
                            <option >يرجى الاختيار</option>
								<option  value="finish">منتهية</option>
								<option  value="not finish">غير منتهية</option>
                                <option value="non">معفى</option>
								
							</select>
						</div>
                        <!--<div class="form-group">
							<label>       الوضع العائلي :      </label>
                            
							<select>
                            <option >يرجى الاختيار</option>
								<option>عازب</option>
								<option>غير عازب</option>
								
							</select>
						</div>

                        <div class="form-group">
							<label>     خدمة العلم :  </label>
							<select>
                            <option >يرجى الاختيار</option>
								<option>منتهية</option>
								<option>غير منتهية</option>
                                <option>معفى</option>
								
							</select>
                            </div>-->
						<div class="form-group">
							<label>تاريخ الميلاد</label>
							<input type="date" class="form-control" placeholder="Web Designer"  value="{{old(' dob')}}" name="dob" style="width:60%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('dob'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>مكان الولادة</label>
							<input type="text" class="form-control" placeholder=""  name="place_Of_b" value="{{old(' place_Of_b')}}" style="width:60% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('place_Of_b'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>عنوان الاقامة الحالي</label>
							
                             <!--<textarea  name="" id="" cols="90" rows="10" class="form-control" name="Current_address" form="resume"></textarea>-->
                            <input type="text" class="form-control" placeholder=""  name="Current_address" value="{{old(' Current_address')}}" style="width:60% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('Current_address'){{$message}}@enderror</span>
						</div>

                        
                            <div class="form-group">
							<label>الهاتف الأرضي</label>
							<input type="text" class="form-control" placeholder="" name="fixed_phone" value="{{old(' fixed_phone')}}" style="width:60% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('fixed_phone'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>رقم الخليوي</label>
							<input type="text" class="form-control" placeholder=""  name="mobile_number" value="{{old(' mobile_number')}}" style="width:60% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('mobile_number'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
						<label>اللغات </label><br>
						<select name="lang[]" id="category" multiple='multiple' size="3" style="width:15%" data-parsly-trigger="keyup">
                                    
                                     <option value="a">عربي</option>
                                     <option value="g">الماني</option>
                                     <option value="s">اسباني</option>
									 <option value="f">هندي</option>
									 <option value="e">ايطالي</option>
                                    
                                   </select>
								   </div>
						<div class="form-group">
							<label>الصورة الشخصية</label>
							<div class="custom-file">
								<input type="file" class="site-button" id="customFile"  name="img"  value="{{old(' img')}}"style="width:60% " data-parsly-trigger="keyup">
							</div>
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
