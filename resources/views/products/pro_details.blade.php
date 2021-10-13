@extends('layouts/master')
{{-- Page content --}}
@section('content')
	
	<style>  

  .dg-product-images-slider .dg-image-main .dg-zoom > img{
  	width:200% !Important;
	max-width:200% !important;
  }
@media screen and (max-width:991px){
   body .table > tbody > tr > td,body .table > tbody > tr > th{
          padding: 0px !important;
    width: 500px !important;
    text-align: center;
    line-height: 24px;
    }

}
.dg-tab .dg-tab-panel img{
    width: auto !important;
    height: auto !important;
}
.search-product div form input{
    width: 80% !important;
}
.dg-product-images-slider .dg-image-main .dg-zoom > img{
    width: 200%;
    max-width: 200%;
}
  .mg-b-0{
      margin-bottom: 0px;
  }
  .mg-b-5{
      margin-bottom: 5px;
  }
  .mg-b-10{
      margin-bottom: 10px;
  }
  .mg-t-0{
      margin-top: 0px;
  }
  .mg-t-5{
      margin-top: 5px;
  }
  .mg-t-10{
      margin-top: 10px;
  }
  .search-product div form input{
      border: none;
      background-color: #eee;
      padding: 10px;
      width: 73%;
  
  }
  .search-product div form button{
      border: none;
      background-color: #e70012;
      color: #fff;
      padding: 10px;
      width: 18%;
  
  }
  .products-box{
      border-top: 1px dotted #cccccc;
      border-bottom: 1px dotted #cccccc;
      padding:30px 0 ;
  
  }
  .products-box span{
      display: inline-block;
      padding: 5px 10px;
      border: 1px solid #dddddd;
  }
  
  .dg-btn {
      display: inline-block;
      border: 2px solid #ddd;
      padding: .4em 1em;
      font-size: 16px;
      margin: .4em .4em .4em 0;
      text-decoration: none;
      font-weight: bold;
      border-radius: 2em;
  }
  
  .dg-btn.dg-theme {
      color: #fff !important;
      background-color: #e70012;
  }
  
  .dg-sider-title {
      font-size: 16px;
      font-weight: bold;
      text-transform: uppercase;
      border-left: 5px solid #e70012;
      padding-left: .5em;
      padding-top: 10px;
      padding-bottom: 10px;
      background-color: #f5f5f5;
      margin-top: 0;
  }
  
  .dg-side-weight {
      margin-bottom: 30px;
  }
  
  .dg-side-weight.dg-fixed {
      position: fixed;
      background-color: #fff;
      top: 10px;
      width: 270px;
  }
  .dg-layout-wrapper {
      padding-top: 50px;
      padding-bottom: 50px;
      position: relative;
  }
  .product-a-b-20{
      position: absolute;
      bottom: 20px;
  }
  
  .dg-layout-wrapper::after {
      content: '';
      display: block;
      height: 0;
      visibility: hidden;
      clear: both;
  }
  
  .dg-layout-main {
      padding-left: 15px;
      padding-right: 15px;
  }
  
  .dg-layout-sider {
      padding-left: 15px;
      padding-right: 15px;
  }
  
  .dg-sider-right .dg-layout-main {
      float: left;
      width: calc(100% - 300px);
  }
  
  .dg-sider-right .dg-layout-sider {
      float: left;
      width: 300px;
  }
  
  .dg-sider-left .dg-layout-main {
      float: right;
      width: calc(100% - 300px);
  }
  
  .dg-sider-left .dg-layout-sider {
      float: right;
      width: 300px;
  }
  
  @media (max-width: 996px) {
      .dg-sider-left .dg-layout-main,
      .dg-sider-right .dg-layout-main {
          float: none;
          width: 100%;
      }
      .dg-sider-left .dg-layout-sider,
      .dg-sider-right .dg-layout-sider {
          float: none;
          width: 100%;
      }
      .dg-side-weight.dg-fixed {
          position: relative;
          background-color: none;
          width: auto;
      }
  }
  
  .dg-weight-category-menu a {
      text-decoration: none;
      color: inherit;
  }
  
  .dg-weight-category-menu ul {
      margin: 0;
      padding: 0;
      list-style: none;
  }
  
  .dg-weight-category-menu .dg-sub-items {
      height: 0;
      display: none;
      overflow: hidden;
  }
  
  .dg-weight-category-menu .dg-list-items .dg-item li > span {
      padding-left: 2em;
  }
  
  .dg-weight-category-menu .dg-list-items .dg-item li li > span {
      padding-left: 4em;
  }
  
  .dg-weight-category-menu .dg-list-items .dg-item > span {
      display: block;
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      position: relative;
      overflow: hidden;
      border-radius: 3px;
      margin-bottom: 10px;
  }
  
  .dg-weight-category-menu .dg-list-items .dg-item > span:before, .dg-weight-category-menu .dg-list-items .dg-item > span:after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: -10%;
      width: 120%;
      height: 2px;
  }
  
  .dg-weight-category-menu .dg-list-items .dg-item > span:before {
      bottom: auto;
      top: -2px;
  }
  
  .dg-weight-category-menu .dg-list-items .dg-item > span > a:before {
      content: '◈';
      margin-right: 10px;
      display: inline-block;
      width: 10px;
      color: #e70012;
  }
  
  .dg-weight-category-menu .dg-list-items .dg-item > span > i {
      position: absolute;
      right: 0;
      top: 0;
      height: 100%;
      border-left: 1px solid #ddd;
      width: 3em;
      text-align: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      z-index: 9;
      cursor: pointer;
      color: inherit;
      background-color: #e70012;
      color: #fff;
  }
  
  .dg-weight-hot-product ul, .dg-weight-hot-product ol, .dg-weight-hot-product li {
      margin: 0;
      padding: 0;
      list-style: none;
  }
  
  .dg-weight-hot-product a {
      text-decoration: none;
      color: inherit;
  }
  
  .dg-weight-hot-product .dg-list-items {
      border: 1px solid #ddd;
      padding: 10px;
  }
  
  .dg-weight-hot-product .dg-list-items .dg-item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin-bottom: 10px;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
  }
  
  .dg-weight-hot-product .dg-list-items .dg-item:last-child {
      margin-bottom: 0;
  }
  
  .dg-weight-hot-product .dg-list-items .dg-item .dg-image {
      width: 80px;
  }
  
  .dg-weight-hot-product .dg-list-items .dg-item .dg-image img {
      border: 1px solid #ddd;
      padding: 5px;
      width: 100%;
  }
  
  .dg-weight-hot-product .dg-list-items .dg-item .dg-content {
      width: calc(100% - 100px);
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      vertical-align: center;
      padding-left: 1em;
  }
  
  .dg-weight-hot-product .dg-list-items .dg-item .dg-content .dg-title {
      font-size: 14px;
      margin: 0;
      line-height: 1.5;
      font-weight: bold;
  }  

  .dg-product-images-slider {
      padding-bottom: 20px;
  }
  
  .dg-product-images-slider img {
      width: 100%;
  }
  
  .dg-product-images-slider ul {
      list-style: none;
      margin: 0;
      padding: 0;
  }
  
  .dg-product-images-slider .dg-image-main {
      position: relative;
  }
  
  .dg-product-images-slider .dg-image-main .dg-image {
      border: 1px solid #ddd;
      position: relative;
  }
  
  .dg-product-images-slider .dg-image-main .dg-image .dg-mark {
      position: absolute;
      background-color: rgba(0, 0, 0, 0.3);
      top: 0;
      left: 0;
      width: 50%;
      height: 50%;
      cursor: move;
      display: none;
      z-index: 1;
  }
  
  .dg-product-images-slider .dg-image-main .dg-zoom {
      position: absolute;
      left: 100%;
      top: 0;
      height: 100%;
      width: 100%;
      border: 1px solid #ddd;
      z-index: 999;
      overflow: hidden;
      display: none;
  }
  
  .dg-product-images-slider .dg-image-main .dg-zoom > img {
      position: absolute;
      width: 200%;
      top: 0;
      left: 0;
  }
  
  .dg-product-images-slider .dg-image-main:hover .dg-zoom,
  .dg-product-images-slider .dg-image-main:hover .dg-image .dg-mark {
      display: block;
  }
  
  @media (max-width: 768px) {
      .dg-product-images-slider .dg-image-main .dg-zoom,
      .dg-product-images-slider .dg-image-main .dg-image .dg-mark {
          display: none !important;
      }
  }
  
  .dg-product-images-slider .dg-image-list {
      position: relative;
  }
  
  .dg-product-images-slider .dg-image-list .dg-button {
      position: absolute;
      top: 0;
      width: 5%;
      height: 100%;
      font-size: 1em;
      text-align: center;
      padding: 0;
      border: 1px solid #ddd;
  }
  
  .dg-product-images-slider .dg-image-list .dg-button.dg-prev {
      left: 0px;
  }
  
  .dg-product-images-slider .dg-image-list .dg-button.dg-next {
      right: 0px;
  }
  
  .dg-product-images-slider .dg-image-list .dg-list-wrap {
      width: calc(100% - 10%);
      margin: 0 auto;
      overflow: hidden;
      position: relative;
      border-bottom: 1px solid #ddd;
  }
  
  .dg-product-images-slider .dg-image-list .dg-list {
      white-space: nowrap;
      font-size: 0px;
      -webkit-transition: .3s;
      transition: .3s;
  }
  
  .dg-product-images-slider .dg-image-list .dg-image {
      display: inline-block;
      width: 20%;
      cursor: pointer;
      border: 2px solid #fff;
  }
  
  .dg-product-images-slider .dg-image-list .dg-image.active {
      border: 2px solid #e70012;
  }
  
  /** * 图片滑块 END **/
  .dg-product-description .dg-des-title {
      font-size: 18px;
      line-height: 1.5;
      margin: 0;
  }
  
  .dg-product-description .dg-des-price strong {
      font-size: 16px;
      font-weight: bold;
  }
  
  .dg-product-description .dg-des-buttons {
      padding: 10px 0;
  }
  
  /*.dg-tab {*/
  /*margin-bottom: 20px;*/
  /*}*/
  
  .dg-tab .dg-tab-nav {
      font-size: 0;
  }
  
  .dg-tab .dg-tab-action {
      display: inline-block;
      background-color: #f5f5f5;
      padding: 10px 20px 7px 20px;
      cursor: pointer;
      font-size: 16px;
      border: 1px solid #ddd;
      border-top-width: 3px;
      font-weight: bold;
  }
  
  .dg-tab .dg-tab-action.active {
      background-color: #fff;
      border-bottom-color: #fff;
      border-top-color: #e70012;
      color: #e70012;
  }
  
  .dg-tab .dg-tab-panel {
      border: 1px solid #ddd;
      padding: 15px;
      margin-top: -1px;
  }
  
  .dg-tab .dg-tab-content {
      display: none;
  }
  
  .dg-tab .dg-tab-content.active {
      display: block;
  }
  
  @media (max-width: 996px) {
      .dg-tab .dg-tab-action {
          display: inline-block;
          width: 100%;
          background-color: #eee;
          margin-bottom: 10px;
      }
      .dg-tab .dg-tab-action.active {
          border-bottom-color: #ddd;
      }
      .product-a-b-20{
          position: relative;
      }
  }
  
  .table > tbody > tr > td, .table > tbody > tr > th{
      padding: 12px 12px 12px 48px !important;
      
      
      
  }
  </style>
