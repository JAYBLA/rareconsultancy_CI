<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?= $title ?> | Rare-Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('/dashboard/assets/images/favicon.ico') ?>">

        
        <!-- Bootstrap Css -->
        <link href="<?= base_url('/dashboard/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?= base_url('/dashboard/assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?= base_url('/dashboard/assets/css/app.min.css') ?>" rel="stylesheet" type="text/css">

    </head>


    <body data-topbar="dark" data-layout="horizontal">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= base_url('/dashboard/assets/images/logo-sm.png') ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url('/dashboard/assets/images/logo-dark.png') ?>" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= base_url('/dashboard/assets/images/logo-sm.png') ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url('/dashboard/assets/images/logo-light.png') ?>" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm me-2 font-size-24 d-lg-none header-item waves-effect waves-light"
                            data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="mdi mdi-menu"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fa fa-search"></span>
                            </div>
                        </form>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= base_url('dashboard/assets/images/users/user-4.jpg') ?>"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My
                                    Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
                                        class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i
                                        class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-starter.html">
                                        <i class="ti-home me-2"></i>Starter Pages
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layouts-horizontal.html">
                                        <i class="ti-home me-2"></i>Horizontal
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button">
                                        <i class="ti-archive me-2"></i> Authentication
                                    </a>

                                    <div class="dropdown-menu px-2" aria-labelledby="topnav-auth">
                                        <a href="pages-login.html" class="dropdown-item">Login 1</a>
                                        <a href="pages-register.html" class="dropdown-item">Register 1</a>
                                        <a href="pages-recoverpw.html" class="dropdown-item">Recover Password 1</a>
                                        <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen 1</a>
                                        <a href="pages-login-2.html" class="dropdown-item">Login 2</a>
                                        <a href="pages-register-2.html" class="dropdown-item">Register 2</a>
                                        <a href="pages-recoverpw-2.html" class="dropdown-item">Recover Password 2</a>
                                        <a href="pages-lock-screen-2.html" class="dropdown-item">Lock Screen 2</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                      
                        <?= $this->renderSection('content') ?>


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © <script>document.write(new Date().getFullYear())</script> Veltrix<span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                            </div>
                        </div>
                    </div>
                </footer>


            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        
        <!-- JAVASCRIPT -->
        <script src="<?= base_url('/dashboard/assets/libs/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('/dashboard/assets/libs/metismenu/metisMenu.min.js') ?>"></script>
        <script src="<?= base_url('/dashboard/assets/libs/simplebar/simplebar.min.js') ?>"></script>
        <script src="<?= base_url('/dashboard/assets/libs/node-waves/waves.min.js') ?>"></script>


        <script src="<?= base_url('/dashboard/assets/js/app.js') ?>"></script>

        <!-- INTERNAL Data tables -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>    
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap5.min.js"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>    
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>    
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>    
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
        <?= $this->renderSection('javascript') ?>
    </body>
</html>
