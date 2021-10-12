@extends('layouts/master')
{{-- Page content --}}
@section('content')
	
	    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/v4-assets.goalsites.com/yexuming/demo/bs3-3/css/1.01/flaticon.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/cdn.staticfile.org/magnific-popup.js/1.1.0/magnific-popup.min.css_%3b%20filename_%3dutf-8%27%20%27magnific-popup.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/cdn.staticfile.org/OwlCarousel2/2.2.1/assets/owl.carousel.min.css_%3b%20filename_%3dutf-8%27%20%27owl.carousel.min.css')}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/v4-assets.goalsites.com/yexuming/demo/bs3-3/css/1.01/style.css')}}">

<script   src="{{asset('assets/cdn.staticfile.org/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js_%3b%20filename_%3dutf-8%27%20%27jquery.magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->


<script  src="{{asset('assets/cdn.staticfile.org/jquery.isotope/3.0.6/isotope.pkgd.min.js_%3b%20filename_%3dutf-8%27%20%27isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script   src="{{asset('assets/cdn.staticfile.org/OwlCarousel2/2.2.1/owl.carousel.min.js_%3b%20filename_%3dutf-8%27%20%27owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->

<style>
  .breadcrumb li a, .breadcrumb li, .breadcrumb{
  	display:inline-block
  }
  .page-item.active .page-link{
  	color:white !important
  }
  .site-button,.site-button:active, .site-button:hover, .site-button:focus, .active>.site-button{
  	background:#E70012 !important;
	color:white !Important;
  }
  .pagination>li>a:hover, .pagination>li>span:hover, .pagination>li>a:focus, .pagination>li>span:focus{
  		background:#E70012 !important;
		color:white !Important;
  }
</style>





<section class="single-page-title-area" data-background="//v4-upload.goalsites.com/377/image_1578281306_未标题-4.jpg"
		 style="background-image: url({{asset('assets/v4-upload.goalsites.com/377/image_1578281306_%e6%9c%aa%e6%a0%87%e9%a2%98-4.jpg')}});">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
					 					  					  	<h1>News</h1>
					   					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="{{URL('home')}}">Home/</a></li>
					  												  <!--
					  <li class=""><a href="https://www.keyobbq.com/articles/all.html">Articles/</a></li>
-->
																	  
					  
					   					  
					   					 <li class="">News</li>
					     					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>





        
        <!-- CONTENT START -->
        <div class="page-content">
        
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
            	<div class="container">
                    <div class="row">
                    
                        <!-- LEFT PART START -->
                        <div class="col-md-12">
                            
                            <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567670801_YH28018-2.jpg_%3b%20filename_%3dutf-8%27%27image_1567670801_YH28018-2.jpg')}}" alt="Principle of charcoal grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Principle of charcoal grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  23   Jul</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Principle of charcoal grill
Charcoal is the carbon dioxide released during the combustion process, it is colorless and tasteless, and charcoal is burned and has no smoke. Ordinary barbecue grills smoke when making produ</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567670806_YH28018-3.jpg_%3b%20filename_%3dutf-8%27%27image_1567670806_YH28018-3.jpg')}}" alt="What is a charcoal grill?"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">What is a charcoal grill?</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  23   Jul</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>What is a&nbsp;charcoal grill?
Charcoal is generally found in large self-service yakiniku restaurants, yakiniku restaurants, Korean restaurants, northeastern barbecues, and star-rated hotels Yajian barbecues. Charcoal g</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567738719_KY85602.jpg')}}" alt="Things to pay attention to when carrying out bbq activities"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Things to pay attention to when carrying out bbq activities</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  01   Jul</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>First of all, the bbq site should be selected well, away from flammable products. Choose a bbq site and observe carefully. Do not place where flammable materials such as vegetation and leaves accumulate. Clean up the fir</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567739045_YH280183.jpg')}}" alt="Some things to pay attention to when bbq"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Some things to pay attention to when bbq</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  01   Jul</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Bbq are of course indispensable. Ordinary grills are usually divided into stone pots and grid racks. Stick it on the stove or gas against the stone plate, and then place the food on the grill pan for bbq. The advantage o</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567693412_logo-keyong.png_%3b%20filename_%3dutf-8%27%27image_1567693412_logo-keyong.png')}}" alt="The correct bbq method and bbq techniques you need to know"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">The correct bbq method and bbq techniques you need to know</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  12   May</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Barbecued food is delicious, especially kebabs, grilled meats, grilled chicken legs and so on. Barbecue stalls on the streets in spring are often very popular. Bbq is roughly divided into the following steps:



