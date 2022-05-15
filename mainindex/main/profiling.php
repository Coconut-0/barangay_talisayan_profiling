<?php
  include_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Profiling || Brgy. Talisayan Management System</title>
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

input[name="first"], input[name="last"], input[name="mid"] {
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

input[name="add"] {
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

input[type=password]{
  width: 30%;
  padding:5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[type=date] {
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
  margin-left: 83px; 
}

label[name=birthday] { 
  margin-left: 195px; 
}

label[name=religion] { 
  margin-left: 195px; 
}

input[name=gender] { 
  margin-left: 13px; 
}

input[name=birthday] { 
  margin-left: 17px; 
}

input[name=religion] { 
  margin-left: 16px; 
}
.profiling {
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

<!-- Profiling -->
<?php
  if(isset($_POST['registerbtn'])){
    $firstname = $_POST['first'];
    $midname = $_POST['mid'];
    $lastname = $_POST['last'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $birthday = $_POST['birthday'];
    $civil_status= $_POST['status'];
    $religion = $_POST['religion'];
    $address = $_POST['add'];
    $file = $_FILES["id_image"]['name'];
    $query = "INSERT INTO p_request_profiling_data (firstname, midname, lastname, email, contact_number, gender, occupation, birthday, civil_status, religion, address, date, file) VALUE ('$firstname', '$midname', '$lastname', '$email', '$contact_number', '$gender', '$occupation', '$birthday', '$civil_status', '$religion', '$address', CURRENT_TIMESTAMP, '$file')";
    $result = mysqli_query($db, $query);
  if($result){
    move_uploaded_file($_FILES["id_image"]["tmp_name"], "img/".$_FILES["id_image"]["name"]);
     $_SESSION['success'] = "YOUR REQUEST FOR REGISTRATION HAS BEEN SUBMITTED!...";
   header('Location: profiling.php');
  }else{
    $_SESSION['status'] = "YOUR REQUEST FOR REGISTRATION IS NOT BEEN SUBMITTED";
    header('Location: profiling.php');
  }
  }

?>
<form class="profiling" action="profiling.php" method="POST" enctype="multipart/form-data">


  <div class="container">
    <h1>Register as a resident of Brgy. Talisayan!</h1>
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

    <label><b>Full Name</b></label><br>
    <input type="text" placeholder="First Name" name="first" id="fn" required>
    <input type="text" placeholder="Middle Name" name="mid" id="mn" required>
    <input type="text" placeholder="Last Name (Suffix eg. Jr., Sr., II, III)" name="last" id="ln" required>


    <br><label><b>Email</b></label><br>
    <input type="email" placeholder="Enter your email" name="email" id="email" required>

    <br><label><b>Contact/Telephone Number</b></label>
    <label name="gender"><b>Gender:</b></label>
    <br><input type="tel" placeholder="(ex: 09123456789)" name="contact" id="con" onkeypress="return onlyNumberKey(event)" required>

    <!--Gender Radio Buttons-->
    <input type="radio" value="Male" name="gender" checked > Male
    <input type="radio" value="Female" name="gender"> Female 
    <input type="radio" value="Other" name="gender"> Other

    <!--Occupation & Birthday-->

    <br><label><b>Occupation</b></label>
    <label name="birthday"><b>Birthday:</b></label>
    <br><input type="text" placeholder="Occupation" name="occupation" id="occ" required>    

    <!--Birthday Button-->
    <input type="date" id="birthday" name="birthday">

    <!--Civil Status & Religion-->

    <br><label><b>Civil Status</b></label>
    <label name="religion"><b>Religion</b></label>
    <br><input type="text" placeholder="Civil Status (Ex. Single, Married, etc.)" name="status" id="status" required>    
    <input type="text" placeholder="(Ex. Roman Catholic, Muslim, etc.)" name="religion" id="religion" required>    

    <br><label><b>Address</b></label><br>
    <input type="text" placeholder="Enter your address" name="add" id="add" required>
    <br><label><b>UPLOAD : (ID)</b></label>
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

<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
</body>
</html>
