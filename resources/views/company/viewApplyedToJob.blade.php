@extends('header')
@section('content')
    <!-- Content -->
    @csrf
    

    
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
								

                                <div class="form-group">
                                <form action="">
                                    @csrf
                                    <label for="" class="form-control">المسمى الوظيفي</label>
                                    <input type="text" class="form-control" value="{{$job->job_title}}">
                                    <table class="table">                              
                            <tbody>
                                @foreach($applicants->sortByDesc('created_at') as $applicant )
                                    <tr>
                                        @if(!empty($applicant->photo))
                                            <td class="text-center" ><img src="/storage/photo/{{ $applicant->photo }}" class="p-0 rounded-circle" style="height: 80px"></td> 
                                        @else 
                                           <td class="text-center" ><i class="ti-user"></i></td>
                                        @endif 
                                        <td class="text-nowrap"><h5 class="h5"> <a class="text-info" href="/proposal/{{$applicant->job_id}}/{{$applicant->id}}">{{ $applicant->name }}</a></h5>
                                            <p>{{ $applicant->job_title }}</p>
                                            <p class="small"> 
                                                <span class="mr-5"><i class="fa fa-envelope"></i> تم النشر بتاريخ: {{ $job->created_at->diffForHumans() }}</span>                                            
                                                <span><i class="fa fa-map-marker-alt"></i> {{ $applicant->country }}</span>
                                            </p>
                                        </td>
                                        @if ($applicant->status == 'hired')
                                            <td>
                                                <h4><span class="badge badge-success w-100"><i class="text-white fa fa-check"></i> <strong>مطلوب</strong></span></h4>
                                            </td>
                                        @elseif ($applicant->status == 'rejected')
                                            <td>
                                                <h4><span class="badge badge-danger w-100"><i class="text-white fa fa-times"></i> <strong>مرفوض</strong></span></h4>
                                            </td>
                                        @else
                                            <td>
                                                <a href="/job/applyedToJob/{{ $job->id }}/{{$applicant->id}}/hire" data-toggle="tooltip" data-placement="top" title="قبول المرشح">
                                                    <i class="fa fa-thumbs-up fa-2x"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/job/applyedToJob/{{ $job->id }}/{{$applicant->id}}/reject" data-toggle="tooltip" data-placement="top" title="رفض المرشح">
                                                    <i class="fa fa-thumbs-down fa-2x"></i>
                                                </a>
                                            </td>
                                        @endif                                      
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                                </form>

                            </div>
                               
                                   
                                 
                                   
                                  
                     
								
								
									

								



            								
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