<script>

    (function () {

        var weightCategoryMenu = function (ele, event, accordion) {
            var $weight = $(ele);
            if (!$weight.length) return;
            $weight.each(function () {
                var $buttons = $(this).find('.dg-item > span > i');
                $buttons.on(event, function () {
                    var $item = $(this).parent().parent();
                    var $child = $item.children('ul');
                    var $childItemArr = $child.children('li');
                    if (!$item.hasClass('active')) {

                        if (!accordion) {
                            var $subItems = $item.parents('.dg-sub-items');
                            var $brother = null;
                            if ($subItems.length) {
                                $brother = $subItems.eq($subItems.length - 1).parent('.dg-item').siblings();
                            } else {
                                $brother = $item.siblings();
                            }
                            $brother.each(function () {
                                var $item = $(this);
                                $item.removeClass('active');
                                $item.children('ul').animate({ height: 0 }, 300, function () {
                                    $(this).css({ display: 'block' });
                                });
                                $item.find('li').removeClass('active');
                                $item.find('li ul').animate({ height: 0 }, 300, function () {
                                    $(this).css({ display: 'block' });
                                });
                            })
                        }

                        $item.addClass('active');
                        $child.css({ display: 'block' }).animate({ height: $item.height() * $childItemArr.length }, 300, function () {
                            $(this).css({ height: 'auto' });
                        });
                    } else {

                        $item.removeClass('active');
                        $child.animate({ height: 0 }, 300, function () {
                            $(this).css({ display: 'block' });
                        });
                        $item.find('li').removeClass('active');
                        $item.find('li ul').animate({ height: 0 }, 300, function () {
                            $(this).css({ display: 'block' });
                        });
                    }
                })
            })
        }

        var productImagesSlider = function (ele, event) {
            $slider = $(ele);
            $slider.each(function () {
                var $main = $(this).find('.dg-image-main');
                var $imageList = $(this).find('.dg-image-list');
                var $prev = $imageList.find('.dg-prev');
                var $next = $imageList.find('.dg-next');
                var $listWrap = $imageList.find('.dg-list-wrap');
                var $list = $imageList.find('.dg-list');
                var $images = $imageList.find('.dg-image');

                var listHeight = 0;
                var listLeft = 0;
                var nowIndex = 0;
                initLayout();

                function initLayout() {
                    listHeight = $listWrap.width() / 5;
                    $listWrap.height(listHeight);
                    $list.css({ position: 'absolute' });
                    $images.css({ height: listHeight, width: listHeight })
                }

                initZoom();
                function initZoom() {
                    $mark = $main.find('.dg-image .dg-mark');
                    $zoom = $main.find('.dg-zoom img');
                    $main.on('mousemove', function (e) {
                        var mX = e.pageX || 0;
                        var mY = e.pageY || 0;
                        var boxX = $(this).offset().left;
                        var boxY = $(this).offset().top;
                        var left = mX - boxX;
                        var top = mY - boxY;

                        var height = $mark.outerHeight(true);
                        var width = $mark.outerWidth(true);
                        if (width / 2 >= left) {
                            left = 0;
                        } else {
                            left = left - width / 2;
                        }

                        if (height / 2 >= top) {
                            top = 0;
                        } else {
                            top = top - height / 2;
                        }

                        if (top >= height) {
                            top = height;
                        }

                        if (left >= width) {
                            left = width;
                        }

                        $mark.css({ left: left, top: top });
                        $zoom.css({ left: -left * 2, top: -top * 2 });
                    });
                }
                function changeImage(index) {
                    var image = $images.eq(index).find('img').attr('data-src');
                    if (!image) image = $images.eq(index).find('img').attr('src');
                    $main.find('.dg-image img').attr('src', image);
                    $main.find('.dg-zoom img').attr('src', image);
                    $images.removeClass('active');
                    $images.eq(index).addClass('active');
                    nowIndex = index;
                }

                function listMove(index) {
                    var left = 0 - ((index - 2) * listHeight);
                    if (index < 3 || $images.length < 5) left = 0;
                    if (($images.length - index) <= 3 && $images.length > 5) left = 0 - (($images.length - 5) * listHeight);
                    $list.css('left', left);
                }

                changeImage(nowIndex);
                $images.each(function (index) {
                    $(this).on(event, function () {
                        changeImage(index);
                        listMove(nowIndex);
                    })
                })

                $prev.on('click', function () {
                    nowIndex = (nowIndex > 0) ? nowIndex - 1 : $images.length - 1;
                    changeImage(nowIndex);
                    listMove(nowIndex);
                })

                $next.on('click', function () {
                    nowIndex = (nowIndex < $images.length - 1) ? nowIndex + 1 : 0;
                    changeImage(nowIndex);
                    listMove(nowIndex);
                })

                $(window).resize(function () {
                    initLayout();
                    listMove(nowIndex);
                })
            });
        }

        var tabCard = function (ele, event) {
            $(ele).each(function () {
                var $tabAction = $(this).find('.dg-tab-action');
                var $tabContent = $(this).find('.dg-tab-content');
                $tabAction.on(event, function () {
                    $tabAction.removeClass('active');
                    $tabContent.removeClass('active');
                    $(this).addClass('active');
                    $tabContent.eq($(this).index()).addClass('active');
                });
            })
        }

        var weightFixed = function (ele) {
            var $weight = $(ele);
            $weight.each(function () {               
                var $siderTop = $(".dg-layout-sider").offset().top;
                var $fromHeight = $('.search-product').outerHeight(true);
                var $sildHeight = $(".dg-weight-category-menu").outerHeight(true);
                var $allHeight = $siderTop + $sildHeight + $fromHeight;

                var $heardTop = $(".dg-layout-wrapper").offset().top;
                var $bodyHeight = $(".dg-layout-wrapper").outerHeight(true);
                var $hotHeight = $(".dg-weight-hot-product").outerHeight(true);

                var $bodyAllHeight = $heardTop + $bodyHeight - $hotHeight - 10;

                $(window).resize(function () {
                    if ($(window).width() < 996) {
                        $(ele).removeClass("dg-fixed");
                    }
                });

                if ($(window).scrollTop() > $allHeight && $(window).scrollTop() < $bodyAllHeight) {
                    $('.dg-layout-sider').removeClass("product-a-b-20");
                    $(ele).addClass("dg-fixed");
                } else if ($(window).scrollTop() >= $bodyAllHeight) {
                    $('.dg-layout-sider').addClass("product-a-b-20");
                    $(ele).removeClass("dg-fixed");
                } else {
                    $('.dg-layout-sider').removeClass("product-a-b-20");
                    $(ele).removeClass("dg-fixed");
                }
                isFloat();
                function isFloat() {

                    $(window).on('scroll', function () {                       
                        $sildHeight = $('.dg-weight-category-menu').outerHeight(true);
                        $bodyHeight = $(".dg-layout-wrapper").outerHeight(true);
                        $allHeight = $siderTop + $sildHeight + $fromHeight;                        
                        $hotHeight = $(".dg-weight-hot-product").outerHeight(true);
                        $bodyAllHeight = $heardTop + $bodyHeight - $hotHeight - 10;


                        if ($(window).scrollTop() > $allHeight && $(window).scrollTop() < $bodyAllHeight) {
                            $('.dg-layout-sider').removeClass("product-a-b-20");
                            $(ele).addClass("dg-fixed");
                        } else if ($(window).scrollTop() >= $bodyAllHeight) {
                            $('.dg-layout-sider').addClass("product-a-b-20");
                            $(ele).removeClass("dg-fixed");
                        } else {
                            $('.dg-layout-sider').removeClass("product-a-b-20");
                            $(ele).removeClass("dg-fixed");
                        }
                    });
                }
            });
        }

        $(function () {
            tabCard('.dg-tab', 'click');
            weightCategoryMenu('.dg-weight-category-menu', 'click', true);
            productImagesSlider('.dg-product-images-slider', 'click');
            weightFixed('.dg-weight-hot-product');
			
            var trackCategoryStatus = function (ele) {
                var $parent_ele = $(ele);
                var currUrl = window.location.pathname;
                var links = $parent_ele.find('.dg-list-items a');

                links.each(function () {
                    var url = $(this).attr('href');
                    if (currUrl.indexOf(url) !== -1) {
                        var _this = $(this);
                        _this.parents('li.dg-item').addClass("active");
                        _this.closest("span").addClass("current-parent");
                        _this.closest('li.dg-item').addClass("active");
                    }
                });

            }

            trackCategoryStatus('.dg-weight-category-menu');
        });

    }());
