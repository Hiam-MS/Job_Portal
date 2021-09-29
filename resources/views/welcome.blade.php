@extends('header')
@section('content')
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- Section Banner -->
		<div class="dez-bnr-inr dez-bnr-inr-md overlay-black-dark" style="background-image:url(images/main-slider/4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m text-white">
					<div class=" job-search-form">
						<h2 class="text-center">أسهل طريقة للحصول على وظيفتك الجديدة</h2>
						<h3>ابحث عن الوظائف والتوظيف وفرص العمل</h3>
				
					</div>
				</div>
            </div>
        </div>
		
	
		<!-- Section Banner END -->
        <!-- About Us -->
		<!-- inner page banner -->
        
        <!-- inner page banner END -->
		<div id="aboutUs" class="content-block">
            <div class="section-full content-inner overlay-white-middle">
				<div class="container">
					<div class="row align-items-center m-b50">
						<div style="margin: right 30px;align-content:flex-start;text-align: right;justify-content: right;" class="col-md-12 col-lg-6 m-b20">
							<h2 class="m-b5">نبذة عن منصة التوظيف </h2>
							<h3 class="fw4">We create unique experiences</h3>
							<p class="m-b15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.</p>
							<p class="m-b15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.</p>
							<!--<a href="#" class="site-button">Read More</a>-->
						</div>
						<div class="col-md-12 col-lg-6">
							<img src="images/our-work/pic1.jpg" alt=""/>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
							<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
								<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-cup"></i></a> </div>
								<div class="icon-content">
									<h5 class="dlab-tilte text-uppercase">بناء سيرة ذاتية احترافية</h5>
									<p>سيرتك الذاتية هي أول و أهم ما تحتاجه لبناء حياتك المهنية الناجحة، حيث إن كل الشركات و أصحاب الأعمال يحتاجون للاطلاع عليها قبل اتخاذ قرار التوظيف. علماً أن سيرتك الذاتية التي تبنيها على موقعنا هي الأكثر إقناعاً لهم بتوظيفك أنت </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
							<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
								<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-image"></i></a> </div>
								<div class="icon-content">
									<h5 class="dlab-tilte text-uppercase">التقدم لفرص العمل</h5>
									<p>سيرتك الذاتية  تمكنك من التقدم مباشرة للشواغر و المبوبات المعلنة بما يناسب امكانياتك و خبراتك.قم دوماً بالاطلاع على موقعنا و فرص العمل المعروضة عليه للحصول على أخر المستجدات</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
							<div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
								<div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell text-primary"><i class="ti-desktop" ></i></a> </div>
								<div class="icon-content">
									<h5 class="dlab-tilte text-uppercase">عرض فرصة عمل الكترونية</h5>
									<p>يمكن للمؤسسات المسجلة على الموقع و بطريقة سهلة  الوصول إلى أنسب الموظفين أينما كانت فرصة العمل و أينما كانت المؤسسة ذلك بواسطة عرض فرصة عمل الكترونية على الموقعة</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		<!-- About Us END -->
		<!-- Call To Action -->
		<div class="section-full content-inner-2 call-to-action overlay-black-dark text-white text-center bg-img-fix" style="background-image: url(images/background/bg4.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="m-b10">اصنع فرقًا مع سيرتك الذاتية على الإنترنت!</h2>
						<p class="m-b0"></p>
						@if(auth::user())
						@if(auth()->user()->role == 'p')
						<a href="/resume/dashboard" class="site-button m-t20 outline outline-2 radius-xl">سجل الآن</a>
						@endif
								@if(auth()->user()->role == 'c')
								<a href="{{ asset('/company/dashboard')}}" class="site-button m-t20 outline outline-2 radius-xl">سجل الآن</a>
								@endif

						@else
						<a href="{{ route('register') }}" class="site-button m-t20 outline outline-2 radius-xl">سجل الآن</a>
						

						@endif
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- Our Job END -->	
		<!-- Call To Action -->
		<br>
		
		<!-- Our Latest Blog -->
		<br><br><br><br><br>
	
		<div class="section-full content-inner-2 overlay-white-middle">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="text-uppercase m-b0">لمحة عن الغرفة</h2>
					
					<p> غرفة تجارة دمشق تشمل وشركات بالإضافة كونها تشغل منصب الخازن الدائم لاتحاد الغرف التجارية السورية و عضويتها في مجلس إدارة الاتحاد وعضويتها في تجمع غرف التجارة والصناعة والزراعة لبلدان البحر الأبيض المتوسط</p>
					<br>
				</div>
				<div dir="ltr" lang="en"  class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dez-post-media dez-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/pic5.jpg" alt=""></a> </div>
							
							
							
						</div>
					</div>
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dez-post-media dez-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/عمال.jpg" alt=""></a> </div>
							
						</div>
					</div>
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dez-post-media dez-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/4.jpg" alt=""></a> </div>
							
						</div>
					</div>
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dez-post-media dez-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/pic6.jpg" alt=""></a> </div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Our Latest Blog -->
	</div>
	<!-- Footer -->
	<br><br><br><br><br>
	
	
@endsection