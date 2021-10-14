@extends('layouts/master')
{{-- Page content --}}
@section('content')

	<style>
.faq-block .card-block{
    border-color: #87ceeb !important;
}
img{max-width:100%;height:auto;}
a{outline:0!important;}
h3,h5,p,a,span{word-wrap:break-word;}
.section-header{display:inline-block;margin-bottom:23px;position:relative;width:100%;text-align:center;margin-bottom:40px;}
.section-header h3{color:#131313;font-family:'Poppins', sans-serif;font-size:40px;font-weight:bold;line-height:1.3;letter-spacing:1.2px;margin-bottom:0;margin-top:0;text-transform:uppercase;}
.section-header h3 > span{color:#1b88ce;}
.section-header p{color:#7d7d7d;letter-spacing:0.56px;line-height:1.85;padding:0 10%;margin-bottom:0;margin-top:24px;}
.special-features{padding-top:110px;padding-bottom:120px;}
.special-features .section-header{text-align:left;margin-bottom:35px;}
.special-features .section-header > p{margin-top:0;padding:0;}
.special-features .faq-block .card-block{padding-right:0;}
.special-features .faq-block .card-block p{padding-right:0;margin:0;}
.faq-block .card{border:none;margin-bottom:10px;}
.faq-block .card-header{background-color:transparent;box-shadow:none;border:none;padding:0;}
.faq-block .card-header h5{margin:0;position:relative;}
.faq-block .card-header h5 a{padding:12px 12px 12px 70px;color:#fff;font-family:'Poppins', sans-serif;font-weight:500;font-size:16px;display:inline-block;width:100%;position:relative;line-height:28px;letter-spacing:0.48px;text-decoration:none;z-index:1;}
.faq-block .card-header h5 a.collapsed{color:#545454;}
.faq-block .card-header h5 a::before{content:"";position:absolute;left:26px;top:0;bottom:0;right:0;-webkit-transition:all 0.5s ease 0s;-moz-transition:all 0.5s ease 0s;-o-transition:all 0.5s ease 0s;transition:all 0.5s ease 0s;z-index:-1;}
.faq-block .card-header h5 a::before,.faq-block .card-header h5 a:hover::before,.faq-block .card-header h5 a.collapsed:hover::before{background-color:#0089d2;}
.faq-block .card-header h5 a.collapsed::before{background-color:#f4f4f4;box-shadow:inset -1px 0px 3px 0px rgba(0, 0, 0, 0.21);}
.faq-block .card-header h5 a:hover{color:#ffffff;}
.faq-block .card-header h5 a span{background-color:#0089d2;border:5px solid #fff;border-radius:100%;color:#ffffff;display:inline-block;font-family:'Poppins', sans-serif;font-size:18px;font-weight:600;height:52px;left:0;line-height:2.5;position:absolute;top:50%;transform:translate(0%, -50%);-webkit-transform:translate(0%, -50%);-moz-transform:translate(0%, -50%);-ms-transform:translate(0%, -50%);width:52px;text-align:center;}
.faq-block .card-block{border-bottom:1px solid #1b88ce;padding:23px 0;}
.faq-block .card-block p{font-size:14px;line-height:26px;letter-spacing:0.56px;color:#403f3f;font-family:'Open Sans', sans-serif;padding-right:27%;margin-bottom:0;}
@media only screen and (min-width: 992px) and (max-width: 1199px){
.faq-block .card-block{margin-left:26px;}
}
@media (max-width: 991px){
.faq-block .card-block{margin-left:26px;}
.faq-block .card-block p{padding-right:0;}
}
@media (max-width: 767px){
.section-header h3{line-height:36px;font-size:26px;}
.special-features .row [class*="col-"]:nth-child(n+2){margin-top:50px;}
}
.no-left-padding{padding-left:0;}
.no-right-padding{padding-right:0;}
@media (min-width: 1200px){
.container{max-width:1200px;}
}

.faq-block .card-header h5 a::before, .faq-block .card-header h5 a:hover::before, .faq-block .card-header h5 a.collapsed:hover::before {
    background-color: #87ceeb !important;
}

.faq-block .card-header h5 a span {
    background-color: #87ceeb !important;
}

a:focus, a:hover, .gallery-heading h4 a:hover, .post-meta span > a > i, .sidebar-widget ul li a:hover, .lead-point li, .blog-post .fa-tag, .pagination-nav ul li a, .big-font i, .btn-text:hover, .color-primary, a.color-primary, .contact .icon-circle, .single-sidebar-widget .special-links li:hover a, .single-sidebar-widget .special-links li a.active, .custom-check:before, .us .item span, .single-fact .icon-boxed, .single-fact span, .single-fact p, .star i, .time_table .icon_lf i, .blog .post-content a.blog_tital:hover, .blog .post-content a.read_more:hover, a:focus, a:hover, .flot_icon, .flot_right, .anchor_ser:hover .service_text p, .hover_box span, .top-ser-icon .icon-fl i, .abt-box__content-link-arrow, .abt-box_link-arrow, .abt-box__content-link:hover, .abt-box_link:hover, .abt-block_link-arrow, .abt-block_link:hover, .mv-block__vision_link-arrow, .mv-block__mission_link-arrow, .mv-block__vision_link:hover, .mv-block__mission_link:hover, .solution_box i.color_orenge, .single-fact.new_counter span.counter, .line-box i, .team-item-img .team-item-detail .team-item-detail-inner .social li a, .white_but, .white_but:hover, .white_but:focus, .widget-tag li a, .item-nav .item-prev .prev-btn, .item-nav .item-next .next-btn, .team-item-img .team-item-detail .team-item-detail-inner .social li a:hover, .btn_style:hover, .form-field-wrapper i, .ui-input-group > input:focus ~ label, .ui-input-group > textarea:focus ~ label, .top-info__block p, .top-info__block li i, h2 span, .services-block .inner-box .image .overlay-box .read-more:hover, .services-block .inner-box .lower-box a:hover, .inner-intro .page-breadcrumb span, .abt__link-arrow, .abt__link:hover, .pricing-2 .price, .pricing-2 .currency-symbol, .pricing-btn .get-start.white-btn, .white-btn, .title_bdr i, .process-icon .icon-number, .top-service .fr-text i, .more_btn__block {
    color: #fff !important;
}
</style>
<section>




<section class="single-page-title-area" data-background="//v4-upload.goalsites.com/377/image_1578281306_未标题-4.jpg"
		 style="background-image: url({{asset('assets/v4-upload.goalsites.com/377/image_1578281306_%e6%9c%aa%e6%a0%87%e9%a2%98-4.jpg')}});">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
					  <!--
						<h6></h6>
						<span></span>
						-->
						<h2>FAQ</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
					  							 <li class="breadcrumb-item active">FAQ</li>
					
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>










  <!-- Special Features -->
  <div class="container-fluid no-left-padding no-right-padding special-features">
	<!-- Container -->
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567760093_special-features.png_%3b%20filename_%3dutf-8%27%27image_1567760093_special-features.png')}}" alt="faq" />
		</div>
		<div class="col-md-6">
		  <!-- Section Header -->
		  <div class="section-header">
			<h3>FAQ</h3>
			<p></p>
		  </div><!-- Section Header /- -->
		  <div id="accordion" role="tablist" aria-multiselectable="true" class="faq-block">
						 			 			<div class="card">
			  <div class="card-header" role="tab" id="heading1">
				<h5>
				  <a class="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-controls="collapse1">
					<span>1</span>What's your main products?				  </a>
				</h5>
			  </div>
			  <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
				<div class="card-block">
				  <p> BBQ Grills and BBQ Tools are the main products in our factory. We can supply the latest designs or custom-make products.</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading2">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-controls="collapse2">
					<span>2</span>Do you accept the OEM or Custom Design order?				  </a>
				</h5>
			  </div>
			  <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
				<div class="card-block">
				  <p> Yes, we do. Both are warmly welcomed.</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading3">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-controls="collapse3">
					<span>3</span>Which country is your main export country?				  </a>
				</h5>
			  </div>
			  <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
				<div class="card-block">
				  <p> Which country is your main export country?</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading4">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-controls="collapse4">
					<span>4</span>Where is your loading port located?				  </a>
				</h5>
			  </div>
			  <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
				<div class="card-block">
				  <p> Shenzhen.</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading5">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-controls="collapse5">
					<span>5</span> Can I visit your factory/showroom?				  </a>
				</h5>
			  </div>
			  <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
				<div class="card-block">
				  <p> Yes! Warmly welcome to visit our factory . And it would be great if you can inform us in advance.</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading6">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-controls="collapse6">
					<span>6</span>What are my payment options?				  </a>
				</h5>
			  </div>
			  <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
				<div class="card-block">
				  <p> You have flexibility to choose the following payment terms that work best for your budget: T/T,L/C.</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading7">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-controls="collapse7">
					<span>7</span>You have flexibility to choose the following payment terms that work best for your budget: T/T,L/C.				  </a>
				</h5>
			  </div>
			  <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
				<div class="card-block">
				  <p> Start online TM or inquiry, associate will be in touch within one working day.</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading8">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-controls="collapse8">
					<span>8</span>How is my privacy protected?				  </a>
				</h5>
			  </div>
			  <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
				<div class="card-block">
				  <p> After you paid the sample charges and sent us the confirmed files, the samples will be ready for delivery in about 3-7 days. The samples will be express to you.</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading9">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-controls="collapse9">
					<span>9</span>How long can I expect to get the sample?				  </a>
				</h5>
			  </div>
			  <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
				<div class="card-block">
				  <p> How long can I expect to get the sample?</p>
				</div>
			  </div>
			</div>
						 			<div class="card">
			  <div class="card-header" role="tab" id="heading10">
				<h5>
				  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-controls="collapse10">
					<span>10</span>What is your lead time?				  </a>
				</h5>
			  </div>
			  <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10">
				<div class="card-block">
				  <p> About 35 -45days after you confirm order with us.</p>
				</div>
			  </div>
			</div>
						
			
		  </div>
		</div>
	  </div><!-- Row /- -->
	</div><!-- Container /- -->
  </div><!-- Special Features /- -->

</section> 
@stop