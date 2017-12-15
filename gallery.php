<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>Gallery</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
  background-color: rgba(40,40,40,1); width: 70%; margin-left: 15%; margin-top: 5%; margin-bottom: 5%;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>
<img src="Images/gold.png" style="margin-left: 4%; width: 90%; margin-top: -8%;">
<br>
<h2 style="text-align:center; color: rgb(255,215,32); font-family: 'Bad Script', cursive;
  src: url('font-awesome/BadScript-Regular.ttf');">GALLERY</h2>
  <br><br>
<div class="row" >
  <div class="column">
    <img src="Images/4.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Images/4.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Images/4.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="Images/4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/11.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/11.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/11.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/11.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/11.JPG" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/10.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/11.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/12.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/13.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/14.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/15.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
  <div class="column" style="margin-top: 2%;">
    <img src="Images/16.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
  </div>

</div>
<br><br>
<div id="myModal" class="modal" >
  <span class="close cursor" style="margin-top: 5%;" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 16</div>
      <img src="Images/hotel1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 16</div>
      <img src="Images/hue.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 16</div>
      <img src="Images/outdoor.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 16</div>
      <img src="Images/gallery/4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 16</div>
      <img src="Images/gallery/1.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">6 / 16</div>
      <img src="Images/gallery/2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 16</div>
      <img src="Images/gallery/3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 16</div>
      <img src="Images/gallery/5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 16</div>
      <img src="Images/gallery/6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 16</div>
      <img src="Images/gallery/7.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 16</div>
      <img src="Images/gallery/8.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">12 / 16</div>
      <img src="Images/gallery/10.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">13 / 16</div>
      <img src="Images/gallery/11.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">14 / 16</div>
      <img src="Images/gallery/12.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">15 / 16</div>
      <img src="Images/gallery/13.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">16 / 16</div>
      <img src="Images/gallery/9.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img_nature_wide.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_fjords_wide.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains_wide.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>
<img src="Images/gold.png" style="margin-left: 4%; width: 90%; margin-top: -8%;">

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>