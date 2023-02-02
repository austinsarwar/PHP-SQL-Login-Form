<?php   
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// connect to database
$dbHost = "localhost";  
$dbUser = "root";
$dbPass = "";
$dbName = "logintest";

$conn = mysqli_connect($dbHost ,$dbUser ,$dbPass, $dbName );
if ($conn){

} else{
    die("Database connection failed");
}

?>