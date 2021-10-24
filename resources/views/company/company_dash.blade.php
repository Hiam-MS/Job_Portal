@extends('header')
@section('content')
    @csrf
    
<div class="page-content bg-white">
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{asset('images/banner/bnr1.jpg')}});">
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
									<img src="{{asset('images/blog/grid/6.jpg')}}" alt="">
									</div>
								</div>
										
								<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-lg-12 col-md-6">
									<div  class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
                                         <h4 class="text-black font-weight-700 p-t10 m-b15"><a href="/company/profile" > لوحة التحكم<a></h4>
                                            <ul>
											
											@if(isset(auth()->user()->GetCompany))
                                                <li><strong class="font-weight-700 text-black"> <a href="{{route('CompanyViewProfile')}}" > عرض الملف الشخصي </a></strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black"><li><a href="{{route('addJob')}}" > نشر فرصة عمل جديدة </a></li></strong> </li>
                                                <li><strong class="font-weight-700 text-black"><li><a href="{{route('CompanyJob')}}" > عرض فرص العمل المنشورة  </a></li></strong> </li>
                                                
												@else
												<li><strong class="font-weight-700 text-black"><li><a href="{{route('company.profile')}}" > ادخال معلومات الشركة </a></li></strong> </li>

												@endif
												<li><strong class="font-weight-700 text-black"><a href="{{route('resuems')}}" >   عرض السير الذاتية المتاحة</a>  </strong></li>	
												
										<li><strong class="font-weight-700 text-black"><h5 >      ادارة الحساب</h5>  </strong>
										<ul>
										<ul><li><strong class="font-weight-700 text-black"><a href="{{route('password.change')}}" >    تغيير كلمة المرور</a>  </strong></li></ul>
										<ul><li><strong class="font-weight-700 text-black"><a href="{{route('edit.form')}}" >   تعديل   الحساب</a>  </strong></li></ul>
										<ul><li><strong class="font-weight-700 text-black"><a href="{{route('profile.delete')}}" >  حذف الحساب </a>  </strong></li>		
										</ul >
										</li>	
                                            </ul>
									</div>
								</div>

							</div>
						</div>
					</div>
						

					<div class="col-lg-8">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="job-info-box">
                            <div>
                               <h4 ><p>اهلا و سهلا : {{auth()->user()->name}} </p></h4> 
                               <hr>
                            </div>    
                            <div class="">
			<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
				<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-desktop"></i></a> </div>
					<div class="icon-content">
						<h5 class="dlab-tilte text-uppercase">إضافة معلومات الشركة   </h5>
						<p>معلومات الشركة هي أول و أهم ما تحتاجه لتفعيل حسابك  ، حيث إن باحثين عن العمل يحتاجون للاطلاع عليها قبل اتخاذ قرار التقدم للعمل. علماً أن معلومات الشركة  التي تبنيها على موقعنا هي الأكثر إقناعاً لهم   </p>
					</div>
				</div>
			</div>
            <hr>
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
            <div class="">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-search" ></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">   بحث عن موظفين</h5>
                            <p> هذه المنصة تمكّن المؤسسات من البحث عن موظفين مؤهلين في حال عدم نشر فرص عمل على الموقع والتواصل معهم مع الحصول على معلومات السير الذاتية الخاصة بهم  </p>
							
						</div>
					</div>
				</div>
            </div>
            <hr>
            <div class="">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-list" ></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">    عرض فرص العمل المنشورة </h5>
                            <p> هذه المنصة تمكّن المؤسسات من البحث عن موظفين مؤهلين في حال عدم نشر فرص عمل على الموقع والتواصل معهم مع الحصول على معلومات السير الذاتية الخاصة بهم  </p>
							
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
			<br><br>
    </div>
</div>
 
    
 @endsection