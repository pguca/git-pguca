<?php
include ('config.php');
date_default_timezone_set('asia/kolkata');
if(isset($_FILES["file"]["type"]))
{

  
	$challan = $_FILES["fileess"]["name"];
	$txtidss = $_POST['txtidss'];
	$txtbankreferenceno = $_POST['txtbankreferenceno'];
	$dat =date('d-m-Y H:i:m');
	$allowedExts = array("pdf"); 
	$temporary = end(explode(".", $_FILES["fileess"]["name"]));

		if ( ( in_array($temporary,$allowedExts) )  && ($_FILES["fileess"]["size"] < 10000000) )
	{
		
		$query = mysqli_query($conn,"Insert into challan(studid,bankreferenceno,challan,date) VALUES('".$txtidss."','".$txtbankreferenceno."','".$challan."','".$dat."')");
		
	  $sourcePath = $_FILES['fileess']['tmp_name']; // Storing source path of the file in a variable
		$targetPath = "upload/".$_FILES['fileess']['name']; // Target path where file is to be stored
		move_uploaded_file($sourcePath,$targetPath) ; // M
	
		if($query)
			{   
				echo "ok";
			}
		else
			{
				echo"no";
			}
		
	}
	else
	{
	echo"no";
	}

	}
?>