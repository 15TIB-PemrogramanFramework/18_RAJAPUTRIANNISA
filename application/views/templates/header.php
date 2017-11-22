<!DOCTYPE html>
<html lang="en">
<html>
    <head>

    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="ninodezign.com, ninodezign@gmail.com">
		<meta name="copyright" content="ninodezign.com"> 
		<title>Kelola Setting</title>
	
		<!-- favicon -->
    	<link rel="shortcut icon" href="<?php echo base_url().'assets/'; ?>images/ico/favicon.jpg">
    	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-144-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-114-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-72-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'assets/'; ?>images/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/materialdesignicons.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/jquery.mCustomScrollbar.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/prettyPhoto.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/unslider.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/template.css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<!-- MetisMenu CSS -->
		<link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">
	
		<style>
            .dataTables_wrapper {
                min-height: 500px
            }
            
            .dataTables_processing {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                margin-left: -50%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                color:grey;
            }
        </style>
    </head>
    <body>
	
		<!-- Main Menu -->
		<div id="wrapper">

			<!-- Navigation -->
			<header id="nino-header">
			<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url('home'); ?>">Logout</a>
				</div>
				<!-- /.navbar-header -->
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
							<?php echo generate_sidemenu();?>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>
			</div>
			</header>
			<!-- Main Menu -->
			<div id="page-wrapper">