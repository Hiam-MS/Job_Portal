@extends('header')
@section('content')
    <!-- Content -->
    @csrf
    
<style>
	h5 {
  color: blue;
  text-align: right;
  
}
textarea{
	resize: none;
	
}
textarea.form-control{
	color: black;
	font-size:17px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
 
}

</style>
    
<div class="page-content bg-white">
        <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
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
									<img src="{{asset('images/blog/grid/6.jpg')}}" alt="">
									</div>
								</div>
										
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
										<h4 class="text-black font-weight-700 p-t10 m-b15">تفاصيل العمل</h4>
										<ul>
											<li><i  class="ti-location-pin"></i><strong class="font-weight-700 text-black">العنوان: {{$job->city}} </strong><span class="text-black-light"> </span></li>
											<li><i class="ti-money"></i><strong class="font-weight-700 text-black">المسمى الوظيفي : {{$job->job_title}}</strong> </li>
											<li><i class="ti-user"></i><strong class="font-weight-700 text-black">عدد الاشخاص المطلوبين:  {{$job->number_of_employess}} </strong></li>
											
											<br>
											@if(auth::user())
								@if(auth()->user()->role == 'a')
								<li><strong class="font-weight-700 text-black">الحالة : {{$job->status}}</strong> </li>
								@if($job->status == 'pending' | $job->status == 'denied')
								
							<form action="{{url('/job/accepte_Job',$job->id)}}"method="POST">
											@csrf
											<button id="viewApplyedJob" type="submit" class="btn btn-primary btn-block">موافقة على النشر</button>
											</form>
											@endif
											@if($job->status == 'pending' | $job->status == 'accepted')
											
											<form action="{{url('/job/denie_Job',$job->id)}}" method="POST">
											@csrf
											<button id="viewApplyedJob" type="submit" class="btn btn-primary btn-block w-100">عدم الموافقة على النشر</button>
											</form>
											@endif
											@endif
											@endif
											
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
							{{Session::get('fail')}}
						</div>
					@endif
					<h3><p>{{$company->company_name}}</p> </h3><hr>
							<table>
								<tr>
									<td><h5>مكان وموقع العمل</h5></td>
									<td><h6>{{$company->location}}</h6></td>
								</tr>
								<tr>
									<td><h5>المنصب الوظيفي</h5></td>
									<td><h6>{{$job->job_title }}</h6></td>
								</tr>
								<tr>
									<td><h5>الحد الأدنى للمستوى التعليمي</h5></td>
									<td><h6><i class="ti-stamp text-black m-r5"></i>{{$job->degree}}</h6></td>
								</tr>
								<tr>
									<td><h5>متطلبات خاصة بهذه الفرصة</h5></td>
								</tr>
							</table>
									
									
							<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
							<p class="p-t20" style="font-size:20px">{{$job->job_requirement}}</p><br><br>
							<h5 class="font-weight-600">المهام الوظيفية</h5>

							<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
							<p  style="font-size:20px">{{$job->functional_tasks}}</p><br><br>
							<h5 >الراتب والفوائد</h5>

							<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
							<p style="font-size:20px">{{$job->budget}}</p><br><br>
							

							<h5 class="font-weight-600">   تم النشر بتاريخ </h5>

							<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
							<p style="font-size:20px">{{$job->created_at->diffForHumans()}}</p>

							<h5 class="font-weight-600">    تاريخ الانتهاء  </h5>

							<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
							<p style="font-size:20px">{{$job->end_job}}</p>


							



							@if(auth::user())
								@if(auth()->user()->role == 'p')
									@if ($result == 'exist')
										<div class="card card-default mt-5">  
											<button class="btn btn-success btn-block"><i class="fa fa-check"></i>لقد تقدمت على هذه الوظيفة</button>
										</div>

									@else
										<div class="card card-default mt-5">  
											<form action="{{url("/job/application/$job->id/store")}}" method="POST">
												{{ csrf_field() }}
												<input type="hidden" value="{{$job->id}}" name="job">
												<button type="submit" class="btn btn-primary btn-block">تقدّم الآن</button>
														
											</form>
										</div>
									@endif
								@endif
							@endif
									

							@if(auth::user())
								@if(auth()->user()->role == 'c')
								@if(auth()->user()->id == $job->company_id)
									<div class="card card-default mt-5">  
										<form action="{{url("/job/applyedToJob/$job->id")}}" method="">
											{{ csrf_field() }}
											<input type="hidden" value="{{$job->id}}" name="job">
											<button id="viewApplyedJob" type="submit" class="btn btn-primary btn-block">عرض المتقدمين</button>
													
										</form>
									</div>
									@endif
								@endif
								
							

							@endif

							<br>
							
							
							<button type="submit" onclick="history.back()" class="  btn btn-primary" ">رجوع</button>
						</div>
					</div>
				</div>
			</div>
		</div><br><br>
    </div>
</div>

    
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


