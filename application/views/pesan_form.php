<!DOCTYPE html>
<html lang="en">

<head>
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
    </script><script src="<?php echo base_url('natasha_files/request.htm');?>" async="" type="text/javascript"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pesan form</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
<center>
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Form Pembelian Product
      <small></small>
    </h1>
    
        <?php $this->session->flashdata('pesan_skincare') ?>
        <form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
        
          <div class="form-group">
            
            <label>Jumlah</label><br>
            <input type="text" name="jumlah" value=""><br>
            
            
          </div>      
          
          <input type="hidden" name="id_pesanskincare" value="<?php echo $id_pesanskincare; ?>">
          <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
          <input type="hidden" name="id_skincare" value="<?php echo $id_skincare; ?>">

          <button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
          <a href="<?php echo site_url('home/product_member')?>" class="btn btn-default">Cancel</a>
        </form>
      </div>
</center>
</body>

