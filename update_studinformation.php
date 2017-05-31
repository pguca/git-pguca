<?php
include "config.php";
if ($_GET['action'])
{
   if($_GET['action'] == "update")
   
{
  $studid = $_POST['studid'];
  $studentfirstname = $_POST['studentfirstname'];
  $studentlastname = $_POST['studentlastname'];
  $fatherfirstname = $_POST['fatherfirstname'];
  $fatherlastname = $_POST['fatherlastname'];
  $motherfirstname = $_POST['motherfirstname'];
  $motherlastname = $_POST['motherlastname'];
  $occupation = $_POST['occupation'];
  $salary = $_POST['salary'];
  $address = $_POST['address'];
  $ddlcountry = $_POST['ddlcountry'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $district = $_POST['district'];
  $tehsil = $_POST['tehsil'];
  $pincode = $_POST['pincode'];
   $address2 = $_POST['address2'];
   $ddlcountry2 = $_POST['ddlcountry2'];
  $state2 = $_POST['state2'];
  $city2 = $_POST['city2'];
   $district2 = $_POST['district2'];
  $tehsil2 = $_POST['tehsil2'];
  $pincode2 = $_POST['pincode2'];
  $regdate = $_POST['regdate'];
   $ddlcategorys = $_POST['ddlcategorys'];
  $irdp = $_POST['irdp'];
  $sports = $_POST['sports'];
  $ncc = $_POST['ncc'];
  $nss = $_POST['nss'];
  $bonafide = $_POST['bonafide'];
  $nationality = $_POST['nationality'];
  $mobileno = $_POST['mobileno'];
  $fatherno = $_POST['fatherno'];
  $landlineno = $_POST['landlineno'];
  $married = $_POST['married'];
  $gender = $_POST['gender'];
  $singlegirl = $_POST['singlegirl'];
  $sportspersonquota = $_POST['sportspersonquota'];
  $culturalquota = $_POST['culturalquota'];
  
		  $student_query = mysqli_query($conn,"Update  `registration` set `studentname`='".$studentfirstname.' '.$studentlastname."', `fathername`='".$fatherfirstname.' '.$fatherlastname."', `mothername`='".$motherfirstname.' '.$motherlastname."',`gender`='".$gender."', `occupation`='".$occupation."', `annualsalary`='".$salary."', `address`='".$address."', `country`='".$ddlcountry."', `state`='".$state."', `city`='".$city."',`district`='".$district."',`tehsil`='".$tehsil."', `pincode`='".$pincode."', `address2`='".$address2."', `country2`='".$ddlcountry2."', `state2`='".$state2."', `city2`='".$city2."',`district2`='".$district2."',`tehsil2`='".$tehsil2."',`pincode2`='".$pincode2."', `dob`='".$regdate."', `categorey`='".$ddlcategorys."', `irdp`='".$irdp."', `sports`='".$sports."', `ncc`='".$ncc."',`nss`='".$nss."',`bonafideofup`='".$bonafide."', `nationality`='".$nationality."', `mobileno`='".$mobileno."', `fatherno`='".$fatherno."', `landlineno`='".$landlineno."', `marriedstatus`='".$married."',`sportdquotaperson`='".$sportspersonquota."',`singlegirlperson`='".$singlegirl."',`culturalquotaperson`='".$culturalquota."' where `studid`='".$studid."'");
		   if($student_query)
			   {
				echo'Ok'; 
			   }
			   else
			   {
				echo'No';
			   }
	
  }
  }
?>