<?php

    include("connection.php"); 
    error_reporting(0);
//if($_SERVER['REQUEST_METHOD']=='POST')
    $id=$_GET['rn'];
    $pb=$_GET['pb'];
    $pc=$_GET['pc'];
    $pt=$_GET['pt'];
    $pd=$_GET['pd'];
    $pi=$_GET['pi'];
    $pk=$_GET['pk'];
    $pp=$_GET['pp'];



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To |  Admin Page - DsMall</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">ADMIN - DSMall</a>
            </div>

        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                    <div class="email">Admin@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">

                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Product</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="AddProduct.php">Add New Product</a>
                            </li>
                            <li class="active">
                                <a href="DelEditProduct.php">Edit & delete Product</a>
                            </li>
                        </ul>
                    </li>





                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="javascript:void(0);">DsMall Team</a>.
                </div>

            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add New Product</h2>
                        </div>
                        <br />

                        <div class="body">
                            <form id="" method="POST"  style="width:95%" action="edit2.php">
                                
                               <div class="input-group">
                                    <span class="input-group-addon">Product ID</span>
                                    <div class="form-line" style="margin-left:20px;">
                                        <input class="form-control"  placeholder="ID Of New Product" type="text" value="<?php echo $id?>" name="id" />
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Product Brand</span>
                                    <div class="form-line" style="margin-left:20px;">
                                        <input class="form-control"  placeholder="Brand Of New Product" type="text" value="<?php echo $pb?>" name="brand" />
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Product Category</span>
                                    <div class="form-line" >
                                        <input class="form-control"  placeholder="Category Of New Product" type="text" value="<?php echo $pc?>" name="cat"/>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Title</span>
                                    <div class="form-line" style="margin-left:80px;">
                                        <input class="form-control"  placeholder="Name Of New Product" type="text" value="<?php echo $pt?>" name="title" >
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Price</span>
                                    <div class="form-line" style="margin-left:75px;">
                                        <input class="form-control"  placeholder="Price Of New Product" type="text" value="<?php echo $pp?>" name="price" />
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Descriptpion</span>
                                    <div class="form-line" style="margin-left:30px;">
                                        <input class="form-control"  placeholder="Descriptpion About New Product" type="text" value="<?php echo $pd?>" name="description" />
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">image</span>
                                    <div class="form-line" style="margin-left:70px;">
                                        <input class="form-control"  placeholder="Image OF New Product" type="text" value="<?php echo $pi?>" name="image" />
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Keywords</span>
                                    <div class="form-line" style="margin-left:45px;">
                                        <input class="form-control"  placeholder="Keywords OF New Product" type="text" value="<?php echo $pk?>" name="keyword"/>
                                    </div>
                                </div>
                                <button class="btn  btn-lg btn-primary waves-effect" type="submit" name="update">Edit/Update Product</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>
    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>
    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
</html>