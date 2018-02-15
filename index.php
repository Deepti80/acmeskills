<?php
require 'header.php';
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylein.css">
</head>
<div class="image-container">

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

</div>


<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div id="welcome">
<img src="images1.jpg">
<h2 style="float:right;margin-top:-0px;" >WELCOME TO ACME SKILLS</h2>
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
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<div   style="margin-left:150px; margin-top:60px;"class="our-mid-course">
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
<a target="" href="" ><img src="images3.jpg"  alt="" class="course-size"><span>Our Work</span></a>
</div>
</div>
</div>
<div class="parallax-page">
<img src="slider3">
</div>
<script>
var slideIndex=0;
showSlides();
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(){
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  slideIndex++;
  if(slideIndex>slides.length){slideIndex=1}
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000);
}


</script>
</body>
</html>
<?php
require 'footer.php';
?>

