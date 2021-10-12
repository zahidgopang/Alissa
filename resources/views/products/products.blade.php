@extends('layouts/master')
{{-- Page content --}}
@section('content')

	<style>
	/* style list */
	[digood-id="common_search_box_1_oyh"] form {
		background: #f7f7f7 none repeat scroll 0 0;
		height: 40px;
		position: relative;
		margin: 0;
	}

	[digood-id="common_search_box_1_oyh"] input {
		background: transparent none repeat scroll 0 0;
		border: medium none;
		color: #333;
		height: 100%;
		padding: 5px 10px;
		position: absolute;
		top: 0;
		width: 80%;
		outline: medium none;
	}
  [digood-id="list_product_item_3_oyh"] .dg-single-project:hover .text h4 a{
  	color:white !important
  }
	[digood-id="common_search_box_1_oyh"] button {
		background: #e70012 none repeat scroll 0 0;
		border: medium none;
		color: #fff;
		height: 100%;
		position: absolute;
		right: 0;
		top: 0;
		width: 20%;
		text-align: center;
		transition: all 0.4s ease 0s;
		padding: 0;
	}

	[digood-id="common_search_box_1_oyh"] button:hover {
		background: #212121 none repeat scroll 0 0;
	}

	[digood-id="sidebar_nav_1_oyh"] ul {
		list-style: none;
		margin: 0;
		padding: 0;
		transition: 0.3s;
	}

	[digood-id="sidebar_nav_1_oyh"] ul ul .collapse-link {
		font-size: 0.9em;
		display: inline;
		padding-left: 1em;
	}

	[digood-id="sidebar_nav_1_oyh"] ul ul ul .collapse-link {
		padding-left: 2em;
	}

	[digood-id="sidebar_nav_1_oyh"] .panel {
		margin-top: 0;
		margin-bottom: 0;
		overflow: hidden;
		background-color: transparent;
		box-shadow: none;
	}

	[digood-id="sidebar_nav_1_oyh"] .panel-group .panel + .panel {
		margin-top: 0;
	}

	[digood-id="sidebar_nav_1_oyh"] .panel-default {
		border: 0;
	}

	[digood-id="sidebar_nav_1_oyh"] .panel-heading {
		position: relative;
		border: 1px solid #ddd;
		margin-bottom: 10px;
		padding: 0;
		height: 45px;
		background-color: #fff;
		overflow: hidden;
		border-radius: 0;
	}

	[digood-id="sidebar_nav_1_oyh"] .panel-heading a {
		color: #121212;
		text-decoration: none;
	}

	[digood-id="sidebar_nav_1_oyh"] .collapse-link {
		position: absolute;
		z-index: 1;
		display: inline;
		padding: 0;
		top: 50%;
		transform: translate(1em, -50%);
		border: 0;
		font-size: 14px;
	}

	[digood-id="sidebar_nav_1_oyh"] .collapse-button {
		position: absolute;
		left: 0;
		top: 0;
		display: flex;
		align-items: center;
		justify-content: center;
		width: 100%;
		height: 100%;
		margin: 0;
	}

	[digood-id="sidebar_nav_1_oyh"] .collapse-button.collapsed .fa {
		transform: rotate(-90deg);
	}

	[digood-id="sidebar_nav_1_oyh"] .collapse-button > span {
		position: absolute;
		right: 1em;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media {
		display: flex;
		margin-bottom: 12px;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media-body,
	[digood-id="sidebar_related_item_1_oyh"] .dg-media-left,
	[digood-id="sidebar_related_item_1_oyh"] .dg-media-right {
		vertical-align: middle;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media-link {
		width: 80px;
		display: block;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media-link img {
		width: 100%;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media-heading {
		font-size: inherit;
		padding-left: 1em;
		margin: 0;
		max-height: 80px;
		overflow: hidden;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media-heading a {
		color: initial;
		text-decoration: none;
		font-size: 14px;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media-heading a:hover {
		color: #e70012;
	}

	[digood-id="list_product_item_3_oyh"] a {
		text-decoration: none;
	}

	[digood-id="list_product_item_3_oyh"] .tran3s,
	[digood-id="list_product_item_3_oyh"] .dg-single-project .text p,
	[digood-id="list_product_item_3_oyh"] .dg-single-project .text:before {
		transition: all .3s ease-in-out;
	}
	@media screen and (min-width:767px){
  [digood-id="list_product_item_3_oyh"] .image{
    height: 250px;
}
}

	[digood-id="list_product_item_3_oyh"] .image img {
		transition: all .5s ease-in-out;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text p {
		margin-bottom: 1em;
		font-size: 14px;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text:before {
		background: #e70012;
	}

	[digood-id="list_product_item_3_oyh"] .image {
		overflow: hidden;
		position: relative;
	}

	[digood-id="list_product_item_3_oyh"] .image::before {
		content: '';
		display: block;
		padding-bottom: 80%;
		width: 100%;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project:hover .image img {
		transform: scale3D(1.1, 1.1, 1);
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .image img,
	[digood-id="list_product_item_3_oyh"] .dg-single-project .image .fancybox {
		width: 100%;
		display: block;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .image .fancybox {
		position: absolute;
		width: 100%;
		height: auto;
		top: 0;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text {
		position: relative;
		z-index: 1;
		padding: 25px 25px 30px 25px;
		background: #f3f3f3;
		text-align: center;
		border-bottom: 2px solid #e70012;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text p {
		height: 5em;
		line-height: 1.8em;
		overflow: hidden;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text h4 {
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
		padding: 5px 0;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text h4 a {
		color: #121212;
		margin-bottom: 18px;
		font-size: 18px;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project:hover .text p {
		color: rgba(255, 255, 255, 0.7);
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project:hover .text h4 a {
		color: #fff;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text:before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		height: 0;
		z-index: -1;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project:hover .text:before {
		height: 100%;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project {
		margin-bottom: 30px;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .link-button {
		border: 2px solid;
		padding: 0.5em 1em;
		margin-top: 10px;
		background-color: #e70012;
		color: #fff;
	}

	@media (min-width: 992px) and (max-width: 1199px) {
		[digood-id="list_product_item_3_oyh"] .dg-single-project .text {
			padding-left: 15px;
			padding-right: 15px;
		}
	}

	@media (min-width: 600px) and (max-width: 767px) {
		[digood-id="list_product_item_3_oyh"] .dg-single-project .text h4 a {
			font-size: 20px;
		}
		[digood-id="list_product_item_3_oyh"] .dg-single-project .text {
			padding-left: 12px;
			padding-right: 12px;
		}
	}

	[digood-id="list_pagination_1_oyh"] a {
		-webkit-transition: all 0.4s ease 0s;
		transition: all 0.4s ease 0s;
		color: inherit;
	}

	[digood-id="list_pagination_1_oyh"] a:focus {
		text-decoration: none;
		outline: medium none;
		color: inherit;
	}

	[digood-id="list_pagination_1_oyh"] a:hover {
		color: inherit;
		text-decoration: none;
		color: inherit;
	}

	[digood-id="list_pagination_1_oyh"] ul {
		margin: 0;
		padding: 0;
	}

	[digood-id="list_pagination_1_oyh"] li {
		list-style-type: none;
	}

	[digood-id="list_pagination_1_oyh"] .pagination {
		list-style: outside none none;
		margin: 35px 0 0;
		padding: 0;
		text-align: center;
		display: block;
	}

	[digood-id="list_pagination_1_oyh"] .pagination li {
		display: inline-block;
		margin: 0 3px;
	}

	[digood-id="list_pagination_1_oyh"] .pagination li a {
		background: #1a1a1a none repeat scroll 0 0;
		border: 1px solid #1a1a1a;
		border-radius: 0 !important;
		color: #fff;
		display: block;
		font-size: 15px;
		font-weight: 600;
		height: 35px;
		letter-spacing: 2px;
		min-width: 35px;
		padding: 5px;
		text-transform: uppercase;
	}

	[digood-id="list_pagination_1_oyh"] .pagination li.active a,
	[digood-id="list_pagination_1_oyh"] .pagination li > a:hover,
	[digood-id="list_pagination_1_oyh"] .pagination li.active a:hover {
		background: #e70012 none repeat scroll 0 0;
		color: #fff;
		border: 1px solid #e70012;
	}

	@media (max-width: 768px) {
		#digood-products .pull-right {
			float: none !important;
		}
	}
	/* /style list */

	[digood-id="common_search_box_1_oyh"] button, [digood-id="list_product_item_3_oyh"] .dg-single-project .text:before {
		background: #e70012 none repeat scroll 0 0;
	}

	[digood-id="sidebar_related_item_1_oyh"] .dg-media-heading a:hover {
		color: #e70012;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .text {
		border-bottom: 2px solid #e70012;
	}

	[digood-id="list_product_item_3_oyh"] .dg-single-project .link-button {
		background-color: #e70012;
	}

	[digood-id="list_pagination_1_oyh"] .pagination li.active a,
	[digood-id="list_pagination_1_oyh"] .pagination li > a:hover,
	[digood-id="list_pagination_1_oyh"] .pagination li.active a:hover {
		background: #e70012 none repeat scroll 0 0;
		border: 1px solid #e70012;
	}

	[digood-id="page-products-seo-cp"] {
		margin-bottom: 30px;
	}

	[digood-id="page-products-seo-cp"] .section-title h2 {
		position: relative;
		font-weight: 500;
		margin-bottom: 2px;
	}

	[digood-id="page-products-seo-cp"] .title-text {
		position: relative;
		margin-bottom: 68px;
	}

	[digood-id="page-products-seo-cp"] .title-text:before {
		position: absolute;
		content: '';
		background-color: #e70012;
		height: 5px;
		width: 50px;
		border-radius: 5px;
		left: 0px;
		margin-left: 0px;
		bottom: -13px;
	}

	[digood-id="page-products-seo-cp"] .title-text {
		margin-bottom: 38px;
	}

	[digood-id="page-products-seo-cp"] .product-content-seo {
		position: relative;
		margin-right: 10px;
	}

	[digood-id="page-products-seo-cp"] .product-content-seo p {
		margin-bottom: 19px;
	}

	[digood-id="page-products-seo-cp"] .product-content-seo .text:last-child p {
		margin-bottom: 16px;
	}
	[digood-id="list_product_item_3_oyh"] .dg-single-project {
    border: 2px solid #ddd;
}

   [digood-id="list_product_item_3_oyh"] .dg-single-project .text {
    height: 110px !Important;
}

[digood-id="list_product_item_3_oyh"] .dg-single-project .text {
    padding: 1px 2px 2px 1px;
}

[digood-id="list_product_item_3_oyh"] .dg-single-project .text h4 a {
    font-size: 14px;
}
  .breadcrumb li a, .breadcrumb li, .breadcrumb{
  	display:contents;
  }

</style>

<section class="single-page-title-area" data-background="{{ asset('/assets/v4-upload.goalsites.com/377/image_1578281306_未标题-4.jpg') }}"
		 style="background-image: url({{ asset('/assets/v4-upload.goalsites.com/377/image_1578281306_%e6%9c%aa%e6%a0%87%e9%a2%98-4.jpg ') }} );">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
					  <!--
						<h6></h6>
						<span></span>
						-->
						<h2>Kettle Grills</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  
					  <li class="breadcrumb-item"><a href="{{ URL('home') }}">Home  / </a></li>
					
											  <li class=""><a href="{{ URL('all') }}}">Products / </a></li>
											  <li class="breadcrumb-item active"><a href="#">Product Category / </a></li>
											

						 
				
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>

<div id="digood-products">
  <div class="container">
	<div class="row">

	  <div class="col-sm-12" style="padding-top: 2em;">
		<div class="row">


	  		  <!-- sidebar -->
		  <div class="col-md-3 col-sm-12">
						<div class="digood-sidebar-search-box">
			  <div digood-id="common_search_box_1_oyh">
				<form action="https://www.alissbabbq.com/search/products" method="GET">
				  <input type="search" placeholder="Search..." name="keyword">
				  <button type="submit">
					<i class="fa fa-search"></i>
				  </button>
				</form>
			  </div>
			</div>
									<div style="padding-top: 20px"></div>
			<div class="digood-sidebar-nav">

			  <div digood-id="sidebar_nav_1_oyh">
												<ul class="panel-group" role="tablist" id="digood-module-sidebar-main">
				  				  				  
				  <li class="panel panel-default" id="Charcoal-Grills">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/1")}}">Charcoal Grills</a>
					  <a class="collapse-button collapsed" role="button" data-toggle="collapse" data-parent="#Charcoal-Grills" href="#Charcoal-Grills-children"
						 aria-controls="Charcoal-Grills-children" aria-expanded="false">
						<span class="text-right">
						  <i class="fa fa-angle-down"></i>
						</span>
					  </a>
					</div>
					<ul class="panel-group collapse" role="tablist" id="Charcoal-Grills-children" aria-expanded="false" style="height: 0px;">
					  					  					  					  <li class="panel panel-default" id="Kettle-Grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/1")}}">Kettle Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="Trolley-Grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/2")}}">Trolley Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="Barrel-Grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/3")}}">Barrel Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="portable-grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/4")}}">Portable Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="pedestal-grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/5")}}">Pedestal Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="rotisserie">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/6")}}">Rotisserie</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="tripod-grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/7")}}">Tripod Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="foldable-grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/8")}}">Foldable Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="balcony-grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/9")}}">Balcony Grills</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="instant-grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/10")}}">Instant Grills</a>
						</div>
					  </li>
					  					  					</ul>
				  </li>
				  				  				  				  
				  <li class="panel panel-default" id="Gas-Grills">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/2")}}">Gas Grills</a>
					  <a class="collapse-button collapsed" role="button" data-toggle="collapse" data-parent="#Gas-Grills" href="#Gas-Grills-children"
						 aria-controls="Gas-Grills-children" aria-expanded="false">
						<span class="text-right">
						  <i class="fa fa-angle-down"></i>
						</span>
					  </a>
					</div>
					<ul class="panel-group collapse" role="tablist" id="Gas-Grills-children" aria-expanded="false" style="height: 0px;">
					  					  					  					  <li class="panel panel-default" id="plancha-grills">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/11")}}">Plancha</a>
						</div>
					  </li>
					  					  					</ul>
				  </li>
				  				  				  				  				  <li class="panel panel-default" id="Electric-Grills">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/3")}}">Electric Grills</a>						 
					</div>
				  </li>
				  				  				  				  				  <li class="panel panel-default" id="Smoker">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/4")}}">Smoker</a>						 
					</div>
				  </li>
				  				  				  				  				  <li class="panel panel-default" id="Pellet-Grills">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/5")}}">Pellet Grills</a>						 
					</div>
				  </li>
				  				  				  				  				  <li class="panel panel-default" id="kamado">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/6")}}">Kamado</a>						 
					</div>
				  </li>
				  				  				  				  				  <li class="panel panel-default" id="Fire-Pit">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/7")}}">Fire Pit</a>						 
					</div>
				  </li>
				  				  				  				  				  <li class="panel panel-default" id="Pizza-Oven">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/8")}}">Pizza Oven</a>						 
					</div>
				  </li>
				  				  				  				  
				  <li class="panel panel-default" id="bbq-accessories">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/9")}}">BBQ Accessories</a>
					  <a class="collapse-button collapsed" role="button" data-toggle="collapse" data-parent="#bbq-accessories" href="#bbq-accessories-children"
						 aria-controls="bbq-accessories-children" aria-expanded="false">
						<span class="text-right">
						  <i class="fa fa-angle-down"></i>
						</span>
					  </a>
					</div>
					<ul class="panel-group collapse" role="tablist" id="bbq-accessories-children" aria-expanded="false" style="height: 0px;">
					  					  					  					  <li class="panel panel-default" id="bbq-tool-set">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/12")}}">BBQ Tool Set</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="bbq-grid-30">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/13")}}">BBQ Grid</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="bbq-pan-31">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/14")}}">BBQ Pan</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="bbq-glove-32">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/15")}}">BBQ Glove</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="bbq-skewer">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/16")}}">BBQ Skewer</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="thermometer-34">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/17")}}">Thermometer</a>
						</div>
					  </li>
					   </li>
					  					  					  					  					  <li class="panel panel-default" id="thermometer-34">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/18")}}">BBQ Charcoal Ovens</a>
						</div>
					  </li>
					   </li>
					  					  					  					  					  <li class="panel panel-default" id="thermometer-34">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/19")}}">BBQ Needle</a>
						</div>
					  </li>
					</li>
					<li class="panel panel-default" id="thermometer-34">
					<div class="panel-heading" role="tab">
					<a class="collapse-link" href="{{URL("products/Subcategory/20")}}">BBQ Net</a>
					</div>
					</li>
					<li class="panel panel-default" id="thermometer-34">
					<div class="panel-heading" role="tab">
					<a class="collapse-link" href="{{URL("products/Subcategory/21")}}">BBQ Grill</a>
					</div>
					</li>
					<li class="panel panel-default" id="thermometer-34">
					<div class="panel-heading" role="tab">
					<a class="collapse-link" href="{{URL("products/Subcategory/22")}}">BBQ BAMBOO STICK</a>
					</div>
					</li>
					  					  					  					  					  <li class="panel panel-default" id="bbq-starter">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/23")}}">Starter</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="air-blower">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/24")}}">Air Blower</a>
						</div>
					  </li>
					  					  					  					  					  <li class="panel panel-default" id="bbq-mesh">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/25")}}">BBQ Mesh</a>
						</div>
					  </li>
					  					  					  					  					  {{-- <li class="panel panel-default" id="others-bbq-accessories">
						<div class="panel-heading" role="tab">
						  <a class="collapse-link" href="{{URL("products/Subcategory/21")}}">Others</a>
						</div>
					  </li> --}}
					  					  					</ul>
				  </li>
				  				  				  				  				  <li class="panel panel-default" id="kerosene-cooking-stoves">
					<div class="panel-heading" role="tab">
					  <a class="collapse-link" href="{{URL("products/Category/10")}}">Kerosene Cooking Stoves</a>						 
					</div>
				  </li>
				  				  				</ul>
							  </div>

			</div>
									<div style="padding-top: 10px"></div>
			<div class="digood-sidebar-related">

			  <div digood-id="sidebar_related_item_1_oyh">
				<div class="panel panel-default">
				  <div class="panel-body">
					@foreach ($sideproducts as $item)
						
					
				<div class="dg-media">
				
					  					  <div class="dg-media-left">
						<a href="{{URL("products/detail")}}/{{$item->id}}" class="dg-media-link" title="{{$item->name}}">
						  <img class="dg-media-object" src="{{asset('productimages')}}/{{$item->productimages[0]->image}}" alt="{{$item->name}}">
						</a>
					  </div>
					  					  <div class="dg-media-body">
						<h5 class="dg-media-heading">
						  <a title="{{$item->name}}" href="{{URL("products/detail")}}/{{$item->id}}">{{$item->name}}</a>
						</h5>
					  </div>
					</div>
									
				  </div>
				</div>
				@endforeach
			  </div>

			</div>
					  </div>
		  


		  <!-- main -->
		  <div class="col-md-9 col-sm-12 pull-right">
			<div digood-id="page-products-seo-cp">
			  <div class="product-content-seo">
				<div class="product-title-seo">
				  {{-- <div class="section-title"><h2>Kettle Grills</h2></div> --}}
				  <div class="title-text"></div>
				</div>
				<!--
				<div class="text"><p></p></div>
				-->
			  </div>
			</div>
			<div class="digood-products-list">
			  <div class="row">	
				@if($products->isEmpty())
					<div style="margin:auto">No Products Found</div>
				@endif
				@foreach ($products as $item)	 
				<div class="col-md-4 col-sm-6">
				  <div digood-id="list_product_item_3_oyh">
					<div class="dg-single-project">
					  <div class="image">
						<a  class="fancybox" href="#" title="{{$item->name}}">
						  <img src="{{asset('productimages')}}/{{$item->productimages[0]->image}}" alt="{{$item->name}}">
						</a>
					  </div>
					  <div class="text">
						<h4>
						  <a title="{{$item->name}}" href="{{URL("products/detail")}}/{{$item->id}}" class="tran3s">{{$item->name}}</a>
						</h4>                                                    
					  </div>
					  <!-- /.text -->
					</div>
					<!-- /.single-project -->
				  </div>
				</div>
				@endforeach	
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.digood-products-list -->


			{{-- <div class="digood-pagination-wrap">
			  <nav digood-id="list_pagination_1_oyh">
				<ul class="pagination">
        
        
        <li class="active"><a href="javascript:;">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>

        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
        <li><a href="#">»</a></li>
    </ul>			  </nav>
			</div> --}}
			<div style="padding-top: 2em;"></div>

		  </div>

	

		</div>
	  </div>


	</div>
	<!-- .row -->
  </div>
  <!-- .container -->
</div>
@stop