1. C</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567693423_logo-keyong.png_%3b%20filename_%3dutf-8%27%27image_1567693423_logo-keyong.png')}}" alt="Several things you should pay attention to when bbq"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Several things you should pay attention to when bbq</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  11   May</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Many people think that bbq is simply a matter of tossing the meat a few times, and then rubbing some ingredients on it. In fact, there are many precautions for bbq.
&nbsp;


1. Different and different baking methods.</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="#" alt="Safety Matters for Pellet Grills"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Safety Matters for Pellet Grills</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  30   Apr</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Pellet grills are currently the fastest growing in the sales of grills. Pellet grills have been proven that they can reach the required temperature stably and accurately. It can use different kinds of wood pellets to add</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="#" alt="Introduction to the characteristics of smokeless automatic barbecue machine |Smoke Pro Pellet Grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Introduction to the characteristics of smokeless automatic barbecue machine |Smoke Pro Pellet Grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  15   Apr</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Introduction to the characteristics of smokeless automatic barbecue machine |Smoke Pro Pellet Grill
Smokeless automatic barbecue machines are generally divided into three types. One is to reduce the oil smoke diffusion </p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567654387_KY4524TN-2.jpg_%3b%20filename_%3dutf-8%27%27image_1567654387_KY4524TN-2.jpg')}}" alt="The basic principles of smoke-free outdoor bbq grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">The basic principles of smoke-free outdoor bbq grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  29   Mar</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Charcoal smokeless outdoor bbq grill principle

Charcoal is the carbon dioxide released during the combustion process, it is colorless and tasteless, and charcoal is burned and has no smoke. Ordinary outdoor bbq grill </p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567654411_KY4524TN-6.jpg_%3b%20filename_%3dutf-8%27%27image_1567654411_KY4524TN-6.jpg')}}" alt="How to remove oil stains on smokeless outdoor bbq grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">How to remove oil stains on smokeless outdoor bbq grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  03   Mar</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>

&nbsp; &nbsp; &nbsp;When using a smokeless outdoor bbq grill, the oil on the meat will drop to the outdoor bbq grill, and it will be completely solidified on the outdoor bbq grill after use. It is very difficult to c</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567654370_KY4524TN-1.jpg_%3b%20filename_%3dutf-8%27%27image_1567654370_KY4524TN-1.jpg')}}" alt="Where did all the oil fume in the smokeless outdoor bbq grill go?"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Where did all the oil fume in the smokeless outdoor bbq grill go?</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  23   Feb</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Oily fume is generated during the process of grilling food, but after using outdoor smokeless outdoor bbq grill, it is found that there is no oily fume in the middle. It improves the phenomenon of large amount of oily fu</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644685_Outdoor-Pizza-Oven-Big-Round-Table-Top-2.jpg_%3b%20filename_%3dutf-8%27%27image_1567644685_Outdoor-Pizza-Oven-Big-Round-Table-Top-2.jpg')}}" alt="Prohibitions for smoke-free outdoor outdoor bbq grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Prohibitions for smoke-free outdoor outdoor bbq grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  04   Feb</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>

