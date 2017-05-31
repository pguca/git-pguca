<!DOCTYPE html>
<?php
ob_start();
session_start();
include ('config.php');
if($_SESSION['user_id'] == null){
	header('Location:index.php');
}else{
    $stud_query=mysqli_query($conn,"Select * from student  where studentid=".@$_SESSION['user_id']);
    @$stud_num=mysqli_num_rows($stud_query);
    @$stud_row=mysqli_fetch_array($stud_query);

    $time_query=mysqli_query($conn,"SELECT * FROM admissiondates order by id desc limit 1");
    @$time_num=mysqli_num_rows($time_query);
    @$time_row=mysqli_fetch_array($time_query);
}
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<title>Avin/The IT Company</title>-->
<link rel="stylesheet" href="css/student.css">
<link rel="stylesheet" href="css/bootstraps.min.css"> 
<link rel="stylesheet" type="text/css" href="admin/timedate/jquery.datetimepicker.css"/>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="form/view.css" media="all">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="form/view.js"></script>
<!--<script type="text/javascript" src="form/calendar.js"></script>-->
<script src="admin/timedate/build/jquery.datetimepicker.full.js"></script>

<script src="js/student.js"></script>    
<script>
	$('#datepickers').datetimepicker
	  ({
			lang:'ch',
			timepicker:false,
			format:"d/m/Y",
			dateFormat:"d/m/Y",// and tommorow is maximum date calendar
	  });

	 $(document).ready(function(){
		$("#btnstars").click(function () {
        $(".start").removeClass("btn-default").addClass("btn-primary");
        $("#favoritesee").removeClass("btn-primary").addClass("btn-default");
        $(".categorey").addClass("active").addClass("btn-primary"); // instead of this do the below 
		});
	 });
	 </script>
</head>
<body>
<div class="bs-example" style="margin:0;">
   <div class="col-lg-6 col-sm-6" style="width:100% ! important; padding:0;">
    <div class="" style="padding: 10px;min-height: 90px;width: 100%;position: relative;">
        <div class="" style="width: 20%;float: left;">
<!--            <a href="http://www.theavingroup.com" target="_blank"><img alt="" src="photo/logo_transparent_01.png" style="max-width: 200px;float: left;"></a>-->
        </div>
		<nav class="navbar bg-primary" style="width: 80%;float: right; background-color: #0275d8!important">
			<ul class="nav navbar-nav">
                <li class="active"><a href="student_information.php">Personal Information</a></li>
            <?php if((strtotime(date("Y-m-d")) >= strtotime($time_row['start'])) && (strtotime(date("Y-m-d")) <= strtotime($time_row['end']))){ ?>
				<li><a  href="stud_admissionfrom.php" >Admission</a></li>
                <?php } ?>
			    <li><a href="#">Help </a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-user"><?php echo $stud_row['studentname'];?></span></a></li>
			  <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
			</ul>
		</nav>
    </div>
	