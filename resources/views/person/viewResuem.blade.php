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
		font-size:20px;
		}
</style>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"> السير الذاتية الحالية</h1>
					<!-- Breadcrumb row -->
					<!-- <div class="breadcrumb-row">
						<ul class="list-inline">
							
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
            <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">السير الذاتية   </h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="row">
                    <!-- <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="start_date" placeholder="Start Date" readonly>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="end_date" placeholder="End Date" readonly>
                        </div>
                    </div> -->
                </div>
                <div>
                    <button id="filter" class="btn btn-outline-info btn-sm">Filter</button>
                    <button id="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless display nowrap" id="records" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>الاسم</th>
                                        <th>الجنس</th>
                                        <th>مكان الولادة  </th>
                                        <th>خدمة العلم </th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
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
				tableRow ='<tr><td>'+value.Fname+' '+value.Father_name+' '+value.Lname+'</td><td>'+value.degree_name+'</td><td>'+value.gender+'</td><td><a href="Person/details/'+value.id+' class="btn "> تفاصيل</a></td> </tr>';
				$('#serch-result').append(tableRow);
			})

			
			   

            }
        });
    });

</script>

<script>
        $(function() {
            $("#start_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
            $("#end_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
        });

        // Fetch records
        function fetch(start_date, end_date) {
            $.ajax({
                url: "{{ route('students/records') }}",
                type: "GEt",
                data: {
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    // Datatables
                    var i = 1;
                    $('#records').DataTable({
                        "data": data.person,
                        // buttons
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        // responsive
                        "responsive": true,
                        "columns": [{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "Fname"
                            },
                            {
                                "data": "gender",
                                "render": function(data, type, row, meta) {
                                    return `${row.gender}`;
                                }
                            },
                            {
                                "data": "place_Of_b",
                                "render": function(data, type, row, meta) {
                                    return `${row.place_Of_b}`;
                                }
                            },
                            {
                                "data": "military_service"
                            },
                            {
                                "data": "created_at",
                                "render": function(data, type, row, meta) {
                                    return moment(row.created_at).format('DD-MM-YYYY');
                                }
                            }
                        ]
                    });
                }
            });
        }

        fetch();

        // Filter
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Both date required");
            } else {
                $('#records').DataTable().destroy();
                fetch(start_date, end_date);
            }
        });

        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#start_date").val(''); // empty value
            $("#end_date").val('');
            $('#records').DataTable().destroy();
            fetch();
        });

    </script>
@endsection


