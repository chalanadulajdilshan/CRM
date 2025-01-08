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
        <title>Manage All Students |  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Create Student</li>
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

                                    <h4 class="card-title">Create Student  </h4>
                                    <form id="form-data">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Student No</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="student_id" name="student_id" placeholder="Enter Student No " value="<?php echo $STUDENT->student_id?>">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Student Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="full_name" name="full_name" placeholder="Enter Student Name">
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="address" name="address" placeholder="Enter Student Address">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Passport Number</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="passport_number" name="passport_number" placeholder="Enter Passport Number">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Time Period</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="time_period" id="time_period">
                                                    <option value="">-- Select Time Period -- </option>
                                                    <?php
                                                    $DEFULTDATA = new DefaultData();
                                                    foreach ($DEFULTDATA->timePeriod() as $key => $tp) {
                                                        ?>
                                                        <option value="<?php echo $key ?>"><?php echo $tp ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">NIC Number</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="nic" name="nic" placeholder="Enter NIC Number">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Phone Number</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="phone_number" name="phone_number" placeholder="Enter Phone Number">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Registration Free</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="registration_free" name="registration_free" placeholder="Enter Registration Free amount">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Course Free</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="course_free" name="course_free" placeholder="Enter Course Free">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Test Free</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="test_free" name="test_free" placeholder="Enter Test Free">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Select Batch</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="batch" id="batch">
                                                    <option value="">-- Select Batch -- </option>
                                                    <?php
                                                    $BATCH = new Batch(NULL);
                                                    foreach ($BATCH->all() as $key => $batch) {
                                                        ?>
                                                        <option value="<?php echo $batch['id'] ?>"><?php echo $batch['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Note</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" id="note" name="note"></textarea>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                <button class="btn btn-primary " type="submit" id="create">Create</button>

                                            </div>
                                            <input type="hidden" name="create">

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>


                </div>
            </div>
            <!-- End Page-content -->


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

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/ecommerce-datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