Smoke-free outdoor bbq grill is becoming more and more familiar in people&#39;s lives, because it has no oily smoke, delicious taste, and is well known by people, so do you know what it is forbidden or not to be used</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567654370_KY4524TN-1.jpg_%3b%20filename_%3dutf-8%27%27image_1567654370_KY4524TN-1.jpg')}}" alt="Where is the energy saving and environmental protection of electric cooking grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Where is the energy saving and environmental protection of electric cooking grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  25   Jan</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>　Gas smokeless electric cooking grill is a kind of barbecue equipment, its core feature is smokeless, which is also the result of the country&#39;s environmental protection and urban hygiene requirements since the reform</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644704_Outdoor-Pizza-Oven-Big-Round-Table-Top--6.jpg_%3b%20filename_%3dutf-8%27%27image_1567644704_Outdoor-Pizza-Oven-Big-Round-Table-Top--6.jpg')}}" alt="How to remove the oil stains on the smokeless electric cooking grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">How to remove the oil stains on the smokeless electric cooking grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  14   Jan</strong>
										  <span>   2021</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>&nbsp; &nbsp; &nbsp;When using a smokeless electric cooking grill, the oil on the meat will be lowered to the electric cooking grill, and it will be completely solidified on the electric cooking grill after use. It is ve</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644698_Outdoor-Pizza-Oven-Big-Round-Table-Top--5.jpg_%3b%20filename_%3dutf-8%27%27image_1567644698_Outdoor-Pizza-Oven-Big-Round-Table-Top--5.jpg')}}" alt="How to choose high-quality smoke-free Electric Grills"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">How to choose high-quality smoke-free Electric Grills</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  24   Dec</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>

Nowadays, there are more and more people who like to eat barbecue. As a restaurant, what kind of barbecue equipment is generally needed? There are many Electric Grills on the market. How do we generally choose?

Fi</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644698_Outdoor-Pizza-Oven-Big-Round-Table-Top--5.jpg_%3b%20filename_%3dutf-8%27%27image_1567644698_Outdoor-Pizza-Oven-Big-Round-Table-Top--5.jpg')}}" alt="How to choose the right Electric Grills"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">How to choose the right Electric Grills</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  17   Dec</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>

With the improvement of the consumption level of consumers, there are correspondingly different pursuits for the quality of life. People are no longer satisfied with eating indiscriminately outside, and are willing t</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644665_Outdoor-Pizza-Oven-Big-Round-Table-Top.jpg')}}" alt="How to clean the inside of the stainless gas grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">How to clean the inside of the stainless gas grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  23   Nov</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>
Whether you are a barbecue novice or a BBQ expert, keep the grill clean, because this is an important part of making food. This article teaches you how to clean the inside of the stainless gas grill. Close the gas valv</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644704_Outdoor-Pizza-Oven-Big-Round-Table-Top--6.jpg_%3b%20filename_%3dutf-8%27%27image_1567644704_Outdoor-Pizza-Oven-Big-Round-Table-Top--6.jpg')}}" alt="Portable electric bbq grill classification and function introduction"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Portable electric bbq grill classification and function introduction</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  12   Nov</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Infrared portable electric bbq grill: adopts a tempered glass cover. The wide grill plate has four unique processing technologies, which is 1.5 times higher than the heating speed of carbon and gas ovens. It is a double </p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567693412_logo-keyong.png_%3b%20filename_%3dutf-8%27%27image_1567693412_logo-keyong.png')}}" alt="How to maintain the electric griddle grill?"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">How to maintain the electric griddle grill?</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  02   Nov</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>In the past two years, with the development of barbecue food, various problems have followed one after another. In traditional charcoal grilling, the oven used is very simple, and the grilling is often accompanied by dus</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567586459_image_1562836254_news.jpg_%3b%20filename_%3dutf-8%27%27image_1567586459_image_1562836254_news.jpg')}}" alt="What kind of electric griddle grill is safe"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">What kind of electric griddle grill is safe</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  02   Nov</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>In daily life, the production methods of staple food are nothing more than steaming, frying, boiling, roasting, and roasting. The &quot;roasting&quot; is not only in the catering industry, but also in the food processing</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567669314_KY30040M.jpg_%3b%20filename_%3dutf-8%27%27image_1567669314_KY30040M.jpg')}}" alt="Safety matters of barbecue pellet grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Safety matters of barbecue pellet grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  25   Sep</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>barbecue pellet grill are currently the fastest growing in the sales of grills. No one! No one! No one! Important things are said three times.
&nbsp; &nbsp; &nbsp;The barbecue pellet grill is not only stable but also ab</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567669314_KY30040M.jpg_%3b%20filename_%3dutf-8%27%27image_1567669314_KY30040M.jpg')}}" alt="Precautions for purchasing smoke pro pellet grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Precautions for purchasing smoke pro pellet grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  25   Sep</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>In summer and autumn, it is the happiest thing to have a barbecue with friends and a drink of draft beer. But if you want to eat delicious barbecue, then the smoke pro pellet grill is definitely an indispensable weapon. </p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644690_Outdoor-Pizza-Oven-Big-Round-Table-Top-4.jpg_%3b%20filename_%3dutf-8%27%27image_1567644690_Outdoor-Pizza-Oven-Big-Round-Table-Top-4.jpg')}}" alt="Safety matters for pellet bbq grills"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Safety matters for pellet bbq grills</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  31   Aug</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>

