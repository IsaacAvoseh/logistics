<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <h3 class="text-white">{{ Auth::user()->name }}</h3>
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

                <li class="nav-item">
                    <a class="nav-link" href="/contact2">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Contacts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog2">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orders">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/settings">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/calculator">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Calculator</span>
                    </a>
                </li>

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
                    <!-- <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo" href="index.html"><img src="/images/logo.svg" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/images/logo-mini.svg" alt="logo" /></a>
                    </div> -->
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






                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> </h4>UPDATE ORDER DETAILS</h4>
                                <p class="card-description">

                                    @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                                @endif
                                </p>
                                <div class="table-responsive pt-3">
                                    <form action="/order" method="post">
                                        @csrf
                                        <table class="table table-bordered">
                                            <thead>


                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Phone Number
                                                    </th>
                                                    <th>
                                                        Tracking ID
                                                    </th>
                                                    <th>
                                                        Message
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                

                                                <tr class="table-info">
                                                    <td>
                                                        <input hidden readonly value="{{$orders['id']}}" name="id"></input>
                                                    </td>
                                                    <td>
                                                        {{$orders['name']}}
                                                    </td>
                                                    <td>
                                                        {{$orders['phone']}}
                                                    </td>
                                                    <td>
                                                        {{$orders['tracking_id']}}
                                                    </td>
                                                    <td>
                                                        <select name="status" id="">
                                                            <option value="{{$orders['status']}}">{{$orders['status']}}</option>
                                                            <option value="PENDING">Pending</option>
                                                            <option value="TRANSIT">Transit</option>
                                                            <option value="DELIVERED">Delivered</option>
                                                            <option value="CANCELLED">Cancelled</option>
                                                        </select>
                                                    </td>

                                                    <td>
                                                        <button type="submit" class="btn btn-primary">Update</button>

                                                    </td>

                                                </tr>


                                        </table>

                                    </form>
                                    </tbody>
                                </div>
                            </div>
                        </div>
                        <!-- Paginate -->


                        </table>


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
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>