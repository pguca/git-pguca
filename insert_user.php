<?php
include ("config.php");
date_default_timezone_set('asia/kolkata');
if ($_GET['action']){
    
if($_GET['action'] == "updatepassword")
{
	$txtemail = $_POST['txtemail'];
	$txtpassword = md5($_POST['txtpassword']);
	$txtconfirmpassword = md5($_POST['txtconfirmpassword']);
    
	if($txtpassword==$txtconfirmpassword)
	{
	  $set_query = mysqli_query($conn,"Update student set studentpassword ='".$txtpassword."' where studentemail='".$txtemail."'");
	 
			
			 if($set_query)
			 {
				 echo'good';
			 }
			 else
			 {
				 echo'wrong';
			 }
	}
	else
	{
		 echo'bad';
	}
}
else  if($_GET['action'] == "addcategory")
{
	$ddlcategory = $_POST['ddlcategory'];
	$ddlsemester = $_POST['ddlsemester'];
	$txtid1 = $_POST['txtid1'];
    $dat=date("d-m-Y H:i:m ");
      $course_query = mysqli_query($conn,"Select * from studcourse where stud_id='".$txtid1."'");
	 
			$course_num = mysqli_num_rows($course_query);
			 $course_row =@mysqli_fetch_array($course_query);
			 if(!$course_num)
			 {   
	  $addcategory_query = mysqli_query($conn,"INSERT INTO `studcourse`(`stud_id`, `stud_choice_course`,`stud_semester`, `studdate`) VALUES('".$txtid1."','".$ddlcategory."','".$ddlsemester."','".$dat."')");
	 
			 }
			 else
			 {
		$addcategory_query = mysqli_query($conn,"Update  `studcourse` SET  `stud_choice_course`='".$ddlcategory."',`stud_semester`='".$ddlsemester."' where stud_id='".$txtid1."'");		 
			 }
			 if($addcategory_query)
			 {
				 echo'ok';
			 }
			 else
			 {
				 echo'no';
			 }
			  
}
else  if($_GET['action'] == "updatesemester")
{
	$ddlcategory = $_POST['ddlcategory'];
	$ddlsemester = $_POST['ddlsemester'];
	$email = $_POST['txtid'];
    
	  $updaye_query = mysqli_query($conn,"Update  `studcourse` SET `stud_id`='".$email."', `stud_choice_course`='".$ddlcategory."',`stud_semester`='".$ddlsemester."' where stud_id='".$email."'");
	 
			
			 if($updaye_query)
			 {
				 echo'ok';
			 }
			 else
			 {
				 echo'no';
			 }
			
}
   
    
    
}
?>