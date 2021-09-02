@extends('header')
@section('content')
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
						<div class="col-xl-9 col-lg-8" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;"
>
							<h5 class="widget-title font-weight-700 text-uppercase"> السير الذاتية الحالية  </h5>
							<br>
							<ul class="post-job-bx">
                            {{ csrf_field() }}
                                <form action="">
                                
                               
                                
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
                                             @foreach($Person as $item)
                                             <tr>
                                                 <td>{{$item->name}}</td>
												 
												 @foreach($item->PersonEducation as $edu)
													<td>{{$edu['degree_name'] }}</td>

												@endforeach
												<td> {{$item->gender}} </td>
												<td>  
													
												
					  								<a href="Person/details/{{ $item->id }}" class="btn "> تفاصيل</a>
													
												</td>
                                             </tr>

                                
                                             @endforeach

                                        </tbody>
                                    </table>
                                
                               
									
                                </form>
								
								
								
								
								
							
							</ul>
						
						</div>
						<div class="col-xl-3 col-lg-4">
							<div class="sticky-top">
								<div class="clearfix m-b30">
									<h5 class="widget-title font-weight-700 text-uppercase">Keywords</h5>
									<div class="">
										<input type="text" class="form-control typeahead" placeholder="Search">
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


