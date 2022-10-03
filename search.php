<?php include "connection.php"?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="author" content="">
    
    <title>BOSSNANNY</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- end Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    
    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="css/animation.css">
    <!-- Main Stylesheet CSS -->
    <link rel="stylesheet" href="style.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <style>
        .centered-modal.in {
    display: flex !important;
}
.centered-modal .modal-dialog {
    margin: auto;
}
    </style>
</head>
<body data-spy="scroll" data-offset="25">
<!-- <div class="animationload"><div class="loader">Loading...</div></div> End Preloader -->
       
    <!--/HEADER SECTION -->
    <header class="header">
        <div class="container">
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand">BOSS<span class="slogo">NANNY <span></a>
                    </div><!-- end navbar-header -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a data-scroll href="#home" class="int-collapse-menu">Home</a></li>
                        <li><a data-scroll href="#features" class="int-collapse-menu">Mengapa Kita ?</a></li>
                        <li><a data-scroll href="#order" class="int-collapse-menu">Order</a></li>
						<li><a data-scroll href="#contact" class="int-collapse-menu">Contact</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScg1v1uVQTVF0aV7VOe9Y8GfGZUTKOJBeCvcpruq-fKfXXBiw/viewform">
                            Join Us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </div><!-- end container -->
    </header><!-- end header -->
	            
    
    <!--/ ABOUT SECTION -->   
    <section id="order" class="order-wrapper">
        <div class="container">
            <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center">
                <br><br><br><br><br><br><br>
                <h2>Order</h2>
                <p>Perawat Terbaik Ada Disini</p>
                <p>Harap Isi Semua Kolom Dibawah</p>
                <hr>

                <form action="" method="GET">
                        <div class="form-group">
                            <label>Perawat</label>
                                    <select name="produk" class="form-control mb-2" style="border-radius:40px">
                                        <option value="">Perawat</option>
                                        <option value="ART">ART</option>
                                        <option value="Nanny">Nanny</option>
                                        <option value="Perawat Lansia">Perawat Lansia</option>
                                    </select>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                                    <select name="gender" class="form-control mb-2" style="border-radius:40px">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>                            
                        </div>

                        <div class="form-group">
                            <label>Durasi</label>
                                    <select name="durasi" class="form-control mb-2" style="border-radius:40px">
                                        <option value="sebulan">1 Bulan</option>
                                        <option value="2_Bulan">2 Bulan</option>
                                    </select>                         
                        </div>

                        <div class="form-group">   
                            <label>Lokasi Pasien</label>
                                    <select name="lokasi" placeholder="" class="form-control mb-2" style="border-radius:40px">
                                        <option value="">Lokasi Pasien</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Banyuwangi">Banyuwangi</option>
                                        <option value="Jember">Jember</option>
                                        <option value="Lumajang">Lumajang</option>
                                        <option value="Probolinggo">Probolinggo</option>
                                        <option value="Sidoarjo">Sidoarjo</option>
                                        <option value="Madiun">Madiun</option>
                                        <option value="Ngawi">Ngawi</option>
                                        <option value="Bojonegoro">Bojonegoro</option>
                                    </select>                         
                        </div>
                        
                        <button type="submit" class="text-white text-center btn btn-block" style="background-color: #93C8F0; border-radius:40px"
                    name="submit1">
                        Search
                    </button>
                </form>        
                     
                    
            </div> <!--end reveal-->

            
            <div class="row text-center">

                    <?php
                   include "connection.php";
                   $sql = "SELECT * FROM home";
                   if(isset($_GET["produk"], $_GET["gender"], $_GET["lokasi"])){
                       $pekerjaan = $_GET["produk"];
                       $gender = $_GET["gender"];
                       $lokasi = $_GET["lokasi"];
                       $durasi = $_GET["durasi"];
                       $sql = "SELECT * FROM home 
                       WHERE produk = '$pekerjaan' 
                       AND gender = '$gender'
                       AND penempatan = '$lokasi'";
                   } else {
                        echo "<script>alert('Harap Isi Semua Kolom yang Tersedia!');
                        location.href='search.php'</script>";
                   }

                   # eksekusi SQL
                   $hasil = mysqli_query($conn, $sql);
                   while ($produk = mysqli_fetch_array($hasil)) {
                       ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box" data-effect="helix">
                                <img class="aligncenter" src="data:img/jpeg;base64,<?php echo base64_encode($produk["img"]);?>" width="270" height="270" alt="">
                                <h3><?=$produk["nama"]?></h3>
                                <p><?=$produk["produk"]?></p>
                                <p><?=$produk["alamat"]?>, <?=$produk["penempatan"]?></p>
                            <div class="clearfix"></div>

                            <button type="button" class="btn btn-info"><a style="color:white;"href="https://api.whatsapp.com/send?phone=6282131594086&text=Halo%20Admin%20BossNanny!%20%0A%0ASaya%20ingin%20memesan%20<?=$produk["produk"]?>%20dengan%3A%0ANama%20%3A%20<?=$produk["nama"]?>%0AJenis%20Kelamin%20%3A%20<?=$produk["gender"]?>%0AAlamat%20%3A%20<?=$produk["penempatan"]?>%0A%0ADATA%20PEMESAN%20%3A%0ANama%20Lengkap%20%3A%20%0AEmail%20%3A%20%0ANo.%20Hp%20%3A%20%0AProvinsi%20%3A%20%0AKota%20%3A%20%0AKecamatan%20%3A%20%0AKelurahan%20%3A%20%0AAlamat%20%3A%20">PESAN SEKARANG</a></button>
                            
                    </div> <!-- end teambox -->
                </div> <!-- end column 1 -->
                <?php
            }
            ?>
            
			
            </div><!-- end row 1 -->

                       
            

                  

    <ul class="list-group">
                  

            
          </div>
            </div>
                    </div><!-- end column -->
                        </div>
                    </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- End About Section -->

    <!--/ COUNT SECTION -->       
    <section id="count_parallax" class="parallax" style="background-image: url('demos/parallax_01-Copy.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="overlay">
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section>  
       

    <!-- TESTIMONIAL SECTION -->              
            <div class="testimonial text-center">
                <h2 class="three" data-scroll-reveal="enter from the bottom after 0.2s">Menurut mereka ?</h2>
            </div><!-- end title -->
            
            <div id="testimonial" class="owl-carousel owl-theme text-center">
                <div class="testimonial"  data-scroll-reveal="enter from the bottom after 0.3s">
                    <p> Saya sangat terbantu dengan adanya Nannyboss dan sistem yang ada <br>menjamin PRT
                        yang disalurkan ke saya memahami pekerjaan <br>sehingga saya bisa fokus pada 
                        pekerjaan dan tidak perlu mengajari lagi. <br>Sukses BossNanny
                    </p>
                    <h1> Rudi </h1>
                </div>
                <div class="testimonial">
                    <p>Saya sangat puas dengan Nanny yang disalurkan ke saya. <br>Nanny bisa benar-benar
                        diandalkan dan dipercaya.<br> Sistem evaluasi berkala membuat nanny menjadi lebih aware
                        <br>dengan kinerja dan pekerjaannya</p>
                    <h1> Joseph </h1>
                </div>
                <div class="testimonial">
                    <p>Saya memakai jasa bossnanny.com untuk merawat baby dan sangat terkesan
                        <br>dengan kinerja dan perilaku nanny yang diberikan
                    </p>
                    <h1> Ailein </h1>
                </div>
            </div><!-- end #testimonial -->
            
            <div class="customNavigation">
                <a class="btn prev"><i class="fa fa-angle-left fa-2x"></i></a>
                <a class="btn next"><i class="fa fa-angle-right fa-2x"></i></a>
            </div><!-- end customnav -->
       </div> <!-- end container -->
    </section><!-- Service and Testimonial End --> 
    
    
    
    <!--/ FEATURE SECTION -->  
    <section id="featured_parallax" class="parallax" style="background-image: url('demos/parallax1.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="20">
        <div class="overlay">
            <div class="container">
                <div class="featured-box" data-effect="slide-bottom">
                    <h3>DAPATKAN LAYANAN PRT DAN NANNY<br> TERLATIH DARI KAMI</h3>
                </div>
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section><!--/ Featured Parallex -->  
      
    <!--/ CONTACT AND MAP SECTION -->  
   <section id="contact" class="contact-wrapper">
        <div class="title text-center">
                <h2>Contact Us</h2>
                <p>Hubungi kami dengan cara klik logo dibawah</p>
                <hr>
                
        <div class="container">
            <div class="title text-center">
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="gmail" href="mailto:bossnanny.adm@gmail.com?"><i class="fa fa-envelope-o aligncenter"></i></a>
                        <h2>GMAIL</h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="Maps" href="https://goo.gl/maps/CCXVNU85U7dY8KtU6"><i class="fa fa-map-marker aligncenter"></i></a>
                        <h2>MALANG, INDONESIA </h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box"  data-scroll-reveal="enter from the bottom after 0.6s">
                         <a title="Bossnanny" href="https://wa.me/62895625377577?text=" ><i class="fa fa-phone aligncenter"></i></a>
                        <h2>WHATSAPP </h2>
                    </div>
                </div>
            </div> <!-- end title -->
        </div><!-- end container -->
        
    </section><!--/ Contact End -->  
        
    <!--/ FOOTER SECTION-->  
    <section id="footer" class="footer-wrapper text-center">
        <div class="container">
            <div class="title text-center" data-scroll-reveal="enter from the bottom after 0.5s">
               <div class="aligncenter">     
				  <a href="index.php" class="navbar-brand">Boss <br> <span class="slogo">Nanny <span></a>
                 
                    <div class="socialFooter">
                        
                        <h6>Copyright © 2022 . Made with ❤️ by Moklet29 </h6>
                    </div>
        </div>  <!-- end container -->
    </section><!--/ Footer  End --> 
     
    <!-- SECTION CLOSED -->
     
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/owl.carousel.js"></script>
	<script src="js/jquery.jigowatt.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/jquery.unveilEffects.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
	<script>
		(function ($) {
			var $container = $('.masonry_wrapper'),
				colWidth = function () {
					var w = $container.width(), 
						columnNum = 1,
						columnWidth = 0;
					if (w > 1200) {
						columnNum  = 3;
					} else if (w > 900) {
						columnNum  = 3;
					} else if (w > 600) {
						columnNum  = 2;
					} else if (w > 300) {
						columnNum  = 1;
					}
					columnWidth = Math.floor(w/columnNum);
					$container.find('.item').each(function() {
						var $item = $(this),
							multiplier_w = $item.attr('class').match(/item-w(\d)/),
							multiplier_h = $item.attr('class').match(/item-h(\d)/),
							width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
							height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
						$item.css({
							width: width,
							height: height
						});
					});
					return columnWidth;
				}
							
				function refreshWaypoints() {
					setTimeout(function() {
					}, 1000);   
				}
							
				$('nav.portfolio-filter ul li a').on('click', function() {
					var selector = $(this).attr('data-filter');
					$container.isotope({ filter: selector }, refreshWaypoints());
					$('nav.portfolio-filter ul li a').removeClass('active');
					$(this).addClass('active');
					return false;
				});
					
				function setPortfolio() { 
					setColumns();
					$container.isotope('reLayout');
				}
		
				isotope = function () {
					$container.isotope({
						resizable: true,
						itemSelector: '.item',
						masonry: {
							columnWidth: colWidth(),
							gutterWidth: 0
						}
					});
				};
			isotope();
			$(window).smartresize(isotope);
		}(jQuery));
	</script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        
		<script type="text/javascript">
			var revapi;
			jQuery(document).ready(function() {
			revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,
				hideThumbs:10,
				fullWidth:"off",
				fullScreen:"on",
				fullScreenOffsetContainer: ""
			 });
		   });	//ready
		</script>
		
		
    
    <!-- Animation Scripts-->
    <script src="js/scrollReveal.js"></script>
    <script>
            (function($) {
            "use strict"
                window.scrollReveal = new scrollReveal();
            })(jQuery);
    </script>
    
    <!-- Portofolio Pretty photo JS -->       
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            jQuery('a[data-gal]').each(function() {
                jQuery(this).attr('rel', jQuery(this).data('gal'));
            });  	
                jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
        })(jQuery);
    </script>
          
    <!-- Video Player o-->
    <script src="js/jquery.mb.YTPlayer.js"></script>    
    <script type="text/javascript">
      (function($) {
        "use strict"
          $(".player").mb_YTPlayer();
        })(jQuery);	
    </script>
    
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> -->

</body>
</html>