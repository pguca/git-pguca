<?php 
include('config.php');
 date_default_timezone_set('asia/kolkata');
if(isset($_POST['submit'])){
	 $studentnames = $_POST['txtstudentnames'];
	 $studentpasswords = md5($_POST['txtstudentpasswords']);
	 

	 $query = mysqli_query($conn,"Select * from student where studentemail='".$studentnames."'  and studentpassword='".$studentpasswords."'  and status=0 and migrate=0 and terminate=0 ||  studentuidno='".$studentnames."'  and studentpassword='".$studentpasswords."'  and status=0 and migrate=0 and terminate=0");
	$num_query = mysqli_num_rows($query);
	$row_query = mysqli_fetch_array($query);
     $stud = $row_query['studentid'];
	 if($num_query)
	 {
            $stud_query = mysqli_query($conn,"Select * from registration where studid='".$stud."'");
			$stud_num = mysqli_num_rows($stud_query);
			$stud_row = mysqli_fetch_array($stud_query);
				if(!$stud_num){
					if($num_query){
				        session_start();
						$_SESSION['user_id']=$row_query['studentid'];
						$_SESSION['dates']=date("d/m/Y");
						echo "<script>location.href='registeration.php'</script>";  
					}
					else{
						echo "<script>alert('Student name and password wrong');</script>";
					}
				}else{
					    session_start();
						$_SESSION['user_id']=$row_query['studentid'];
						echo "<script>location.href='studentform.php'</script>"; 
				}
	 }else{
			echo "<script>alert('Student name and password wrong');</script>";
		}
}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scholastic Admin!</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="vendors/custom.min.css" rel="stylesheet">
  </head>
<style>
#error
	{
		background-color:#79EB69;
		color:#FFFFFF; width: 50%;
		height: 40px;
		text-align: center;
		font-size: 25px;
		margin-left: 24%;
		position: absolute;
		top: 5%;
		
	}
#error span
	 {
		 color: #FF0000;
	 }
label
	{
		float:left;
	}	 
.btns
    {
		float:left;
		
	}
#lgnfrm label
	{
		float:left;
	}
.info
	{
		color: red;
		float: left;
		margin-left: 11px;
	}
.infos
	{
		color: red;
		float: left;
		margin-left: 11px;
	}
.infoes
	{
		color: red;
		float: left;
		margin-left: 11px;
	}
.succ
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}
.wrng
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}
.wrnguid
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}
.wrngpass
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}
.succs
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}
.wrngs
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}	
.succss
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}
.wrngss
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}	
#bk
	{
		float: right;
		color: red;
	}
#get
	{
		display:none;
	}
