@extends ('header')
@section('content')

<style>
    .form-control{
        font-size:20px;
        font-family: Arial, Helvetica, sans-serif;

    }
	span{
		font-size:18px;
		color:red;
	}
</style>
<div class="dez-bnr-inr overlay-black-dark" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
    <div class="container">
         <div class="dez-bnr-inr-entry">
                <h1 class="text-white">المعلومات الشخصية </h1>
		</div>
    </div>
</div>
<div class="content-block">

		<div class="container">
			
				<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">	
						@if(Session::get('success'))
							<div class="alert alert-success" style="font-size:20px">
								{{Session::get('success')}}
							</div>
						@endif
						@if(Session::get('fail'))
							<div class="alert alert-danger" style="font-size:20px">
								{{Session::get('fail')}}
							</div>
						@endif
						
                			<br><h3 class="card-title">المعلومات الأساسية </h3><br>
              			
						<form action="{{url('/resume/store')}}" method="POST" id="resume" >
							@csrf
                  				<div class="row">
                    				<div class="col-sm-4">
                      					<div class="form-group">
                        					<label>الاسم<span>*</span></label>
                        					<input type="text" class="form-control form-control-lg" placeholder="" value="{{old('fname')}}" name="fname" data-parsly-trigger="keyup">
											@if($errors->any('fname'))
												<span>{{$errors->first('fname')}}</span>
											@endif
                      					</div>
                    				</div>

									<div class="col-sm-4">
                      					<div class="form-group">
											<label> اسم الأب<span>*</span></label>
											<input type="text" class="form-control form-control-lg" placeholder="" name="father_name" value="{{old('father_name')}}" data-parsly-trigger="keyup">
											@if($errors->any('father_name'))
												<span>{{$errors->first('father_name')}}</span>
											@endif
										</div>
                    				</div>

						
									<div class="col-sm-4">
                      					<div class="form-group">
											<label>  الكنية<span>*</span></label>
											<input type="text" class="form-control form-control-lg" placeholder="" name="Lname" value="{{old('Lname')}}" data-parsly-trigger="keyup">
											@if($errors->any('Lname'))
												<span>{{$errors->first('Lname')}}</span>
											@endif
										</div>
                    				</div>
                  				</div>

								<div class="row">
                    				<div class="col-sm-4">
                      					<div class="form-group">
											<label> الجنس <span>*</span></label>
											<select name="gender" class="form-control  form-control-lg" data-parsly-trigger="keyup">
												<option selected disabled >يرجى الاختيار</option>
												<option value="انثى" {{(old('gender') && old('gender')=='انثى' )?'selected':''}}>انثى</option>
												<option value="ذكر" {{(old('gender') && old('gender')=='ذكر' )?'selected':''}}>ذكر</option>
											</select> 
											@if($errors->any('gender'))
												<span>{{$errors->first('gender')}}</span>
											@endif
                      					</div>
                    				</div>

									<div class="col-sm-4">
										<div class="form-group">
											<label> خدمة العلم <span>*</span></label>
                        					<select name="military_service" class="form-control  form-control-lg" data-parsly-trigger="keyup">
												<option  selected disabled>يرجى الاختيار</option>
												<option value="منتهية" {{(old('military_service') && old('military_service')=='منتهية' )?'selected':''}}>منتهية</option>
												<option value="غير منتهية" {{(old('military_service') && old('military_service')=='غير منتهية' )?'selected':''}}>غير منتهية</option>
												<option value="معفى" {{(old('military_service') && old('military_service')=='معفى' )?'selected':''}}>معفى</option>
												<option value="أنثى" {{(old('military_service') && old('military_service')=='*' )?'selected':''}}>اختر اذا كنت انثى</option>
											</select> 
											@if($errors->any('military_service'))
												<span>{{$errors->first('military_service')}}</span>
											@endif
                      					</div>
                    				</div>

									<div class="col-sm-4">
										<div class="form-group">
											<label> الوضع العائلي <span>*</span></label>
											<select name="marital_status" class="form-control  form-control-lg" >
												<option  selected disabled>يرجى الاختيار</option>
												<option value="عازب" {{(old('marital_status') && old('marital_status')=='عازب' )?'selected':''}}>عازب /ة</option>
												<option value="متزوج " {{(old('marital_status') && old('marital_status')==' متزوج' )?'selected':''}}> متزوج /ة </option>
												<option value="مطلق " {{(old('marital_status') && old('marital_status')==' مطلق' )?'selected':''}}>  مطلق/ة </option>
												<option value="أرمل " {{(old('marital_status') && old('marital_status')=='أرمل ' )?'selected':''}}>  أرمل/ة </option>
											</select>	
											@if($errors->any('marital_status'))
												<span>{{$errors->first('marital_status')}}</span>
											@endif
                      					</div>
                    				</div>
								</div>
						
								<div class="row">
                    				<div class="col-sm-6">
                      					<div class="form-group">
							  				<label>تاريخ الميلاد <span>*</span></label>
											<input type="date" class="form-control form-control-lg" placeholder=" "  value="{{old('dob')}}" name="dob" data-parsly-trigger="keyup">
											@if($errors->any('dob'))
												<span>{{$errors->first('dob')}}</span>
											@endif
                      					</div>
                    				</div>

									<div class="col-sm-6">
                      					<div class="form-group">
										  <label>مكان الولادة <span>*</span></label>
										  <input type="text" class="form-control form-control-lg" placeholder=""  name="place_Of_b" value="{{old('place_Of_b')}}" data-parsly-trigger="keyup">

											@if($errors->any('place_Of_b'))
												<span>{{$errors->first('place_Of_b')}}</span>
											@endif
										</div>
                    				</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>رقم الخليوي <span>*</span></label>
											<input type="text" class="form-control form-control-lg" placeholder="0933333333"  name="mobile_number"  pattern="[0]{1}[9]{1}[0-9]{8}" value="{{ Auth::user()->mobile }}"  data-parsly-trigger="keyup">
											@if($errors->any('mobile_number'))
												<span>{{$errors->first('mobile_number')}}</span>
											@endif		
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group" >
											<label>  اللغات <span>*</span></label><br>
											<select class="js-example-basic-multiple form-control form-control-lg" name="lang[]" multiple="multiple" >
												<option value="عربي" selected>عربي </option>	
												<option value="انكليزي">انكليزي</option>
												<option value="اسباني">اسباني</option>
												<option value="ايطالي">ايطالي</option>
												
											</select>
											@if($errors->any('lang'))
												<span>{{$errors->first('lang')}}</span>
											@endif	
                        				</div>
									</div>
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
								
								<table>
								<tr>
									<td></td>
									<td><button type="submit" class="btn btn-primary">ارسال</button></td>
									
								</tr>
							</table>
                			</form>
					</div>
				
      		</div>
		</div>
	</div>
</div>

<script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection