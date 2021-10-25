@extends('header')
@section('content')
<style>
    .form-control{
        font-size:20px;
        font-family: Arial, Helvetica, sans-serif;

    }
</style>
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"> فرص العمل</h1>
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
						<div class="col-xl-9 col-lg-8">
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
							<h5 class="widget-title font-weight-700 text-uppercase" style="color:blue">الفرص الحالية  </h5>
								
								@csrf
								<ul class="post-job-bx">
								@if(isset($jobs))
									@if(count($jobs) > 0)
										@foreach($jobs as $job)
											<li>
												
												<a href="/job/details/{{ $job->id }}">
													<div class="d-flex m-b30">
														<div class="job-post-company">
															<span><img src="{{asset('images/logo/icon1.png')}}"/></span>
														</div>
														<div class="job-post-info">
															<h4>  {{$job->job_title}}</h4>
															<ul >
																<li style="color:blue"><i class="fa fa-map-marker"></i> {{$job->city}} </li>
																<li style="color:blue"><i class="fa fa-bookmark-o"></i>{{$job->job_type}} </li>
																<li style="color:blue"><i class="fa fa-clock-o"></i> {{$job->created_at->diffForHumans()}}</li>
															</ul>
														</div>
													</div>
													<div class="d-flex">
														<div class="job-time mr-auto">
															<!-- <span>Full Time</span> -->
														</div>
														<div class="salary-bx">
															<!-- <span>$1200 - $ 2500</span> -->
														</div>
													</div>
													
												</a>
											</li>
											
										@endforeach
									@else
										<li style="font-size:20px">  لايوجد فرص عمل  لعرضها</li>
									@endif
								@endif
								<span>{{$jobs->links('layouts.paginationlinks')}}</span>
								
								</ul>
								
							</div>
						</div>
						<div class="col-xl-3 col-lg-4">
							<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
								<div class="sticky-top">
									<div class="clearfix m-b30">
										<h5 class="widget-title font-weight-700 text-uppercase" style="color:blue"> البحث</h5>
										<div class="">
											<input type="text" class="form-control" placeholder="Search">
										</div>
									</div>
									<!-- <div class="clearfix m-b10">
										<h5 class="widget-title font-weight-700 m-t0 text-uppercase">Location</h5>
										<input type="text" class="form-control m-b30" placeholder="Location">
										<div class="input-group m-b20">
											<input type="text" class="form-control" placeholder="120">
											<select>
												<option>Km</option>
												<option>miles</option>
											</select>
										</div>
									</div> -->
									<!-- <div class="clearfix m-b30">
										<h5 class="widget-title font-weight-700 text-uppercase" style="color:blue"> طبيعة العمل</h5>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-6">
												<div class="product-brand">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="check1" name="example1">
														<label class="custom-control-label" for="check1">Freelance</label>
													</div>
													
													
													
													
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-6">
												<div class="product-brand">
													
													
													
													
													
												</div>
											</div>
										</div>
									</div> -->
									<div class="clearfix">
										<form action="{{route('job')}}" method="GET">
											<h5 class="widget-title font-weight-700 text-uppercase" style="color:blue">اختصاص العمل</h5>
											<select name ="category" id="category" class="form-control form-control-lg" >
												<option selected disabled> اختر اختصاص العمل </option>
												@foreach($categories as $category)
												
													<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select> <br>
											<button type="submit" class="btn btn-primary">بحث</button>
										</form>
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



	<script>
	$(document).ready(function(){
		$('#search').on('keyup',function(){
			var category=$(this).val();
			$.ajax({
				url:"search",
				type:"GET",
				data:{'search':category},
				success:function(data){
					$('#search_list').html(data);
				}
			}
		});
		//end of ajax call
	});
</script>
@endsection

