@extends('header')
@section('content')
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
                                    <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="#" > لوحة التحكم<a></h4>
                                    <ul>
									@if(isset(auth()->user()->GetPerson))
									   <li><strong class="font-weight-700 text-black"><a href="/resume/ViewpersonalInfo" >  معاينةالسيرة الذاتية</a>  </strong></li>
										<li><strong class="font-weight-700 text-black"><li><a href="#" >تعديل السيرة الذاتية</a></li></strong> </li>
										<li><strong class="font-weight-700 text-black"><li><a href="/resume/createEdu" >اضافة/تعديل التعليم و المهارات  </a></li></strong> </li>
										<li><strong class="font-weight-700 text-black"><li><a href="/resume/applyedJob" >سجل التقدمات  </a></li></strong> </li>			

									  
									  @else

									<li><strong class="font-weight-700 text-black"> <a href="/resume/create" >انشاء السيرة الذاتية</a></strong><span class="text-black-light"> </span></li>
										@endif			
                                            </ul>
									</div>
								</div>

							</div>
						</div>
					</div>
						

					<div class="col-lg-8">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
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
                                                        <a href="/job/details/{{$job->job_id}}">{{ $job->job_title }}</a>
                                                    </td>
                                                    <td>
                                                    @if ($job->status =='hired')
						      		                    <h4><span class="badge badge-success w-100">{{ $job->status }}</span></h4>
						                        	@elseif($job->status =='rejected')
						      		                    <h4><span class="badge badge-danger w-100">{{ $job->status }}</span></h4>
						      	                    @else
						      		                    <h4><span class="badge badge-primary w-100">{{ $job->status }}</span></h4>
						      	                    @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </thead>
                                    </table>
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