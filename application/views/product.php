	<!DOCTYPE html>
	<html class=" js csstransitions" lang="en"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<!-- Meta Tag -->	
	    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<meta name="keywords" content="Fuchsia, skin, clinic, klinik, perawatan wajah, perawatan kulit, modern technology, anti aging, anti acne, penuaan dini, hair series, hairmate series">
	<meta name="description" content="Pusat perawatan wajah dan klinik kecantikan kulit yang memadukan teknologi terkini dalam perawatan kulit dan tenaga profesional yang siap membantu Anda wujudkan impian kulit sehat dan terawat">
	<link rel="shortcut icon" href="http://www.natasha-skin.com/upload/images/favicon/fav_ofm5DVF.png">

	<title>Fuchsia Skin Clinic Center - Klinik Kecantikan Pusat Perawatan Wajah dan Kulit - About</title>


		
			<!-- Css -->	
		<link rel="stylesheet" href="<?php echo base_url('natasha_files/bootstrap.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/style_002.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/color.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/jquery_003.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/flexslider.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/bootstrap-responsive.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/main.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/font-awesome.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/jquery.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('natasha_files/style.css');?>"/>

	<link rel="stylesheet" href="<?php echo base_url('natasha_files/jquery_002.css');?>"/>	
	<script src="<?php echo base_url('natasha_files/analytics.js');?>" async="">
		
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-98291804-1', 'auto');
	  ga('send', 'pageview');
	</script><script src="<?php echo base_url('natasha_files/request.htm');?>" async="" type="text/javascript"></script></head>
	<body id="home">
		<div class="wrapper">
			<!-- Header -->	
			<div class="header">        
		<div class="top-strip" id="back-top"><div class="container"></div></div>
		<div class="navigation home">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo visible-desktop">
							
								<img src="<?php echo base_url('natasha_files/img_jagKKrJ.jpg');?>" class="img-responsive" alt="Fuchsia Skin Clinic Center" height="150px">
							</a>
						 </div>
					</div>
					<div class="col-sm-10 visible-desktop">
						<ul style="padding-bottom: 10px">
							<li style="padding:31px 15px 4px 6px;">
								<a href="<?php echo site_url('home/about');?>">ABOUT US</a></li>
							<li style="padding:31px 15px 4px 6px;">
							<a href="<?php echo site_url('home/treatment');?>">TREATMENT</a></li>
							<li style="padding:31px 15px 4px 6px;">
							<a href="<?php echo site_url('home/product');?>">PRODUCT</a></li>
							<li style="padding:31px 15px 4px 6px;">
							<a href="<?php echo site_url('home/contact');?>">CONTACT US</a></li>
							<li style="padding:31px 15px 4px 6px;">
							<a href="<?php echo site_url('home/login');?>">LOGIN</a></li>
						</ul>
					</div>
				</div>
				<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index">Home</a>
        </li>
        <li class="breadcrumb-item active">Produk | Skincare</li>
      </ol>
			</div>
		</div>

		  <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Produk/Skincare
        <br><small>"Jika ingin pesan product, silahkan login terlebih dahulu"</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index_member">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url()."Welcome/status_member/".$this->session->userdata('username'); ?>">Status Pemesanan</a>
      </ol>
      
        
    
      <div class="row">
        <?php foreach ($skincare as $key => $value) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo site_url()?>assets/uploads/<?php echo $value->gambar_skincare; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                
              </h4>
                <ul class="list-group list-group-flush">
                   
                    <li class="list-group-item"> <?php echo $value->nama_skincare; ?></li>
                    <li class="list-group-item"> <?php echo $value->deskripsi_skincare;; ?></li>
                    <li class="list-group-item"><?php echo $value->harga_skincare; ; ?></li>

                    <li class="list-group-item">
                        <center><a href="<?php echo base_url()."Home/login"?>" class="btn btn-primary">Pesan</a>
                        
                    </li>
                </ul>
            </div>
          </div>
          
        </div><?php } ?>
 
      </div>

      <!-- Pagination -->
      
    </div>
    <!-- /.container -->