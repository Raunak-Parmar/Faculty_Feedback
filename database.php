<?php

$hostName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="feedback";
$conn=mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("something went wrong:");
}
else{
    echo "SUBMITED";
}
?>