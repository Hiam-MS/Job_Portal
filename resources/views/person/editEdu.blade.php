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
							<form action="{{route('PersonUpdateEdu')}}" method="POST" id="resume" >
                    @csrf
                    @method('PUT')
                    
                    
                    

						<div class="form-group">
							<label> اسم الشهادة</label>
							<input type="text" class="form-control" value="{{ $Edu->degree_name }}" name="degree_name" style="width:60%" >
							<span style="color:red"> @error('degree_name'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label> المؤسسة التعليمية</label>
							<input type="text" class="form-control" value="{{ $Edu->Institution }}" name="Institution" style="width:60%">
							<span style="color:red"> @error('Institution'){{$message}}@enderror</span>
						</div>
                        <div class="form-group">
							<label>الاختصاص </label>
							<input type="text" class="form-control" value="{{ $Edu->Major }}" name="Major" style="width:60%">
							<span style="color:red"> @error('Major'){{$message}}@enderror</span>
						</div>
						<div class="form-group" >
							<label>    الدرجة/ الشهادة              </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
							<select name="Degree" class="form-control" style="width:60%" value="{{ $Edu->Degree }}">
                            <option  >يرجى الاختيار</option>
								
                                <option value="f+"  > أقل من ثانوية عامة </option>
                                <option value="f"  > ثانوية عامة </option>
                                <option value="a"  > معهد متوسط </option>
                                <option value="B"  > بكالوريوس / اجازة </option>
                                <option value="m"  > دبلوم دراسات عليا </option>
                                <option value="M"  > ماجستير </option>
								<option value="D"  > دكتوراه </option>
                                
								
							</select>
                            <spam> &nbsp                                     </spam>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            <label> &nbsp                    </label>
                            
                            

                            
						</div>
                       
						<div class="form-group">
							<label>سنة التخرج </label>
							<input type="date" class="form-control"  value="{{ $Edu->Graduation_year }}"  name="Graduation_year" style="width:60%">
							<span style="color:red"> @error('Graduation_year'){{$message}}@enderror</span>
						</div>
						<div class="form-group">
							<label>دولة الدراسة </label>
							<input type="text" class="form-control" value="{{ $Edu->Country }}"  name="Country" style="width:60%">
							<span style="color:red"> @error('Country'){{$message}}@enderror</span>
							
                            <input type="hidden" class="form-control" placeholder=""  name="cid" value="{{$Edu->id}}">
							
						</div>
                        
						
						
						<button type="submit" class="btn btn-primary" > تعديل</button>
						<form>
									
 <input type="button" value="رجوع" onclick="history.back()" class="btn btn-primary">
</form>
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