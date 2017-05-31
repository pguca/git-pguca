<!DOCTYPE html>
<?php
ob_start();
session_start();
		include ('config.php');
		
		if($_SESSION['user_id'] == null)
{
	header('Location:index.php');
}
else
{
function display_msg($msg_str,$cls_name="greenfont")
{
	$_SESSION['ses_msg_str'] = $msg_str;
	$_SESSION['ses_msg_cls_str'] = $cls_name;
}
$stud_query=mysqli_query($conn,"Select * from student  where studentid=".@$_SESSION['user_id']);
@$stud_num=mysqli_num_rows($stud_query);
@$stud_row=mysqli_fetch_array($stud_query);
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Avin/The IT Company</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style type="text/css">
.as
	{
		float:right;
	}



#success
		{
				color:green;
		}
#invalid
		{
				color:red;
		}
#line
		{
				margin-top: 274px;
		}
#error
		{
				color:red;
		}
#error_message
		{
				color:blue;
		}
#loading
		{
			display:none;
			font-size:25px;
		}
#loadinges
		{
			display:none;
			font-size:25px;
		}
#frm
	{
		    width: 69%;
			margin-left: 14%;
	}
h2
	{
		    text-align: center;
	}
hr
	{
		    margin-top: -6px ! important;
	}
.bs-example
    {
			margin: 20px;
	}
	/* USER PROFILE PAGE */
 .card
	 {
			margin-top: 20px;
			padding: 30px;
			background-color: rgba(214, 224, 226, 0.2);
			-webkit-border-top-left-radius:5px;
			-moz-border-top-left-radius:5px;
			border-top-left-radius:5px;
			-webkit-border-top-right-radius:5px;
			-moz-border-top-right-radius:5px;
			border-top-right-radius:5px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
	 }
.newtop 
	{
						z-index: 999;
						width: 100%;
						height: 100%;
						top: 0;
						left: 0;
						display: none;
						position: fixed;
						background-color: rgba(3, 0, 0, 0.63);
						color: #aaaaaa;
		opacity: 1;
		filter: alpha(opacity = 50);
	  }
.card.hovercard
	 {
		position: relative;
		padding-top: 0;
		overflow: hidden;
		text-align: center;
		background-color: #fff;
		background-color: rgba(255, 255, 255, 1);
	 }
.card.hovercard .card-background 
	 {
		height: 130px;
	 }
.card-background img
	 {
		-webkit-filter: blur(25px);
		-moz-filter: blur(25px);
		-o-filter: blur(25px);
		-ms-filter: blur(25px);
		filter: blur(25px);
		margin-left: -100px;
		margin-top: -200px;
		min-width: 130%;
	}
.card.hovercard .useravatar 
	{
		position: absolute;
		top: 15px;
		left: 0;
		right: 0;
	}
.card.hovercard .useravatar img 
	{
		width: 100px;
		height: 100px;
		max-width: 100px;
		max-height: 100px;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		border-radius: 50%;
		border: 5px solid rgba(255, 255, 255, 0.5);
	}
.card.hovercard .card-info
	{
		position: absolute;
		bottom: 14px;
		left: 0;
		right: 0;
	}
.card.hovercard .card-info .card-title 
	{
		padding:0 5px;
		font-size: 20px;
		line-height: 1;
		color: #262626;
		background-color: rgba(255, 255, 255, 0.1);
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	}
.card.hovercard .card-info 
	{
		overflow: hidden;
		font-size: 12px;
		line-height: 20px;
		color: #737373;
		text-overflow: ellipsis;
	}
.card.hovercard .bottom 
	{
		padding: 0 20px;
		margin-bottom: 17px;
	}
.btn-pref .btn 
	{
		-webkit-border-radius:0 !important;
	}
.info
	{
		
		float: right;
		margin-left: 11px;
	}
.succ
	{
		display:none;
		    margin-right: 55px;
	}
.wrng
	{
	    display:none;
		margin-right: 55px;
	}




  .useravatar img
   {
	   width: 250px ! important;
    height: 74px ! important;
    max-width: 250px ! important;
    max-height: 73px ! important;
   
    float: left ! important;
    margin-left: 1% ! important;
    margin-top: 4% ! important; 
	border-radius: 0  ! important; 
    border: 0  ! important; 
   }
  #mms
	{
		color: green;
		font-size: 29px;
		margin-left: 29%;
		
	}
</style>
</head>
<body>
<div class="bs-example">
   <div class="col-lg-6 col-sm-6" style="width:100% ! important">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="photo/logo_transparent_01.png">
        </div>
        
		<div class="card-info" > 
		<span class="card-title" style="float:right;"><a href="#tab6" class="btnstudinfo" studdata-id="<?php echo $stud_row['studentid'];?>" data-toggle="tab">Setting</a>|
			<a href="#">Help</a> | <a href="logout.php" >Logout</a></span><br>
		
		<span class="card-title" style="float:right;margin-top:3px;">Welcome :- <?php echo $stud_row['studentname'];?></span>
        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
		
        
		
		<?php
		$info_query=mysqli_query($conn,"Select * from studdocument  where studid=".@$_SESSION['user_id']);
		@$info_num=mysqli_num_rows($info_query);
		@$info_row=mysqli_fetch_array($info_query);
		$det_query=mysqli_query($conn,"Select * from registration  where studid=".@$_SESSION['user_id']);
		@$det_num=mysqli_num_rows($det_query);
		@$det_row=mysqli_fetch_array($det_query);

		$det_query2=mysqli_query($conn,"Select * from studcourse  where stud_id=".@$_SESSION['user_id']);
		@$det_num2=mysqli_num_rows($det_query2);
		@$det_row2=mysqli_fetch_array($det_query2);
		 $corseid = $det_row2['stud_choice_course'];
		 $det_query3=mysqli_query($conn,"Select * from course  where id='".$corseid."'");
		@$det_num3=mysqli_num_rows($det_query3);
		@$det_row3=mysqli_fetch_array($det_query3);

		$det_query4=mysqli_query($conn,"Select * from student  where studentid=".@$_SESSION['user_id']);
		@$det_num4=mysqli_num_rows($det_query4);
		@$det_row4=mysqli_fetch_array($det_query4);
		 $tempid = $info_row['gruad'];
		 $det_query5=mysqli_query($conn,"Select * from course  where id=".@$_SESSION['user_id']);
		 @$det_num5=mysqli_num_rows($det_query5);
		@$det_row5=mysqli_fetch_array($det_query5);
		
		
		?>
		<div class="btn-group" role="group">
            
        </div>
		<div class="btn-group" role="group">
		 
            <button type="button"  id="btnadminssion" class="btn btn-primary"   data-toggle="tab">
                <div class="hidden-xs">Addmission</div>
            </button>
			
        </div>
        
		<div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default btnview btnstudinfo" href="#tab6"  studdata-id="<?php echo $stud_row['studentid'];?>" data-toggle="tab">
                <div class="hidden-xs">Personal Information Details</div>
            </button>
        </div>
		
		<div class="btn-group" role="group">
           
        </div>
	
		
		 
		
		
        
    </div>

        <div class="well">
      <div class="tab-content">
        
		
        <span id="mms">Welcome To "<?php echo $stud_row['studentname'];?>" in your Portal</span>
	   
	   
	   
		
	




       
	 
		
		
		<div class="tab-pane fade in" id="tab6">
		  
         <div id="studpersonalinfo"></div>
        </div>
        
      </div>
    </div>
    
    </div>
</div>
</body>

<script>

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script>

<script>

	    $(document).ready(function() {
$(".btnstudinfo").click(function() {
			var studdataid=$(this).attr("studdata-id");
		 		$("#mms").css("display","none");
		  var dataString = "studdataid=" + studdataid ;
		
$.ajax({
type: "POST",
url: "edit_studentinformation.php?action=show",
data: dataString,
success: function(data)
{
$("#studpersonalinfo").html(data);

} 
				
				
			}); 
		});
	}); 


</script>
<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
<script>
$(document).ready(function() {
$("#btnadminssion").click(function () {
    window.location=("studentform.php");
		
});
});


</script>
</html>                                		
<?php
}
?>