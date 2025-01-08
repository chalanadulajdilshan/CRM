<!doctype html>
<?php
include '../class/include.php';
include './auth.php';
 
?>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Create item - Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>

        <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper " class="someBlock">


            <?php include './header.php'; ?>
            <!-- Left Sidebar End -->


            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Manage Item</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Create Item </li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Create Item</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-name">Name of the Award Unit</label>
                                                        <input type="text" class="form-control" id="award-unit-name"
                                                            name="award_unit_name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-address">Address</label>
                                                        <input type="text" class="form-control" id="award-unit-address"
                                                            name="award_unit_address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-tel">Tel</label>
                                                        <input type="text" class="form-control" id="award-unit-tel"
                                                            name="award_unit_tel">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-leader">Name of the Award Leader
                                                            (Coordinator)</label>
                                                        <input type="text" class="form-control" id="award-unit-leader"
                                                            name="award_unit_leader">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-personal-address">Personal
                                                            Address</label>
                                                        <input type="text" class="form-control"
                                                            id="award-unit-personal-address"
                                                            name="award_unit_personal_address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-official-address">Official
                                                            Address</label>
                                                        <input type="text" class="form-control"
                                                            id="award-unit-official-address"
                                                            name="award_unit_official_address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-email">E-mail Address</label>
                                                        <input type="email" class="form-control" id="award-unit-email"
                                                            name="award_unit_email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-assistant-leader">Assistant Award
                                                            Leader’s Name and Address</label>
                                                        <input type="text" class="form-control"
                                                            id="award-unit-assistant-leader"
                                                            name="award_unit_assistant_leader">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-members">Number of Members Registering
                                                            (Gold, Silver, Bronze)</label>
                                                        <input type="text" class="form-control" id="award-unit-members"
                                                            name="award_unit_members">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-start-date">Starting Date</label>
                                                        <input type="date" class="form-control"
                                                            id="award-unit-start-date" name="award_unit_start_date">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-head">Head of the School or
                                                            Institution</label>
                                                        <input type="text" class="form-control" id="award-unit-head"
                                                            name="award_unit_head">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-district">District</label>
                                                        <input type="text" class="form-control" id="award-unit-district"
                                                            name="award_unit_district">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="award-unit-province">Province</label>
                                                        <input type="text" class="form-control" id="award-unit-province"
                                                            name="award_unit_province">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                         
                    </div>  
                </div> 
            </div>  
        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <!-- App js -->
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js"></script>
        <script src="ajax/js/items.js" type="text/javascript"></script>
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="delete/js/slider.js" type="text/javascript"></script>
    </body>
</html>
