<?php
include "head.php";

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
  font-family: Georgia, 'Times New Roman', Times, serif;
}

.aboutimg{
  margin-top:-10px;
  height: auto;
  width: 1000px;
}
.aboutimg:hover{
        cursor: pointer;
        -ms-transform: scale(1.0); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  transition: transform 0.8s ease, box-shadow 0.5s ease;
      }
.about-content div{
    font-size: 18px;
    padding: 25px;
    font-weight: 500;
    line-height: 1.8;
    text-align: justify;
}


.about-image a {
  display: block;
  position: relative;
  margin-left:20px;
  margin-top: 30px;
  margin-bottom: 20px;
 }

 


  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .about-image a {
      margin-left: 0; } }
  @media only screen and (max-width: 767px) {
    .about-image a {
      margin-left: 0; } }

  .about-image a ::before {
    /* content: "\f04b"; */
   cursor: move;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -30px;
    margin-top: -30px;
    background-color: #ffffff;
    color: #83a931;
    width: 60px;
    height: 60px;
    font-size: 22px;
    text-align: center;
    line-height: 62px;
    padding-left: 2px;
    z-index: 9;
    border-radius: 50%; }
  .about-image a:hover::before {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2); }
  .about-image a::after {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #000000;
    z-index: 1;
    content: "";
    opacity: 0.25; }
  .about-image a img {
    width: 100%; }

/*-- About Content --*/
.about-content {
  margin-top: 10px; }
  
  .about-content h2 {
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 20px;

 }
    .about-content h2 span {
      color: #ED3237; }

      .about-content p{
        text-align: justify;
        padding-right: 25px;
      }
      .about-content a{
        margin-left: 150px;
       justify-content: center;
       justify-content: space-around;
      }
  .about-content .button {
 
    display: inline-block;
    height: 40px;
    line-height: 20px;
    padding: 8px 30px;
    font-size: 14px;
    border-radius: 30px;
    border-width: 5px;
    border-color:rgb(233, 233, 233);
    background-color:rgb(240, 76, 81);
    color: #ffffff;
    text-transform: uppercase;
    font-weight: 700;
    margin-top: 14px; 
    margin-bottom: 14px;
   
    }

   
    .about-content a.button:hover {
      background-color: #ED3237; }

      

      .about-icon{
        width: 100%;
        margin: auto;
        padding: 10px;
      }
    
      .about-icon ul {
       display: flex;
       width: 100%;
       justify-content: space-evenly;
       /* background-color: #000000; */
        align-items: center;
        flex-wrap: wrap;
        align-content: center;
        
      }
    
      .about-icon ul li .icon{
      flex-basis: 10%;
      height: 120px;
   
       
      }
.sub-content{
  display: flex;
  font-size: 18px;
  text-align: center;
  text-transform: capitalize;
  font-family:Georgia, 'Times New Roman', Times, serif;
  font-style: normal;
  font-weight: 800;
  list-style: none;
  align-content: center;
  justify-content: space-around;
}
@media only screen and (min-width: 1024px) and (max-width: 1200px) {
.about-content .button{
  margin-left: 400px;
}
.about-content{
  width: 100%;
  height: auto;
  margin: auto;
}
  .aboutimg{
  height: auto;
  width: 100%;
}
  }

      
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .about-content{
  width: 100%;
  height: auto;
  margin: auto;
}
  .aboutimg{
  margin-top:150px;
  height: auto;
  width: 100%;
}
  .about-content a {
        display: flex;
        justify-content: space-evenly;
        align-content: center;
        padding-left: 758px;
   

      }
  .about-icon ul{
        display: flex;
        align-items: center;
        margin: auto;
        width: 100%;
    
      }
    
      .about-icon ul .icon{
        width: 100px;
        height: auto;
        align-items: center;
        align-content: space-evenly;
        flex-wrap: wrap;
      }
.sub-content {
  margin: 3px;
  margin-left: -30px;
  font-size: large;
  font-weight: 600;
  text-align: center;
  justify-content: space-evenly;
 
}
.about-content .button{
        margin: 5px;
        justify-content: space-evenly;
        margin-left: 270px;
      }

}
  @media only screen and (min-width: 480px) and (max-width: 767px) {
    .aboutimg{
  margin-top:170px;
  height: auto;
  width: 100%;
}
.about-content{
  width: 100%;
  height: auto;
  margin: auto;
} 
    .about-icon ul{
        display: flex;
        align-items: center;
        width:80%;
      align-content: space-evenly;
      }
    
      .about-icon ul li .icon{
        margin-left: 35%;
       width: 55%;
        height: auto;
        align-items: center;
        align-content: space-evenly;
      }

      .about-content .button{
        margin-left: 35%;
            }
   
.sub-content{
  font-size: 18px;
  text-align: center;
 margin-left: 10%;
  
  text-transform: capitalize;
  font-family:Georgia, 'Times New Roman', Times, serif;
  font-weight: 900;
  list-style: none;
  align-content: space-evenly;
}

  }
  @media only screen and (max-width: 479px) {
    .aboutimg{
  margin-top:170px;
  height: auto;
  width: 100%;
}

.about-content .button{
  margin-left: 30%;
}
    
    .about-icon ul{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-left: 15%;
        width: 80%;
      }
    
      .about-icon ul li .icon{
        width:80%;
        height: auto;
        align-items: center;
        align-content: space-evenly;
        align-content: center;
        padding-inline: 27px;
        margin-right: 80%;
      }

.sub-content{
  width: 120px;
  text-align: center;
  font-size: 18px;
  text-transform: capitalize;
  font-family:Georgia, 'Times New Roman', Times, serif;
  font-weight: 1000;
  list-style: none;
  align-content: space-evenly;
  padding-inline: 35px;
  margin-left:5%;
} }



</style>
</head>
<body>


                
    <div class="aboutbanner">
<!-- About Banner -->
<img class="aboutimg" src="crackersimages\aboutvasukicrackers.jpg"alt="about banner" >
   
</div>

    <div class="about-image col-lg-6 col-12 mb-30">
                    <a><img src="crackersimages\ai-generated-9137709_1920.jpg" alt=""></a>
                </div>
    <div class="about-content col-lg-6 col-12 mb-30" > <h2>About <span>us</span></h2>
    <p>Safety is our priority. Every cracker in our collection is carefully manufactured and tested to meet government-approved safety standards. We also believe in celebrating responsibly, which is why we encourage the use of eco-friendly crackers to protect the environment and ensure the well-being of future generations.</p>
    <p><b>
    Shop now and make your celebrations brighter, safer, and unforgettable!
   </b></p> 
    <a href="product.php" class="button">Order Now</a>
    </div>

    <div class=about-icon>
        <ul>  
        <li> <img src="crackersimages\high-quality.gif"class="icon"/>
        <p class="sub-content">Top <br>Quality Products</p>
         <li> <img src="crackersimages\best-price.gif"class="icon"/>
        <p class="sub-content">Exclusive <br> offers</p>
      </li>
         <li><img src="crackersimages\doordelivery.gif" class="icon">
         <p class="sub-content">Eco-Friendly <br>crackers</p>
        </li>
        </ul>
    
  
    </div>
        


</body>
</html>



<?php
include "footer.php";
?>