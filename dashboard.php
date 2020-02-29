<?php
session_start();
if ($_SESSION['acceso'] <> true) {
    header("Location: ./login");
}
header('Content-Type: text/html; charset=UTF-8');
@$active = 'dashboard';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>ISC Control | Dashboard</title>
        <meta name="viewport" content= "width=device-width, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/css/ready.css">
        <link rel="stylesheet" href="assets/css/demo.css">
        <link href="css/css_alert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container_alert" id="container_alert">
        </div>
        <div class="wrapper">
            <div class="main-header">
                <div class="logo-header">
                    <a href="index" class="logo">
                        <center>ISC Control</center>
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
                </div>
                <?php
                // Navbar
                include "./include/navbar.php";
                ?>
            </div>
            <?php
            // slidebar
            include "./include/slidebar.php";
            ?>
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-stats card-warning">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-users"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Empleados</p>
                                                    <h4 class="card-title">1,294</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-stats card-success">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-bar-chart"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Sales</p>
                                                    <h4 class="card-title">$ 1,345</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-stats card-danger">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-newspaper-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Tardanzas</p>
                                                    <h4 class="card-title">1303</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-stats card-primary">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Order</p>
                                                    <h4 class="card-title">576</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 							<div class="col-md-3">
                                                                                            <div class="card card-stats">
                                                                                                    <div class="card-body ">
                                                                                                            <div class="row">
                                                                                                                    <div class="col-5">
                                                                                                                            <div class="icon-big text-center icon-warning">
                                                                                                                                    <i class="la la-pie-chart text-warning"></i>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-7 d-flex align-items-center">
                                                                                                                            <div class="numbers">
                                                                                                                                    <p class="card-category">Number</p>
                                                                                                                                    <h4 class="card-title">150GB</h4>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                            <div class="card card-stats">
                                                                                                    <div class="card-body ">
                                                                                                            <div class="row">
                                                                                                                    <div class="col-5">
                                                                                                                            <div class="icon-big text-center">
                                                                                                                                    <i class="la la-bar-chart text-success"></i>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-7 d-flex align-items-center">
                                                                                                                            <div class="numbers">
                                                                                                                                    <p class="card-category">Revenue</p>
                                                                                                                                    <h4 class="card-title">$ 1,345</h4>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                            <div class="card card-stats">
                                                                                                    <div class="card-body">
                                                                                                            <div class="row">
                                                                                                                    <div class="col-5">
                                                                                                                            <div class="icon-big text-center">
                                                                                                                                    <i class="la la-times-circle-o text-danger"></i>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-7 d-flex align-items-center">
                                                                                                                            <div class="numbers">
                                                                                                                                    <p class="card-category">Errors</p>
                                                                                                                                    <h4 class="card-title">23</h4>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                            <div class="card card-stats">
                                                                                                    <div class="card-body">
                                                                                                            <div class="row">
                                                                                                                    <div class="col-5">
                                                                                                                            <div class="icon-big text-center">
                                                                                                                                    <i class="la la-heart-o text-primary"></i>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-7 d-flex align-items-center">
                                                                                                                            <div class="numbers">
                                                                                                                                    <p class="card-category">Followers</p>
                                                                                                                                    <h4 class="card-title">+45K</h4>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div> -->
                        </div>
                        <div class="row row-card-no-pd">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="fw-bold mt-1">My Balance</p>
                                        <h4><b>$ 3,018</b></h4>
                                        <a href="#" class="btn btn-primary btn-full text-left mt-3 mb-3"><i class="la la-plus"></i> Add Balance</a>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="nav">
                                            <li class="nav-item"><a class="btn btn-default btn-link" href="#"><i class="la la-history"></i> History</a></li>
                                            <li class="nav-item ml-auto"><a class="btn btn-default btn-link" href="#"><i class="la la-refresh"></i> Refresh</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Profit</span>
                                                <span class="text-muted fw-bold"> $3K</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="78%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Orders</span>
                                                <span class="text-muted fw-bold"> 576</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="65%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Tasks Complete</span>
                                                <span class="text-muted fw-bold"> 70%</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="70%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Open Rate</span>
                                                <span class="text-muted fw-bold"> 60%</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <p class="fw-bold mt-1">Statistic</p>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="la la-pie-chart text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Number</p>
                                                    <h4 class="card-title">150GB</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-heart-o text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Followers</p>
                                                    <h4 class="card-title">+45K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Users Statistics</h4>
                                        <p class="card-category">
                                            Users statistics this month</p>
                                    </div>
                                    <div class="card-body">
                                        <div id="monthlyChart" class="chart chart-pie"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">2018 Sales</h4>
                                        <p class="card-category">
                                            Number of products sold</p>
                                    </div>
                                    <div class="card-body">
                                        <div id="salesChart" class="chart"></div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugin/chartist/chartist.min.js"></script>
        <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
        <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
        <script src="assets/js/plugin/chart-circle/circles.min.js"></script>
        <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/js/ready.min.js"></script>
        <script src="assets/js/demo.js"></script>
    </body>
</html>

