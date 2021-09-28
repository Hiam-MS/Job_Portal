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
								<div class="col-lg-12 col-md-6">
									<div class="m-b30">
										<!-- <img src="images/blog/grid/6.jpg" alt=""> -->
									</div>
								</div>
										
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                    <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="#" > لوحة التحكم<a></h4>
                                    <ul>
									@if(isset(auth()->user()->GetPerson))
									   <li><strong class="font-weight-700 text-black"><a href="/resume/ViewpersonalInfo" >  معاينةالسيرة الذاتية</a>  </strong></li>
										<li><strong class="font-weight-700 text-black"><li><a href="#" >تعديل السيرة الذاتية</a></li></strong> </li>
													<li><strong class="font-weight-700 text-black"><li><a href="/resume/createEdu" >اضافة/تعديل التعليم و المهارات  </a></li></strong> </li>
													

									  
									  @else

									<li><strong class="font-weight-700 text-black"> <a href="/resume/create" >انشاء السيرة الذاتية</a></strong><span class="text-black-light"> </span></li>
										@endif			
                                            </ul>
									</div>
								</div>

							</div>
						</div>
					</div>
						

					<div class="col-lg-8">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
                            <div>
                               <h4 ><p>الخدمات المقدمة من قبل الموقع</p></h4> 
                               <hr>
                            </div>    
                            <div class="">
			<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
				<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-desktop"></i></a> </div>
					<div class="icon-content">
						<h5 class="dlab-tilte text-uppercase">
بناء سيرة ذاتية احترافية   </h5>
						<p>  سيرتك الذاتية هي أول و أهم ما تحتاجه لبناء حياتك المهنية الناجحة، حيث إن كل الشركات و أصحاب الأعمال يحتاجون للاطلاع عليها قبل اتخاذ قرار التوظيف. علماً أن سيرتك الذاتية التي تبنيها على موقعنا هي الأكثر إقناعاً لهم بتوظيفك أنت</p>
					</div>
				</div>
			</div>
            <hr>
            <div class="">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-image" ></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">التقدم لفرص العمل</h5>
                            <p>  سيرتك الذاتية تمكنك من التقدم مباشرة للشواغر بما يناسب امكانياتك و خبراتك.قم دوماً بالاطلاع على موقعنا و فرص العمل المعروضة عليه للحصول على أخر المستجدات</p>
							
						</div>
					</div>
				</div>
         
    <hr>
            <div class="">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-search" ></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">   بحث عن وظائف و فرص عمل</h5>
                            <p> </p>
						</div>
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