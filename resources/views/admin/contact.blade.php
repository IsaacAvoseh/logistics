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
                        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
                    </div> -->
                    <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1"> 
                        <div>
                            <h3>{{ Auth::user()->name }}</h3>
                        </div>
                    </h4>
                  
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <!-- display current time and date -->
                            <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">{{date('l jS \of F Y h:i:s A')}}</h4>

                        </li>
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

                <!-- </div> -->
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">




                        <div class="col-lg-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Contacts information </h4>
                                    <p class="card-description">

                                    </p>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                @if(session('success'))
                                                <div class="alert alert-success">
                                                    <h3> {{session('success')}}</h3>
                                                </div>

                                                @endif
                                                @if(session('error'))

                                                <div class="alert alert-danger">
                                                    {{session('error')}}
                                                </div>
                                                @endif
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
                                                        Subject
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contacts as $contact)
                                                <tr class="table-info">
                                                    <td>
                                                        {{$contact->id}}
                                                    </td>
                                                    <td>
                                                        {{$contact->name}}
                                                    </td>
                                                    <td>
                                                        {{$contact->phone}}
                                                    </td>
                                                    <td>
                                                        {{$contact->subject}}
                                                    </td>
                                                    <td>
                                                        <a href="/contact2/{{$contact->id}}" class="btn btn-primary">View</a>
                                                        <a href="/contact2/{{$contact->id}}/delete" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <!-- <tr class="table-warning">
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        Messsy Adam
                                                    </td>
                                                    <td>
                                                        Flash
                                                    </td>
                                                    <td>
                                                        $245.30
                                                    </td>
                                                    <td>
                                                        July 1, 2015
                                                    </td>
                                                </tr>
                                                <tr class="table-success">
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        Peter Meggik
                                                    </td>
                                                    <td>
                                                        After effects
                                                    </td>
                                                    <td>
                                                        $ 77.99
                                                    </td>
                                                    <td>
                                                        May 15, 2015
                                                    </td>
                                                </tr>
                                              <tr class="table-primary">
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        Edward
                                                    </td>
                                                    <td>
                                                        Illustrator
                                                    </td>
                                                    <td>
                                                        $ 160.25
                                                    </td>
                                                    <td>
                                                        May 03, 2015
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                    </div>
                                </div>
                            </div>
                            <!-- Paginate -->


                            </table>
                            {{ $contacts->links('vendor.pagination.bootstrap-4') }}

                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="col-12 col-xl-6 grid-margin stretch-card"></div> -->
            <div class="col-12 col-xl-6 grid-margin stretch-card">
                <!-- <div class="row w-100 flex-grow"></div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">






                        <h4 class="card-title">Financial management review</h4>

                        <!-- <div class="table-responsive"></div> -->
                    </div>
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