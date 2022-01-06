@extends('header')
@section('content')



<style>
	#customers {

  border-collapse: collapse;
  
}

#customers td, #customers th {
  border: 2px solid #ddd;
  padding: 6px;
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

/* #resuems tr:hover {background-color: #ddd;}
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
		} */


</style>

<div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{asset('images/banner/bnr1.jpg')}}); width:100%;height:200px" >
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
		<script>
    $(function () {
      $('.select2').select2()
	  $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    });
</script> 

<table>
<form action="{{route('resuems')}}" method="GET">
	<tr>
		<td>الشهادة المطلوبة</td>
		<td>
			<!-- <select name ="degree" id="degree" class="select2bs4 form-control form-control-lg" >
			<option value=""></option>
			@foreach($degrees as $d)
					<option value="{{$d->degree_name}}">{{$d->degree_name}}</option>
				@endforeach
			
			</select> -->
			<input type="text" name="degree" id="degree" class=" form-control">


		

						
		</td>
		<td>مكان الاقامة</td>
		<td>
			<select name ="city" id="city" class="select2bs4 form-control form-control-lg" >
				<option value=""></option>
				@foreach($cities as $city)
					<option value="{{$city->city_name}}">{{$city->city_name}}</option>
				@endforeach
			</select>
			<!-- <input type="text" name="city" id="city" class=" form-control"> -->
		</td>
		<td>الجنس</td>
		<td>
			<select name="gender"  class="select2bs4 form-control form-control-lg"  >
				<option  selected disabled>يرجى الاختيار</option>
				<option value=" ذكر " >ذكر  </option>
				<option value=" أنثى " >أنثى  </option>	
				
			</select>
		</td>
		<td>
			<button type="submit" class="btn btn-primary">بحث</button>
		</td>
		<td><form><input type="button" value="رجوع" onclick="history.back()" class="btn btn-primary"></form></td>
	</tr>
</form>
</table>   
		</div>
		<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
		<div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
									<table class="table  display nowrap" id="customers" style="width:100%">
										<thead>
											<tr>
												<th> الاسم</th>
												<th>الشهادة</th>
												<th>خبرة العمل</th>
												<th>مكان الاقامة</th>
												<th> الجنس</th>
												<th>خيارات</th>
											</tr>
										</thead>
										<tbody >
											@if(count($Person) > 0)
												@foreach($Person as $item)
													<tr>
														<td>{{$item->Fname}} {{$item->Father_name}} {{$item->Lname}}</td>
														
														<td>
														@foreach($item->PersonEducation as $edu)
															{{$edu['degree_name']}} <br>
														@endforeach
													
														</td>
														
														<td>
														@foreach($item->PersonExperience as $jp)
															{{$jp['Job_title']}} <br>
														@endforeach
														</td>
														<td>
															{{$item->city->city_name}}
														</td>
														<td>
														{{$item->gender}}
														</td>
														<!-- <td> {{$item->gender}} </td> -->
														<td>  	
														<a href="{{route('personDetail',$item->id)}}" class="btn btn-primary"> <i class="ti-eye" style="size:25px"></i></a>
														
														</td>
													</tr>

												@endforeach
											@else
												<tr><td>  لايوجد سير ذاتية لعرضها</td></tr>
											@endif
										</tbody>
									</table>
									
									<span>{{$Person->links('layouts.paginationlinks')}}</span>
							
							</div>
						
					
							</div>	</div>




					


					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->



<script>
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
</script>



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

			   $.each(res , function(inde, value){
				tableRow ='<tr><td>'+value.Fname+' '+value.Father_name+' '+value.Lname+'</td><td>'+value.degree_name+'</td><td>'+value.city_name+'</td><td>'+value.gender+'</td><td><a href="Person/details/'+value.id+' class="btn btn-primary"> تفاصيل</a></td> </tr>';
				$('#serch-result').append(tableRow);
			})
        }
        });
    });

</script>

@endsection