#getpasformform
	{
		display:none;
	}

    </style>
  <body class="login">
    <div>
	
	<a id="bk" href="index.html">BACK TO HOME</a>
	   <div class="alert alert-success succ">
	      You have registered successfully or Check your e-mail to confirm the account for conitnue .
		</div>
		<div class="alert alert-danger wrng">
		   This email ID is already registered.
		</div>
		<div class="alert alert-danger wrnguid">
		  This Aadhar Number(UID) already registered.
		</div>
		<div class="alert alert-danger wrngpass">
		  Please both password same.
		</div>
		<div class="alert alert-success succs">
	     You have successful login Welcome to you our site.
		</div>
		<div class="alert alert-danger wrngs">
		   You have not login with wrong Username or Password !
		</div>
		<div class="alert alert-success succss">
	    If there is an account associated with this e-mail, you will receive a message from us.
		</div>
		<div class="alert alert-danger wrngss">
		   If there is an account associated with this e-mail, you will receive a message from us. !
		</div>
	
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
	  
        <div class="animate form login_form">
		
          <section class="login_content" id="logingform">
            
              <h1 style="margin: -28px 0 30px;">Login Form</h1>
			  <form action="" method="POST">
			  <div>
              <div class="form-group">
				<label style="margin-top: -1% ! important;">E-Mail or Aadhar Number(UID):</label>
				<span id="userName-infos" class="infos"></span><br/>
				<input type="text" class="form-control demoInputBoxs" required id="txtnames" placeholder="Enter E-Mail or Aadhar Number(UID)" name="txtstudentnames">
			  </div>
              <div class="form-group" >
				<label for="pwd">Password :</label>
				<span id="userpassword-infos" class="infos"></span><br/>
				<input type="password" class="form-control demoInputBoxs" required id="txtpasswords" placeholder="Enter Password" name="txtstudentpasswords">
			  </div>
			  </div>
              <div class="abc">
                <Input  type="submit" name="submit" class="btn btn-success" onClick="sendform()" value="Login" >
              
                <a class="reset_pass" id="hide" href="javascript:;">Lost your password?</a>
              
              </div>
				</form>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                 <a href="#signup" class="to_register" style="color: green;font-size: 16px;"> Sign up here </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <h1><i class="fa fa-paw"></i> Scholastic Admin!</h1>
                  <p>©2017 All Rights Reserved by Scholastic Admin ! Privacy and Terms</p>
                </div>
              </div>
            
          </section>
		  
		  <section class="login_content" id="getpasformform">
            
              <h1 style="margin: -28px 0 30px;">Get Password Form</h1>
			  <div class="form-group">
						  <label for="pwd">E-Mail Address:</label>
						  <span id="useremail-infoes" class="infoes"></span><br/>
						  <input type="email" class="form-control demoInputBoxes" id="txtemailes" placeholder="Enter Valid E-Mail Address" name="txtemailes">
						</div>
              <div class="abc">
                <button   class="btn btn-warning" style="float: left;"  value="Get Password" onClick="getform()";>Get Password</button>
                 <a class="reset_pass" id="show" href="javascript:;">LogIn Form</a>
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                 <a href="#signup" class="to_register" style="color: green;font-size: 16px;"> Sign up here. </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <h1><i class="fa fa-paw"></i> Scholastic Admin!</h1>
                  <p>©2017 All Rights Reserved by Scholastic Admin ! Privacy and Terms</p>
                </div>
              </div>
            
          </section>
		  
        </div>
		<script type="text/javascript">
 function getform() {
	var valid;	
	valid = validategetform();
	if(valid) {
		jQuery.ajax({
		url: "insert_user.php?action=getpassword",
		data:'txtemailes='+$("#txtemailes").val(),
		type: "POST",
		success:function(data){
			if(data=='Ok')
			{
				
		$(".succss").css("display","block");
					/* setTimeout(function(){
						$(".succss").css("display","none");
						
					},1500); */
				
			}
			else
			{
				
			$(".wrngss").css("display","block");
					/* setTimeout(function(){
						$(".wrngss").css("display","none");
					},1500); */
			}
		},
		error:function (){
			
		}
		});
	}
}

