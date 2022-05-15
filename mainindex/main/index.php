<?php
  include_once('db_connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Home || Brgy. Talisayan Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: Helvetica, sans-serif}
.w3-bar,h1,button {font-family: Helvetica, sans-serif}
h1, button {font-weight: bold;}
.logo {padding: 40px;}
.w3-top {font-weight: bold;}
html {scroll-behavior: smooth;}

/* Add Zamboanga's colorway (Deep Pink) to text links */
a {
  color: #ec1c64;
}

</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-left-align w3-card w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../main/index.php" class="w3-bar-item w3-button w3-padding-large w3-pink w3-hover-white">Home</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-pink">Contact</a>
    <a href="#firstgrid" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-pink w3-right">About</a>
    </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="../main/index.php" class="w3-bar-item w3-button w3-padding-large w3-pink w3-hover-black">Home</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-red">Contact</a>
    <a href="#firstgrid" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-red w3-right">About</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-pink w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-xxxlarge w3-bold">Barangay Talisayan Management System</h1>
  <a href="../main/register.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-white">Register</button></a>
</header>

<!-- First Grid -->
<div id="firstgrid">
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About Barangay Talisayan</h1>
      <h5 class="w3-padding-32">Talisayan is a barangay in Zamboanga City. Its population as determined by the 2020 Census was 11,428. This represented 1.17% of the total population of Zamboanga City.<br></h5>

      <h5>  Barangay Talisayan is also very much industrialized. Mega Sardines Co. is located on the old Talisayan Road and other Canning companies are also in Talisayan. </h5>

    </div>

    <div class="logo">
      <a href="../main/index.html"><img src="../logo/talisayan.png" alt="" class="img-responsive"></a>
    </div>
  </div>
</div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-pale-red w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="w3-margin-right w3-padding-10"><img src="../logo/zc.png" alt="" width="100%" height="50%"></i>
    </div>

    <div class="w3-twothird">
      <h1>Zamboanga City</h1>
      <h5 class="w3-padding-32">Barangay Talisayan is located at Zamboanga City, Philippines in which it is a 1st class highly urbanized city in the Zamboanga Peninsula region of the Philippines. Zamboanga has a population of 977,234 people, according to the 2020 census.<br>

      <br>
    Zamboanga’s principal exports include fish and fish products, processed fruit, coconut-based products, shell and rubber manufactures, and wooden furniture; rice is imported. </h5>

      </div>
  </div>
</div>


<!-- Footer -->
<footer id="contact">
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <h1>Connect with us!</h1>
  <div class="w3-large w3-padding-10">
    Facebook: <a href="https://www.facebook.com/AspiraMasTalisenos"><i class="fa fa-facebook-official w3-hover-opacity"></i></a><br>
    Email Us: <a href="mailto:talisayansbzc@gmail.com"><i class="fa fa-envelope w3-hover-opacity"></i></a><br>
    Contact Us: (062) 975 1449
 </div>
</footer>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
