<?php
$server_name = "sql102.unaux.com";
$db_username = "unaux_31729383";
$db_password = "^cngtmt8owh5";
$db_name = "unaux_31729383_barangay_profiling";
$db = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$connection = mysqli_select_db($db, $db_name);
if ($connection) {
	// code...
}
else
{
	echo "DATABASE CONNECTION FAILED";
}
?>