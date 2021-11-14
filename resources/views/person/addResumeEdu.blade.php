
@extends('header')
@section('content')
<style>
    .form-control{
        font-size:20px;
        font-family: Arial, Helvetica, sans-serif;

    }
</style>
<div class="page-content bg-white">
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
		<div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">السيرة الذاتية</h1>
				<div class="breadcrumb-row">
                    <h6 class="text-white"></h6>
				</div>
					
            </div>
        </div>
    </div>
        <!-- inner page banner END -->
        <!-- contact area -->
    <div class="content-block">
             <!-- Job Detail -->
		<div class="section-full content-inner-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="sticky-top">
							<div class="row">
								<div class="col-lg-12 col-md-6">
									<div class="m-b30">
										<img src="images/blog/grid/6.jpg" alt="">
									</div>
								</div>
										
										<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;"
 class="col-lg-12 col-md-6">
											<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
												<h4 class="text-black font-weight-700 p-t10 m-b15">لوحة التحكم</h4>
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
											</div>
										</div>
								
							</div>
						</div>
					</div> 
					
						
					@csrf
					<div class="col-lg-8" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
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
							<form action="{{route('PersonJobCategory')}}" method="POST" id="resume" >
                                @csrf
								<br>
								<h3 class="font-weight-600">  اختصاص العمل المطلوب  </h3>
								<p> </p><p></p>
								

								<select class="js-example-basic-multiple" id="category" name="category[]" multiple="multiple" style="width: 63%" >
								@foreach($jobCat as $category)
								<option value="{{$category->id}}" {{(old('category') && in_array($category->id,old('category')) )?'selected':''}} >{{$category->name}}</option>
                                     @endforeach
								</select>
								@if($errors->any('category'))
									<span style="color:red">{{$errors->first('category')}}</span>
								@endif
								<br><br>

                                <p><button type="submit" class="btn btn-primary" > أضف</button></p>
								<p></p>




 								<br>

								 <div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
								 @if(count($person_cat) > 0)
						<table>
							<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                <th> اختصاص العمل</th>
                                <th>خيارات</th>
                            </tr>

							@foreach($person_cat as $cat)
							<tr>
								<th style=" color:black;">{{$cat->name}} </th>
                                <th style=" color:black;"> <a href="{{url('/resume/deleteCat',$cat->id)}}" style="color:red">  حذف</a></th>
                            </tr>
                            @endforeach
						</table>
					@else
						<p> لم يتم اختيار  اختصاص العمل المطلوب</p>
									
					@endif
				</div>
								
								

								
								<script> 
$(document).ready(function() {
    $('.js-example-basic-multiple').select2({
    placeholder: "  يرجى اختيار اختصاص العمل ",
	width: 'resolve',
    allowClear: true ,
	closeOnSelect: false
	
});
    
});


