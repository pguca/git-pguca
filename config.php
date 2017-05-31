<?php
$siteurl = "http://www.pgcua.in/beta/";

$confirm_mail = "http://www.pgcua.in/beta/";

$mail_logo = "http://www.pgcua.in/beta/logo/logo_transparent_01.png";

$start_date=1985;

$end_date=2017;

$set_filesize = 1048576 ;

$set_challanstart = "HPU";

$college_logo="photo/logo_transparent_01.png";

$bank_logo="photo/bank.png";

$servername="localhost";
$username="root";
$password="";
$dbname="colleges";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Error".$conn->connect_error);
}

?>