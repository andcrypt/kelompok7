<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url().'admin_assets/plugins/bootstrap/css/bootstrap.css'?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url().'admin_assets/plugins/node-waves/waves.css'?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url().'admin_assets/plugins/animate-css/animate.css'?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url().'admin_assets/plugins/morrisjs/morris.css'?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url().'admin_assets/css/style.css'?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url().'admin_assets/css/themes/all-themes.css'?>" rel="stylesheet" />

     <link href="<?php echo base_url().'admin_assets/plugins/bootstrap-select/css/bootstrap-select.css'; ?>" rel="stylesheet" />

      <script src="<?php echo base_url().'admin_assets/plugins/jquery/jquery.min.js'?>"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
  </script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">OK EVENT</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                   <!--  <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                   
                   
                    <li class="pull-right dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <ul class="dropdown-menu pull-right">
                            <li><?php if($this->session->userdata('logged_in')) : ?>
        <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
        <?php endif; ?></li>
                            

                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url().'admin_assets/images/user.png'?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu OK EVENT</li>

                    <li class="active">
                        <a href="<?php echo base_url().'user' ?>">
                             <i class="material-icons">layers</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'user/event' ?>">
                             <i class="material-icons">layers</i>
                            <span>Event</span>
                        </a>
                    </li>
                    <?php if($this->session->userdata('level') == 1){ ?>
                    <li>
                        <a href="<?php echo base_url().'kategori/kategori' ?>">
                            <i class="material-icons">layers</i>
                            <span>Kategori</span>
                        </a>
                    </li>
                    <?php } ?>
                     <li>
                        <a href="<?php echo base_url().'galeri' ?>">
                            <i class="material-icons">layers</i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <?php if($this->session->userdata('level') == 1){ ?>
                      <li>
                        <a href="<?php echo base_url().'user/user' ?>">
                            <i class="material-icons">layers</i>
                            <span>User</span>
                        </a>
                    </li>
                    <?php } ?>

                    
                    
                
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!-- <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div> -->
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>

    <section class="content">
        <div class="container-fluid">
            
    
        <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>
