@extends('header')
@section('content')

<style>
            .btn-danger {background-image: linear-gradient(to right, #000000 0%, #e74c3c  51%, #000000  100%)}
         .btn-danger{
            padding: 6px 6px;
            width :100px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-danger:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
</style>
<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">	
  <div class="row justify-content-center">
    @if(count($errors)>0)
		  <div class="alert alert-danger w-50 mx-auto mt-3 text-center">
				<ul>
          @foreach($errors->all() as $error)
            <li style="list-style: none;">{{$error}}</li>
          @endforeach
				</ul>
			</div>
		@endif
      
    <div class="col-md-10  my-5">
      
        <h2 class="h2 text-primary">إدارة الأشخاص</h2><br>
        <div class="card card-default text-white">
          <div class="tab-content text-muted p-3">
            <div class="tab-pane active" id="admin-tabs-1" role="tabpanel">
              <div class="row">
                <div class="col-sm-5 col-xs-12 mt-2">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search Freelancers" name="search_freelancer" id="searchFreelancer">
                  </div>
                </div>
              <div class="col-sm-3 col-xs-6 mt-2">
                 <select class="form-control" id="filterFreelancer">
                    <option selected disabled>Filter By</option>
                    <option value="name">Name</option>
                    <option value="email">Email</option>
                    <option value="created_at">Date Registered</option>
                  </select>
              </div>
              <div class="col-sm-2 col-xs-6 mt-2">
                  <select class="form-control" id="sortFreelancer">
                    <option selected disabled>Sort By</option>
                    <option value="asc">ASC</option>
                    <option value="desc">DESC</option>
                  </select>
              </div>
              <div class="col-sm-2 col-xs-6 mt-2">
                <button type="submit" class="btn btn-primary searchFreelancer w-100">Search</button>
              </div>
            </div>
            <div class="row table-responsive freelancerTable">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>الاسم الكامل </th>
                      <th> الشهادة</th>
                      <th>مكان الاقامة </th>  
                      <th>رقم الموبايل</th>                                
                      <th></th>    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($people as $person)
                      <tr>
                        <td> <a href="{{route('personDetail',$person->GetPerson->id)}}"> {{ $person->GetPerson->Fname}}  {{ $person->GetPerson->Father_name}}  {{ $person->GetPerson->Lname}}</a>  </td>

                        @if($person->GetPerson->PersonEducation == NULL)
                        <td>لايوجد</td>
                        @else
                        <td>
                            @foreach( $person->GetPerson->PersonEducation as $edu)
                                {{$edu['degree_name'] }} <br>
                            @endforeach
                        </td>
                        @endif
               
                        <td>{{ $person->GetPerson->city->city_name}}</td>
                        <td> {{ $person->GetPerson->mobile_number}}</td>
                        <td><h4>
                            @if($person->role == 'p')
                                <form action="{{route('BanPeople',$person->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger banUsers" data-id="{{$person->id}}">حظر</button>
                                </form>
                            @elseif($person->role == 'e')
                                <form action="{{route('unBanPeople',$person->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-success unbanFreelancer" data-id="{{$person->id}}">رفع الحظر</button>
                                </form>
                            @endif
                        </h4></td>    
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="ml-3"> {{$people->links()}}</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



@endsection()