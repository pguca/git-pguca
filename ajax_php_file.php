<?php
include ('config.php');
if(isset($_FILES["file"]["type"]))
{ 
    $validextensions = array("jpeg", "jpg", "png");
    $temporary       = explode(".", $_FILES["file"]["name"]);
    $temporary5      = explode(".", $_FILES["file2"]["name"]);

    @$matricsheet      = $_FILES["file5"]["name"];
	@$intermeetsheet   = $_FILES["file4"]["name"];
	@$graduation       = $_FILES["file3"]["name"];
	@$userphoto        = $_FILES["file"]["name"];
	@$signature        = $_FILES["file2"]["name"];
	@$chacter          = $_FILES["file6"]["name"];
	
	@$cast             = $_FILES["file10"]["name"];
	@$girl             = $_FILES["file11"]["name"];
	@$sports           = $_FILES["file12"]["name"];
	@$cultural         = $_FILES["file13"]["name"];
	
	@$txtid            = $_POST['txtid'];
	@$txtboard         = $_POST['txtboard'];
	@$ddlpassoutyear   = $_POST['ddlpassoutyear'];
	@$txtcredit        = $_POST['txtcredit'];
	@$txtgetmarks      = $_POST['txtgetmarks'];
	@$txtoutoffmarks   = $_POST['txtoutoffmarks'];
	@$txtpercentage    = $_POST['matricpercentage'];
	@$txtrollno        = $_POST['txtrollno'];
	
	@$txtboard2        = $_POST['txtboard2'];
	@$ddlpassoutyear2  = $_POST['ddlpassoutyear2'];
	@$txtcredit2       = $_POST['txtcredit2'];
	@$txtgetmarks2     = $_POST['txtgetmarks2'];
	@$txtoutoffmarks2  = $_POST['txtoutoffmarks2'];
	@$txtpercentage2   = $_POST['txtpercentage2'];
	@$txtrollno2       = $_POST['txtrollno2'];
	
	@$ddlpassstatus    = $_POST['ddlpassstatus'];
	@$ddlboard         = $_POST['ddlboard'];
	@$txtboard3        = $_POST['txtboard3'];
	@$ddlpassoutyear3  = $_POST['ddlpassoutyear3'];
	@$txtcredit3       = $_POST['txtcredit3'];
	@$txtgetmarks3     = $_POST['txtgetmarks3'];
	@$txtoutoffmarks3  = $_POST['txtoutoffmarks3'];
	@$txtpercentage3   = $_POST['txtpercentage3'];
	@$txtrollno3       = $_POST['txtrollno3'];
	@$txtradio         = $_POST['txtradio'];
	$dat               = date('d-m-Y H:i:m');
	$allowedExts       = array("pdf"); 
	$temporary         = explode(".", $_FILES["file"]["name"]);
	
    $temporary1     = end(explode(".", $_FILES["file6"]["name"]));
    $temporary2     = end(explode(".", $_FILES["file5"]["name"]));
    $temporary3     = end(explode(".", $_FILES["file4"]["name"]));
    $temporary4     = end(explode(".", $_FILES["file3"]["name"]));
    
    if($_FILES["file10"]){ $temporary10    = end(explode(".", $_FILES["file10"]["name"])); }
    if($_FILES["file11"]){ $temporary11    = end(explode(".", $_FILES["file11"]["name"])); }
    if($_FILES["file12"]){ $temporary12    = end(explode(".", $_FILES["file12"]["name"])); }
    if($_FILES["file13"]){ $temporary13    = end(explode(".", $_FILES["file13"]["name"])); }

$temporary5         = explode(".", $_FILES["file2"]["name"]);
$file_extension     = end($temporary);
$file_extension5    = end($temporary5);
if ( ( in_array($temporary2,$allowedExts) )   && ($_FILES["file5"]["size"] < $set_filesize) ){
  if ( ( in_array($temporary3,$allowedExts) )  && ($_FILES["file4"]["size"] < $set_filesize) ){
	if($ddlpassstatus=="Awaited" || $ddlpassstatus=="Not_Applicable"){
		 if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
		) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
		&& in_array($file_extension, $validextensions)){
			 if ((($_FILES["file2"]["type"] == "image/png") || ($_FILES["file2"]["type"] == "image/jpg") || ($_FILES["file2"]["type"] == "image/jpeg")) && ($_FILES["file2"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension5, $validextensions)){
				 if ( ( in_array($temporary1,$allowedExts) )   && ($_FILES["file6"]["size"] < $set_filesize) ){
					 if(!$cast){
						if(!$girl){
							if(!$sports){
								if(!$cultural){
                                $res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
                                @$count = mysqli_num_rows($res);
                                @$userRow=mysqli_fetch_array($res);
		  if($count){
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}else{ 
              echo "INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)";exit;
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq){   
				echo"ok";
        }else{
				echo"no";
        }
                    }else{
				if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) ){
                    $res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		            @$count = mysqli_num_rows($res);
		            @$userRow=mysqli_fetch_array($res);
		if($count){
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}else{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq){   
				echo"ok";
			}else{
				echo"no";
			}
								
								}
								else
								{
									echo"no";
								}
								}
							}
							else
							{
							   if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
								{
									if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
								}
								else
								{
									echo"no";
								}	
							}	
							
						}	
						else
						{
								if ( ( in_array($temporary11,$allowedExts) )  && ($_FILES["file11"]["size"] < $set_filesize) )
							{
								if(!$sports)
							{
								if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
							}
							else
							{
							   if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
								{
									if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
								}
								else
								{
									echo"no";
								}	
							}
							}
							else
							{
								echo"no";
							}	
							
						}	
						
					}
					else
					{
							if ( ( in_array($temporary10,$allowedExts) )  && ($_FILES["file10"]["size"] < $set_filesize) )
						{
							if(!$girl)
							{
								if(!$sports)
							{
								if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
							}
							else
							{
							   if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
								{
									if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
								}
								else
								{
									echo"no";
								}	
							}
								
							}
							else
							{
								if ( ( in_array($temporary11,$allowedExts) )  && ($_FILES["file11"]["size"] < $set_filesize) )
								{
									if(!$sports)
								{
								if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
								}
								else
								{
								if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
									{
										if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
									}
									else
									{
										echo"no";
									}	
								}
								}
								else
								{
									echo"no";
								}
							}	
							
						}
						else
						{
							echo"no";
						}	
						
					}	
					
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
		 else
		 {
			 echo"no";
		 }
	 }		
	 else
     {
		 if ( ( in_array($temporary4,$allowedExts) )   && ($_FILES["file3"]["size"] < $set_filesize))
	     {
			 if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
	) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
	&& in_array($file_extension, $validextensions)) 
				{
					if ((($_FILES["file2"]["type"] == "image/png") || ($_FILES["file2"]["type"] == "image/jpg") || ($_FILES["file2"]["type"] == "image/jpeg")
) && ($_FILES["file2"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension5, $validextensions)) 
				{
					if ( ( in_array($temporary1,$allowedExts) )   && ($_FILES["file6"]["size"] < $set_filesize) )
					{
						if(!$cast)
						{
							if(!$girl)
							{
								if(!$sports)
							{
								if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
							}
							else
							{
							   if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
								{
								if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
								}
								else
								{
									echo"no";
								}	
							}
							}
							else
							{
								if ( ( in_array($temporary11,$allowedExts) )  && ($_FILES["file11"]["size"] < $set_filesize) )
								{
									if(!$sports)
									{
										if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
									}
									else
									{
									   if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
										{
											if(!$cultural)
								{
									
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
										}
										else
										{
											echo"no";
										}	
									}
								}
								else
								{
									echo"no";
								}	
							}
							
							
						}
						else
						{
								if ( ( in_array($temporary10,$allowedExts) )  && ($_FILES["file10"]["size"] < $set_filesize) )
							{
								if(!$girl)
								{
									if(!$sports)
									{
										if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
									}
									else
									{
									   if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
										{
											if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
										}
										else
										{
											echo"no";
										}	
									}
								}
								else
								{
								if ( ( in_array($temporary11,$allowedExts) )  && ($_FILES["file11"]["size"] < $set_filesize) )
								{
									if(!$sports)
									{
										if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
									}
									else
									{
									   if ( ( in_array($temporary12,$allowedExts) )  && ($_FILES["file12"]["size"] < $set_filesize ) )
										{
											if(!$cultural)
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
			}
		else
			{
				echo"no";
			}						
								}
								else
								{
								if ( ( in_array($temporary13,$allowedExts) )  && ($_FILES["file13"]["size"] < $set_filesize ) )
								{
			$res=mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
		@$count = mysqli_num_rows($res);
		@$userRow=mysqli_fetch_array($res);
		if($count)
		
		{
			$query_docq = mysqli_query($conn,"Update  `studdocument` Set `matricboard`='".$txtboard."', `matricyear`='".$ddlpassoutyear."', `matricredit`='".$txtcredit."', `matricgetmarks`='".$txtgetmarks."', `matrictotalmarks`='".$txtoutoffmarks."', `matricpercentage`='".$txtpercentage."', `matricrollno`='".$txtrollno."', `matricfile`='".$matricsheet."', `2board`='".$txtboard2."', `2year`='".$ddlpassoutyear2."', `2credit`='".$txtcredit2."', `2getmarks`='".$txtgetmarks2."', `2totalmarks`='".$txtoutoffmarks2."', `2percentage`='".$txtpercentage2."', `2rollno`='".$txtrollno2."', `2file`='".$intermeetsheet."', `gruad`='".$ddlboard."', `gruadpass`='".$ddlpassstatus."', `gruadboard`='".$txtboard3."', `gruadyear`='".$ddlpassoutyear3."', `gruadcredit`='".$txtcredit3."', `gruadgetmarks`='".$txtgetmarks3."', `gruadtotalmarks`='".$txtoutoffmarks3."', `gruadpercentage`='".$txtpercentage3."', `gruadrollno`='".$txtrollno3."', `gruadfile`='".$graduation."', `regingrate`='".$txtradio."', `photo`='".$userphoto."', `signature`='".$signature."', `character`='".$chacter."',`castcertificate`='".$cast."',`singlegirlcertificate`='".$girl."',`sportslcertificate`='".$sports."',`culturalcertificate`='".$cultural."',`status`=1 where `studid`='".$txtid."'");
		
		}
		else
		{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`, `date`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."','".$dat."',1)");
		} 
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath2 = $_FILES['file2']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath6 = $_FILES['file6']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath5 = $_FILES['file5']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath4 = $_FILES['file4']['tmp_name']; // Storing source path of the file in a variable
		$sourcePath3 = $_FILES['file3']['tmp_name']; // Storing source path of the file in a variable
		
	$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
	$targetPath2 = "upload/".$_FILES['file2']['name']; // Target path where file is to be stored
	$targetPath6 = "upload/".$_FILES['file6']['name']; // Target path where file is to be stored
	$targetPath5 = "upload/".$_FILES['file5']['name']; // Target path where file is to be stored
	$targetPath4 = "upload/".$_FILES['file4']['name']; // Target path where file is to be stored
	$targetPath3 = "upload/".$_FILES['file3']['name']; // Target path where file is to be stored
	
	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
	move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file
	move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
	move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file
	move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file
	move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file
		if($query_docq)
			{   
				echo"ok";
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
										}
										else
										{
											echo"no";
										}	
									}
								}
								else
								{
									echo"no";
								}	
								}
							}
							else
							{
								echo"no";
							}	
						}	
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