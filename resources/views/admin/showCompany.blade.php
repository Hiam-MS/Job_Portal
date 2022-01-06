@extends('header')
@section('content')


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
              <h2 class="h2 text-info">إدارة الشركات</h2>
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
                                  <th>اسم الشركة</th>
                                  <th>اختصاص الشركة</th>
                                  <th>مكان الشركة</th>  
                                  <th>ايميل</th>                                
                                  <th></th>    
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($com as $company)
                                <tr>
                                  <td> {{ $company->company_name }} </td>
                                  <td></td>
                                  <td>{{ $company->city->city_name }}</td>City
                                  <td> {{ $company->email }} </td>
                                
                                  <td><h4>
                                    @if($company->role == 'c')
                                    <button class="btn btn-danger banUsers" data-id="{{$company->id}}">حظر</button>
                                    @elseif($company->role == 'd')
                                     <button class="btn btn-success unbanFreelancer" data-id="{{$company->id}}">رفع الحظر</button>
                                    @endif
                                  </h4></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                             <div class="ml-3"> {{$companies->links()}}</div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


@endsection()