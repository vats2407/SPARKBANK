<?php

$servername="localhost";
$username="root";
$password="";
$dbname="vats_bank_user_details";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "connection ok";
}
else
{
    echo "connection Failed".mysqli_connect_error;
}
?>