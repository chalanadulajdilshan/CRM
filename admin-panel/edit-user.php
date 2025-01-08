<!doctype html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];

$USER = new User($id);
 
?>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Edit Users  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="NYSC" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="plugin/sweetalert/sweetalert.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <body class="someBlock">

        <!-- <body data-layout="horizontal" data-topbar="colored"> -->


        <?php include './header.php'; ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Users</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                        <li class="breadcrumb-item active">Manage Users</li>
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

                                    <h4 class="card-title">Add Users</h4>
                                    <form id="form-data">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Full Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Full Name" value="<?php echo $USER->name ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">User Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="url" id="username" name="username" placeholder="Enter User Name" value="<?php echo $USER->username ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">User Type</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="type" id="type">
                                                    <option value="">-- Select User type -- </option>
                                                    <?php
                                                    $DEFULTDATA = new DefaultData();
                                                    foreach ($DEFULTDATA->UserLevels() as $key => $userlevel) {
                                                        if ($key == $USER->type) {
                                                            ?>
                                                            <option value="<?php echo $key ?>" selected=""><?php echo $userlevel ?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $key ?>"><?php echo $userlevel ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Branch</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="branch" id="branch">
                                                    <option value="">-- Select Branch -- </option>
                                                    <?php
                                                    $BRANCHES = new Branches(NULL);
                                                    foreach ($BRANCHES->all() as $key => $branch) {
                                                        if($USER->branch == $branch['id'] ){
                                                         ?>
                                                            <option value="<?php echo $branch['id'] ?>" selected=""><?php echo $branch['name'] ?></option>
                                                        <?php 
                                                    }else{
                                                        ?>
                                                          <option value="<?php echo $branch['id'] ?>" ><?php echo $branch['name'] ?></option>
                                                        <?php
                                                    }
                                                    }?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email" value="<?php echo $USER->email ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Phone Number</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter Phone Number" value="<?php echo $USER->phone ?>">
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                <button class="btn btn-primary " type="submit" id="update">Update</button>

                                            </div>
                                            <input type="hidden" name="update">
                                              <input type="hidden" name="id" value="<?php echo $id ?>"> 

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
    <script src="ajax/js/user.js"></script>

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>


    <!-- App js -->
     <script src="assets/js/app.js"></script>

</body>

</html>