</script>
<style>
  .breadcrumb li a, .breadcrumb li, .breadcrumb{
  	display:inline;
  }
</style>












<section class="dg-products-section">

    <div class="container">

        <div class="dg-layout-wrapper dg-sider-left">

            <div class="dg-layout-main">

                <div class="row">
                    <div class="col-sm-7">

                        <div class="dg-product-images-slider">
                            <div class="dg-image-main">
                                <div class="dg-image">
                                    
                                    <img src="{{asset('productimages')}}/{{$product->productimages[0]->image}}"
                                        alt="">
                                    <div class="dg-mark"></div>
                                </div>
                                <div class="dg-zoom">
                                    <img src="{{asset('productimages')}}/{{$product->productimages[0]->image}}"
                                        alt="{{$product->name}}">
                                </div>
                            </div>
                            <div class="dg-image-list">
                                <div class="dg-list-wrap">
                                    <ul class="dg-list">
                                        @foreach ($product->productimages as $item)
                                            
                                       
                                        <li class="dg-image active"><img data-src="{{ asset('productimages')}}/{{$item->image}}"
                                                src="{{ asset('productimages')}}/{{$item->image}}?imageView2/1/w/100/w/100"
                                                alt="KY22018K"></li>
                                        @endforeach
										                                        
                                    </ul>
                                </div>
                                <button class="dg-button dg-prev"><i class="fa fa-arrow-left"></i></button>
                                <button class="dg-button dg-next"><i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-5">
                        <div class="dg-product-description">
                            <div class="dg-des-header">
                                <h1 class="dg-des-title">{{$product->name}}</h1>
                                <hr>
                            </div>
                            <div class="dg-des-content">
                                <div class="dg-des-price">
									                                </div>
                                <hr>
                            </div>
                            <div class="dg-des-buttons">                                
                                <a href="../contact-us.html" class="dg-btn dg-theme">Send inquiry</a>
                            </div>
                            <div class="dg-des-buttons">
                                <div class="dg-des-share">
                                    <div class="addthis_inline_share_toolbox_fq1z"></div>
                                    <script type="text/javascript" src="{{ asset('/assets/s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b9ed729183ea96')}}"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
				                <div class="dg-layout-content">
                    <div class="dg-tab">
                        <div class="dg-tab-nav">
                            <div class="dg-tab-action active">Product Details</div>
                                                        <div class="dg-tab-action">video</div>
						  
						  
						  <!--
							                            <div class="dg-tab-action">Parameter</div>
													-->
                        </div>
                        <div class="dg-tab-panel">
                            <div class="dg-tab-content active">
                                {{$product->detail}}                      </div>
                            
                                                        <div class="dg-tab-content">
                                                            <iframe style="width:100%;height:400px" src="{{$product->video}}" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                                                            
                                                            </div>
						
							                            <div class="dg-tab-content">
                                                            </div>
                            						
                       
					   </div>
                    </div>

                </div>
						   </div>


            <div class="dg-layout-sider">

				                <div class="mg-b-10 search-product">
                    <div>
                       <form action="http://inquiry.digoodcms.com/api/keyobbq" method="post">
                            <input type="search" placeholder="Search..." name="keyword">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
								                <div class="dg-side-weight dg-weight-category-menu">
                    <h2 class="dg-sider-title">CATEGORYS</h2>
										                    <ul class="dg-list-items">						
												
																		
						
                        <li class="dg-item">
						
                            <span><a href="{{URL("products/Category/1")}}">Charcoal Grills</a> <i class="fa fa-sort-down"></i></span>
							
                            <ul class="dg-sub-items">
																								                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/1")}}">Kettle Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/2")}}">Trolley Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/3")}}">Barrel Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/4")}}">Portable Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/5")}}">Pedestal Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/6")}}">Rotisserie</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/7")}}">Tripod Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/8")}}">Foldable Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/9")}}">Balcony Grills</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/10")}}">Instant Grills</a></span></li>
																 
                            </ul>
                        </li>
																		
																		
						
                        <li class="dg-item">
						
                            <span><a href="{{URL("products/Category/2")}}">Gas Grills</a> <i class="fa fa-sort-down"></i></span>
							
                            <ul class="dg-sub-items">
																								                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/11")}}">Plancha</a></span></li>
																 
                            </ul>
                        </li>
																		
																		<li class="dg-item">
							<span><a href="{{URL("products/Category/3")}}">Electric Grills</a></span>
						</li>
																		
																		<li class="dg-item">
							<span><a href="{{URL("products/Category/4")}}">Smoker</a></span>
						</li>
																		
																		<li class="dg-item">
							<span><a href="{{URL("products/Category/5")}}">Pellet Grills</a></span>
						</li>
																		
																		<li class="dg-item">
							<span><a href="{{URL("products/Category/6")}}">Kamado</a></span>
						</li>
																		
																		<li class="dg-item">
							<span><a href="{{URL("products/Category/7")}}">Fire Pit</a></span>
						</li>
																		
																		<li class="dg-item">
							<span><a href="{{URL("products/Category/8")}}">Pizza Oven</a></span>
						</li>
																		
																		
						
                        <li class="dg-item">
						
                            <span><a href="{{URL("products/Category/9")}}">BBQ Accessories</a> <i class="fa fa-sort-down"></i></span>
							
                            <ul class="dg-sub-items">
																								                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/12")}}">BBQ Tool Set</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/13")}}">BBQ Grid</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/14")}}">BBQ Pan</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/15")}}">BBQ Glove</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/16")}}">BBQ Skewer</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/17")}}">Thermometer</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/18")}}">BBQ Charcoal Oven</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/19")}}">BBQ Needle</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/20")}}">BBQ Net</a></span></li>
                                                                                                                                                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/21")}}">BBQ Grill</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/22")}}">BBQ BAMBOO STICK</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/23")}}">BBQ BEACH</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/24")}}">BBQ BURSH</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/25")}}">BBQ NEW OVENr</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/26")}}">BBQ POT</a></span></li>
                                                                                                                                                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/27")}}">Starter</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/28")}}">Air Blower</a></span></li>
																																                                <li class="dg-item"><span><a href="{{URL("products/Subcategory/29")}}">BBQ Mesh</a></span></li>
																																                                {{-- <li class="dg-item"><span><a href="{{URL("products/Subcategory/21")}}">Others</a></span></li> --}}
																 
                            </ul>
                        </li>
																		
																		<li class="dg-item">
							<span><a href="{{URL("products/Category/10")}}">Kerosene Cooking Stoves</a></span>
						</li>
												                    </ul>
					                </div>
				
				                <div class="dg-side-weight dg-weight-hot-product">
                    <h2 class="dg-sider-title">HOT PRODUCT</h2>
                    <ul class="dg-list-items">
                        @foreach ($sideproducts as $item)
                            
                       
																								                        <li class="dg-item">
							                            <div class="dg-image">
								<a href="{{URL("products/detail")}}/{{$item->id}}" title="{{$item->name}}">
									<img alt="Fired Pizza Oven Dome Pizza Oven" src="{{asset('productimages')}}/{{$item->productimages[0]->image}}" alt="{{$item->name}}" class="src">
								</a>
                            </div>
							                            <div class="dg-content">
                                <h3 class="dg-title"><a href="{{URL("products/detail")}}/{{$item->id}}">{{$item->name}}</a></h3>
                            </div>
                        </li>
                        @endforeach
						
                    </ul>
                </div>
				            </div>

        </div>

    </div>


</section>
<style>
    input[type="text"], input[type="email"], input[type="tel"], input[type="number"], input[type="password"], input[type="radio"], input[type="checkbox"], textarea, select{
    border: 1px solid #ccc !important;
}
</style>
<!-- FOOTER -->
@stop