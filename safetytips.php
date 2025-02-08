<?php
include"head.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safety Tips</title>
</head>
<style>

*{
  font-family: Georgia, 'Times New Roman', Times, serif;
}

    #safety-tips {
 /* background-image: url("crackersimages/fire1000wala.jpg"); */
 /* background-repeat: no-repeat;
  background-color:rgb(255, 255, 255); */
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 10px;
  margin: 20px auto;
  max-width: 800px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  background-size: fixed;
  font-family: 'Poppins';
}

#safety-tips h2 {
  color: #d9534f;
  text-align: center;
}

#safety-tips ul {
  list-style-type: none;
  padding: 2px;
  font-size: 1.5rem;
}

#safety-tips li {
  margin: 10px 0;
  padding-left: 20px;
  position: relative;
}

#safety-tips li::before {
  padding-right: 15px;
  content: "✔️";
  position: absolute;
  left: 0;
  top: 0;
  color: #5cb85c;
}

.safteybanner{
  width:auto;
margin: auto;
}
.safteybanner img{
width: 1000px;
place-items: center;
align-items: center;
height: 250px;
background: fixed;
margin-top: 0px;

}
.bottomimg img{
  
  width: 290px;
  background-attachment: fixed;
  background-size: auto;
  backface-visibility: visible;
  height: 180px;
  margin-top: -660px;
  margin-left: 480px;
  animation: pulse1 2s infinite;
  
}
@keyframes pulse1 {
    0%, 100% {
        transform: scale(1);
        color:rgb(243, 0, 0);
    }
    50% {
        transform: scale(1.03);
        color: #ffeb3b;
    }
}

/* new css file */

#safety-tips {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Heading */
#safety-tips h2 {
    font-size: 4rem;
    color: #e94560;
    text-align: center;
    font-weight: 700;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    animation: shake 1s ;
    animation-iteration-count: 2;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

/* Paragraph */
#safety-tips p {
    font-size: 2rem;
    text-align: center;
    color: #ffffff;
    margin-bottom: 30px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        color:rgb(243, 0, 0);
    }
    50% {
        transform: scale(1.05);
        color: #ffeb3b;
    }
}

/* Tips Container */
#safety-tips {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

/* Individual Tips */
.tip {
    background: rgba(255, 255, 255, 0.1);
    padding: 5px;
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.tip:hover {
  align-items: center;
  place-content: center;
  max-width: 800px;
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

.tip h3 {
  font-family: 'Poppins';
  text-align: center;
    font-size: 2.5rem;
    color:#28156F;
    
}

.tip ul li {
  font-family: 'Poppins';
    font-size:  1.8rem;
    margin: 10px;
    margin-left: -60px;
    line-height: 2.5rem;
    padding-right:10px ;
}

.tip ul li strong{
  padding-left: 10px;
  font-size: 1.5rem;
}
/* Responsive Design */
@media (max-width: 768px) {
    #safety-tips h2 {
        font-size: 2rem;
    }

    #safety-tips p {
        font-size: 1rem;
    }

    .tip h3 {
        font-size: 1.2rem;
    }

    .tip p {
        font-size: 0.9rem;
    }
}

#safetytips .tip ul li{
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

.bannerimage:hover{
  cursor: pointer;
  -ms-transform: scale(1.0); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  transition: transform 0.5s ease, box-shadow 0.5s ease;
}
</style>
<body>



  <div class="safteybanner">
  <img class="bannerimage" src="crackersimages/contactwishesbannerr.jpg"alt="" style="background-image: url('crackersimages/banner3.png');">
    </div>
    <section id="safety-tips">
    
    <h2> Safety Tips</h2>
    <p ><strong>Make Your Celebrations Memorable and Safe!!!</strong></p>
 
  <div class="tip">
    <h3>Before Lighting Firecrackers</h3>
    <ul>
      <li> <strong> From Licensed Vendors</strong>: firecrackers meet safety standards.</li>
      <li> <strong>Choose an Open Space</strong>: Select an area away from buildings, vehicles, and flammable materials.</li>
      <li> <strong>Wear Safe Clothing</strong>: Prefer cotton clothes to avoid accidents with synthetic fabrics.</li>
      <li> <strong>Keep Water & Sand Handy</strong>: Be prepared for emergencies with a water bucket or sand nearby.</li>
      <li> <strong>Supervise Children</strong>: Always have adults around to guide kids safely.</li>
    </ul>
  </div>
  <div class="tip">
    <h3>While Lighting Firecrackers</h3>
    <ul>
    <li> <strong>Keep a Safe Distance</strong>: Move away quickly after lighting.</li>
      <li> <strong>Use a Long Stick</strong>: Light firecrackers at arm's length using an incense stick.</li>
      
      <li> <strong>Avoid Holding Firecrackers</strong>: Never ignite firecrackers in your hand.</li>
      <li> <strong>Don't Relight</strong>: If a firecracker doesn't ignite, soak it in water instead of trying again.</li>
    </ul>
  </div>
  <div class="tip">
  
    <h3>After Lighting Firecrackers</h3>
    <ul>
      <li> <strong>Dispose Responsibly</strong>: Immerse used firecrackers in water before throwing them away.</li>
      <li> <strong>Protect Pets</strong>: Keep pets safe indoors to avoid distress from noise.</li>
      <li> <strong>Avoid Smoke</strong>: Stay clear of firecracker smoke to protect your health.</li>
    </ul>
  </div>
  <p style="margin-top: 20px;"><strong>Celebrate Safely. Enjoy Responsibly.</strong></p>
  <div class="bottomimg">
 <!-- <img src="crackersimages/Diwali101690400.jpg" alt="bottom banner">   -->
</div>
   

</section>

</body>
</html>
<?php include "footer.php" ?>