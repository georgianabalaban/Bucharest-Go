 <?php
require_once('db/sql.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="http://localhost:8080/licenta/css/preferences.css">
</head>
<body>
<form method="post" action="./db/sql.php?action=preferences">
<div class="wrapper">
<div class="row"> 
  <div class="label not-fun">Less History</div>
<div class="slidershell" id="slidershell1">
      <div class="slidertrack" id="slidertrack1"></div>
    <div class="sliderfill" id="sliderfill1"></div>

    <div class="sliderthumb" id="sliderthumb1"></div>

    <input class="slider" name="rangeOne" id="slider1" type="range" min="0" max="50" value="0"
    oninput="showValue(value,1);" onchange="showValue(value,1);"/>
</div>
<div class="label fun">More History</div>

</div>
  
<div class="row"> 
 <div class="label not-fun">Less Nature</div>
<div class="slidershell" id="slidershell2">
      <div class="slidertrack" id="slidertrack2"></div>
    <div class="sliderfill" id="sliderfill2"></div>

    <div class="sliderthumb" id="sliderthumb2"></div>

    <input class="slider" name="rangeTwo" id="slider2" type="range" min="0" max="50" value="0"
    oninput="showValue(value,2);" onchange="showValue(value,2);"/>
</div>
<div class="label fun">More Nature</div>
</div>

<div class="row"> 
 <div class="label not-fun">Less Shopping</div>
<div class="slidershell" id="slidershell3">
      <div class="slidertrack" id="slidertrack3"></div>
    <div class="sliderfill" id="sliderfill3"></div>

    <div class="sliderthumb" id="sliderthumb3"></div>

    <input class="slider" name="rangeThree" id="slider3" type="range" min="0" max="50" value="0"
    oninput="showValue(value,3);" onchange="showValue(value,3);"/>
</div>
<div class="label fun">More Shopping</div>
</div>

<div class="row"> 
 <div class="label not-fun">Less Art</div>
<div class="slidershell" id="slidershell4">
      <div class="slidertrack" id="slidertrack4"></div>
    <div class="sliderfill" id="sliderfill4"></div>

    <div class="sliderthumb" id="sliderthumb4"></div>

    <input class="slider" name="rangeFour" id="slider4" type="range" min="0" max="50" value="0"
    oninput="showValue(value,4);" onchange="showValue(value,4);"/>
</div>
<div class="label fun">More Art</div>
</div>

<div class="row"> 
 <div class="label not-fun">Less Food&Drink</div>
<div class="slidershell" id="slidershell5">
      <div class="slidertrack" id="slidertrack5"></div>
    <div class="sliderfill" id="sliderfill5"></div>

    <div class="sliderthumb" id="sliderthumb5"></div>

    <input class="slider" name="rangeFive" id="slider5" type="range" min="0" max="50" value="0"
    oninput="showValue(value,5);" onchange="showValue(value,5);"/>
</div>
<div class="label fun">More Food&Drink</div>
</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="goo">
          <feGaussianBlur id="blur" in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 26 -9.5" result="goo" />
      </filter>
    </defs>
</svg>

<input type="submit" name="submit" id="submitBtn" value="Change"/>
</form>
</body>
</html>

<script>

function showValue(val,slidernum) {
    /* setup variables for the elements of our slider */
    var thumb = document.getElementById("sliderthumb" + slidernum);
    var shell = document.getElementById("slidershell" + slidernum);
    var track = document.getElementById("slidertrack" + slidernum);
    var fill = document.getElementById("sliderfill" + slidernum);
    var slider = document.getElementById("slider" + slidernum);
    var pc = val/(slider.max - slider.min); /* the percentage slider value */
    var thumbsize = 30; /* must match the thumb size in your css */
    var bigval = 350; /* widest or tallest value depending on orientation */
    var smallval = 30; /* narrowest or shortest value depending on orientation */
    var tracksize = bigval - thumbsize;
    var fillsize = 12;
    var filloffset = 7;
    var bordersize = 2;
    var loc = pc * tracksize;
  
    document.getElementById("blur").setAttribute("stdDeviation", val/10);
    thumb.style.top =   "0px";
    thumb.style.left =  loc + "px";
    fill.style.top =  filloffset + bordersize + "px";
    fill.style.left =  "0px";
    fill.style.width =  loc + (thumbsize/2) + "px";
    fill.style.height =   fillsize + "px";
    shell.style.height =   smallval + "px";
    shell.style.width =  bigval + "px";
    track.style.height =   fillsize + "px"; /* adjust for border */
    track.style.width =  bigval - 4 + "px"; /* adjust for border */
    track.style.left =  "0px";
    track.style.top = filloffset + bordersize + "px";
}
/* we often need a function to set the slider values on page load */
function setValue(val,num) {
    document.getElementById("slider"+num).value = val;
    showValue(val,num);
}

setValue(<?php echo $_SESSION['typeHistory']; ?> * 10,1);
setValue(<?php echo $_SESSION['typeNature']; ?> * 10,2);
setValue(<?php echo $_SESSION['typeShopping']; ?> * 10,3);
setValue(<?php echo $_SESSION['typeArt']; ?> * 10,4);
setValue(<?php echo $_SESSION['typeFoodDrink']; ?> * 10,5);

</script>