<!doctype html>
<?php
include '../class/include.php';
include './auth.php';
?>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Customers | Admin panel</title>
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
                                    <h4 class="mb-0">Customers</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Customers</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                   

                                    <div class="table-responsive mb-4">
                                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                            <thead>
                                                <tr class="bg-transparent">
                                                    <th style="width: 20px;">
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck">
                                                            <label class="form-check-label" for="customercheck"></label>
                                                        </div>
                                                    </th>
                                                    <th style="width: 120px;"> ID</th>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Address</th>
                                                    <th>City;</th>
                                                    <th style="width: 120px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                 
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck2">
                                                            <label class="form-check-label" for="customercheck2"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
                                                    <td>
                                                        <div class="avatar-xs d-inline-block me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                J
                                                            </span>
                                                        </div>
                                                        <span>Joe Hardy</span>
                                                    </td>
                                                    <td>JoeHardy@dayrep.com</td>

                                                    <td>
                                                        14 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck3">
                                                            <label class="form-check-label" for="customercheck3"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0121</a> </td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <span>Thomas Hankins</span>
                                                    </td>
                                                    <td>ThomasHankins@dayrep.com</td>

                                                    <td>
                                                        13 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck4">
                                                            <label class="form-check-label" for="customercheck4"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0120</a> </td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <span>Mary Frazier</span>
                                                    </td>
                                                    <td>MaryFrazier@armyspy.com</td>

                                                    <td>
                                                        12 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-danger font-size-12">Deactive</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck5">
                                                            <label class="form-check-label" for="customercheck5"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0119</a> </td>
                                                    <td>
                                                        <div class="avatar-xs d-inline-block me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                S
                                                            </span>
                                                        </div>
                                                        <span>Sam Perry</span>
                                                    </td>
                                                    <td>SamPerry@rhyta.com</td>

                                                    <td>
                                                        12 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck6">
                                                            <label class="form-check-label" for="customercheck6"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0118</a> </td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <span>Muriel Myers</span>
                                                    </td>
                                                    <td>MurielMyers@rhyta.com</td>

                                                    <td>
                                                        09 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-danger font-size-12">Deactive</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck7">
                                                            <label class="form-check-label" for="customercheck7"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0117</a> </td>
                                                    <td>
                                                        <div class="avatar-xs d-inline-block me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                J
                                                            </span>
                                                        </div>
                                                        <span>Jessie Jacobs</span>
                                                    </td>
                                                    <td>JessieJacobs@teleworm.us</td>

                                                    <td>
                                                        09 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck8">
                                                            <label class="form-check-label" for="customercheck8"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0116</a> </td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <span>Edward King</span>
                                                    </td>
                                                    <td>EdwardKing@teleworm.us</td>

                                                    <td>
                                                        08 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck9">
                                                            <label class="form-check-label" for="customercheck9"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0115</a> </td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <span>Stacy Webster</span>
                                                    </td>
                                                    <td>StacyWebster@armyspy.com</td>

                                                    <td>
                                                        07 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-danger font-size-12">Deactive</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck10">
                                                            <label class="form-check-label" for="customercheck10"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0114</a> </td>
                                                    <td>
                                                        <div class="avatar-xs d-inline-block me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                A
                                                            </span>
                                                        </div>
                                                        <span>Amy McDonald</span>
                                                    </td>
                                                    <td>AmyMcDonald@jourrapide.com</td>

                                                    <td>
                                                        05 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck11">
                                                            <label class="form-check-label" for="customercheck11"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0113</a> </td>
                                                    <td>
                                                        <div class="avatar-xs d-inline-block me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                T
                                                            </span>
                                                        </div>
                                                        <span>Terry Brown</span>
                                                    </td>
                                                    <td>TerryBrown@dayrep.com</td>

                                                    <td>
                                                        02 Apr, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check text-center">
                                                            <input type="checkbox" class="form-check-input" id="customercheck12">
                                                            <label class="form-check-label" for="customercheck12"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0112</a> </td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <span>Crissy Holland</span>
                                                    </td>
                                                    <td>CrissyHolland@armyspy.com</td>

                                                    <td>
                                                        23 Mar, 2020
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-pill bg-soft-danger font-size-12">Deactive</div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Minible.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>



                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

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