function validategetform() {
	var valid = true;	
	$(".demoInputBoxes").css('background-color','');
	$(".infoes").html('');
	
	
	if(!$("#txtemailes").val()) {
		$("#useremail-infoes").html("(required)");
		$("#txtemailes").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtemailes").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#useremail-infoes").html("(Invalid E-mail Id)");
		$("#txtemailes").css('background-color','#FFFFDF');
		valid = false;
	}
	
	
	
	return valid;
} 
</script>


        <div id="register" class="animate form registration_form">
          <section class="login_content">
              
              <h1 style="margin: -28px 0 26px;">Sign Up Form</h1>

              <div class="form-group">
						  <label for="email">Name:</label>
						  <span id="userName-info" class="info"></span><br/>
						  <input type="text" class="form-control demoInputBox" required id="txtname" placeholder="Enter Name" name="txtname">
						</div>
						<div class="form-group">
						  <label for="pwd">E-Mail Address:</label>
						  <span id="useremail-info" class="info"></span><br/>
						  <input type="email" class="form-control demoInputBox" required id="txtemail" placeholder="Enter E-Mail Address" name="txtemail">
						</div>
						<div class="form-group">
						  <label for="pwd">Aadhar Number(UID):</label>
						  <span id="useruid-info" class="info"></span><br/>
						  <input type="text" class="form-control demoInputBox" required maxlength="12" onkeypress="return isNumber(event)" id="txtuid" placeholder="Enter Aadhar Number(UID)" name="txtuid">
						</div>
						<div class="form-group">
						  <label for="pwd">Password :</label>
						  <span id="userpassword-info" class="info"></span><br/>
						  <input type="password" class="form-control demoInputBox" required id="txtpassword" placeholder="Enter Password" name="txtpassword">
						</div>
						<div class="form-group">
						  <label for="pwd">Confirm Password:</label>
						  <span id="userconfirmpasswrd-info" class="info"></span><br/>
						  <input type="password" class="form-control demoInputBox" required id="txtconfirmpassword" placeholder="Enter Confirm Password" name="txtconfirmpassword">
						</div>
              
              <div style="margin-top: 18px;">
                 <button   class="btn btn-success btns" value="Send" onClick="sendContact()";>Sign Up</button>
				  <p class="change_link">Already I a have Registered ?
                  <a href="#signin" class="to_register" style="color: green;font-size: 16px;"> Log in </a>
                </p>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
              

                <div class="clearfix"></div>
                <br />

                <div style="margin-top:-20px;">
                  <h1><i class="fa fa-paw"></i> Scholastic Admin!</h1>
                  <p>©2017 All Rights Reserved by Scholastic Admin ! Privacy and Terms</p>
                </div>
              </div>
            
          </section>
        </div>

		<script type="text/javascript">
 /*  function sendform() {
	var valid;	
	valid = validateContacts();
	if(valid) {
		jQuery.ajax({
		url: "insert_user.php?action=login",
		data:'txtname='+$("#txtnames").val()+'&txtpassword='+$("#txtpasswords").val(),
		type: "POST",
		success:function(data){
			
			if(data=='No')
			{
				
				$(".wrngs").css("display","block");
					setTimeout(function(){
						$(".wrngs").css("display","none");
					},1500);
				
			}
			else
			{
				//alert(data);
				$("body").load("registeration.php").hide().fadeIn(1500).delay(6000);
		    $(".succs").css("display","block");
					setTimeout(function(){
						$(".succs").css("display","none");
						window.location = 'registeration.php';
					},1000);  
				
			
			}
		},
		error:function (){
			
		}
		});
	}
}

function validateContacts() {
	var valid = true;	
	$(".demoInputBoxs").css('background-color','');
	$(".infos").html('');
	
	
	if(!$("#txtnames").val()) {
		$("#userName-infos").html("(Required)");
		$("#txtnames").css('background-color','#FFFFDF');
		valid = false;
	}
	
	
	if(!$("#txtpasswords").val()) {
		$("#userpassword-infos").html("(Required)");
		$("#txtpasswords").css('background-color','#FFFFDF');
		valid = false;
	}
	
	
	
	return valid;
}   */
</script>
		<script type="text/javascript">
 function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "insert_user.php?action=contact",
		data:'txtname='+$("#txtname").val()+'&txtemail='+$("#txtemail").val()+'&txtuid='+$("#txtuid").val()+'&txtpassword='+$("#txtpassword").val()+'&txtconfirmpassword='+$("#txtconfirmpassword").val(),
		type: "POST",
		success:function(data){
			if(data=='Ok')
			{
				/* $("#txtname").val(" ");
					$("#txtemail").val(" ");
						$("#txtuid").val(" ");
							$("#txtpassword").val(" "); */
	 $(".succ").css("display","block");
	 	$("#txtemail").css("border-color","rgba(128, 128, 128, 0.39)");
			    $(".wrng").css("display","none");
				$("#txtuid").css("border-color","rgba(128, 128, 128, 0.39)");
			    $(".wrnguid").css("display","none");
				$("#txtconfirmpassword").css("border-color","rgba(128, 128, 128, 0.39)");
				$(".wrngpass").css("display","none");
						/*setTimeout(function(){
						$(".succ").css("display","none");
					},1500); */
			}
			else if(data=='Nos')
			{
				
					$("#txtemail").css("border-color","red");
					$("#txtuid").css("border-color","rgba(128, 128, 128, 0.39)");
					
			    $(".wrng").css("display","block");
				 $(".succ").css("display","none");
				$(".wrnguid").css("display","none");
				$("#txtconfirmpassword").css("border-color","rgba(128, 128, 128, 0.39)");
				$(".wrngpass").css("display","none");
				
					
			}
			else if(data=='pass')
			{
				
					$("#txtemail").css("border-color","rgba(128, 128, 128, 0.39)");
					$("#txtuid").css("border-color","rgba(128, 128, 128, 0.39)");
					$("#txtconfirmpassword").css("border-color","red");
			    $(".wrng").css("display","none");
				 $(".succ").css("display","none");
				$(".wrnguid").css("display","none");
				$(".wrngpass").css("display","block");
					
			}
			else 
			{
				
					
					$("#txtuid").css("border-color","red");
						$("#txtemail").css("border-color","rgba(128, 128, 128, 0.39)");
			    $(".wrng").css("display","none");
							
			$(".wrnguid").css("display","block");
			$("#txtconfirmpassword").css("border-color","rgba(128, 128, 128, 0.39)");
				$(".wrngpass").css("display","none");
					
			}
		},
		error:function (){
			
		}
		});
	}
}

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#txtname").val()) {
		$("#userName-info").html("(required)");
		$("#txtname").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtemail").val()) {
		$("#useremail-info").html("(required)");
		$("#txtemail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtemail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#useremail-info").html("(Invalid E-mail Id)");
		$("#txtemail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtuid").val()) {
		$("#useruid-info").html("(required)");
		$("#txtuid").css('background-color','#FFFFDF');
		valid = false;
	}
	
	if(!$("#txtpassword").val()) {
		$("#userpassword-info").html("(required)");
		$("#txtpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	
	if(!$("#txtconfirmpassword").val()) {
		$("#userconfirmpasswrd-info").html("(required)");
		$("#txtconfirmpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtpassword").val().match(/(?=.*\d)(?=.*[a-zA-Z]).{8,15}/)) {
		$("#userpassword-info").html("(Please chose alphanumeric)");
		$("#txtpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtconfirmpassword").val().match(/(?=.*\d)(?=.*[a-zA-Z]).{8,15}/)) {
		$("#userconfirmpasswrd-info").html("(Please chose alphanumeric)");
		$("#txtconfirmpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	return valid;
} 
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("#txtconfirmpassword").blur(function(){
       var first = $("#txtpassword").val();
       var second= $("#txtconfirmpassword").val();
   if(first == second)
{
  
}
else
{
  alert("Password and Confirm Password should be same");
}
});
});
</script>
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
	$(document).ready(function(){
    $("#hide").click(function(){
        $("#logingform").hide();
        $("#getpasformform").css("display","block");
		$(".wrng").css("display","none");
				 $(".succ").css("display","none");
				$(".wrnguid").css("display","none");
				$(".wrngpass").css("display","none");
					$(".wrngss").css("display","none");
						$(".succss").css("display","none");
		
        
    });
   
});
</script>
<script>
	$(document).ready(function(){
    $("#show").click(function(){
        $("#logingform").show();
        $("#getpasformform").css("display","none");
			$(".wrng").css("display","none");
				 $(".succ").css("display","none");
				$(".wrnguid").css("display","none");
				$(".wrngpass").css("display","none");
					$(".wrngss").css("display","none");
						$(".succss").css("display","none");
        
    });
   
});
</script>
      </div>
    </div>
  </body>
</html>
