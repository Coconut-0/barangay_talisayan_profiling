<?php
  include_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Barangay ID || Brgy. Talisayan Management System</title>
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
  font-style: oblique;
}

/* {
  box-sizing: border-box;
}*/

/* Add padding to containers */
.container {

  padding: 64px;
}

.certi {
  margin:0 auto;
  max-width:1000px;
  background-color: #f01c64;
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

input[name="first"], input[name="last"], input[name="mid"], input[name="place_birth"], input[name="gsis_no"]{
  width: 30%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name="tin_no"] {
  width: 30%;
  padding: 5px;
  margin: 5px 0 22px 0;
  margin-left: 7px;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name="sss_no"] {
  width: 30%;
  padding: 5px;
  margin: 5px 0 22px 0;
  margin-left: 7px;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name=occupation], input[name=civil_status], input[name=religion] {
  width: 30%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name="address"]{
  width: 75%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name="contact_address"] {
  width: 75%;
  padding: 5px;
  margin: 5px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name="emergency_contact"] {
  width: 45%;
  padding: 5px;
  margin: 5px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
}

input[name="contact_number"]{
  width: 30%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f2f2f2;
  border-radius:5px;
  margin-left: 10px;
}

input[type=date] {
  margin-top: 50px;
  display: inline-block;
  margin: 5px 0 22px 0;
  border:2px solid #f2f2f2;
  border-radius:5px;
  
}

input[type=text]:focus {
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
/* Birthdate */
label[name=birth] {
  margin-left: 177px;
}

input[name=birthdate] {
  margin-left: 10px;
}

/* Gender */
label[name=gender] { 
  margin-left: 190px; 
}

input[name=gender] { 
  margin-left: 10px; 
}

/* Tin. No. */
label[name=tinno] {
  margin-left: 225px;
}

input[name=tin] {
  margin-left: 10px;
}

/* SSS */
label[name=sssno] {
  margin-left: 205px;
}

input[name=sss] {
  margin-left: 10px;
}

/* Emergency */
label[name=con] {
  margin-left: 135px;
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

    $firstname = $_POST['first'];
    $midname = $_POST['mid'];
    $lastname = $_POST['last'];
    $address = $_POST['address'];
    $occupation = $_POST['occupation'];
    $gender = $_POST['gender'];
    $place_birth = $_POST['place_birth'];
    $birthdate = $_POST['birthdate'];
    $civil_status= $_POST['civil_status'];
    $tin_no = $_POST['tin_no'];
    $gsis_no = $_POST['gsis_no'];
    $sss_no = $_POST['sss_no'];
    $emergency_contact = $_POST['emergency_contact'];
    $contact_number = $_POST['contact_number'];
    $contact_address = $_POST['contact_address'];
    $file = $_FILES["id_image"]['name'];
    $query = "INSERT INTO p_request_barangay_id (firstname, midname, lastname, address, occupation, gender, place_birth, birthdate, civil_status, tin_no, gsis_no, sss_no,emergency_contact, contact_number, contact_address, file) VALUE ('$firstname', '$midname', '$lastname', '$address', '$occupation', '$gender', '$place_birth', '$birthdate', '$civil_status', '$tin_no', '$gsis_no', '$sss_no', '$emergency_contact', '$contact_number', '$contact_address', '$file')";
    


    $result = mysqli_query($db, $query);
    if($result)
    {
      move_uploaded_file($_FILES["id_image"]["tmp_name"], "img/".$_FILES["id_image"]["name"]);
     $_SESSION['success'] = "YOUR REQUEST FOR REGISTRATION HAS BEEN SUBMITTED!...";
     header('Location: brgyid.php');

    }
    else{
       $_SESSION['status'] = "YOUR REQUEST FOR REGISTRATION IS NOT BEEN SUBMITTED";
    header('Location: brgyid.php');
    }
  }

?>

<form class="certi" action="brgyid.php" method="POST" enctype="multipart/form-data">


  <div class="container">
    <h1>Barangay ID</h1>
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
    <input type="text" placeholder="First Name" name="first" id="fn" required>
    <input type="text" placeholder="Middle Name" name="mid" id="mn" required>
    <input type="text" placeholder="Last Name (Suffix eg. Jr., Sr., II, III)" name="last" id="ln" required>

    <!-- ADDRESS -->   
    <br><label><b>Address</b></label><br>
    <input type="text" placeholder="Enter your address" name="address" id="add" required>

    <!--Gender-->
    <br><label><b>Occupation</b></label>
    <label name="gender"><b>Gender:</b></label>
    <br><input type="text" placeholder="Occupation" name="occupation" id="occ" required>    
    <input type="radio" value="Male" name="gender" checked > Male
    <input type="radio" value="Female" name="gender"> Female 


    <!-- Birthdate & Place of Birth-->
    <br><label><b>Place of Birth</b></label>
    <label name="birth"><b>Birth Date:</b></label>
    <br><input type="text" placeholder="Place of Birth" name="place_birth" id="pob" required>
    <input type="date" id="bday" name="birthdate">

    <!-- Status & Tin no. -->
    <br><label><b>Status</b></label>
    <label name="tinno"><b>Tin no.:</b></label>
    <br><input type="text" placeholder="Status (Ex. Single, Married, etc.)" name="civil_status" id="status" required>  
    <input type="text" placeholder="Tin no. (Leave blank if none)" name="tin_no" id="tin">    

    <!-- GSIS & SSS no. -->
    <br><label name="gsisno"><b>GSIS no.:</b></label>
    <label name="sssno"><b>SSS no.:</b></label>
    <br><input type="text" placeholder="GSIS no. (Leave blank if none)" name="gsis_no" id="gsis" required>  
    <input type="text" placeholder="SSS no. (Leave blank if none)" name="sss_no" id="sss">    

    <!--In Case of Emergency-->
    <br><label name="emergency_contact"><b>In case of emergency please contact:</b></label>
    <label name="con"><b>Contact/Telephone Number</b></label>
    <br><input type="text" placeholder="Emergency Contact Person" name="emergency_contact" id="econ" required>
    <input type="tel" placeholder="(ex: 09123456789)" name="contact_number" id="con" onkeypress="return onlyNumberKey(event)" required>

    <br><label><b>Address</b></label><br>
    <input type="text" placeholder="Contact address" name="contact_address" id="conadd" required>
    <br />
    <br><label><b>UPLOAD : (ID)</b></label>
    <br><input type="file" name="id_image" id="fileToUpload" class="fileToUpload">

    <!--<br><label for="pw"><b>Password</b></label>
    <br><input type="password" placeholder="Enter Password" name="pw" id="pw" required>-->
    
    <hr>
    

    <button type="submit" name="registerbtn" class="loginbtn">Submit</button>
  </div>    
</form>


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
  // Used to input number only
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
