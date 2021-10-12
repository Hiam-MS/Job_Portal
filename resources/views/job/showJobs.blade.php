@extends('header')
@section('content')
@csrf
<style>
	/* #add{

		border-radius: 4px;
  background-color: #8080ff;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
	} */


</style>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">فرص العمل </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
						
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
			<div class="section-full bg-white browse-job content-inner-2">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
						
						<a href="{{ route('addJob') }}">

							<button  id ="add" type="submit" class="btn btn-primary  "> إضافة فرص عمل جديدة</button>
						</a>
						<br>
						
						<br>

						<h5 class="widget-title font-weight-700 text-uppercase"> الفرص الحالية  </h5>
							<br>
							<ul class="post-job-bx">
                                <form action="">
                               
                                
                                    
                                <li>
                                @foreach($job as $item)
								
									<a href="details/{{ $item->id }}">
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
												<span>{{$item->salary}} ل.س</span>
											</div>
										</div>
										
									</a>
									<hr>
                                    @endforeach
								</li>
                                
                                </form>
								
							
								
								
								
							
							</ul>
						
						</div>
						<div class="col-xl-3 col-lg-4">
							<div class="sticky-top">
								<div class="clearfix m-b30">
									<h5 class="widget-title font-weight-700 text-uppercase">Keywords</h5>
									<div class="">
										<input type="text" class="form-control" placeholder="Search">
									</div>
								</div>
							
								
							
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
@endsection