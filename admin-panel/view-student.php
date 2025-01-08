<!doctype html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$STUDENT = new Student($id);
?>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>View member - festi.lk</title>
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
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>

        <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include './header.php'; ?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">View Member </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Student Details Summary</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="custom-accordion">
                                    <div class="card">
                                        <a href="#checkout-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse">
                                            <div class="p-4"> 
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <i class="uil uil-receipt text-primary h2"></i>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-16 mb-1"><b><?php echo $STUDENT->full_name ?> </b> Student Details Summary</h5>
                                                        <p class="text-muted text-truncate mb-0">Student Details Summary</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>

                                        <div id="checkout-billinginfo-collapse" class="collapse show">
                                            <div class="p-4 border-top">
                                                <form>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-name">Full Name</label>
                                                                    <input type="text" class="form-control" id="billing-name" placeholder="Enter name" value="<?php echo $STUDENT->full_name ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-name">Address</label>
                                                                    <input type="text" class="form-control" id="billing-name" placeholder="Enter name" value="<?php echo $STUDENT->address ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">  NIC Number</label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->nic ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">  Birth Date</label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->birth_date ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">  Phone Number</label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->phone_number ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">  Gender </label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->phone_number ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">   Branches</label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php
                                                                    $DEFULTDATA = new DefaultData();
                                                                    foreach ($DEFULTDATA->Branches() as $key => $branch) {
                                                                        if ($key == $STUDENT->course) {
                                                                            echo $branch;
                                                                        }
                                                                    }
                                                                    ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">   Courses</label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php
                                                                    $COURSE = new Courses($STUDENT->course);
                                                                    echo $COURSE->name
                                                                    ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">  Package Name </label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php
                                                                    $PACKAGES = new Packages(NULL);
                                                                    foreach ($PACKAGES->all() as $key => $packages) {
                                                                        if ($packages['id'] == $STUDENT->package) {
                                                                            echo $packages['name'];
                                                                        }
                                                                    }
                                                                    ?>">
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">     Stay in korea</label>

                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->stay_in_korea ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">Unlegal Activities in sri lanka</label>

                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->unlegal_activity ?>">
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">How You Know about our company </label>
                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php
                                                                    foreach ($DEFULTDATA->source() as $key => $source) {
                                                                        if ($key == $STUDENT->resource) {
                                                                            echo $source;
                                                                        }
                                                                    }
                                                                    ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address">Previously stay in any forign country?. </label>

                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->time_period ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address"> Current Job</label>

                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->curent_job ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mb-4">
                                                                    <label class="form-label" for="billing-email-address"> Job Experience</label>

                                                                    <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="<?php echo $STUDENT->job_experience ?>">
                                                                </div>
                                                            </div>

                                                        </div> 
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                                   
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <?php include './footer.php'; ?>
            </div>
            <!-- end main content-->

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
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/product.js" type="text/javascript"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
