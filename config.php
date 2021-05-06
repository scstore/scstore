<?php
define(‘DBSERVER‘, ‘localhost‘);  // Database server
define(‘DBUSERNAME‘, ‘localhost‘);  // Database username
define(‘DBPASSWORD‘, ‘localhost‘);  // Database password
define(‘DBNAME‘, ‘localhost‘);  // Database name

/* connect to MySQL database */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBUSERNAME);

// Check db connection
if($db === false){
    die("Error: connection error. " .
mysqli_connect_error());
}
?>