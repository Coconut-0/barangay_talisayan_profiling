<?php
  include_once('db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
      <title>Login as Admin</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
body {
  font-family: Helvetica, sans-serif;
  background-color: #f01c64;;
}

/* Navbar and Header 1 modifications */
.navbar, h1 {
  font-weight: bold;
  font-family: Helvetica, sans-serif;
}

h1 {
  color: white;
}

label{
  color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 64px;
  margin:0 auto;
  max-width:1000px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
  border:2px solid #f1f1f1;
  border-radius:5px;
}

input[type=text]:focus, input[type=password]:focus {
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

</style>
</head>
<body>
  <!-- Navbar -->
<div class="navbar w3-top">
  <div class="w3-bar w3-black w3-left-align w3-card w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../main/index.php" class="w3-bar-item w3-button w3-padding-large w3-pink w3-hover-white">Home</a>
    <a href="../main/register.php" class="w3-bar-item w3-button w3-padding-large w3-hover-pink">Register</a>
    
    </div>
</div>


<?php
 if(isset($_POST['login_btn']))
 {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM admin_barangay WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);

  if($result->num_rows >0)
  {
    echo "<script>alert('SUCCESSFULLY LOGIN');
                  window.location.href='index.php';
                  </script>";
  }
  else{
    echo "<script>alert('ACCESS DENIED');
                  window.location.href='admin.php';
                  </script>";
  }
 }

?>
<form action="admin.php" method="POST">
  <div class="container">
    <h1>Login as Admin</h1>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="un" required>

    <label for="pw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="pw" required>
    <hr>
    

    <button type="submit" name="login_btn" class="loginbtn">Login</button>
  </div>    
</form>

</body>
</html>