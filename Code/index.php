<html><head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name ="author" content="Abhijeet Boswas">
<style>
body
{
<!..background: url('cv.jpg')no-repeat;..!>
background-size: cover;
background-color:  #f4fbfb ;
font-family: ariel;
color: aqua;
}
ul{
margin: 0px;		
padding: 0;
list-style: none;
}
ul li{
float: left;
width: 250px;
height: 40px;
background-color:  #707b7c ;
opacity: 0.8;
line-height: 40px;
text-align: center;
font-size: 20px;
margin-right: 6px;

}
ul li a{
text-decoration: none;
color: white;
display: block;
}
ul li a:hover {
background-color:  #589984;

}
ul li ul li{
display: none;


}	
ul li:hover ul li{
display: block;
time=1;
}
marquee{
speed :3;
color: #d6c233;



}
.slideshow-container {
  max-width: 1000px;
  position: absolute;left:15.5%;top:350px;
  margin: auto;
}

/* Caption text */
.text {
  color: #73c6b6  ;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 10px;
  position :relative; top:100px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* F	ading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}



</style>
</head>
<body>
<center><img src="netcamp-logo.jpg" ></center>
<ul>
<li><a href="home.php" title="Homepage">Home</a></li>
<li title="For students">Student Corner
   <ul>
    <li><a href="login.php">Log IN</a></li>
     <li><a href="sign.php">Sign Up</a></li>
     </ul>
</li>
<li title="About Us">About 
   <ul>		
	 <li><a href="abhijeet.php">ABHIJEET BISWAS</a></li>	
   </ul>
</li>
<li title="Contact us">Contacts
    <ul>
	<li><a href="http://facebook.com/netcamp">Facebook</a></li>
	<li><a href="http://netcamp.in">NETCAMP</a></li>
	<li><a href="http://twiter.com/netcamp_in">Twitter</a></li>
	</ul>
</li>
<li>
<a href="login.php" title="For admin only">Admin Login</a>
</li>

       
</ul>
<br><br>
<marquee width="50%" direction="right" style="position:absolute;top:300px">
Welcome to Netcamp solutions.
</marquee>

<marquee width="50%" direction="left" style="position:absolute;left: 50%;top:300px" >
Limited seats!!  Register now!!
</marquee>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="n1.jpg" style="width:100%">
  <div class="text">MNNIT 2017</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="n2.jpg" style="width:100%">
  <div class="text">MNNIT 2017</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="n3.jpg" style="width:100%">
  <div class="text">MNNIT 2017</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex >	 slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div style="color:#ec7063;size=15px;position:absolute;left: 650px;top:1150px">
<center><hr><p>Copyright,2017.</p><hr></centre>
</div>

</body>
</html>	