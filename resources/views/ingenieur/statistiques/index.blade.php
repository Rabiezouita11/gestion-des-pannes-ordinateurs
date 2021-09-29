
    <head>
        <meta charset="utf-8" />
        <title>Ingénieur</title>
        <link href="{{ asset('storage/'.Auth::user()->image )}}" rel="icon">
    <link href="{{ asset('storage/'.Auth::user()->image )}}" rel="apple-touch-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                
           @include('ingenieur.info_profile.index')
                       
                    

                </ul>


                <!-- LOGO -->
                <div class="logo-box">
                   
                   
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>        
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{ asset('storage/'.Auth::user()->image )}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
                        <div class="dropdown">
                            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                           
                           
                        </div>
                        <p class="text-muted">{{ Auth::user()->role }}</p>
                        
                    </div>

                    <!--- Sidemenu -->
                    @include('ingenieur.menu.menu')

                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                  
                <h2>Statistiques</h2>
             

<div class="row">
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150"
                   data-fgColor="#71b6f9" data-displayInput=true value="{{$enseignant}}" readonly/>
            <h5 class="text-muted">Enseignants</h5>
        </div>
    </div><!-- end col-->
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150" 
                   data-fgColor="#10c469"  data-displayPrevious=true value="{{$technicien}}"readonly/>
            <h5 class="text-muted"> Techniciens</h5>
        </div>
    </div><!-- end col-->
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150" 
                   data-fgColor="#f9c851" data-displayPrevious=true value="{{$labo}}"readonly/>
            <h5 class="text-muted">Laboratoires</h5>
        </div>
    </div><!-- end col-->
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150" 
                   data-fgColor="#35b8e0" data-displayPrevious=true data-angleOffset=-125
                   data-angleArc=250 value="{{$postes}}"readonly/>
            <h5 class="text-muted">Postes</h5>
        </div>
    </div><!-- end col-->
</div><!-- end row -->

<div class="row">
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150"
                   data-fgColor="#ff8acc"
                   value="{{$peripherique}}"readonly/>
            <h5 class="text-muted">Péripheriques</h5>
        </div>
    </div><!-- end col-->
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150" 
                   data-displayPrevious=true 
                   value="{{$panne}}" data-fgColor="#5b69bc"readonly/>
            <h5 class="text-muted">Péripheriques en pannes </h5>
        </div>
    </div><!-- end col-->
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                   data-fgColor="#435966" value="{{$pan}}" data-skin="tron" data-angleOffset="180"
                   data-readOnly=true data-thickness=".1"readonly/>
            <h5 class="text-muted">Péripheriques actifs</h5>
        </div>
    </div><!-- end col-->
    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="150" 
                   data-fgColor="#ff5b5b" data-displayPrevious=true data-angleOffset=-125
                   data-angleArc=250 value="{{$hist}}"readonly/>
            <h5 class="text-muted">Historiques</h5>
        </div>
    </div><!-- end col-->
</div><!-- end row -->
</div><!-- end row-->

</div>
</div><!-- end col-->
</div>            
           
</div>
</div>
</div>
        <!-- Vendor js -->
     <!-- Right bar overlay-->
     <div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- jquery knob -->
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

<!-- Sparkline charts -->
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/pages/charts-other.init.js"></script>

<!-- peity charts -->
<script src="assets/libs/peity/jquery.peity.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

    </body>
</html>