@extends('header')
@section('content')
@csrf
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<div class="page-content bg-white">
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
		<div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">لوحة التحكم </h1>
			</div>
        </div>
    </div>
     
    <div class="content-block">
        <div class="section-full content-inner-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="sticky-top">
							<div class="row">
								<div class="col-lg-12 col-md-6">
									<div class="m-b30">
										<!-- <img src="images/blog/grid/6.jpg" alt=""> -->
									</div>
								</div>
										
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                    	<h4 class="text-black font-weight-700 p-t10 m-b15"><a href="{{route('PersonDash')}}" > لوحة التحكم<a></h4>
                                    	<ul>
											@if(isset(auth()->user()->GetPerson))
										
												<li><strong class="font-weight-700 text-black"><a href="{{route('PersonProfile')}}" >  معاينةالسيرة الذاتية</a>  </strong></li>
												<li><strong class="font-weight-700 text-black"><li><a href="{{route('PersonalInfo.edit')}}"  >تعديل السيرة الذاتية</a></li></strong> </li>
												<li><strong class="font-weight-700 text-black"><li><a href="{{route('edu')}}" >اضافة/تعديل التعليم و المهارات  </a></li></strong> </li>
												<li><strong class="font-weight-700 text-black"><li><a href="{{route('ApplyedJob')}}" >سجل التقدمات  </a></li></strong> </li>			
											@else
									  
											<li><strong class="font-weight-700 text-black"> <a href="{{route('resuem.create')}}" >انشاء السيرة الذاتية</a></strong><span class="text-black-light"> </span></li>
									
											@endif	

									


											<div class="dropdown " >
												<li><strong class="font-weight-700 text-black"><h5 ><i class="fa fa-chevron-down"></i>      ادارة الحساب</h5>  </strong>	</li>
												<div class="dropdown-content">
													<ul>
														<li><a href="{{route('edit.form')}}" >   تعديل   اسم المستخدم</a> </li>
													</ul>
													<ul>
														<li><a href="{{route('edit.formEmail')}}" >   تعديل   البريد الالكتروني </a> </li>
													</ul>
													<ul>
														<li><a href="{{route('password.change')}}" >    تغيير كلمة المرور</a> </li>
													</ul>
													<ul>
														<li><a href="{{route('profile.delete')}}" >  حذف الحساب </a> </li>
													</ul>	
												</div>
											</div><br> <br> <br>  
										</ul>
  									</div>
								</div>

							</div>
						</div>
					</div>
				

					<div class="col-lg-8">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
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
						
							<form action="{{route('PersonUpdateInfo')}}" method="POST" id="resume" >
                    @csrf
                    @method('PUT')
                    <span style="color:red"> @error('user_id'){{$message}}@enderror</span>
						<div class="form-group">
							<label>الاسم </label>
							<input type="text" class="form-control" placeholder="" name="fname" value="{{ $person->Fname }}" style="width:58%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('fname'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>اسم الاب </label>
							<input type="text" class="form-control" placeholder="" name="father_name" value="{{ $person->Father_name }}" style="width:58%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('father_name'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>الكنية </label>
							<input type="text" class="form-control" placeholder="" name="Lname" value="{{ $person->Lname }}" style="width:58%" data-parsly-trigger="keyup" >
							<span style="color:red"> @error('Lname'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>عنوان البريد الالكتروني</label>
							<input type="email" class="form-control" placeholder="info@gmail.com" name="email" value="{{ $person->email }}"  style="width:58%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('email'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>الرقم الوطني</label>
							<input type="text" class="form-control" placeholder="" name="national_number" value="{{ $person->national_number }}"  style="width:58% "  data-parsly-trigger="keyup">
							<span style="color:red"> @error('national_number'){{$message}}@enderror</span>
						</div>


						<div class="form-group" >
							<label> الجنس 
							<select name="gender" class="form-control" style="width:180px;" value="{{ $person->gender }}">
								
								<option value="انثى"  > انثى </option>
                                <option value="ذكر"  > ذكر </option>
								
								
								
							</select> </label>
                            
							<label style="padding-right:60px">  خدمة العلم 
							 <select name="military_service"  class="form-control" style="width:190px;"  value="{{ $person->military_service }}">
							
							<option  value="منتهية">منتهية</option>
								<option  value="غير منتهية">غير منتهية</option>
                                <option value="معفى">معفى</option>
								<option value="*">اختر* اذا كنت أنثى</option>
								
								
							</select></label>

						
							
							
						</div>
						<div class="form-group" >
							<label> الوضع العائلي 
							<select name="marital_status" class="form-control" style="width:440px"  value="{{ $person->marital_status }}">
								
								<option value="عازب">عازب</option>
								<option  value="غير عازب">غير عازب</option>
								
								
								
							</select> </label>
                            
						
							
						</div>
					

						
                        
						<div class="form-group">
							<label>تاريخ الميلاد</label>
							<input type="date" class="form-control" placeholder="Web Designer"  value="{{ $person->dob }}" name="dob" style="width:58%" data-parsly-trigger="keyup">
							<span style="color:red"> @error('dob'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>مكان الولادة</label>
							<input type="text" class="form-control" placeholder=""  name="place_Of_b" value="{{ $person->place_Of_b }}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('place_Of_b'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>عنوان الاقامة الحالي</label>
							
                             <!--<textarea  name="" id="" cols="90" rows="10" class="form-control" name="Current_address" form="resume"></textarea>-->
                            <input type="text" class="form-control" placeholder=""  name="Current_address" value="{{ $person->Current_address }}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('Current_address'){{$message}}@enderror</span>
						</div>

                        
                            <div class="form-group">
							<label>الهاتف الأرضي</label>
							<input type="text" class="form-control" placeholder="" name="fixed_phone" value="{{ $person->fixed_phone }}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('fixed_phone'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>رقم الخليوي</label>
							<input type="text" class="form-control" placeholder=""  name="mobile_number" value="{{ $person->mobile_number }}" style="width:58% " data-parsly-trigger="keyup">
							<span style="color:red"> @error('mobile_number'){{$message}}@enderror</span>
						</div>
					

						<div class="form-group" >
							<label>  اللغات  </label> <span> (اضغط مع الاستمرار على مفتاح CTRL وحدد أكثر من عنصر واحد من القائمة.)</span> 
                            
							<select name="lang[]" id="category" multiple='multiple' size="3" data-parsly-trigger="keyup" class="form-control" style="width:660px" size="4"  >
								<option  selected disabled>يرجى الاختيار</option>
								<option  ></option>
								<option value="عربي">عربي</option>
                                     <option value="الماني">الماني</option>
                                     <option value="اسباني">اسباني</option>
									 <option value="تركي">تركي</option>
									 <option value="ايطالي">ايطالي</option>
									 <option value="انكليزي">انكليزي</option>
								
								
								
							</select> 
                            
						
							
						</div>
					
						
						
						
						<button type="submit" class="btn btn-primary" >إرسال</button>
						<form>
 <input type="button" value="الغاء" onclick="history.back()" class="btn btn-primary">
</form>
					</form>
						</div>
					</div>









						
				</div>
			</div>
		</div>
			<br><br>
    </div>
</div>


 
    
 @endsection