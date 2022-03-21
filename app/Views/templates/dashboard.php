<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?> | Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/assets/images/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon/favicon-32x32.png') ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon/favicon-16x16.png') ?>" sizes="16x16">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/jqvmap/jqvmap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/adminlte.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/daterangepicker/daterangepicker.css') ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/summernote/summernote-bs4.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('admin/assets/css/custom.css') ?>">

    <script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>

    <?= $this->renderSection('stylesheet') ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto mr-5">
                <a href="<?= base_url('dashboard/logout') ?>" class="btn btn-outline-secondary">Logout</a>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->
            <a href="<?= base_url('/dashboard') ?>" class="brand-link dashboard-logo text-center">
                <img src="<?= base_url() ?>/assets/images/resources/logo.png" alt="Logo"> 
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header"><b>POSTS</b></li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/dashboard/post-create" class="nav-link">
                                <i class="nav-icon far fa-plus-square text-white"></i>
                                <p class="text">Create Post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard') ?>" class="nav-link">
                                <i class="nav-icon far fa-list-alt text-white"></i>
                                <p class="text">All Posts</p>
                            </a>
                        </li>                                                         
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        
        <div class="content-wrapper mt-4">           
            <section class="content">
                <div class="container-fluid">                    
                    <div class="row">
                        <?= $this->renderSection('content') ?>
                    </div>                    
                </div>
            </section>           
        </div>        
        <footer class="main-footer text-center">
            <strong>Copyright &copy; <script>
                document.write(new Date().getFullYear())
                </script></strong>
            All rights reserved.
        </footer>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="admin/plugins/moment/moment.min.js"></script>
    <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/assets/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="admin/assets/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin/assets/js/demo.js"></script>

    <!-- INTERNAL Data tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <?= $this->renderSection('javascript') ?>
    <script>
    CKEDITOR.replace('content', {
        uiColor: '#e623274d',
        removeButtons: 'PasteFromWord'
    });
    </script>
    <script>
    CKEDITOR.config.toolbar = [{
            name: 'document',
            items: ['Source', '-', 'Save', 'NewPage', 'DocProps', 'Preview', 'Print', '-', 'Templates']
        },
        {
            name: 'clipboard',
            items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
        },
        {
            name: 'editing',
            items: ['Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt']
        },
        {
            name: 'forms',
            items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                'HiddenField'
            ]
        },
        {
            name: 'styles',
            items: ['Styles', 'Format', 'Font', 'FontSize']
        },
        {
            name: 'tools',
            items: ['Maximize', 'ShowBlocks']
        } {
            name: 'colors',
            items: ['TextColor', 'BGColor']
        },
        '/',
        {
            name: 'basicstyles',
            items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']
        },
        {
            name: 'paragraph',
            items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv',
                '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'
            ]
        },
        {
            name: 'links',
            items: ['Link', 'Unlink', 'Anchor']
        },
        {
            name: 'insert',
            items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']
        },
        '/',



    ];
    </script>
</body>

</html>