<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/w3.css">
<style>
.image:hover {
	cursor: pointer;
  -ms-transform: scale(1.0); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  transition: transform 0.5s ease, box-shadow 0.5s ease;
}

/* Grid Container */
.grid-container {

    box-sizing: border-box;
	border-radius: 12px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
	max-width:  100%;
	max-height: 100%;
	margin-left: 25px;
	width:950px;
	/* background: rgb(255, 0, 0); */
    padding: 5px;
	margin-top: 20px;
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.2);
   
}

.grid-item:hover {
  align-items: center;
  place-content: center;
  max-width: 700px;
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}
/* Grid Items */
.grid-item {
	
	height: 250px;
	box-sizing: border-box;
	border-radius: 8px;
	cursor: pointer;
    background-color:rgb(255, 252, 252);
    border: 1px solid #ddd;
    padding: 20px;
    text-align: center;
    font-size: 1.2em;
	transition: transform 1s ease, box-shadow 0.3s ease;
}
.crackercard{
    width: 100px;
    height: auto;

}

/* Responsive Design */
@media (max-width: 768px) {
    .grid-container {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
}

@media (max-width: 480px) {
    .grid-container {
        grid-template-columns: 1fr;
    }
}

.crackercard{
	width: 18rem;
	height: 12.8rem;
  display: inline-block;
  align-self: center;


}
.btn-product{
	background-color: #ED3237;
	color:#f4f4f4;
	width: 150px;
	height: 50px;
	border-radius: 8px;
	border-color: #ddd;
	place-content: center;
	align-items: center;
	text-decoration: none;
	margin-left: 410px;
	
}
.btn-product a{
	color: #f4f4f4;
	text-decoration: none;
}
.btn-product:hover{
	text-decoration: none;
	color: #f4f4f4;
	background-color:rgb(185, 9, 14);
}
.btn-product a:hover{
	text-decoration: none;
	color: #f4f4f4;
	background-color:rgb(185, 9, 14);
}
.pro-heading{
	font-family: Georgia, 'Times New Roman', Times, serif;
	align-content: center;
	width: 100%;
	font-size: 3rem;
}
.banner .image{
	margin-top: 0px;
	width: 100%;
	height:auto;
}

.banner-section{
	width: 1000px;
	height:auto;

}
.image-container{
	background-image: url();
	display: flex;
	position: relative;
            justify-content: space-evenly;
            flex-wrap: nowrap;
            gap: 3px;
			
			margin: 3px;
			margin-top: 1%;
}

.image-container img {
            width: 48%; 
            height: auto;
            max-width: 100%;
}
/* responsive designs for index page */

/* Extra Large Devices (4K Displays) */
@media only screen and (min-width: 1441px) {
  .banner .image{
	margin-top: 3px;
    width:100% 
  }
}
/* Large Devices (Desktops) */
@media only screen and (min-width: 1024px) and (max-width: 1200px){
  .banner .image{
	margin-top: 2px;
    width: 100%;

  }
  .image-container img {
                width: 50%;
            }

}
/* Medium Devices (Small Laptops) */
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .banner .image{
	margin: auto;
    margin-top: 20%;
    width: 100%;
  }
  .image-container img {
                width: 50%; 
            }
}
/* Small Devices (Tablets) */
@media only screen and (min-width: 480px) and (max-width: 767px) {
	.banner .image{
    margin-top: 30%;
    width: 100%;
  }
  .image-container{
	flex-wrap: wrap;
  }

  .image-container img {
                width: 100%; 
            }
}
/* Extra Small Devices (Phones) */
@media only screen and (max-width: 479px) {
	.banner .image{
    margin-top: 40%;
    width: 100%;
  }
  .image-container{
	flex-wrap: wrap;
  }
  .image-container img {
                width: 100%; 
            }
}

</style>
 
</head>
<body>
	<?php include "head.php";  ?>
 <div class="banner">
	<img class="image" src="crackersimages/aboutdiwalibanner.jpg" alt ="banner" >
</div>
<div class="image-container">
        <img src="crackersimages/Day-Time.jpg" alt="Day time crackers">
        <img src="crackersimages/Night-Crackers-1.jpg" alt="Night time crackers">
    </div>



		<div class="pro-heading"><h1>Products</h1></div>
		<!-- double banner section end crackersimages/Day-Time.jpg crackersimages/Night-Crackers-1.jpg -->
					<?php // include "department_cad_card.php";  ?>
	<div class="grid-container">
						
        <div class="grid-item">
            <img src="crackersimages\1000walafire.jpg" class="crackercard">
        </div>
        <div class="grid-item">
            <img src="crackersimages\fire1000wala.jpg" class="crackercard">
        </div>
        <div class="grid-item">
            <img src="crackersimages\crackersproducts.jpg" class="crackercard">
        </div>
        <div class="grid-item">
            <img src="crackersimages\crackers-3.jpg" class="crackercard">
        </div>
        <div class="grid-item">
            <img src="crackersimages\crackers-2.jpg" class="crackercard">
        </div>
        <div class="grid-item">
            <img src="crackersimages/flowerpot.jpg" class="crackercard">
        </div>

		<button class="btn-product"><a href="product.php"> All Products</a></button>
    </div>
					<!-- <div class="products">
						<div style="padding-left:30px; padding-top:30px; padding-bottom:30px; padding-right:30px;">
							<div class="products_head"><h2 style="font-weight:900;">Our other concerns</h2></div>
								<div class="col-md-3 col-sm-3 col-xs-12 col-concern">
									<a href="" alt="caddschool-softech"></a>
								</div> -->

								<!--<div class="col-md-3 col-sm-3 col-xs-12 col-concern">
									<a href="http://www.projectschool.in" target="_blank"><img class="image" src="images/caddschool-concern/project-image.png" alt="project-image"></a>
								</div>

								<div class="col-md-3 col-sm-3 col-xs-12 col-concern">
									<a href="http://www.jobschool.in" target="_blank"><img class="image" src="images/caddschool-concern/jobschool-logo.png" alt="jobschool-logo"></a>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-12 col-concern">
									<a href="http://www.caddeducation.com" target="_blank"><img class="image" src="images/caddschool-concern/cadd-camp.png" alt="cadd-camp"></a> -->
								</div>
							</div>
						</div>
					</div>
				 <?php  include('footer.php'); ?>
			<script>
			$(function () {
				$(".demo2").bootstrapNews({
					newsPerPage: 3,
					autoplay: true,
					pauseOnHover: true,
					navigation: false,
					direction: 'down',
					newsTickerInterval: 1500,
					onToDo: function () {
						// console.log(this);
					}
				});
			});

			$("#flexiselDemo4").flexisel({
				visibleItems: 5,
				itemsToScroll: 1,		 
				autoPlay: {
					enable: true,
					interval: 5000,
					pauseOnHover: true
				}		
			});
			$("#company_logoss").flexisel({
				visibleItems: 4,
				itemsToScroll: 1,		 
				autoPlay: {
					enable: true,
					interval: 5000,
					pauseOnHover: true
				}		
			});
		</script>
	</body>
</html>