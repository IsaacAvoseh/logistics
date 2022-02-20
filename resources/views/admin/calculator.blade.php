<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <h3 class="text-white">{{$data['name']}}</h3>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        <div class="badge badge-info badge-pill">2</div>
                    </a>
                </li>
                <li class="nav-item sidebar-category">
                    <p>Menus</p>
                    <span></span>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-palette menu-icon"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="/contact2">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Contacts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog2">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calculator">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Calculator</span>
                    </a>
                </li>
                <!-- <li class="nav-item sidebar-category">
                    <p>Pages</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item sidebar-category">
                    <p>Apps</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="docs/documentation.html">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.bootstrapdash.com/demo/spica/template/">
                        <button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
                    </div>
                     <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">{{ Auth::user()->name }}</h4>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item">
                                <!-- display current time and date -->
                                <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">{{date('l jS \of F Y h:i:s A')}}</h4>

                            </li>
                            <li class="nav-item dropdown mr-1">
                                <a href="/logout" class="dropdown-item text-black mb-0 font-weight-bold d-none d-xl-block bg-white">
                                    <i class="mdi mdi-logout text-primary "></i>
                                    Log Out
                                </a>
                            </li>

                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                            <span class="mdi mdi-menu"></span>
                        </button>
                </div>

            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">



                        <!-- <div class="col-12 col-xl-6 grid-margin stretch-card"></div> -->
                        <div class="col-12 col-xl-6 grid-margin stretch-card">
                            <!-- <div class="row w-100 flex-grow"></div> -->
                        </div>
                    </div>





                    <div class="col-12 grid-margin stretch-card text-white" style=" padding-left:100px">
                        <div class=" card">
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success">
                                <h3> {{session('success')}}</h3>
                            </div>

                            @endif
                            <h4 class="card-title">Update Prices</h4>

                            <form class="bg-primary" style="display: flex; flex-wrap:wrap; width:700px;  padding:100px" method="POST">
                                @csrf


                                <label class="" for="inlineFormInputName2">KM</label>
                                <input name="km" type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder=" Ente" value="{{$quotes->km}}">
                                <label class="" for="inlineFormInputName2">KM Price</label>
                                <input name="km_price" type="text" value="{{$quotes->km_price}}" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder=" Enter KG">

                                <label class="" for="inlineFormInputName2">KG</label>
                                <input name="kg" value="{{$quotes->kg}}" type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder=" Enter a value">
                                <label class="" for="inlineFormInputName2">KG Price</label>
                                <input name="kg_price" type="text" value="{{$quotes->kg_price}}" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder=" Enter KG">

                                <label class="" for="inlineFormInputName2">Land Price</label>
                                <input name="land" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder=" Enter a value" value="{{$quotes->land}}">
                                <label class="" for="inlineFormInputName2">Ocean Price</label>
                                <input name="ocean" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder=" Enter a value" value="{{$quotes->ocean}}">
                                <label class="" for="inlineFormInputName2">Air Price</label>
                                <input name="air" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder=" Enter a value" value="{{$quotes->air}}">


                                <button type="submit" class="btn btn-primary mb-2 col-lg-12">SAVE</button>
                            </form>
                        </div>
                    </div>
                </div>





                <!-- row end -->
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card bg-facebook d-flex align-items-center">
                            <div class="card-body py-5">
                                <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                    <i class="mdi mdi-facebook text-white icon-lg"></i>
                                    <div class="ml-3 ml-md-0 ml-xl-3">
                                        <h5 class="text-white font-weight-bold">2.62 Subscribers</h5>
                                        <p class="mt-2 text-white card-text">You main list growing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card bg-google d-flex align-items-center">
                            <div class="card-body py-5">
                                <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                    <i class="mdi mdi-google-plus text-white icon-lg"></i>
                                    <div class="ml-3 ml-md-0 ml-xl-3">
                                        <h5 class="text-white font-weight-bold">3.4k Followers</h5>
                                        <p class="mt-2 text-white card-text">You main list growing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card bg-twitter d-flex align-items-center">
                            <div class="card-body py-5">
                                <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                    <i class="mdi mdi-twitter text-white icon-lg"></i>
                                    <div class="ml-3 ml-md-0 ml-xl-3">
                                        <h5 class="text-white font-weight-bold">3k followers</h5>
                                        <p class="mt-2 text-white card-text">You main list growing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:./partials/_footer.html -->
            <footer class="footer">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>