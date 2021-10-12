@extends('layouts/master')
{{-- Page content --}}
@section('content')
    <img src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1578276816_image_1575879170_banner-.jpg_%3b%20filename_%3dutf-8%27%27image_1578276816_image_1575879170_banner-.jpg') }}" class="visbile-xs" alt="banner"'/>

    <section class="main-slider hidden-xs">
        <style>
            .main-slider .slider-btn-center {
                background:#e70012;
                padding:10px 20px;
                color:white !important;
                top:150px;
                position: relative;
            }

            @media screen and (min-width:767px) {
                .visbile-xs {
                    display: none;
                }
            }

            @media screen and (max-width:767px) {
                .hidden-xs {
                    display: none !important;
                }
            }

            .main-slider .owl-nav i {
                top: 55% !Important;
                color: white;
            }

            .main-slider .owl-prev:hover,
            .main-slider .owl-next:hover {
                background: #E70012 !important;
                color: white
            }

            .main-slider .owl-prev,
            .main-slider .owl-next {
                background: rgba(245, 245, 245, 0.3);
            }

            .main-slider .item::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                /*  background-color: rgba(0,100,100,.1);	*/
            }

            .main-slider .item {
                position: relative;
            }

            .main-slider .image-box {
                padding-bottom: 40% !important;
                background-position: center top;
                background-size: 100% auto;
                background-repeat: no-repeat;
            }

            .main-slider .item a.image-link {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
            }

            .main-slider .item .container {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -60%);
                display: none;
            }

            .main-slider .owl-nav {
                margin: 0;
            }

            .main-slider .owl-nav .owl-prev,
            .main-slider .owl-nav .owl-next {
                position: absolute;
                top: 50%;
                width: 2vw;
                height: 2vw;
                margin-top: -1vw;
                line-height: 2vw;
                text-align: center;
                padding: 0;
                padding: 24px;
            }

            .main-slider .owl-nav .owl-prev {
                left: 10px;

            }

            .main-slider .owl-nav .owl-next {
                right: 10px;
            }

            .main-slider .owl-dots {
                position: absolute;
                bottom: 10px;
                width: 100%;
            }

            .main-slider .content {
                font-size: 1vw;
                display: inline-block;
            }

            .main-slider .content h2 {
                font-size: 2em;
                line-height: 1.5;
            }

            .main-slider .content h3 {
                font-size: 1.2em;
                line-height: 1.5;
            }

            .main-slider .content p {
                font-size: 1.2em;
                line-height: 1.5;
            }

            .main-slider .buttons {
                margin-left: -5px;
                margin-right: -5px;
                margin-top: 30px;
                position: relative;
                z-index: 1;
            }

            .main-slider .buttons a {
                margin-left: 5px;
                margin-right: 5px;
            }

            .content.dark-box {
                padding-left: 40%;
            }

            @media (max-width:768px) {
                .main-slider .item .container {
                    width: 90%;
                }
            }

            @media (max-width:560px) {

                .main-slider .item .container {
                    position: relative;
                    top: auto;
                    left: auto;
                    transform: translate(0%);
                    height: 90vw;
                }

                .main-slider .content .text-white {
                    color: #333;
                    margin-bottom: 10px;
                }

                .main-slider .content {
                    font-size: 3vw;
                    text-align: left;
                    margin-top: 6vw;
                }

                .main-slider .item .image-box {
                    padding-bottom: 50%;
                    background-size: auto 100%;
                }

                .main-slider .owl-dots .owl-dot span {
                    width: 2.5vw;
                    height: 2.5vw;
                }

                .main-slider .site-button {
                    border: 3px solid #e86710;
                    color: #e86710;
                }

                .main-slider .site-button:hover {
                    color: #fff;
                }

                .main-slider .owl-nav .owl-prev,
                .main-slider .owl-nav .owl-next {
                    background-color: transparent;
                    border-color: transparent;
                }
            }

            .main-slider .content p,
            .main-slider .content h2,
            .main-slider .content h3 {
                text-shadow: none !important;
            }
        </style>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="image-box" style="background-image: url({{ asset('/assets/v4-upload.goalsites.com/377/image_1579250894_keyong-banner-1.jpg_%3b%20filename_%3dutf-8%27%27image_1579250894_keyong-banner-1.jpg')}} );display:block;"></div>
                <a href="#" class="image-link"></a>
                <div class="container">
                    <div class="content">
                        <h2 class="text-white"></h2>
                        <h3 class="text-white"></h3>
                        <p class="text-white"></p>
                        <a href="about-us.html" class="image-link"></a>
                        <div class="buttons">
                            <a href="javascript:;" class="site-button-secondry slider-btn-center" data-toggle="modal"
                               data-target="#inquiryModal">Read More</a>
                            <a class="site-button-secondry slider-btn-center" href="about-us.html" style="" class="site-button slider-btn-left">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="image-box owl-lazy" data-src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1579250904_keyong-banner-2.jpg_%3b%20filename_%3dutf-8%27%27image_1579250904_keyong-banner-2.jpg') }}"></div>
                <a href="#" class="image-link"></a>
                <div class="container">
                    <div class="content">
                        <h2 class="text-white"></h2>
                        <h3 class="text-white"></h3>
                        <p class="text-white"></p>
                        <a href="about-us.html" class="image-link"></a>
                        <div class="buttons">
                            <a href="javascript:;" class="site-button-secondry slider-btn-center" data-toggle="modal"
                               data-target="#inquiryModal">Read More</a>
                            <a class="site-button-secondry slider-btn-center" href="about-us.html" style="right:440px;" class="site-button slider-btn-left">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <script>
        $('.main-slider .owl-carousel').owlCarousel({
            autoplay: false,
            loop: true,
            margin: 0,
            lazyLoad: true,
            autoplay: true,
            nav: true,
            items: 1,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        })
    </script>

    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        a:focus,
        a:hover {
            color: #23527c;
            text-decoration: underline;
        }

        a:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        h5 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h5 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h5 {
            font-size: 14px;
        }

        p {
            margin: 0 0 10px;
        }

        .text-center {
            text-align: center;
        }

        .col-md-12,
        .col-md-4,
        .col-sm-6,
        .col-xs-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-xs-12 {
            float: left;
        }

        .col-xs-12 {
            width: 100%;
        }

        @media (min-width:768px) {
            .col-sm-6 {
                float: left;
            }

            .col-sm-6 {
                width: 50%;
            }
        }

        @media (min-width:992px) {

            .col-md-12,
            .col-md-4 {
                float: left;
            }

            .col-md-12 {
                width: 100%;
            }

            .col-md-4 {
                width: 33.33333333%;
            }
        }

        /*! CSS Used from: //v4-assets.goalsites.com/peng/theme/22341427/v1/assets/css/new-style.css */
        h5 {
            font-family: 'Montserrat', sans-serif;
            margin: 0px;
            padding: 0px;
            font-weight: 700;
            color: #242424;
            text-transform: uppercase;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        p {
            font-family: 'Lato', sans-serif;
            font-size: 15px;
            color: #575757;
            margin: 0px;
            padding: 0px;
            line-height: 30px;
        }

        p.line-height26 {
            line-height: 26px;
        }

        a:hover {
            text-decoration: none;
        }

        .marbtm20 {
            margin-bottom: 20px;
        }

        .read-more-link {
            font-size: 15px;
            color: red !important;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
        }

        .service-column {
            padding: 30px 15px;
            transition: all .3s ease-out;
            float: left;
        }

        .service-column .icons {
            width: 78px;
            height: 78px;
            display: inline-block;
        }

        .service-column h5 {
            font-size: 16px;
            margin: 5px 0px 20px;
        }

        .service-column p span {
            font-weight: 700;
        }

        .service-column:hover * {
            color: white !Important;
        }

        .service-column:hover {
            background: red !important;
            transition: all .3s ease-in;
            color: white !Important
        }

        .service-column:hover a {
            text-decoration: none;
        }

        .service-column:hover p,
        .service-column:hover h5,
        .service-column:hover .read-more-link {
            color: #000;
        }

        .service-manufactureicon {
            background: url({{ asset('/assets/v4-assets.goalsites.com/peng/theme/22341427/v1/assets/images/manufacture-icon.png') }}) no-repeat 0px 0px;
        }

        .service-cncicon {
            background: url({{ asset('/assets/v4-assets.goalsites.com/peng/theme/22341427/v1/assets/images/cnc-icon.png') }} ) no-repeat 0px 0px;
        }

        .service-chemicalicon {
            background: url({{ asset('/assets/v4-assets.goalsites.com/peng/theme/22341427/v1/assets/images/chemical-icon.png')}}) no-repeat 0px 0px;
        }

        .service-energyicon {
            background: url({{ asset('/assets/v4-assets.goalsites.com/peng/theme/22341427/v1/assets/images/energy-icon.png')}}) no-repeat 0px 0px;
        }

        .service-oilicon {
            background: url({{ asset('/assets/v4-assets.goalsites.com/peng/theme/22341427/v1/assets/images/oil-icon.png')}}) no-repeat 0px 0px;
        }

        .service-materialicon {
            background: url({{ asset('/assets/v4-assets.goalsites.com/peng/theme/22341427/v1/assets/images/material-icon.png') }} ) no-repeat 0px 0px;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .service-column p {
                min-height: 80px;
            }
        }
    </style>

    <!-- About_Compney -->
    <!-- About_Compney -->
    <section id="about_us" class="padding ptb-xs-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-12 col-lg-6 about-left">
                    <div class="sect-title mb-40 mb-xs-10">
                        <h2>Yongkang Mengda Industry&Trading Co.,Ltd</h2>
                    </div>
                    <p>
                        Yongkang Mengda Industry&Trading Co.,Ltd,was established on 2003.Is located in the hardware capital of CHINA-YONGKANG.And is a professional manufacturer of stainless steel tools and chrome series, including bbq grill,bbq  oven and bbq needles.Our high quality production are all appreciated by vast number of new and old clients. Is mainly exported to Europe,America,The middle East,South America,Southeast Asia and supermarkets in abroad.Due to the combination of high quality standards,fashionable and practicality,our products are approved and satisfied within overseas customers.                    <button style="display:block;margin-top:20px;background:red !important;float:right"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   onclick="window.location.href='about-us.html'" class="btn"><a href="about-us.html"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 style="color:white">Read More >></a></button>
                    </p>
                    <div class="row mt-30">


                    </div>
                </div>

                <div class="col-md-12 col-lg-6 about-left">

                    <iframe style="width:100%;height:400px" src="https://www.youtube.com/embed/uULbdR3XiAw" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                </div>

            </div>
        </div>
    </section>
    <!-- About_Compney_End -->

    <style>
        @media screen and (max-width:767px) {
            .our_advantage .col-md-3.column img {
                max-width: 65px !important;
            }
        }
    </style>
    <section style="padding:60px 0" class="our_advantage">
        <div class="container">
            <div><div class="row clearfix">
                    <div class="col-md-12 column">
                        <p style="text-align: center;"><span style="font-size:30px;display:block"><span style="color:#e74c3c;">Our</span> <span style="color:#000000;"><strong>advantage</strong></span></span><span class="title_bdr"><i class="ion-more"> </i></span></p>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898341_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898341_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:16px;"><span lang="EN-US"><span calibri="">With over <span style="color:#ff0000;">3,000</span> models and <span style="color:#ff0000;">1,500</span> square meter big showroom.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592472714_DSC_0185.jpg_%3b%20filename_%3dutf-8%27%271592472714_DSC_0185.jpg') }}" style="width: 400px; height: 400px;" /></div>
                        </div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:16px;"><span lang="EN-US"><span calibri="">Strong <span style="color:#ff0000;">R&D</span> ability with over <span style="color:#ff0000;">30</span> engineers.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592472827_%e5%be%ae%e4%bf%a1%e6%88%aa%e5%9b%be_20200618154725.jpg_%3b%20filename_%3dutf-8%27%271592472827_%25E5%25BE%25AE%25E4%25BF%25A1%25E6%2588%25AA%25E5%259B%25BE_20200618154725.jpg') }}" style="width: 400px; height: 400px;" /></div>
                        </div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:14px;"><span lang="EN-US"><span calibri="">Complete supporting advanced manipulator <span style="color:#ff0000;">automatic</span> production line.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592472941_QQ%e5%9b%be%e7%89%8720170912110432.jpg_%3b%20filename_%3dutf-8%27%271592472941_QQ%25E5%259B%25BE%25E7%2589%258720170912110432.jpg') }}" style="width: 400px; height: 400px;" /></div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:16px;"><span lang="EN-US"><span calibri=""><span style="color:#ff0000;">15</span>&nbsp;professional <span style="color:#ff0000;">QC</span> with more than <span style="color:#ff0000;">15</span> years <span style="color:#ff0000;">AQL&nbsp;Lv.2</span> experience.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592473105_%e5%be%ae%e4%bf%a1%e6%88%aa%e5%9b%be_20200618163207.jpg_%3b%20filename_%3dutf-8%27%271592473105_%25E5%25BE%25AE%25E4%25BF%25A1%25E6%2588%25AA%25E5%259B%25BE_20200618163207.jpg') }}" style="width: 400px; height: 400px;" /></div>
                        </div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:14px;"><span lang="EN-US"><span calibri="">High <span style="color:#ff0000;">cost-effective</span> based on strict quality control, management and crafts.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592473124_cost-savings-700x315.jpg_%3b%20filename_%3dutf-8%27%271592473124_cost-savings-700x315.jpg') }}" style="width: 400px; height: 400px;" /></div>
                        </div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:14px;"><span lang="EN-US"><span calibri="">Over <span style="color:#ff0000;">$50,000,000</span> annual output valve, and <span style="color:#ff0000;">$30,000,000</span> annual sales value.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592474172_output-value.jpg_%3b%20filename_%3dutf-8%27%271592474172_output-value.jpg') }}" style="width: 400px; height: 400px;" /></div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:16px;"><span lang="EN-US"><span calibri="">Over <span style="color:#ff0000;">99%</span> on time delivery rate.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592474732_delivery-on-time.jpg_%3b%20filename_%3dutf-8%27%271592474732_delivery-on-time.jpg') }}" style="width: 400px; height: 400px;" /></div>
                        </div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:14px;"><span lang="EN-US"><span calibri="">Well-known third party <span style="color:#ff0000;">BSCI</span>, <span style="color:#ff0000;">SEDEX</span>, <span style="color:#ff0000;">ISO</span>, <span style="color:#ff0000;">GS</span>, etc qualified factory.</span></span></span></p>
                            </div>
                        </div>

                        <div class="row clearfix"><img alt="" src="{{ asset('/assets/v4-upload.goalsites.com/377/1593318310_factory-audit.jpg_%3b%20filename_%3dutf-8%27%271593318310_factory-audit.jpg') }}" style="height: 350px !important; width: 350px;" /></div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="row clearfix" style="margin-top:10px;">
                            <div class="col-md-3 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1576898409_test%20keyong.jpg_%3b%20filename_%3dutf-8%27%271576898409_test%2520keyong.jpg') }}" /></div>

                            <div class="col-md-9 column">
                                <p><span style="font-size:16px;">Products comply with <span style="color:#ff0000;">GS/EN1860/ FSC/LFGB/DGCCRF</span>&nbsp;standard.</span></p>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-12 column"><img alt="140x140" src="{{ asset('/assets/v4-upload.goalsites.com/377/1592475274_%e5%be%ae%e4%bf%a1%e6%88%aa%e5%9b%be_20200618181050.jpg_%3b%20filename_%3dutf-8%27%271592475274_%25E5%25BE%25AE%25E4%25BF%25A1%25E6%2588%25AA%25E5%259B%25BE_20200618181050.jpg') }}" style="height: 400px; width: 400px;" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:40px">
        <div class="container">
            <iframe class="xx2" frameborder="0" height="500px"
                    src="https://zao.taobao.com/vrimage/preview?userId=3071451764&amp;bizId=25707516&amp;type=cgs"
                    width="100%"></iframe>
        </div>
    </section>


    <style>
        .kkv * {
            color: white !Important
        }

        #feadback {
            background: url({{ asset('/assets/v4-upload.goalsites.com/377/1576059263_bbq.jpg_%3b%20filename_%3dutf-8%27%271576059263_bbq.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            -webkit-backface-visibility: hidden;
            position: relative;
        }
    </style>
    <!--fuctuche_box_End-->
    <section id="our_Process" class="padding ptb-xs-40 process_section lazy" data-original="//v4-upload.goalsites.com/377/image_1574758148_未标题-10-(1).png">
        <div class="container">
            <div class="row text-center mb-40 mb-xs-10">
                <div class="col-lg-6 offset-lg-3 sect-title">
                    <h2><span>Our</span> Workshop</h2>
                    <span class="title_bdr"><i class="ion-more"></i></span>

                </div>
            </div>
            <div class="row owl-carousel owl-theme kkv">

                <div class="item">
                    <img class="owl-lazy" data-src="//v4-upload.goalsites.com/377/image_1593331866_opening-tools.gif" />
                    <p class="wt" style="color:white"> <div style="text-align: center;"><strong><span style="font-size:24px;">Raw Material Cutting</span></strong></div>
                    </p>
                </div>

                <div class="item">
                    <img class="owl-lazy" data-src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1593335379_CNC-Laser-Cutting-(1).gif_%3b%20filename_%3dutf-8%27%27image_1593335379_CNC-Laser-Cutting-%25281%2529.gif') }}" />
                    <p class="wt" style="color:white"> <div style="text-align: center;"><span style="font-size:24px;"><strong>CNC Laser Cutting</strong></span></div>
                    </p>
                </div>

                <div class="item">
                    <img class="owl-lazy" data-src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1593334498_oil-Stamping.gif_%3b%20filename_%3dutf-8%27%27image_1593334498_oil-Stamping.gif') }}" />
                    <p class="wt" style="color:white"> <div style="text-align: center;"><strong><span style="font-size:24px;">Stretching</span></strong></div>
                    </p>
                </div>

                <div class="item">
                    <img class="owl-lazy" data-src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1593336249_Bending.gif_%3b%20filename_%3dutf-8%27%27image_1593336249_Bending.gif') }}" />
                    <p class="wt" style="color:white"> <div style="text-align: center;"><span style="font-size:24px;"><strong>Bending</strong></span></div>
                    </p>
                </div>

                <div class="item">
                    <img class="owl-lazy" data-src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1593336787_Robot-Welding.gif_%3b%20filename_%3dutf-8%27%27image_1593336787_Robot-Welding.gif') }}" />
                    <p class="wt" style="color:white"> <div style="text-align: center;"><strong><span style="font-size:24px;">Robot Welding</span></strong></div>
                    </p>
                </div>

                <div class="item">
                    <img class="owl-lazy" data-src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1593337081_Surface-Spraying.gif_%3b%20filename_%3dutf-8%27%27image_1593337081_Surface-Spraying.gif') }}" />
                    <p class="wt" style="color:white"> <div style="text-align: center;"><strong><span style="font-size:24px;">Surface Spraying</span></strong></div>
                    </p>
                </div>

                <div class="item">
                    <img class="owl-lazy" data-src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1593337345_Stamping.gif_%3b%20filename_%3dutf-8%27%27image_1593337345_Stamping.gif') }}" />
                    <p class="wt" style="color:white"> <div style="text-align: center;"><strong><span style="font-size:24px;">Stamping</span></strong></div>
                    </p>
                </div>




            </div>
        </div>
    </section>


    <section class="padding ptb-xs-40 top_about gray-bg">
        <div class="container">
            <div class="row mb-30 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h4 class="bigger_font" style="margin-bottom:0">We always provides collaborative solutions to your business</h4>
                    <span class="title_bdr"><i class="ion-more"></i></span>

                </div>
            </div>

            <div class="row">


                <div class="col-lg-3 mb-sm-30 mb-xs-30">
                    <div class="proje_paret">
                        <div class="box_pic" style="position: relative;">
                            <figure>
                                <img src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1567739045_YH280183.jpg') }}" alt="Portable Grill">
                            </figure>
                            <div class="text-boxhover">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span>Portable Grill</span>
                                    <span style="    float: right;top: 10px;left:-10px;position: relative;">>></span>

                                </div>
                            </div>
                        </div>
                        <!--#484848 !important;-->
                        <style>
                            .show-hov:before {
                                content: '';
                                background: #484848cc;
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                display: block;
                                top: 0;
                                left: 0;
                            }
                        </style>
                        <div class="show-hov" style="background-repeat: no-repeat; background:url('{{ asset('/assets/v4-upload.goalsites.com/377/image_1567739045_YH280183.jpg')}} ') !important;background-size: cover !important;">
                            <div class="hover_title" style="position:absolute;">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span style="color:white">Portable Grill</span>

                                </div>
                                <p style="color:white">
                                    <!--,'sub_string:180'-->
                                    <span style="line-height:1.8;"><span style="font-size:16px;"><span style="font-family:等线;"><span style="font-family:等线;">Easy&nbsp;Set&nbsp;up </span></span><br />
<span style="font-family:等线;"><span style="font-family:等线;">Large&nbsp;Grilling&nbsp;Area </span></span><br />
<span style="font-family:等线;"><span style="font-family:等线;">Portable&nbsp;and&nbsp;Foldable</span></span><br />
<span style="font-family:等线;"><span style="font-family:等线;">Portable&nbsp;BBQ&nbsp;Grill&nbsp;for&nbsp;Camping</span></span><br />
<span style="font-family:等线;"><span style="font-family:等线;">Necessary&nbsp;Outdoor&nbsp;Tool </span></span></span></span><br />
                                    &nbsp;                            </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 mb-sm-30 mb-xs-30">
                    <div class="proje_paret">
                        <div class="box_pic" style="position: relative;">
                            <figure>
                                <img src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1567738612_KY8181FP1.jpg') }}" alt="Fire Pit">
                            </figure>
                            <div class="text-boxhover">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span>Fire Pit</span>
                                    <span style="    float: right;top: 10px;left:-10px;position: relative;">>></span>

                                </div>
                            </div>
                        </div>
                        <!--#484848 !important;-->
                        <style>
                            .show-hov:before {
                                content: '';
                                background: #484848cc;
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                display: block;
                                top: 0;
                                left: 0;
                            }
                        </style>
                        <div class="show-hov" style="background-repeat: no-repeat; background:url('{{ asset('/assets/v4-upload.goalsites.com/377/image_1567738612_KY8181FP1.jpg') }} ') !important;background-size: cover !important;">
                            <div class="hover_title" style="position:absolute;">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span style="color:white">Fire Pit</span>

                                </div>
                                <p style="color:white">
                                    <!--,'sub_string:180'-->
                                    <span style="line-height:1.8;"><span style="font-size:16px;"><span style="font-family:等线;"><span style="font-family:等线;">Multipurpose </span> </span><br />
<span style="font-family:等线;"><span style="font-family:等线;">Safe&nbsp;And&nbsp;Secure</span></span><br />
<span style="font-family:等线;"><span style="font-family:等线;">Durable &nbsp;Design</span></span><br />
<span style="font-family:等线;"><span style="font-family:等线;">Easily&nbsp;Assembled</span></span></span></span>                            </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 mb-sm-30 mb-xs-30">
                    <div class="proje_paret">
                        <div class="box_pic" style="position: relative;">
                            <figure>
                                <img src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1567738719_KY85602.jpg') }}" alt="Smoker Grill">
                            </figure>
                            <div class="text-boxhover">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span>Smoker Grill</span>
                                    <span style="    float: right;top: 10px;left:-10px;position: relative;">>></span>

                                </div>
                            </div>
                        </div>
                        <!--#484848 !important;-->
                        <style>
                            .show-hov:before {
                                content: '';
                                background: #484848cc;
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                display: block;
                                top: 0;
                                left: 0;
                            }
                        </style>
                        <div class="show-hov" style="background-repeat: no-repeat; background:url('{{ asset('/assets/v4-upload.goalsites.com/377/image_1567738719_KY85602.jpg') }} ') !important;background-size: cover !important;">
                            <div class="hover_title" style="position:absolute;">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span style="color:white">Smoker Grill</span>

                                </div>
                                <p style="color:white">
                                    <!--,'sub_string:180'-->
                                    <span style="line-height:1.8;"><span style="font-size:16px;">Durable&nbsp;Charcoal&nbsp;Smoker<br />
Plated&nbsp;steel&nbsp;cooking&nbsp;grates<br />
Rust&nbsp;resistant&nbsp;metal&nbsp;legs<br />
Built-in&nbsp;lid&nbsp;thermometer</span></span>                            </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 mb-sm-30 mb-xs-30">
                    <div class="proje_paret">
                        <div class="box_pic" style="position: relative;">
                            <figure>
                                <img src="{{ asset('/assets/v4-upload.goalsites.com/377/image_1573786064_thumPic.jpg') }}" alt="Kettle Grill">
                            </figure>
                            <div class="text-boxhover">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span>Kettle Grill</span>
                                    <span style="    float: right;top: 10px;left:-10px;position: relative;">>></span>

                                </div>
                            </div>
                        </div>
                        <!--#484848 !important;-->
                        <style>
                            .show-hov:before {
                                content: '';
                                background: #484848cc;
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                display: block;
                                top: 0;
                                left: 0;
                            }
                        </style>
                        <div class="show-hov" style="background-repeat: no-repeat; background:url('{{ asset('/assets/v4-upload.goalsites.com/377/image_1573786064_thumPic.jpg')}}') !important;background-size: cover !important;">
                            <div class="hover_title" style="position:absolute;">
                                <div class="boda-cols">
                                    <span class="icon_bg"><i class="ion-ios-bolt-outline"></i></span>
                                    <span style="color:white">Kettle Grill</span>

                                </div>
                                <p style="color:white">
                                    <!--,'sub_string:180'-->
                                    <span style="line-height:1.8;"><span style="font-size:16px;">Enamel coated<br />
Side handle and wheels for in-<br />
creased portability<br />
Ash catcher Compact design</span></span>                            </p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


    <section id="service" class="padding ptb-xs-40">
        <div class="container">
            <div class="row text-center mb-40 mb-xs-10">
                <div class="col-lg-6 offset-lg-3 sect-title">
                    <h2><span>Our</span> Product</h2>
                    <span class="title_bdr"><i class="ion-more"></i></span>

                </div>
            </div>
            <div class="row">

                <!--Services Block
     class="services-block col-lg-4 col-md-6 col-xs-12 mb-30"
    -->
                @foreach ($products as $item)
                    
                
                <div class="services-block col-lg-3 col-md-6 mb-30" style="margin-bottom:20px;">
                    <div class="inner-box hvr-float">
                        <div class="image">


                            <a href="{{URL('products/detail')}}/{{$item->id}}" title="{{$item->name}}">
                                <img class="lazy" data-original="{{asset('productimages')}}/{{$item->productimages[0]->image}}" alt="{{$item->name}}">
                            </a>
                            <div class="overlay-box d-flex align-items-center clearfix">
                                <div class="text">
                                    <p></p>
                                    <a href="{{URL('products/detail')}}/{{$item->id}}" title="{{$item->name}}"
                                       class="read-more">Read More</a>
                                </div>

                            </div>
                        </div>
                        <div class="lower-box">
                            <h3 style="height:56px;overflow:hidden"><a
                                        href="{{URL('products/detail')}}/{{$item->id}}">{{$item->name}}</a></h3>




                        </div>
                    </div>
                </div>

                @endforeach
              
            </div>
        </div>
    </section>

    <section id="feadback" data-original="{{ asset('/assets/v4-upload.goalsites.com/377/1576059263_bbq.jpg_%3b%20filename_%3dutf-8%27%271576059263_bbq.jpg') }}"
             class="padding ptb-xs-40 img_bg1 lazy">
        <div class="container">
            <div class="row text-center mb-40 mb-xs-10">
                <div class="col-lg-6 offset-lg-3 sect-title">
                    <h2><span>Quick</span> Quote</h2>
                    <span class="title_bdr"><i class="ion-more"></i></span>

                </div>
            </div>
            <div class="row">

                <div class=" col-md-12 col-lg-12">

                    <!-- Contact FORM -->
                    <form class="quote-form" id="contact" action="http://inquiry.digoodcms.com/api/keyobbq"
                          method="post">
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <div id="success">
                            <div role="alert" class="alert alert-success">
                                <strong>Thanks</strong> for using our template. Your message has been sent.
                            </div>
                        </div>
                        <!-- END IF MAIL SENT SUCCESSFULLY -->
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="contact[name]" type="text" name="form-name"
                                           placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="email" type="text" name="form-email"
                                           placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="contact[sub]" type="text" name="form-subject"
                                           placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-md-10 col-lg-10">
                                <div class="form-field">
                                <textarea class="form-full" id="message" rows="7" name="form-message"
                                          placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <input name="page" type="hidden">
                            <input id="ipAddress" name="geoip[ipAddress]" type="hidden" value="">
                            <input id="countryName" name="geoip[countryName]" type="hidden" value="">
                            <input id="countryCode" name="geoip[countryCode]" type="hidden" value="">
                            <input id="regionName" name="geoip[regionName]" type="hidden" value="">
                            <input id="cityName" name="geoip[cityName]" type="hidden" value="">
                            <input id="zipCode" name="geoip[zipCode]" type="hidden" value="">
                            <input id="latitude" name="geoip[latitude]" type="hidden" value="">
                            <input id="longitude" name="geoip[longitude]" type="hidden" value="">
                            <input id="timeZone" name="geoip[timeZone]" type="hidden" value="">
                            <input name="useragent[browser]" type="hidden" value="Chrome[64.0.3282.167]">
                            <input name="useragent[platform]" type="hidden" value="Windows 10">
                            <input name="useragent[lang]" type="hidden" value="zh-CN,zh;q=0.9,en;q=0.8">
                            <input name="useragent[mobile]" type="hidden" value="No">
                            <input name="useragent[agent_string]" type="hidden"
                                   value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36">

                            <div class="col-md-2 col-lg-2 d-flex align-items-center">
                                <input class="bnt btn-text sent-but mt-xs-30"
                                       style="color:white !important;border-color:#E70012 !important" type="submit"
                                       value="Send" />
                            </div>
                        </div>
                    </form>

                    <script>
                        $(function () {
                            //获取GEOIP信息
                            var YOUR_KEY = "4f21d3e89231c93599ff1f8b7a82a008d03beed6ce46978d8e2816f13ad7e5c1";
                            var theURL = "//api.ipinfodb.com/v3/ip-city/?key=" + YOUR_KEY + "&format=json&callback=?";
                            $.ajax({
                                type: "POST",
                                url: theURL,
                                contentType: "application/json; charset=utf-8",
                                dataType: "json",
                                method: 'GET',
                                success: function (data) {
                                    $("#country").val(data.countryCode);
                                    $("#ipAddress").val(data.ipAddress);
                                    $("#countryName").val(data.countryName);
                                    $("#countryCode").val(data.countryCode);
                                    $("#regionName").val(data.regionName);
                                    $("#cityName").val(data.cityName);
                                    $("#zipCode").val(data.zipCode);
                                    $("#latitude").val(data.latitude);
                                    $("#longitude").val(data.longitude);
                                    $("#timeZone").val(data.timeZone);
                                }
                            });
                        });

                    </script>

                    <!-- END Contact FORM -->
                </div>

            </div>

        </div>
    </section>

    <!--Testimonial-->
    <section class="padding ptb-xs-40" style="padding-bottom:30px !important;">
        <div class="container">
            <div class="row text-center mb-40 mb-xs-10" style="margin-bottom:0">
                <div class="col-lg-6 offset-lg-3 sect-title">
                    <h2><span>Our</span> Clients</h2>
                    <span class="title_bdr"><i class="ion-more"></i></span>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align:center">

                    <style>
                        .wf span {
                            color: white !Important;
                        }
                    </style>

                    <img class="lazy" data-original="//v4-upload.goalsites.com/377/image_1574833475_未标题-8.jpg" title="Our Team" />

                </div>
            </div>
        </div>

        </div>

    </section>
    <!--Testimonial End-->

    <!-- Blog -->
    <section id="blog" class="blog padding ptb-xs-40">
        <div class="container">
            <!-- section head -->
            <div class="row text-center mb-40 mb-xs-10">
                <div class="col-lg-6 offset-lg-3 sect-title">
                    <h2><span>Our</span> News</h2>
                    <span class="title_bdr"><i class="ion-more"></i></span>

                </div>
            </div>

            <div class="row">

                <!-- posts -->
                <div class="col-lg-4 mb-sm-30 mb-xs-30">
                    <div class="post">
                        <div class="post-img img-fluid">
                            <a href="{{URL('post')}}">
                                <img class="lazy" data-original="//v4-upload.goalsites.com/377/image_1596178897_why-bbq-is-the-best.jpg" alt="Why BBQ is the best?">
                            </a>
                        </div>
                        <div class="post-content">
                            <a style="height:60px !Important" href="{{URL('post')}}" class="blog_tital">
                                Why BBQ is the best?</a>
                            <p>
                            </p>
                            <a href="{{URL('post')}}" class="read_more">Read More..</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-sm-30 mb-xs-30">
                    <div class="post">
                        <div class="post-img img-fluid">
                            <a href="{{URL('post')}}">
                                <img class="lazy" data-original="//v4-upload.goalsites.com/377/image_1567750210_Investment-Contribution-Award.jpg" alt="Congratulations on winning the award">
                            </a>
                        </div>
                        <div class="post-content">
                            <a style="height:60px !Important" href="{{URL('post')}}" class="blog_tital">
                                Congratulations on winning the award</a>
                            <p>
                            </p>
                            <a href="{{URL('post')}}" class="read_more">Read More..</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-sm-30 mb-xs-30">
                    <div class="post">
                        <div class="post-img img-fluid">
                            <a href="{{URL('post')}}">
                                <img class="lazy" data-original="//v4-upload.goalsites.com/377/image_1567749732_Half-year-annual-meeting.jpg" alt="2019 Half Annual Summary Meeting ">
                            </a>
                        </div>
                        <div class="post-content">
                            <a style="height:60px !Important" href="{{URL('post')}}" class="blog_tital">
                                2019 Half Annual Summary Meeting </a>
                            <p>
                            </p>
                            <a href="{{URL('post')}}" class="read_more">Read More..</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog End -->

@stop