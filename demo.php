<?php 

include("config.php");

if(isset($_REQUEST['submit']))
{
	 $email=$_REQUEST['txtuseremail'];
	 $password=md5($_REQUEST['txtuserpassword']);
	 

	 $res=mysqli_query($conn,"Select * from student where studentemail='".$email."' and studentpassword='".$password."'");
	$count = mysqli_num_rows($res);
	$row = mysqli_fetch_array($res);
   
		
	if($count)
	{
		$msg = 2;
		/* session_start();
		$_SESSION['user_id']=$row['id'];
	        echo "<script>location.href='dashboard.php'</script>"; */
			
	}
	else
	{
		
		$msg = 1;
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
#bk
	{
		float: right;
		color: red;
	}
    </style>
  <body class="login">
    <div>
	<a id="bk" href="index.html">BACK TO HOME</a>
	<div class="alert alert-success succ">
	      
		  <strong>Success!</strong> You have successful Registered or Check your mail to confirm for conitnue .
		</div>
		<div class="alert alert-danger wrng">
		  <strong>Danger!</strong> You have not Registered.
		</div>
	<?php if(isset($msg) && $msg==1){ ?>
			  <div id="error">
			  User have not login by wrong email and password <span>? </span>
			  </div>
			  <?php $msg==0 ; } ?>
			  	<?php if(isset($msg) && $msg==2){ ?>
			  <div id="error">
			  User have login Successfully<span>!</span>
			  </div>
			  <?php $msg==0 ; } ?>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
	  
        <div class="animate form login_form">
		
          <section class="login_content">
            <form action="" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text"  name="txtuseremail" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="txtuserpassword" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="abc">
                <Input  type="submit" name="submit" class="btn btn-success" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                 <a href="#signup" class="to_register" style="color: green;font-size: 16px;"> I have sign up </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                   <h1><i class="fa fa-paw"></i> Scholastic Admin!</h1>
                  <p>©2017 All Rights Reserved by Scholastic Admin ! Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
         
              <h1 style="margin: -28px 0 26px;">Sign Up Form</h1>

              <div class="form-group">
						  <label for="email">Name:</label>
						  <span id="userName-info" class="info"></span><br/>
						  <input type="text" class="form-control demoInputBox" id="txtname" placeholder="Enter Name" name="txtname">
						</div>
						<div class="form-group">
						  <label for="pwd">E-Mail Address:</label>
						  <span id="useremail-info" class="info"></span><br/>
						  <input type="email" class="form-control demoInputBox" id="txtemail" placeholder="Enter E-Mail Address" name="txtemail">
						</div>
						<div class="form-group">
						  <label for="pwd">Aadhar Number(UID):</label>
						  <span id="useruid-info" class="info"></span><br/>
						  <input type="text" class="form-control demoInputBox"  maxlength="12" onkeypress="return isNumber(event)" id="txtuid" placeholder="Enter Aadhar Number(UID)" name="txtuid">
						</div>
						<div class="form-group">
						  <label for="pwd">Password :</label>
						  <span id="userpassword-info" class="info"></span><br/>
						  <input type="password" class="form-control demoInputBox" id="txtpassword" placeholder="Enter Password" name="txtpassword">
						</div>
						<div class="form-group">
						  <label for="pwd">Confirm Password:</label>
						  <span id="userconfirmpasswrd-info" class="info"></span><br/>
						  <input type="password" class="form-control demoInputBox" id="txtconfirmpassword" placeholder="Enter Confirm Password" name="txtconfirmpassword">
						</div>
              
              <div style="margin-top: 18px;">
                 <Input  type="submit" name="send" class="btn btn-success btns" value="Send" onClick="sendContact()";>
				 <a class="reset_pass abc" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already I a have Registered ?
                  <a href="#signin" class="to_register" style="color: green;font-size: 16px;"> Log in </a>
                </p>

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
 function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "insert_user.php?action=contact",
		data:'txtname='+$("#txtname").val()+'&txtemail='+$("#txtemail").val()+'&txtuid='+$("#txtuid").val()+'&txtpassword='+$("#txtpassword").val(),
		type: "POST",
		success:function(data){
			if(data=='OK')
			{
				$("#txtname").val(" ");
					$("#txtemail").val(" ");
						$("#txtuid").val(" ");
							$("#txtpassword").val(" ");
		$(".succ").css("display","block");
					setTimeout(function(){
						$(".succ").css("display","none");
					},3000);
			}
			else
			{
				$("#txtname").val(" ");
					$("#txtemail").val(" ");
						$("#txtuid").val(" ");
							$("#txtpassword").val(" ");
			$(".wrng").css("display","block");
					setTimeout(function(){
						$(".wrng").css("display","none");
					},3000);
			}
		},
		error:function (){
			$("#txtname").val(" ");
					$("#txtemail").val(" ");
						$("#txtuid").val(" ");
							$("#txtpassword").val(" ");
			$(".wrng").css("display","block");
					setTimeout(function(){
						$(".wrng").css("display","none");
					},3000);
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
		$("#useremail-info").html("(invalid)");
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
	if(!$("#txtpassword").val().match(/(?=.*\d)(?=.*[a-zA-Z]).{8,}/)) {
		$("#userpassword-info").html("(Invalid)");
		$("#txtpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtconfirmpassword").val()) {
		$("#userconfirmpasswrd-info").html("(required)");
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
  alert("Please Both Password Same");
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
      </div>
    </div>
  </body>
</html>
