<!DOCTYPE html>
<html lang="en">
<head>
<title>Register || Brgy. Talisayan Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: Helvetica, sans-serif}
.w3-bar,h1,button {font-family: Helvetica, sans-serif}
h1, button {font-weight: bold;}
.logotalisayan {padding: 32px;}

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
    
    </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="../main/index.php" class="w3-bar-item w3-button w3-padding-large w3-pink w3-hover-white">Home</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-red">Contact</a>
    
  </div>
</div>

<!-- Content -->
<header class="w3-container w3-pink w3-center" style="padding:128px 16px">
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <i class="fa fa-address-book" style="font-size: 256px; width: 100%; color:white;"></i>
      <a href="../main/profiling.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-pale-red">Profiling</button></a>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-envelope-o" style="font-size:256px; width: 100%; color:white;"></i>
      <a href="../main/clearance.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-pale-red">Barangay Clearance</button></a>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-id-card" style="font-size:256px; width: 100%; color:white;"></i>
      <a href="../main/brgyid.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-pale-red">Barangay ID</button></a>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-folder" style="font-size:256px; width: 100%; color:white;"></i>
      <a href="../main/certi.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-pale-red">Certification</button></a>
    </div>
  </div>
</header>

<!-- Footer -->
<footer id="contact">
<footer class="w3-content w3-opacity">  

    <div class="logotalisayan w3-left">
      <a href="../main/index.html"><img src="../logo/talisayan.png" alt="" class="img-responsive"></a>
    </div>
    <div class="logozc w3-third w3-right">
        <i class="w3-padding-32"><img src="../logo/zc.png" alt="" width="70%"></i>
    </div>
  <h1 class="w3-padding-32 w3-center">Connect with us!</h1>
  <div class="w3-large w3-center">
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
