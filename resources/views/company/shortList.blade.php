@extends('header')
@section('content')
    @csrf
    

<style>
    
#jobs tr:hover {background-color: #ddd;}
#jobs th {
		padding:5px;
		text-align: center;
		background-color:#200080;
		color: white;
		}

		#jobs tr {
		padding:5px;
		text-align: center;
		
		color: black;
		}
</style>
<div class="page-content bg-white">
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
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
                                         <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="#" > لوحة التحكم<a></h4>
                                            <ul>
                                                
                                                <li><strong class="font-weight-700 text-black"> <a href="{{route('CompanyProfile')}}" > عرض الملف الشخصي </a></strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black"><li><a href="{{route('addJob')}}" > نشر فرصة عمل جديدة </a></li></strong> </li>
                                                <li><strong class="font-weight-700 text-black"><li><a href="{{route('CompanyJob')}}" > عرض فرص العمل المنشورة  </a></li></strong> </li>
                                                <li><strong class="font-weight-700 text-black"><a href="{{route('resuems')}}" >   عرض السير الذاتية المتاحة</a>  </strong></li>
                                            </ul>
									</div>
								</div>

							</div>
						</div>
					</div>
						

					<div class="col-lg-8">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
                        <h5 class="widget-title font-weight-700 text-uppercase"> الفرص المنشورة  </h5>
							<br>
							<ul class="post-job-bx">
                                <form action="">
                               
                                
                                    
                                <li>
                                @foreach($company->Job as $item)
								
									<a href="/job/details/{{$item['id']}}">
										<div class="d-flex m-b30">
											<div class="job-post-company">
												<span><img src="images/logo/icon1.png"/></span>
											</div>
											<div class="job-post-info">
												<h4>{{$item-> company_name}}</h4>
												<ul>
													<li> {{$item->city}}</li>
													<li> {{$item->job_type}}</li>
													<li> {{$item->job_position}}</li>
												</ul>
											</div>
										</div>
										<div class="d-flex">
											<div class="job-time mr-auto">
												<span>{{$item->job_type}}</span>
											</div>
											<div class="salary-bx">
												<span>{{$item->salary}}</span>
											</div>
										</div>
										
									</a>
                                    <br><hr>
                                    @endforeach
								</li>
                                
                                </form>
								
								
								
								
								
							
							</ul>
                        </div>
			        </div>
		        </div>
		    </div>
        </div>
	</div>
</div>
 
    
 @endsection