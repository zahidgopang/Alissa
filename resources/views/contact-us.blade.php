@extends('layouts/master')
{{-- Page content --}}
@section('content')


	
	<link rel="stylesheet" href="{{asset('assets/cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css_%3b%20filename_%3dutf-8%27%27font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/v4-assets.goalsites.com/peng/common/bs3/css/contact/contact-1.css')}}">
<!-- 文件上传插件 -->
<script src="{{asset('assets/cdn.jsdelivr.net/npm/plupload%402.3.6/js/plupload.full.min.js')}}"></script>
<script src="{{asset('assets/cdn.jsdelivr.net/npm/plupload%402.3.6/src/jquery.plupload.queue/jquery.plupload.queue.js')}}"></script>
<link href="{{asset('assets/cdn.jsdelivr.net/npm/plupload%402.3.6/src/jquery.plupload.queue/css/jquery.plupload.queue.css')}}" rel="stylesheet"/>

<style>
.fa-upload:before {
    font-size: 20px;
    color: #f00;
}
.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out, box-shadow .15s ease-in-out;}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0, 123, 255, .25);}
.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-moz-placeholder{color:#6c757d;opacity:1;}
.form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.form-group{margin-bottom:1rem;}
.progress{display:-webkit-box;display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
p{orphans:3;widows:3;}
}
p{margin:0!important;-ms-word-break:break-word;word-break:break-word;-webkit-hyphens:manual;-ms-hyphens:manual;hyphens:manual;font-size:.875rem;}
.consult-affix-file-upload{position:relative;background-size:auto 20px;height:60px;line-height:100px;text-align:center;overflow:hidden;color:#96989b;}
.consult-affix-file-upload input[type=file]{position:absolute;left:0;top:-2px;height:64px;display:block;width:100%;opacity:0;cursor:pointer;}
/*! CSS Used from: https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-upload:before{content:"\f093";}
/*! CSS Used from: https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-upload:before{content:"\f093";}
/*! CSS Used from: Embedded */
.cp-maps .container-fluid .col-12 form{margin-left:20%;padding:3rem 15px;background:#fff;}
@media (max-width: 992px){
.cp-maps .container-fluid .col-12 form{margin-left:0;}
#uplode{position:absolute;top:67%!important;right:0!important;cursor:pointer;}
}
#uplode{position:absolute;top:67%;right:25%;cursor:pointer;}
#uplode:hover{color:#EB5D02;}
#uplode{top:40%;right:49%;}
.progress{width:100%;height:10px;border:1px solid #ccc;border-radius:10px;margin:10px 0px;overflow:hidden;}
.progress > div{width:0px;height:100%;background-color:#EB5D02;transition:all .3s ease;}
/*! CSS Used from: Embedded */
.progress{width:100%;height:10px;border:1px solid #ccc;border-radius:10px;margin:10px 0px;overflow:hidden;}
.progress > div{width:0px;height:100%;background-color:#EB5D02;transition:all .3s ease;}

  [digood-id="main_contact_box_cp"] .fp-icon-box-5 .fp-icon{
  	margin-top:5px !Important;
  }
  .fp-section-title h2{
  	margin-bottom:40px;
  }
  [digood-id="main_contact_box_cp"] .fp-form textarea {
    height: 200px;
    padding: 10px;
}
[digood-id="main_contact_box_cp"] .fp-form textarea{
    font-size: 16px !important;
}
</style>




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
						<h2>Contact Us</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="{{URL('home')}}">Home</a></li>
					  							 <li class="breadcrumb-item active">Contact Us</li>
					
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>



<div digood-id="main_contact_box_cp">
    <div class="site-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="fp-section-title clearfix">
                        <h2>Contact details</h2>
                    </div>
                    <div class="fp-icon-box-5 icon-center dark-version ">
                        <span class="fp-icon"><i class="fa fa-phone-square"></i></span>
                        <h4>Have a Questions? Call Us</h4>
                        <div class="sub-title"></div>
                        <div class="desc">
                            <p>Tel: 86-13858917772(Alissa) <br> Tel: 86-15267968557(Chelina)</p>
                        </div>
                    </div>
                    <div class="fp-icon-box-5 icon-center dark-version ">
                        <span class="fp-icon"><i class="fa fa-map-marker"></i></span>
                        <h4>Visit Our Company at</h4>
                        <div class="sub-title"></div>
                        <div class="desc">
                            <p>NO.2 Shencun Industrial Zone,Beisha, Lishui Town, Nanhai District, Foshan City, Guangdong, China (Zip:528244)</p>
                        </div>
                    </div>
                    <div class="fp-icon-box-5 icon-center dark-version ">
                        <span class="fp-icon"><i class="fa fa-envelope"></i></span>
                        <h4>Send Your Mail</h4>
                        <div class="sub-title"></div>
                        <div class="desc">
						  <p><a href="mailto:NO.2 Shencun Industrial Zone,Beisha, Lishui Town, Nanhai District, Foshan City, Guangdong, China (Zip:528244)">AlissaBBQ@163.com</a></p>
                        </div>
                    </div>
                    <div class="fp-icon-box-5 icon-center dark-version ">
                        <span class="fp-icon"><i class="fa fa-clock-o"></i></span>
                        <h4>Working Hours</h4>
                        <div class="sub-title"></div>
                        <div class="desc">
                            <p>Mon – Sat Day: 09.00 to 18.00
                        </div>
                    </div>
                </div>
			                  <div class="col-sm-8">
                    <div class="fp-section-title clearfix custom-title ">
                        <h2 style="margin-bottom:10px">GET A Free Quote</h2>
					   <p>A free price list customized to your specific needs&nbsp;</p>
                    </div>
                    <div class="fp-form fp-form-3  paddtop40">
                       <form action="{{URL('Message')}}" method="post">
                          @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="name" value="" placeholder="Your Name*" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="email" value="" placeholder="Email Address*" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="phone" value="" placeholder="Telephone" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="company" value="" placeholder="Company name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group" style="margin-bottom:0">
                                        <textarea name="message" style="margin-bottom:0" placeholder="Message*"></textarea>
                                    </div>
                                </div>
                                

                                <div class="col-sm-12">
            
                                              
                                    
                                <div class="col-sm-12 submit text-center paddtop30">
								    <p style="text-align:left">*Your 100% privacy will be safe with us.</p>
                                    <input type="submit" style="background:#ffb606" value="Submit Now" class="fh-btn">
                                </div>
                            </div>
                        </form>
                        <script>
                             $(function(){
                                
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
                                        $("#cityName").val  (data.cityName);
                                        $("#zipCode").val(data.zipCode);
                                        $("#latitude").val(data.latitude);
                                        $("#longitude").val(data.longitude);
                                        $("#timeZone").val(data.timeZone);
                                    }
                                });
                                
                                
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="googleMap" style="width:100%;height:400px;"></div>


<script type="text/jscript">
    $("#FileUpload").bind('input propertychange', function() {
        var fileObj = $("#FileUpload").get(0).files[0];
        var formFile = new FormData();
        formFile.append("file", fileObj);
        var data = formFile;
        $.ajax({
            url: "//assets.e-runtech.com/upload",
            //url: "//assets.e-runtech.com/upload/get_file_type",
            data: data,
            type: "Post",
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
            xhr: function() {
                var xhr = new XMLHttpRequest();
                //使用XMLHttpRequest.upload监听上传过程，注册progress事件，打印回调函数中的event事件
                xhr.upload.addEventListener('progress', function (e) {
                    //loaded代表上传了多少
                    //total代表总数为多少
                    var progressRate = (e.loaded / e.total) * 100 + '%';

                    //通过设置进度条的宽度达到效果
                    $('.progress > div').css('width', progressRate);
                })
                return xhr;
            },
            success: function (result) {
                console.log(result);
                console.log(result.success);
                $('#FileUrl').val($('#FileUrl').val() + '  |  ' + result.success);
                console.log($('#FileUrl').val());
                $('#FileUpload').attr('value',result.success)
                if (result.success) {
                    alert("Uploaded successfully!");
                } else if (result.error) {
                    alert("Fail to upload!");
                }
            },
            error: function() {
                console.log("Fail to upload!");
            }
        })
    });
</script>

<!-- Google Map JS -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGm_weV-pxqGWuW567g78KhUd7n0p97RY"></script>
    <!-- Google Map JS -->
    <script src="http://ditu.google.cn/maps/api/js?key=AIzaSyDYaYW3Votwa53NEf3kXbv0cvPBP0tiU4Y&amp;sensor=false&amp;language=en"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', initialize);
        var myCenter = new google.maps.LatLng(23.1436224100,113.1010832300);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter,
                title: "NO.2 Shencun Industrial Zone,Beisha, Lishui Town, Nanhai District, Foshan City, Guangdong, China (Zip:528244)"
            });
            var infowindow = new google.maps.InfoWindow({
                content: "NO.2 Shencun Industrial Zone,Beisha, Lishui Town, Nanhai District, Foshan City, Guangdong, China (Zip:528244)"
            });
            marker.setMap(map);
            infowindow.open(map, marker);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- End Google Map JS -->
@stop