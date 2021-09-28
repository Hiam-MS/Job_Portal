@extends('header')
@section('content')


<div  class="content-block">
			<!-- Submit Resume -->
			<div class="section-full bg-white submit-resume content-inner-2">
				<div dir="rtl" lang="ar" class="container" style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;">
            <a href="{{route('addJob')}}" class="btn btn-primary">نشر فرصة عمل </a>

            <a href="{{route('CompanyJob')}}" class="btn btn-primary" >  قائمة فرص العمل المفعّلة </a>
            <a href="" class="btn btn-primary">  قائمة فرص العمل المنتهية </a>
            <a href="" class="btn btn-primary">السير الذاتية المعروضة</a>

<div class="dez-bnr-inr dez-bnr-inr-md overlay-black-dark" style="background-image:url(images/main-slider/4.jpg);">
    <div class="container">
        <div class="dez-bnr-inr-entry align-m text-white">
			<div class=" job-search-form">
				<h2 class="text-center">أسهل طريقة للبحث عن موظف جديد</h2>
				<h3>ابحث عن السير الذاتية</h3>
				
			</div>
		</div>
    </div>
</div>


<br><hr><br><hr>
<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
			<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
				<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-cup"></i></a> </div>
					<div class="icon-content">
						<h5 class="dlab-tilte text-uppercase">إضافة معلومات الشركة   </h5>
						<p>معلومات الشركة هي أول و أهم ما تحتاجه لتفعيل حسابك  ، حيث إن باحثين عن العمل يحتاجون للاطلاع عليها قبل اتخاذ قرار التقدم للعمل. علماً أن معلومات الشركة  التي تبنيها على موقعنا هي الأكثر إقناعاً لهم   </p>
					</div>
				</div>
			</div>

            <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-desktop" ></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">نشر فرصة عمل الكترونية</h5>
                            <p>يمكن للمؤسسات المسجلة على الموقع و بطريقة سهلة  نشر فرصة عمل الكترونياً, حيث  تمكّن الباحثين عن عمل من الوصول إاليها بسهولة و الاطلاع على تفاصيل هذا العمل بكل بساطة والتقدم لهذا العمل في حال توافرت الشروط المناسبة لهم</p>
							
						</div>
					</div>
				</div>
         

            <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-desktop" ></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">   بحث عن موظفين</h5>
                            <p> هذه المنصة تمكّن المؤسسات من البحث عن موظفين مؤهلين في حال عدم نشر فرص عمل على الموقع والتواصل معهم مع الحصول على معلومات السير الذاتية الخاصة بهم  </p>
							
						</div>
					</div>
				</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
				<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
					<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-desktop" ></i></a> </div>
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

@endsection