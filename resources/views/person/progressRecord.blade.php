@extends('header')
@section('content')
<style>
	th{
		font-size:20px;
	}
</style>
@csrf
    
    
<div class="page-content bg-white">
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
	
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white"> سجل التقدمات </h1>
					
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
                            <div>
                                <h4><p>
                                    سجل التقدمات
                                </p></h4>
                                <hr>
                            </div>


                            <div class="form-group">
                                <form action="">
                                    @csrf
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>المسمى الوظيفي</th>
                                                <th>الحالة</th>
                                              
                                            </tr>
                                            <tbody>
                                                @foreach($jobs as $job)
                                                <tr>
                                                    <td>
                                                        <a href="{{url('/job/details',$job->id)}}" style="font-size:20px">{{ $job->job_title }}</a>
                                                    </td>
                                                    <td>
                                                    @if ($job->choice =='hired')
						      		                    <h4><span class="badge badge-success w-100">تم القبول</span></h4>
						                        	@elseif($job->choice =='rejected')
						      		                    <h4><span class="badge badge-danger w-100">تم الرفض</span></h4>
						      	                    @else
						      		                    <h4><span class="badge badge-primary w-100">في حالة انتظار</span></h4>
						      	                    @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </thead>
                                    </table>
								
									<form>
									<br><br><br><br>
 <input type="button" value="رجوع" onclick="history.back()" class="btn btn-primary">
</form>
                                </form>

                            </div>
                        </div>   
  

					</div>
				

                </div>
			</div>
	    </div>
			<br><br>
    </div>
</div>


 
    
 @endsection