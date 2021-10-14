@extends('header')
@section('content')



<style>


#resuems tr:hover {background-color: #ddd;}
#resuems th {
		padding:5px;
		text-align: center;
		background-color:#200080;
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
                    <h1 class="text-white"> السير الذاتية الحالية</h1>
					<!-- Breadcrumb row -->
					<!-- <div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Browse Jobs</li>
						</ul>
					</div> -->
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
					<div class="col-xl-9 col-lg-8" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
							<!-- <h5 class="widget-title font-weight-700 text-uppercase"> السير الذاتية الحالية  </h5>
							<br> -->
								<ul class="post-job-bx">
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
										<tbody id="serch-result">
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
												<tr><td>  لايوجد سير ذاتية لعرضها</td></tr>
											@endif
										</tbody>
									</table>
									@endif
									<span>{{$Person->links('layouts.paginationlinks')}}</span>
								</ul>
							</div>
						
					
						<div class="col-xl-3 col-lg-4">
							<div class="sticky-top">
								<div class="clearfix m-b30">
									
								<!-- <form action="{{route('resuems')}}" method="GET"> -->
								<ul class="post-job-bx">
								<h5 class="widget-title font-weight-700 text-uppercase">البحث</h5>
									<div class="">
										<input type="text" class="form-control typeahead" name="query"  placeholder="...ابحث" id="search-resume" >
									</div>

									<br><b></b>
									<!-- <div class="form-group">
										<button type="submit" class="btn btn-primary">ابحث هنا</button>
									</div> -->

									</ul>


						
				
							<!-- </form> -->
									
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



<!-- <script>
	$(document).ready(function(){
		$('#search').on('keyup',function(){
			var query=$(this).val();
			$.ajax({
				url:"search",
				type:"GET",
				data:{'search':query},
				success:function(data){
					$('#search_list').html(data);
				}
			}
		});
		//end of ajax call
	});
</script> -->



<script type="text/javascript">

$('body').on( 'keyup', '#search-resume',function(){
       
        var serchQuest = $(this).val();

        $.ajax({
			method: 'POST',
            url: '{{ route("search.Resume")}}',
            dataType: 'json',
			data: {
				'_token' : '{{ csrf_token() }}',
				serchQuest: serchQuest,

			},
            success: function(res){            
               var tableRow = '';
			   $('#serch-result').html('');

			   $.each(res , function(index, value){
				tableRow ='<tr><td>'+value.name+'</td><td>'+value.degree_name+'</td><td>'+value.gender+'</td><td><a href="Person/details/'+value.id+' class="btn "> تفاصيل</a></td> </tr>';
				$('#serch-result').append(tableRow);
			})

			
			   

            }
        });
    });

</script>

@endsection