</script>



								<br>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
							</form>

							<br>
							<h3 class="font-weight-600" > الشهادات التعليمية  </h3>
							<!-- Submit Resume EDU -->
		
						<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
						<form action="{{route('PersonStoreEdu')}}" method="POST" id="resume" >
                    	@csrf
							<table>
								<tr>
						  			<th style="width: 20%" >اسم الشهادة :</th>
						  				<td style="width: 50%"><input type="text" class="form-control form-control-lg" placeholder="  " value="{{old('degree_name')}}" name="degree_name" style="width:60%" >
										  @if($errors->any('degree_name'))
									<span style="color:red">{{$errors->first('degree_name')}}</span>
								@endif
										</td>
						  		</tr>
								<tr>
									<th style="width: 20%" > المؤسسة التعليمية :</th>
										<td style="width: 50%"><input type="text" class="form-control form-control-lg" placeholder="" value="{{old('Institution')}}" name="Institution" style="width:60%">
										@if($errors->any('Institution'))
									<span style="color:red">{{$errors->first('Institution')}}</span>
								@endif
										</td>
								</tr>
								<tr>
									<th style="width: 20%" >  الاختصاص :</th>
										<td style="width: 50%"><input type="text" class="form-control form-control-lg" placeholder="" value="{{old('Major')}}" name="Major" style="width:60%">
										@if($errors->any('Major'))
									<span style="color:red">{{$errors->first('Major')}}</span>
								@endif
										</td>
								</tr>
								<tr>
						  			<th style="width: 20%" >  الدرجة/ الشهادة   :</th>
						  				<td style="width: 50%" >
											<select name="Degree" class="form-control form-control-lg" style="width:60%" >
												<option selected disabled>يرجى الاختيار</option>
												<option value="أقل من ثانوية عامة" {{(old('Degree') && old('Degree')=='أقل من ثانوية عامة' )?'selected':''}}>أقل من ثانوية عامة</option>
												<option value="ثانوية عامة " {{(old('Degree') && old('Degree')=='ثانوية عامة' )?'selected':''}}>ثانوية عامة</option>
												<option value="معهد متوسط" {{(old('Degree') && old('Degree')=='معهد متوسط' )?'selected':''}}>معهد متوسط</option>
												<option value="بكالوريوس / اجازة" {{(old('Degree') && old('Degree')=='بكالوريوس / اجازة' )?'selected':''}}>بكالوريوس / اجازة</option>
												<option value="دبلوم دراسات عليا" {{(old('Degree') && old('Degree')=='دبلوم دراسات عليا' )?'selected':''}}>دبلوم دراسات عليا</option>
												<option value="ماجستير" {{(old('Degree') && old('Degree')=='ماجستير' )?'selected':''}}>ماجستير</option>
												<option value="دكتوراه" {{(old('Degree') && old('Degree')=='دكتوراه' )?'selected':''}}>دكتوراه</option>
												
												
												
                                			</select>
											@if($errors->any('Degree'))
									<span style="color:red">{{$errors->first('Degree')}}</span>
								@endif
										</td>
                        		</tr>
								<tr>
									<th style="width: 20%" >سنة التخرج</th>
										<td style="width: 50%"><input type="date" class="form-control form-control-lg" placeholder="" value="{{old('Graduation_year')}}" name="Graduation_year" style="width:60%">
										
										</td>
								</tr>
								
								<tr>
									<th style="width: 20%" > مازلت قيد الدراسة</th>
										<td style="width: 50%"><input type="checkbox" name="still_study[]" id="" >
										
										@if($errors->any('Graduation_year'))
									<span style="color:red">{{$errors->first('Graduation_year')}}</span>
								@endif
										</td>
								</tr>
								<tr>
									<th style="width: 20%" >     دولة الدراسة :</th>
										<td><input type="text" class="form-control form-control-lg" placeholder=""  value="{{old('Country')}}" name="Country" style="width:60%">
										@if($errors->any('Country'))
									<span style="color:red">{{$errors->first('Country')}}</span>
								@endif
										</td>
								</tr>
							</table>

					 		<button type="submit"  class="btn btn-primary" > أضف شهادة تعليمية جديدة</button>
						</form>
					</div><br>
				
			
             <!-- Submit Resume END EDU  -->
							<br>	
					<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
						@if(count($person->PersonEducation) > 0)
							<table>
								<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                    <th>اسم الشهادة</th>
                                    <th>الاختصاص</th>
									<th>سنة التخرج</th>
									<th>خيارات</th>
                                </tr>

								@foreach($person->PersonEducation as $edu)
								<tr>
									<th style=" color:black;">{{$edu['degree_name']}} </th>
                                    <th style=" color:black;">{{$edu['Major']}}</th>
									<th style=" color:black;">{{$edu['Graduation_year']}} </th>
									<th style=" color:black;"><a href="{{url('/resume/editEdu',$edu['id'])}}" >تعديل</a> / <a href="{{url('/resume/deleteEdu',$edu['id'])}}" style="color:red">  حذف</a></th>
                                </tr>
                                
								@endforeach
							</table>
						@else
							<p>لاتوجد شهادات تعليمية مذكورة حالياً - أضف الشهادات التعليمية في حال وجودها </p>
						@endif
						<br><br>
						<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
						<br>
						<h3 class="font-weight-600" id="sdiv">المهارات </h3>
							<!-- contact area  SKILL -->
							<!-- Submit Resume SKILL -->
			
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					<form action="{{route('PersonStoreSkill')}}" method="POST" id="resume" >
                    @csrf
                    	<div class="form-group">
							<label>    اسم المهارة </label>
							<input type="text"class="form-control form-control-lg"  placeholder="" value="{{old('name')}}" name="name" style="width:80% "  >
							@if($errors->any('name'))
									<span style="color:red">{{$errors->first('name')}}</span>
								@endif
                        </div>
						<button type="submit" class="btn btn-primary" > أضف مهارة جديدة</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END --><br>
   
	
    <!-- Content END SKILL-->
	<br>
									
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					@if(count($person->PersonSkill) > 0)
						<table>
							<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                <th> المهارة</th>
                                <th>خيارات</th>
                            </tr>

							@foreach($person->PersonSkill as $edu)
							<tr>
								<th style=" color:black;">{{$edu['name']}} </th>
                                <th style=" color:black;"><a href="{{url('/resume/editSkill',$edu['id'])}}" >تعديل</a> / <a href="{{url('/resume/deleteSkill',$edu['id'])}}" style="color:red">  حذف</a></th>
                            </tr>
                            @endforeach
						</table>
					@else
						<p>لا توجد مهارات مذكورة ضمن سيرتك الذاتية</p>
									
					@endif
				</div>
									
	
 <br><br><div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div><br>
				<h3 class="font-weight-600">الدورات التدريبية المتبعة  </h3>
					<!-- Submit Resume COURSE -->
			
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					<form action="{{route('PersonStoreCourse')}}" method="POST" id="resume" >
                    @csrf
                    	<div class="form-group">
							<label>     اسم الدورة  </label>
							<input type="text" class="form-control form-control-lg" placeholder="" value="{{old('name')}}" name="name"  style="width:80%">
							@if($errors->any('name'))
									<span style="color:red">{{$errors->first('name')}}</span>
								@endif
                        </div>
						<button type="submit" class="btn btn-primary" > أضف دورة تدريبية جديدة</button>
					</form>
				</div>
				<br>
            <!-- Submit Resume END COURSE-->
			<br>

				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					@if(count($person->PersonCousre) > 0)
						<table>
							<tr style="border-bottom: 1px solid #ddd; background-color: rgba(250, 247, 246 ); color:black;font-size: 105%;">
                                <th> اسم الدورة</th>
                                <th>خيارات</th>
                            </tr>

							@foreach($person->PersonCousre as $edu)
							<tr>
								<th style=" color:black;">{{$edu['name']}} </th>
                                <th style=" color:black;"><a href="{{url('/resume/editCourse',$edu['id'])}}" >تعديل</a> / <a href="{{url('/resume/deleteCourse',$edu['id'])}}"  style="color:red">  حذف</a></th>
                            </tr>
                            @endforeach
						</table>
					@else
						<p>لاتوجد دورات مذكورة حالياً - أضف الدورات المتبعة في حال وجودها</p>
					@endif
				</div><br><br>
				<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div><br>
				<h3 class="font-weight-600">خبرات العمل </h3>
				<!-- Submit Resume EDU -->
		
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
					<form action="{{route('PersonStoreExp')}}" method="POST" id="" >
                    @csrf
                   		<table>
							<tr>
						  		<th style="width: 20%" >  المنصب الوظيفي :</th>
						  			<td style="width: 50%"><input type="text" class="form-control form-control-lg" placeholder="  " value="{{old('Job_title')}}" name="Job_title" style="width:60%" >
						  				<span style="color:red"> @error('Job_title'){{$message}}@enderror</span>
									</td>
						  	</tr>
						  	<tr>
						  		<th style="width: 20%" >  اختصاص عملك  :</th>
						  			<td style="width: 50%"><input type="text" class="form-control form-control-lg" placeholder="" value="{{old('job_Specialize')}}" name="job_Specialize" style="width:60%">
						  				<span style="color:red"> @error('job_Specialize'){{$message}}@enderror</span>
									</td>
                        	</tr>
							<tr>
						  		<th style="width: 20%" >  اسم الشركة :</th>
						  			<td style="width: 50%"><input type="text" class="form-control form-control-lg" placeholder="" value="{{old('company_name')}}" name="company_name" style="width:60%">
										<span style="color:red"> @error('company_name'){{$message}}@enderror</span>
									</td>
                        	</tr>
							<tr>
								<th style="width: 20%" >  عنوان الشركة :</th>
						  			<td style="width: 50%"><input type="text" class="form-control form-control-lg" placeholder="" value="{{old('company_address')}}" name="company_address" style="width:60%">
										<span style="color:red"> @error('company_address'){{$message}}@enderror</span>
									</td>
                        	</tr>
							<tr>
						  		<th style="width: 20%" >    تاريخ الالتحاق  :</th>
						  			<td style="width: 50%"><input type="date" class="form-control form-control-lg" placeholder="Web Designer"  value="{{old('Start_date')}}" name="Start_date" style="width:60%">
										<span style="color:red"> @error('Start_date'){{$message}}@enderror</span>
									</td>
							</tr>
							<tr>
						  		<th style="width: 20%" >     تاريخ الانتهاء   :</th>
						  			<td style="width: 50%"><input type="date" class="form-control form-control-lg" placeholder="Web Designer"  value="{{old('end_date')}}" name="end_date" style="width:60%">
										<span style="color:red"> @error('end_date'){{$message}}@enderror</span>
									</td>
                        	</tr>
							<tr>
						  		<th style="width: 20%" >     المهام الوظيفية  :</th>
						  			<td>
										
									 <textarea name="Responsibilities" id="Responsibilities" class="form-control form-control-lg" style="width:60%">{{old('Responsibilities')}}</textarea>
									  <span style="color:red"> @error('Responsibilities'){{$message}}@enderror</span>
									
									
									</td>
							</tr>
						</table>
						<button type="submit"  class="btn btn-primary" > أضف خبرة عمل جديدة</button>
					</form>
					
				</div><br><br>
				
			
            <!-- Submit Resume END EDU -->
				@if(count($person->PersonExperience) > 0)
					<table>
						<tr style="border-bottom: 1px solid #ddd;background-color: rgba(250, 247, 246); color:black;font-size: 105%;">
                            <th> اسم الشركة </th>
                            <th> اختصاص العمل</th>
							<th> تاريخ الالتحاق  </th>
							<th> تاريخ الانتهاء </th>
							<th>خيارات</th>
                        </tr>
						@foreach($person->PersonExperience as $edu)
						<tr>
							<th style=" color:black;">{{$edu['company_name']}} </th>
                            <th style=" color:black;">{{$edu['job_Specialize']}}</th>
							<th style=" color:black;">{{$edu['Start_date']}} </th>
							<th style=" color:black;">{{$edu['end_date']}} </th>
							<th style=" color:black;"><a href="{{url('/resume/editExperience',$edu['id'])}}" >تعديل</a> / <a href="{{url('/resume/deleteExperience',$edu['id'])}}" style="color:red"> حذف </a></th>
                        </tr>
                        @endforeach
					</table>
					@else
						<p>لايوجد خبرات عمل مذكورة حالياً - أضف خبراتك في حال وجودها</p>
					@endif
				</div>
			</div>
		</div>
	</div>
</div><br><br>

		</div>
</div>

    
  @endsection