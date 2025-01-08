<!doctype html>
<?php
include '../class/include.php';
include './auth.php';

$PURCHASE = new Purchase(NULL);
$last_id = $PURCHASE->getLastID();
$ITEMS_CODE = $last_id + 1;
?>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Create Purchase - Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <l
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
                                    <h4 class="mb-0">Create Purchase</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Create Purchase </li>
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

                                        <h4 class="card-title">Create Purchase</h4>
                                        <form id="form-data">

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Purchase Code</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"  placeholder="Enter item code" id="purchase_code" name="purchase_code" readonly="" value="<?php echo 'P-' . $ITEMS_CODE ?>">
                                                </div>
                                            </div>
                                           
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Purchase Date</label>
                                                <div class="col-md-10">
                                                    <div class="input-group" id="datepicker1">
                                                        <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                               data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker" id="purchase_date" name="purchase_date"> 

                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Select Purchase Item</label>
                                                <div class="col-md-10" >
                                                    <select class="form-control" name="purchase_item" id="purchase_item" >
                                                        <option value=""> -- Select Purchase Item -- </option>
                                                        <?php
                                                        $ITEMS = new Items(NULL);
                                                        foreach ($ITEMS->all() as $item) {
                                                            ?>
                                                            <option value="<?php echo $item['id'] ?>"> <?php echo $item['item_name'] ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Select Supplier</label>
                                                <div class="col-md-10" >
                                                    <select class="form-control" name="supplier" id="supplier" >
                                                        <option value=""> -- Select Supplier -- </option>
                                                      <?php
                                                        $SUPPLIER = new Supplier(NULL);
                                                        foreach ($SUPPLIER->all() as $supliers) {
                                                            ?>
                                                            <option value="<?php echo $supliers['id'] ?>"> <?php echo $supliers['name'] ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Purchase Quantity</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="number" min="0"  placeholder="Enter Purchase Quantity" id="quantity" name="quantity">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Price per unit</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"  placeholder="Enter Price per unit  " id="unit_price" name="unit_price">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="float-end">
                                                <button type="submit" class="btn btn-primary w-md" id="create">Create</button>
                                            </div>
                                            <input type="hidden" name="create">
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
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>

        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js"></script>
        <script src="ajax/js/purchase.js" type="text/javascript"></script>
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="delete/js/slider.js" type="text/javascript"></script>
    </body>
</html>
