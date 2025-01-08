<?php
$USER = new User($_SESSION['id']);
?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="20">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="uil-search"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.png"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php echo $USER->username ?>
                    </span>
                    <i class="  bx bx-chevron-down  "></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                            class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                            class="align-middle">View Profile</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span
                            class="align-middle">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><i
                            class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span
                            class="align-middle">Settings</span> <span
                            class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span
                            class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="log-out.php"><i
                            class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                            class="align-middle">Sign out</span></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="uil-cog"></i>
                </button>
            </div>

        </div>
    </div>
</header>

<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="40">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.php">
                        <i class=" bx bx-home "></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="create-unit.php">
                        <i class="  bx bx-images  "></i>
                        <span>Add Unit</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i class=" bx bx-box "></i> Manage Unit</a>
                    <ul class="sub-menu" aria-expanded="true">

                        <li><a href="manage-units.php">Pending Units </a></li>
                        <li><a href="">Active Units</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>