&nbsp; &nbsp; &nbsp;Pellet bbq grills is currently the fastest growing in grill sales, no one! No one! No one! Important things are said three times.

&nbsp; &nbsp; &nbsp;The pellet bbq grills are not only stable e</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567644704_Outdoor-Pizza-Oven-Big-Round-Table-Top--6.jpg_%3b%20filename_%3dutf-8%27%27image_1567644704_Outdoor-Pizza-Oven-Big-Round-Table-Top--6.jpg')}}" alt="Precautions for buying bbq grill"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Precautions for buying bbq grill</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  31   Aug</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In summer and autumn, it is the happiest thing to have a barbecue with friends and a drink of draft beer. But if you want to eat delicious barbecue, then bbq grill is def</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1596178897_why-bbq-is-the-best.jpg_%3b%20filename_%3dutf-8%27%27image_1596178897_why-bbq-is-the-best.jpg')}}" alt="Why BBQ is the best?"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Why BBQ is the best?</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  31   Jul</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>
As we all know, the original food culture that has been working for a hundred years was originally evolved from barbecue. This cooking process that awakens the natural flavor of food in a pure way has become a favorite</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1595237365_image_1578640569_%e6%96%b0%e6%ac%beKY1820B%e9%a2%97%e7%b2%92%e7%82%89%ef%bc%881%ef%bc%89.jpg_%3b%20filename_%3dutf-8%27%27image_1595237365_image_1578640569_%25E6%2596%25B0%25E6%25AC%25BEKY1820B%25E9%25A2%2597%25E7%25B2%2592%25E7%2582%258')}}" alt="The Food Baked by The Wood Pellet BBQ Grill is More Delicious"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">The Food Baked by The Wood Pellet BBQ Grill is More Delicious</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  20   Jul</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>There are many types of barbecue grills, and the taste of grilled food is slightly different. Among them, the food grilled with wood pellet BBQ grill has a more unique taste, more obvious aroma, and can arouse the appeti</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1595234041_image_1578637787_KY8554EL-Electric-grill.jpg_%3b%20filename_%3dutf-8%27%27image_1595234041_image_1578637787_KY8554EL-Electric-grill.jpg')}}" alt="The Advantages of Electric Grills"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">The Advantages of Electric Grills</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  20   Jul</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Barbecuing has long been a favorite way of cooking, but because the concept of healthy eating has gradually appeared in our vision, delicious barbecue is often labeled as unhealthy. However, with the advancement of techn</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567739167_KY30040M-(417)5.jpg_%3b%20filename_%3dutf-8%27%27image_1567739167_KY30040M-%2528417%25295.jpg')}}" alt="What are pellet bbq grills?"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">What are pellet bbq grills?</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  29   Jun</strong>
										  <span>   2020</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Pellet bbq grills&nbsp;are a relatively new innovation in the barbecue area, eliminating the use of toxic propane or messy charcoal, and instead being pressed into pellet-sized pellets by hardwood sawdust.

How does th</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1568626650_Raw-material.png_%3b%20filename_%3dutf-8%27%27image_1568626650_Raw-material.png')}}" alt="Keyong Company completed 45 product testing in 2019 with TUV ahead of schedule"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Our Company completed 45 product testing in 2019 with TUV ahead of schedule</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  06   Sep</strong>
										  <span>   2019</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>
On July 2, 2019, the company and TUV began testing 45 products in 2019, including newly developed products and products of customers that have been ordered, ending the testing work before the peak season.</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567750210_Investment-Contribution-Award.jpg_%3b%20filename_%3dutf-8%27%27image_1567750210_Investment-Contribution-Award.jpg')}}" alt="Congratulations on winning the award"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Congratulations on winning the award</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  06   Sep</strong>
										  <span>   2019</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>

