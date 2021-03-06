<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Traviora</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-toggled">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="<?= base_url('client\index') ?>" class="logo" style="background-color: #1a2226">
                <img src="<?= base_url() ?>assets/img/Logo.png" alt="Logo Traviora" height="50%">
                <span class="logo-lg">Traviora</span>
            </a>
            <nav class="navbar navbar-expand-xl">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </nav>
        </header>

        <!-- Left side column -->
        <aside class="main-sidebar">
            <section class="sidebar">

                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="#">
                            <span>Tour Jawa</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li >
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i>Wisata Gunung Bromo</a>
                            </li>
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i>Banyuwangi</a>
                            </li>
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i> Malang</a>
                            </li>
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i> Yogyakarta</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview <?= $this->uri->segment(1) == 'sales' ||
                                            $this->uri->segment(1) == 'stockin' ||
                                            $this->uri->segment(1) == 'stockout' ? 'active' : ''; ?>">
                        <a href="#">
                            <span>Tour Bali</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i>Tour Pulau Bali</a>
                            </li>
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i>Tour Nusa Penida</a>
                            </li>
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i>Tour Nusa Lembongan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <span>Tour Lombok</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i> Tour Pulau Lombok</a>
                            </li>
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i> Penanjakan Gunung Rinjani</a>
                            </li>
                            <li>
                                <a href="<?= site_url('katalog'); ?>"><i class="fa fa-circle-o"></i> Tour Kepulauan Gili</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('client\blog'); ?>"><span>Blog</span></a>
                    </li>
            </section>
        </aside>
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2020 <a href="https://www.linkedin.com/in/m-irvan-alfi-hidayat-63bb28169/">Project1</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dtable').DataTable()
        })
    </script>
</body>

</html>