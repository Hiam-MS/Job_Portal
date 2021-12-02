@extends('header')
@section('content')



<style>
	#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size:18px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #000080;
  color: white;
  
}

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
		font-size:20px;
		}
</style>

<div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
    <div class="container">
        <div class="dez-bnr-inr-entry">
            <h1 class="text-white"> السير الذاتية الحالية</h1>
		</div>
    </div>
</div>

       
<div class="content-block">
	<div class="container">
		<br><br>
		<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">	
			<div class=" col-lg-4">
				<div class="sticky-top">
					<h4 style="color:navy">البحث</h4><br>
					<div class="">
						<input type="text" class="form-control typeahead" name="query"  placeholder=" ابحث عن الشهادة المطلوبة...." id="search-resume" >
					</div><br><br>
				</div>
			</div>
		</div>
		<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
									@if(isset($Person))
									<table id="customers" dir="rtl">
										<thead>
											<tr>
												<th> الاسم</th>
												<th>الشهادة</th>
												<th> الجنس</th>
												<th>خيارات</th>
											</tr>
										</thead>
										<tbody id="serch-result">
											@if(count($Person) > 0)
												@foreach($Person as $item)
													<tr>
														<td>{{$item->Fname}} {{$item->Father_name}} {{$item->Lname}}</td>
														<td>
															@foreach($item->PersonEducation as $edu)
																{{$edu['degree_name'] }} <br>

															@endforeach
														</td>
														<td> {{$item->gender}} </td>
														<td>  
															<a href="Person/details/{{ $item->id }}" class="btn btn-primary "> تفاصيل</a>
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
				tableRow ='<tr><td>'+value.Fname+' ' +value.Father_name+' ' +value.Lname+'</td><td>'+value.degree_name+'</td><td>'+value.gender+'</td><td><a href="Person/details/'+value.id+' class="btn "> تفاصيل</a></td> </tr>';
				$('#serch-result').append(tableRow);
			})
        }
        });
    });

</script>

@endsection


