@extends('header')
@section('content')
    <!-- Content -->
    @csrf
    
<style>
	h5 {
  color: blue;
  text-align: center;
  
}
textarea{
	resize: none;
	
}
textarea.form-control{
	color: black;
	font-size:17px;
}



</style>
    
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
        
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">تفاصيل العمل </h1>
				
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
										
										<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
											<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
												<h4 class="text-black font-weight-700 p-t10 m-b15">تفاصيل العمل</h4>
												<ul>
													<li><i  class="ti-location-pin"></i><strong class="font-weight-700 text-black">العنوان: {{$job->city}} </strong><span class="text-black-light"> </span></li>
													<li><i class="ti-money"></i><strong class="font-weight-700 text-black">الراتب : {{$job->salary}}</strong> </li>
													<li><i class="ti-user"></i><strong class="font-weight-700 text-black">عدد الاشخاص المطلوبين:  {{$job->number_of_employess}} </strong></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						

							<div class="col-lg-8">
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
								@if(Session::get('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
					@endif
					@if(Session::get('fail'))
						<div class="alert alert-danger">
							{{Session::get('success')}}
						</div>
					@endif	
									<h5 > العمل لدى شركة </h5>
									
								
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled> {{$job->company_name}} </textarea>
										
									
									
								
									

									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>

									<h5 >   المسمى الوظيفي </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->job_title}} </textarea>
								
									

									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<h5 >   تم النشر  </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->created_at->diffForHumans()}}
									
									</textarea>


									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<br>
									<h5 > الحد الأدنى للمستوى التعليمي: </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->degree}}
									</textarea>

									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
									
								

									<h5 >المهام الوظيفية</h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->functional_tasks}}
									</textarea>
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								

										
									<h5 >الراتب و الفوائد </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->salary}}
									</textarea>

									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
									<h5 >متطلبات خاصة بهذه الفرصة</h5>

									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{ $job->job_requirement }}
									</textarea>
			

                                    <div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									
										
									
								

									<h5 >اختصاص العمل المطلوب: </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->job_specialist}}
									</textarea>

									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>

                                    <h5 > عدد الاشخاص المطلوب </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->number_of_employess}}
									</textarea>
									
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
									<h5 >   الجنس </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->gender}}
									</textarea>
									
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>

									<h5 >   خدمة العلم </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->military_service}}
									</textarea>
								
									
									<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>

								
									<h5 >   طبيعة العمل  </h5>
									<textarea name="" id="" cols="30" rows="5" class="form-control" disabled>{{$job->job_type}}
									</textarea>
								
					
									@if(auth::user())
										@if(auth()->user()->role == 'p')
										@if ($result == 'exist')
												<div class="card card-default mt-5">  
													<button class="btn btn-success btn-block"><i class="fa fa-check"></i>Applied</button>
												</div>


											@else
												<div class="card card-default mt-5">  
													<form action="{{url("/job/application/$job->id/store")}}" method="POST">
														{{ csrf_field() }}
														
														<input type="hidden" value="{{$job->id}}" name="job">
														<div class="card-header">
															<button type="submit" class="btn btn-primary btn-lg px-5">تقدّم الآن</button>
														</div>
													</form>
												</div>
											@endif										@endif
									@endif
									

									@if(auth::user())
										@if(auth()->user()->role == 'c')
											<div class="card card-default mt-5">  
												<form action="{{url("/job/applyedToJob/$job->id")}}" method="">
													{{ csrf_field() }}
													<input type="hidden" value="{{$job->id}}" name="job">
													<div  class="card-header">
														<button id="viewApplyedJob" type="submit" class="btn btn-primary btn-lg px-5">عرض المتقدمين</button>
													</div>
												</form>
											</div>
										@endif
									@endif



            								
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





@section('jsplugins')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Readmore.js/2.2.0/readmore.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('article').readmore({
			  afterToggle: function(trigger, element, expanded) {
			    if(! expanded) { // The "Close" link was clicked
			      $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );			  
			    } 
			  }
			});
		});
	</script>
@endsection


