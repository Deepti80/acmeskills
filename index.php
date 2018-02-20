<?php
require 'header.php';
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylein.css">
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
	  height:600px;
  }
  .carousel1{
	  width:1400px;
	  margin-left: -20px;
  }
  .container{
	  width:100%;
  
  }
  .course-size{
	  border-radius:60px;
  }
  .parallax {
    /* The image used */
    background-image: url("slider3.jpg");

    /* Set a specific height */
    min-height: 300px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax-page {
    /* The image used */
    background-image: url("tech2.jpg");

    /* Set a specific height */
    min-height: 300px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	opacity:2;
}
.mid-parallax{
	background-color:#dcd8d8;
	margin-top:0px;
	height:500px;

}
.separator
{
	margin-top:10px;
	height: 1px;
    width: 91px;
margin-bottom: 50px;}

</style>
  </style>
</head>
<body>

<div class="container">
  
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	 <div class="item active">
        <img src="img1.jpg" alt="skill" width="460" height="345">
        <div class="carousel-caption">
          <h3>Motto</h3>
          <p>Aim High  Achieve High.....</p>
        </div>
      </div>

      <div class="item ">
        <img src="softskill.jpg" alt="skill" width="460" height="345">
        <div class="carousel-caption">
          <h3>Skills</h3>
          <p>Skill Development Encourage Confidence.......</p>
        </div>
      </div>

     
    
      <div class="item">
        <img src="tech1.jpg" alt="skill" width="460" height="345">
        <div class="carousel-caption">
          <h3> Vision</h3>
          <p>Touch the sky, Through Technologies.....</p>
        </div>
      </div>

      <div class="item">
        <img src="mentor.jpg" alt="skill" width="460" height="345">
        <div class="carousel-caption">
          <h3>Mission</h3>
          <p>Our Mission is Skill Development</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--<div class="image-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img1.jpg" class="img-size">
  <div class="text"><p style="text-align:right; margin-top:100px;">Our Mission is <br>Skill Development....<p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="recruit.png"  class="img-size">
  <div class="text"><p></p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="softskill.jpg"  class="img-size">
  <div class="text"><p style="text-align:right; margin-top:100px;">Skill development  <br>encourage confidence.....</p></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="mentor.jpg"  class="img-size">
  <div class="text"><p style="text-align:right; margin-top:100px;">Education is the development of <br>power and ideal</p></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slider3.jpg" class="img-size">
  <div class="text"><p></p></div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>-->


<!--<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>-->

<div id="welcome">
<h2 style="color:#ffffff;float:right;margin-top:40px; margin-right:350px;text-align:left;" >WELCOME TO ACME SKILLS</h2>

<img src="welcome.png">

</div>
<div id="image-container">
<div id="image-wraper">
<a href=""><img src="images1.jpg" alt="" class="size"><span>Our Mission</span></a>
<a target="" href="" ><img src="images2.jpg"  alt="" class="size"><span>Our Team</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="size"><span>Our Work</span></a>
<a target="" href="" ><img src="images4.jpg" alt="" class="size "><span>Our Campus</span></a>
</div>
</div>
<div class="mid-logo">
<div class="logowrap">
<ul>
<li><a href="#">LINK 1</a></li>
<li><a href="#">LINK 2</a></li>
<li><a href="#">link 3</a></li>
<li><a href="#">link 4</a></li>
</ul>
</div>
</div>
<div class="main-course" >
<strong style="background: transparent; margin-left:600px;margin-top:100px; margin-bottom:100px;font-size:30px;
        vertical-align:center;">OUR COURSES</strong>
<div class="our-courses">
<a target="" href="" ><img src="gadget.jpg"  alt="" class="course-size" style="border-radius:60px;"><span>Our Work</span></a>
<a target="" href="" ><img src="course1.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<div   style="margin-left:150px; margin-top:60px;"class="our-mid-course">
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
</div>
</div>
</div>

<div class="parallax"> <p>this is the test data for the testing of parallax design</p></div>
<div class="mid-parallax">
	
		<h2 style="text-align:center;" > Activities</h2>
		<hr style="margin-left:620px; width:100px;line-height:1px;">
			<div class="separator small center"></div>
			<div class="mid-content" style="height:400px; width:1000px; margin-top:-20px;">
				<div style="width:600px; margin-left:40px;">
					<p style=" margin-top:20px;margin-left:80px; font-size:15px;color:#928989;">Today Computer is a part of our daily life. 
					Now Computer Education is backbone of modern generation, for this essentiality National Institute for Skill Development Mission start various Computer and Vocational Skill Development Training Programs throughout the country. The main focus of NISDM is to promote Computer and Vocational Training education for all.
					We invite all Indian to join the golden mission of Computer Literacy.
					To make the Indian Rural Youth a face to Recon with in the Emerging Markets.</p>
  
						<div style="float:right; margin-top:-250px; margin-right:-500px;width:300px"><img src="images5.jpg"><img src="images6.jpg">
					</div>
		</div>
	</div>
</div>
<div class="parallax-page">
</div>
<div>

</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>


</script>
</body>
</html>
<?php
require 'footer.php';
?>

