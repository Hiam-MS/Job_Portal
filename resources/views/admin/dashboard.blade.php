@extends('header')
@section('content')
    @csrf
    
<div class="page-content bg-white">
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('images/banner/bnr1.jpg')}});">
	
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">لوحة التحكم </h1>
					
            </div>
        </div>
    </div>
     
    <div class="content-block">
        <div class="section-full content-inner-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="sticky-top">
							<div class="row">
								
										
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-9 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                         <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="{{route('admin.Dash')}}" > لوحة التحكم<a></h4>
                                            <ul>
											
										
                                                <li><strong class="font-weight-700 text-black"> <a href="{{route('showCompany')}}" > إدارة الشركات </a></strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black"><a href="{{route('people')}}" >   إدارة الأشخاص</a>  </strong></li>	
												<li><strong class="font-weight-700 text-black"><a href="{{route('pendingJob')}}" >إدارة الوظائف</a>  </strong></li>	
												<li><strong class="font-weight-700 text-black"><a href="{{route('pendingJob')}}" >      وظائف معلقة</a>  </strong></li>	
												<li><strong class="font-weight-700 text-black"><a href="{{route('cities')}}" >إدارة المناطق</a>  </strong></li>	
                                               
                                            </ul>
									</div>
								</div>

							</div>
						</div>
					</div>
						

					<div class="col-lg-8">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
                            <div>
                               <h4 ><p>اهلا و سهلا {{Auth::user()->name}}</p></h4> 
                               <hr>
                            </div>    
                            <div class="">
                            <div class="">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-image" ></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">نشر فرصة عمل الكترونية</h5>
                            <p>يمكن للمؤسسات المسجلة على الموقع و بطريقة سهلة  نشر فرصة عمل الكترونياً, حيث  تمكّن الباحثين عن عمل من الوصول إاليها بسهولة و الاطلاع على تفاصيل هذا العمل بكل بساطة والتقدم لهذا العمل في حال توافرت الشروط المناسبة لهم</p>
							
						</div>
					</div>
				</div>
         
    <hr>
		
           
         
    
            

            </div>   
  

						</div>
					</div>









						
				</div>
			</div>
		</div>
			<br><br>
    </div>
</div>
 
    
 @endsection