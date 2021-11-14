@extends('header')
@section('content')

   
    @csrf
    

    
    <div class="page-content bg-white">
        <!-- inner page banner -->
       
        
          
        
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
											<img src="{{asset('images/blog/grid/6.jpg')}}" alt="">
											</div>
											
											<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                    <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="{{route('CompanyDash')}}" > لوحة التحكم<a></h4>
									<ul>
											
											@if(isset(auth()->user()->GetCompany))
												<li>
													<strong class="font-weight-700 text-black"> 
														<a href="{{route('CompanyViewProfile')}}" > عرض الملف الشخصي </a>
													</strong><span class="text-black-light"> </span>
												</li>
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('addJob')}}" > نشر فرصة عمل جديدة </a>
													</strong> 
												</li>
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('CompanyJob')}}" > عرض فرص العمل المنشورة  </a>
													</strong>
												</li>
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('resuems')}}" >   عرض السير الذاتية المتاحة</a> 
													 </strong>
												</li>	
												<li>
													<strong class="font-weight-700 text-black">
														<a href="{{route('CompanyEndJobs')}}" >   الوظائف المنتهية  </a>  
													</strong>
												</li>
											
											@else
												<li><strong class="font-weight-700 text-black"><li><a href="{{route('CompanyProfile')}}" > ادخال معلومات الشركة </a></li></strong> </li>

											@endif
											
											<div class="dropdown " >
													<li>
														<strong class="font-weight-700 text-black">
															<h5 ><i class="fa fa-chevron-down"></i>      ادارة الحساب</h5> 
														 </strong>
													</li>
											 		<div class="dropdown-content">
											 			<ul>
															<li>
																<a href="{{route('edit.form')}}" >   تعديل   اسم المستخدم</a> 
															</li>
														</ul>
														<ul>
															<li>
																<a href="{{route('edit.formEmail')}}" >   تعديل   البريد الالكتروني </a>
															</li>
														</ul>
														<ul>
															<li>
																<a href="{{route('password.change')}}" >    تغيير كلمة المرور</a> 
															</li>
														</ul>
														<ul>
															<li>
																<a href="{{route('profile.delete')}}" >  حذف الحساب </a>
															 </li>
														</ul>	
									 				</div>
												</div>
											
										</ul>
									</div>
								</div>
										</div>
										
									
									</div>
								</div>
							</div>
						

							<div class="col-lg-8">
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
									<h3 class="m-t0 m-b10 font-weight-700 title-head">
										<a href="#" class="text-secondry m-r30"></a>
										<p>
											 ملف الشركة
										</p>
										<br>


									</h3>

									<h5 class="font-weight-600">  المعلومات الاساسية : </h5>
									<br>
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

                                    <form >
                                    @csrf
                                    <table  id ="gen_info" dir="rtl">
									<tr>
										
											<td>  اسم الشركة بالعربي</td>
											<td> 
                                                <!-- <input type="text" value ="{{$company->company_name_ar}}" name="company_name_ar"  id="company_name_ar">  -->
                                                {{$company->company_name_ar}}
                                            </td>
													
									</tr>
									<tr>
										<td>   اسم الشركة بالانكليزي </td>
                                        <td> 
                                            <!-- <input type="text" value ="{{$company->company_name_en}}" name="company_name_en"  id="company_name_en">  -->
                                            {{$company->company_name_en}}
                                        </td>
										

									</tr>
									<tr>
										<td>  اختصاص الشركة </td>
                                        <td>
                                             <!-- <input type="text" value ="{{$company->company_specialist}}" name="company_specialist"  id="company_specialist">  -->
                                             {{$company->company_specialist}}
                                        </td>
										
									</tr>
									<tr>
										<td>  السجل التجاري </td>
                                        <td>
                                             <!-- <input type="text" value ="{{$company->commercial_record}}" name="commercial_record"  id="commercial_record">  -->
                                             {{$company->commercial_record}}
                                        </td>
										
									</tr>
									
									<tr>
										<td>   السجل الصناعي </td>
                                        <td> 
                                            <!-- <input type="text" value ="{{$company->industria_record}}" name="industria_record"  id="industria_record"> -->
                                            {{$company->industria_record}}  
                                        </td>
										
									</tr>

									<tr>
										<td>   مكان الشركة  </td>
                                        <td>
                                             <!-- <input type="text" value ="{{$company->location}}" name="location"  id="location">   -->
                                             {{$company->location}}
                                    </td>
										
									</tr>
                                    <tr>
										<td>    الرقم الثابت  </td>
                                        <td> 
                                            <!-- <input type="text" value ="{{$company->fixed_phone}}" name="fixed_phone"  id="fixed_phone">  -->
                                            {{$company->fixed_phone}}
                                     </td>
										
									</tr>
                                    <tr>
										<td>    رقم الفاكس  </td>
                                        <td> 
                                            <!-- <input type="text" value ="{{$company->fax_phone}}" name="fax_phone"  id="fax_phone"> -->
                                            {{$company->fax_phone}}
                                      </td>
									
									</tr>

									<tr>
										<td>    البريد الالكتروني </td>
                                        <td> 
                                            <!-- <input type="text" value ="{{$company->email}}" name="email"  id="email"> -->
                                            {{$company->email}}
                                      </td>
										
									</tr>

									<tr>
										<td>  موقع الانترنت </td>
                                        <td>
                                             <!-- <input type="text" value ="{{$company->website}}" name="website"  id="website">  -->
                                             {{$company->website}}
                                     </td>
										
									</tr>

									
									
									
									

									

									
								</table>
									
                                <a href="{{route('CompanyEditProfile')}}" class="btn btn-primary"> تعديل
                                </a>
                                
                                <button type="submit" class="btn btn-primary">طباعة</button>
								<form>
									
									<input type="button" value="رجوع" onclick="history.back()" class="btn btn-primary">
								   </form>
							
					
								
										
									
									
										
										
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>


									
								
									
									
										
									
								

									
								
                                    
									
										


                                    </form>
								
									
								

									
									
									<ul class="list-num-count no-round">
										<!-- <li>T•الخبرة العملية السابقة غير مطلوبة , الافضلية لمن لديه خبرة في نفس المجال.
											
											
										</li> -->
										
									</ul>
										
								</div>
							</div>
						
					</div>
				</div>
			</div>
			<br><br>
            <!-- Job Detail -->
			<!-- Our Jobs -->
			
			<!-- Our Jobs END -->
		</div>

		
       
    </div>
    <!-- Content END-->
	<!-- Footer -->
    
   @endsection