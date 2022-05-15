<?php
  include_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Certificate || Brgy. Talisayan Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6, .w3-bar, label {font-family: Helvetica, sans-serif}
.navbar, h1 {font-weight: bold;}
.logotalisayan {padding: 32px;}
html {scroll-behavior: smooth;}

body {
  font-family: Helvetica, sans-serif;
  color: white;
  background-color: #f01c64;
}

.footerlabel {
  color: black;
}

/* Navbar and Header 1 modifications
.navbar, h1 {
  font-weight: bold;
  font-family: Helvetica, sans-serif;
}*/


label{
  color: white;
}

/* {
  box-sizing: border-box;
}*/

/* Add padding to containers */
.container {

  padding: 64px;
}

/* Full-width input fields 
input[name=fullname] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}*/

input[name="firstname"], input[name="lastname"], input[name="midname"] {
  width: 30%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}



input[name=occupation], input[name="contact"], input[name=status], input[name=religion] {
  width: 30%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name="address"] {
  width: 75%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}


input[name=email]{
  width: 30%;
  padding:5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name=birthdate] {
  margin-top: 50px;
  display: inline-block;
  margin: 5px 0 22px 0;
  border:2px solid #f2f2f2;
  border-radius:5px;
  
}

input[type=file] {
  margin: 5px 0;
  display: inline-block;
  border:2px;
  border-radius:5px;
}

input[id=quantity] {
  margin-top: 50px;
  display: inline-block;
  margin: 5px 0 22px 0;
  border:2px solid #f2f2f2;
  border-radius:5px;
  
}

input[name=id_image] {
  margin-top: 50px;
  display: inline-block;
  margin: 5px 0;
  border:2px;
  border-radius:5px;
}

input[type=text]:focus, input[type=password]:focus, input[name=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.loginbtn {
  background-color: Black;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-weight: bold;
  border:2px solid #000000;
  border-radius:5px;
}

.loginbtn:hover {
  opacity: 1;
}

/* Set a style for the Upload Pic button */
.fileToUpload {
  color: white;
  cursor: pointer;
  opacity: 0.9;
  font-weight: bold;
  border-radius:5px;
  cursor: pointer;
}

.fileToUpload:hover {
  opacity: 1;
}

/* Add Zamboanga's colorway (Deep Pink) to text links */
a {
  color: #ec1c64;
}

.exelogo {
  margin-top: 15px;
  margin-right: 64px;
}


/* Adjusting Margins */
label[name=gender] { 
  margin-left: 260px; 
}


label[name=religion] { 
  margin-left: 295px; 
}

label[name=Age] { 
  margin-left: 50px; 
}

/* Input Types */
input[name=gender] { 
  margin-left: 13px; 
}


input[name=religion] { 
  margin-left: 16px; 
}

.certi {
  margin:0 auto;
  max-width:1000px;
  background-color: #f01c64;
}
h2 {
  color: green;
}


</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar w3-top">
  <div class="w3-bar w3-black w3-left-align w3-card w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../main/register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-pink w3-hover-white"><i class="fa fa-toggle-left"></i></a>
    <a href="../main/index.php#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-pink">Contact</a>
    
    </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="../main/register.php" class="w3-bar-item w3-button w3-padding-large w3-pink w3-hover-white"><i class="fa fa-toggle-left"></i></a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-pale-red">Contact</a>
    
  </div>
</div>

<?php
  if(isset($_POST['registerbtn']))
  {
    
    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $file = $_FILES["id_image"]['name'];
    
    $query = "INSERT INTO p_request_barangay_certification (firstname, midname, lastname, birthdate, age, address, date, file) VALUE ('$firstname', '$midname', '$lastname', '$birthdate', '$age', '$address', CURRENT_TIMESTAMP, '$file')";
    $result = mysqli_query($db, $query);
    if($result)
    {

      move_uploaded_file($_FILES["id_image"]["tmp_name"], "img/".$_FILES["id_image"]["name"]);
     $_SESSION['success'] = "YOUR REQUEST FOR REGISTRATION HAS BEEN SUBMITTED!...";
   header('Location: certi.php');
    }
    else{
       $_SESSION['status'] = "YOUR REQUEST FOR REGISTRATION IS NOT BEEN SUBMITTED";
    header('Location: certi.php');
    }
  }

?>

<form class="certi" action="certi.php" method="POST" enctype="multipart/form-data">


  <div class="container">
    <h1>Barangay Certificate</h1>
    <hr>
      <div class="text-center">
                                  <?php                                          
         if(isset($_SESSION['success']) && $_SESSION['success'] !='');
                {
                              echo '<h2 class=" text-success"><b>' .$_SESSION['success'].'</b></h2>';
                              unset($_SESSION['success']);
                            }
                            if(isset($_SESSION['status']) && $_SESSION['status'] !='');
                            {
                              echo '<h2 class=" text-danger"><b>' .$_SESSION['status'].'</b></h2>';
                              unset($_SESSION['status']);
                            } 

                            ?>
                                    </div>
     <hr>

    <!--FULL NAME INPUT-->
    <label><b>Full Name</b></label><br>
    <input type="text" placeholder="First Name" name="firstname" id="fn" required>
    <input type="text" placeholder="Middle Name" name="midname" id="mn" required>
    <input type="text" placeholder="Last Name (Suffix eg. Jr., Sr., II, III)" name="lastname" id="ln" required>

    <!--Birthdate & Age-->
    <br><label name="birthday"><b>Birth Date:</b></label>
    <input type="date" id="birthdate" name="birthdate">
    <label name="Age"><b>Age:</b></label>
    <input type="number" id="quantity" name="age" min="1" max="150" align="Middle">

   <!-- ADDRESS -->   
    <br><label><b>Address</b></label><br>
    <input type="text" placeholder="Enter your address" name="address" id="add" required>

    <br><label name="pic"><b>Picture: (1x1 or 2x2)</b></label>
    <br><input type="file" name="id_image" id="fileToUpload" class="fileToUpload">
  

    <!--<br><label for="pw"><b>Password</b></label>
    <br><input type="password" placeholder="Enter Password" name="pw" id="pw" required>-->
    
    <hr>
    

    <button type="submit" name="registerbtn" class="loginbtn">Submit</button>
  </div>    
</form>

<!-- Footer
<footer id="contact">
<footer class="w3-content w3-opacity">  

    <div class="logotalisayan w3-left">
      <a href="../main/index.html"><img src="../logo/talisayan.png" alt="" class="img-responsive"></a>
    </div>
    <div class="logozc w3-third w3-right">
        <i class="w3-padding-32"><img src="../logo/zc.png" alt="" width="70%"></i>
    </div>
  <h1 class="footerlabel w3-padding-32 w3-center">Connect with us!</h1>
  <div class="footerlabel w3-large w3-center">
    Facebook: <a href="https://www.facebook.com/AspiraMasTalisenos"><i class="fa fa-facebook-official w3-hover-opacity"></i></a><br>
    Email Us: <a href="mailto:talisayansbzc@gmail.com"><i class="fa fa-envelope w3-hover-opacity"></i></a><br>
    Contact Us: (062) 975 1449
</div>
</footer>
</footer>-->

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
