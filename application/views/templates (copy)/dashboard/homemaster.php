<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="<?php echo site_url('assets/dashboard/images/favicon_1.ico') ?>">

        <title>Taxidio - User Dashboard</title>

        <link href="<?php echo site_url('assets/dashboard/plugins/fullcalendar/css/fullcalendar.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo site_url('assets/dashboard/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url('assets/dashboard/css/core.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url('assets/dashboard/css/components.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url('assets/dashboard/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url('assets/dashboard/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url('assets/dashboard/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon.png') ?>" /><link rel="alternate" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

       <script src="<?php echo site_url('assets/dashboard/js/modernizr.min.js'); ?>"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo site_url(); ?>" class="logo">
                          <i class="icon-c-logo"> <img src="<?php echo site_url('assets/dashboard/images/logo_sm.png') ?>" alt="logo" height="42"/> </i>
                            <span><img src="<?php echo site_url('assets/dashboard/images/logo.png') ?>" alt="logo"/></span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                     <?php $this->load->view('includes/dashboard/topbar'); ?>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <?php $this->load->view('includes/dashboard/sidebar'); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <?php $this->load->view($main); ?>
                </div> <!-- content -->

                 <?php $this->load->view('includes/dashboard/footer'); ?>


            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo site_url('assets/dashboard/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/detect.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/fastclick.js'); ?>"></script>

        <script src="<?php echo site_url('assets/dashboard/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/jquery.blockUI.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/waves.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/wow.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/jquery.nicescroll.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/jquery.scrollTo.min.js'); ?>"></script>

        <script src="<?php echo site_url('assets/dashboard/plugins/peity/jquery.peity.min.js'); ?>"></script>

        <!-- jQuery  -->
        <script src="<?php echo site_url('assets/dashboard/plugins/waypoints/lib/jquery.waypoints.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/plugins/counterup/jquery.counterup.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/plugins/raphael/raphael-min.js'); ?>"></script>

        <script src="<?php echo site_url('assets/dashboard/plugins/jquery-knob/jquery.knob.js'); ?>"></script>

        <script src="<?php echo site_url('assets/dashboard/pages/jquery.dashboard.js'); ?>"></script>

        <script src="<?php echo site_url('assets/dashboard/js/jquery.core.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/js/jquery.app.js'); ?>"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>
        <script src="<?php echo site_url('assets/dashboard/plugins/moment/moment.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/plugins/fullcalendar/js/fullcalendar.min.js'); ?>"></script>
        <script src="<?php echo site_url('assets/dashboard/pages/jquery.fullcalendar.js'); ?>"></script>




    </body>
</html>