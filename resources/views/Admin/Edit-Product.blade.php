<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Nice Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png')}}" sizes="16x16" href="{{asset('assets/admin/assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('assets/admin/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="#" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                {{-- <img src="{{asset('assets/admin/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" /> --}}
                                <!-- Light Logo icon -->
                                {{-- <img src="{{asset('assets/admin/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" /> --}}
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                {{-- <img src="{{asset('assets/admin/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" /> --}}
                                <!-- Light Logo text -->
                                {{-- <img src="{{asset('assets/admin/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /> --}}
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 me-1"></i>
                                    <div class="ms-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout">
                        </form>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    {{-- <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('assets/admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul> --}}
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL('Admin/Add-Products')}}"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Add Product</span>
                            </a>
                        </li>  
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL('Admin/All-Products')}}"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Show Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL('Admin/Messages')}}"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Messages</span>
                            </a>
                        </li>               
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
       
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" enctype="multipart/form-data" method="post" action="{{URL('Productupdate')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Product Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" name="pname" value="{{$products->name}}">
                                                <input type="hidden" name="id" value="{{$products->id}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Category</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" value="{{$products->cat_id}}" name="cat_id" id="Category">
                                                <option value="1" id="CHARCOAL">CHARCOAL GRILLS</option>
                                                <option value="2" id="GAS">GAS GRILLS</option>
                                                <option value="3" id="ELECTRIC">ELECTRIC GRILLS</option>
                                                <option value="4" id="SMOKER">SMOKER</option>
                                                <option value="5" id="PELLET">PELLET GRILLS</option>
                                                <option value="6" id="KAMADO">KAMADO</option>
                                                <option value="7" id="FIRE">FIRE PIT</option>
                                                <option value="8" id="PIZZA">PIZZA OVEN</option>
                                                <option value="9" id="BBQ">BBQ ACCESSORIES</option>
                                                

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Sub Category</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" value="{{$products->subcat_id}}" name="subcat_id" id="SubCategory">
                                                <option value="0" class="" Selected>Sub Category</option>
                                                <option value="1" class=" Allsub CHARCOAL">KETTLE GRILLS</option>
                                                <option value="2" class=" Allsub CHARCOAL">TROLLEY GRILLS</option>
                                                <option value="3" class=" Allsub CHARCOAL">PORTABLE GRILLS</option>
                                                <option value="4" class=" Allsub CHARCOAL">BARREL GRILLS</option>
                                                <option value="5" class=" Allsub CHARCOAL">TRIPOD GRILLS</option>
                                                <option value="6" class=" Allsub CHARCOAL">FOLDABLE GRILLS</option>
                                                <option value="7" class=" Allsub CHARCOAL">ROTISSERIE</option>
                                                <option value="8" class=" Allsub CHARCOAL">PEDESTAL GRILLS</option>
                                                <option value="9" class=" Allsub CHARCOAL">BALCONY GRILLS</option>
                                                <option value="10" class=" Allsub CHARCOAL">INSTANT GRILLS</option>
                                                <option value="11" class=" Allsub GAS">PLANCHA</option>
                                                <option value="12" class=" Allsub BBQ">BBQ TOOL SET</option>
                                                <option value="13" class=" Allsub BBQ">BBQ GRID</option>
                                                <option value="14" class=" Allsub BBQ">BBQ PAN</option>
                                                <option value="15" class=" Allsub BBQ">BBQ GLOVE</option>
                                                <option value="16" class=" Allsub BBQ">BBQ SKEWER</option>
                                                <option value="17" class=" Allsub BBQ">THERMOMETER</option>
                                                <option value="18" class=" Allsub BBQ">BBQ OVEN</option>
                                                <option value="19" class=" Allsub BBQ">BBQ NEEDLE</option>
                                                <option value="20" class=" Allsub BBQ">BBQ NET</option>
                                                <option value="21" class=" Allsub BBQ">BBQ GRILL</option>
                                                <option value="22" class=" Allsub BBQ">BBQ BAMBOO STICK</option>
                                                <option value="23" class=" Allsub BBQ">BBQ BEACH</option>
                                                <option value="24" class=" Allsub BBQ">BBQ BURSH</option>
                                                <option value="25" class=" Allsub BBQ">BBQ NEW OVEN</option>
                                                <option value="26" class=" Allsub BBQ">BBQ POT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Product Detail</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control form-control-line"
                                             name="pdetail" id="" cols="30" rows="10">{{$products->detail}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Item No.</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->item_no}}" name="pitem">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Unit Of Measure</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->unit}}" name="unit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">MOQ</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->moq}}" name="moq">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Price</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->price}}" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Packing</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->packing}}" name="packing">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Color</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->color}}" name="color">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Product Size</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->pro_size}}" name="prosize"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Packing Size / Single PC</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->pack_size}}" name="packsize">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Packaging Weight Of Single Pc</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->package}}" name="package">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Material</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->material}}" name="material">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">PCS/CTN</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->pcs}}" name="pcs">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Video Link</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" value="{{$products->video}}" name="video">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Upload Images</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" 
                                            name="images[]" placeholder="address" multiple>
                                        </div>
                                    </div>
                                    @foreach ($products->productimages as $item)
                                        <div class="col-md-4">
                                            <a href="{{URL('DeleteImage')}}/{{$item->id}}"class="dlt">Delete</a>
                                            <img style="width:100%"src="{{asset('productimages')}}/{{$item->image}}" alt="">
                                            <input type="hidden" name="img2[]" value="{{$item->image}}">
                                        </div>
                                    @endforeach
                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved 
           
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/admin/dist/js/custom.min.js')}}"></script>
    <script>

        $( document ).ready(function() {
            $('.Allsub').hide();
            var ii = "<?php echo $products->cat_id ?>";
            $("#Category").val(ii);
            var i = $('#Category').children(":selected").attr("id");
            $('.'+i).show();
            var iii = "<?php echo $products->subcat_id ?>";
            $("#SubCategory").val(iii);
            $('#Category').on('change', function() {
                $("#SubCategory").val(0);
                var id = $(this).children(":selected").attr("id");
                $('.Allsub').hide();
                $('.'+id).show();
            });
            $('.dlt').click(function(){
                $(this).parent().remove();

            });
        });

    </script>
</body>

</html>