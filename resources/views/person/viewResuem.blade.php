@extends('header')
@section('content')



<style>


#resuems tr:hover {background-color: #ddd;}
#resuems th {
		padding:5px;
		text-align: center;
		background-color:#8080ff;
		color: white;
		}

		#resuems tr {
		padding:5px;
		text-align: center;
		
		color: black;
		}
</style>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Browse Jobs</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Browse Jobs</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block" >
			<!-- Browse Jobs -->
			<div class="section-full bg-white browse-job content-inner-2">
				<div class="container">
					<div class="row">
					
						
						<div class="col-xl-3 col-lg-4">
							<div class="sticky-top">
								<div class="clearfix m-b30">
									
								<form action="{{route('resuems')}}" method="GET">
								<ul class="post-job-bx">
								<h5 class="widget-title font-weight-700 text-uppercase">البحث</h5>
									<div class="">
										<input type="text" class="form-control typeahead" placeholder="Search">
									</div>

									<br><b></b>
									<div class="form-group">
										<button type="submit">ابحث هنا</button>
									</div>

									</ul>


									<ul class="post-job-bx">
									<div class="col-xl-9 col-lg-8" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
							<h5 class="widget-title font-weight-700 text-uppercase"> السير الذاتية الحالية  </h5>
							<br>
							<ul class="post-job-bx">
                            {{ csrf_field() }}
                               
                                
                               
                                @if(isset($Person))
								<table id="resuems" dir="rtl">

									<thead>
										<tr>
											<th> الاسم</th>
											
											<th>الشهادة</th>
											<th> الجنس</th>
											<th>عرض</th>
										</tr>
									</thead>
									<tbody>
										@if(count($Person) > 0)
											@foreach($Person as $item)
											<tr>
												<td>{{$item->name}}</td>
												
												<td>
													@foreach($item->PersonEducation as $edu)
														{{$edu['degree_name'] }} <br>

													@endforeach
												</td>
											
												<td> {{$item->gender}} </td>
												<td>  
													
													<a href="Person/details/{{ $item->id }}" class="btn "> تفاصيل</a>
													
												</td>
											</tr>


											@endforeach
										@else
											<tr><td>No result Founded</td></tr>
										@endif
									

									</tbody>
									</table>

								@endif
                                 
                               
									
                             
								
								
								
								
								
							
							</ul>
						
						</div>


									</url>


								</form>
									
								</div>
							
								
							
							</div>
						</div>





						<!-- <div class="col-xl-3 col-lg-4">
							<div class="sticky-top">
								<div class="clearfix m-b30">
									<h5 class="widget-title font-weight-700 text-uppercase">Keywords</h5>
									<div class="">
										<input type="text" class="form-control typeahead" placeholder="Search">
									</div>
								</div>
							
								
							
							</div>
						</div> -->


					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->





@endsection


