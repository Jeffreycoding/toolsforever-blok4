<?php

//database connection   
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tools4ever";


// Check connection
try {
  //$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}