Congratulations on the award of &quot;high-tech enterprise&quot;, &quot;big taxpayer&quot; and &quot;investment contribution award&quot; of our company in 2018</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567750389_Safety-Production-Standardization-Certificate-(Keyong-stove)-2018.jpg_%3b%20filename_%3dutf-8%27%27image_1567750389_Safety-Production-Standardization-C')}}" alt="Warm congratulations to keyong company for being rated as "enterprise of safety production standardization"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Warm congratulations to keyong company for being rated as "enterprise of safety production standardization</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  06   Sep</strong>
										  <span>   2019</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Warm congratulations to ke yong company for being rated as &quot;enterprise of safety production standardization</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567750075_Fire-safety-knowledge(3).jpg_%3b%20filename_%3dutf-8%27%27image_1567750075_Fire-safety-knowledge%25283%2529.jpg')}}" alt="Strengthen Fire Safety Knowledge"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">Strengthen Fire Safety Knowledge</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  04   Sep</strong>
										  <span>   2019</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>



On June 20, 2019, foshan fire department came to our company to demonstrate fire safety knowledge and enhance people&#39;s awareness of fire prevention.</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567749946_patent2.jpg_%3b%20filename_%3dutf-8%27%27image_1567749946_patent2.jpg')}}" alt="We own 28 related patents"></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">We own 28 related patents</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  04   Sep</strong>
										  <span>   2019</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>











Over the past year, we have invested more than 20 million yuan in upgrading and upgrading equipment，The successful application in 2018 was recognized as 《Nanhai district engineering technology res</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                                                    <div class="blog-post blog-md date-style-1 clearfix">
                                
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{URL('post')}}"><img src="{{asset('assets/v4-upload.goalsites.com/377/image_1567749732_Half-year-annual-meeting.jpg_%3b%20filename_%3dutf-8%27%27image_1567749732_Half-year-annual-meeting.jpg')}}" alt="2019 Half Annual Summary Meeting "></a>
                                </div>
                                <div class="wt-post-info">
                                
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a title="" href="{{URL('post')}}">2019 Half Annual Summary Meeting </a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                      <ul>
										                                          <li class="post-date"> <i class="fa fa-calendar"></i><strong>  04   Sep</strong>
										  <span>   2019</span> </li>
                                   
                                      </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>






Today, all business elites and company management of our group held this meeting in the conference room of the company. This meeting summarized the achievement of goals and problems in the past year. Key</p> 
                                    </div>
								  
                                    <div class="wt-post-readmore">
                                         <a href="{{URL('post')}}" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                                    </div>

                                
                                </div>
                            
                            </div>
                        
                            
                            <!-- PAGINATION START -->
                            <div class="pagination-bx clearfix ">
						
                                <ul class = "custom-pagination pagination">
								  <ul class="pagination" style="display:flex;justify-content:center">
        
        
        <li class="active page-item"><a class="page-link" href="javascript:;">1</a></li>
<li class=" page-item"><a class="page-link" href="#">2</a></li>
<li class=" page-item"><a class="page-link" href="#">3</a></li>
<li class=" page-item"><a class="page-link" href="#">4</a></li>
<li class=" page-item"><a class="page-link" href="#">5</a></li>

        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
    </ul>								  	  <!--
                                   <li><a href = "#">«</a></li>
                                   <li class = "active"><a href = "#">1</a></li>
                                   <li><a href = "#">2</a></li>
                                   <li><a href = "#">3</a></li>
                                   <li><a href = "#">4</a></li>
                                   <li><a href = "#">5</a></li>
                                   <li><a href = "#">»</a></li>
 -->
                                </ul>
                            </div>
                            <!-- PAGINATION END -->
                            
                        </div>
                        <!-- LEFT PART END -->
                        
                      
					  
					  
					  
					  
                        
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END -->
        
        </div>
        <!-- CONTENT END -->

<script>
  	$('.widget-client').owlCarousel({
		loop:true,
		autoplay:true,
		items:1,
		nav:false,
		dots:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	})
  	        $('.mfp-gallery').magnificPopup({
          delegate: '.mfp-link',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          }
       });
</script>
@stop
 