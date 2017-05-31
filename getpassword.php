<?php
include ('config.php');
if(@$_REQUEST['action'])
{
if(@$_REQUEST["action"] == "edit")
   {
     $query_stud =mysqli_query($conn,"select * from `student` WHERE studentemail = '".md5($_REQUEST["Id"])."'");
	 $stud_num = mysqli_num_rows($query_stud);
	 $stud_row = mysqli_fetch_array($query_stud);
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
.wrngpas
	{
		width: 48%;
		margin-left: 23%;
		margin-top: 2%;
		display:none;
	}
    </style>
  <body class="login">
    <div>
	
	   <div class="alert alert-success succ">
	      You have change password successfully .
		</div>
		<div class="alert alert-danger wrng">
		   You have not change the password.
		</div>
		<div class="alert alert-danger wrngpas">
		  Please both password same.
		</div>
	
     
      <div class="login_wrapper">
	  
        <div class="animate form login_form">
		
          <section class="login_content" id="logingform">
            
              <h1 style="margin: -28px 0 30px;">Get Password Form</h1>
			  <div>
             <div class="form-group">
				<label for="pwd">E-Mail Address:</label>
				<span id="useremail-info" class="info"></span><br/>
				<input type="email" class="form-control demoInputBox" id="txtemail" readonly value="<?php echo $stud_row['studentemail'];?>" >
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
			  </div>
              <div class="abc">
                <Input  type="submit" name="send" class="btn btn-success btns" value="Update" onClick="sendContact()";>
              
               
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">
              

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
 function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "insert_user.php?action=updatepassword",
		data:'txtemail='+$("#txtemail").val()+'&txtpassword='+$("#txtpassword").val()+'&txtconfirmpassword='+$("#txtconfirmpassword").val(),
		type: "POST",
		success:function(data){
			if(data=='good')
			{
				
			$(".succ").css("display","block");
			$(".wrng").css("display","none");
			$(".wrngpas").css("display","none");
						
			}
			else if(data=='bad')
			{
				
			$(".wrngpas").css("display","block");
			(".succ").css("display","none");
			$(".wrng").css("display","none");	
			}
			else
			{
				
			$(".wrng").css("display","block");
			$(".wrngpas").css("display","none");
			(".succ").css("display","none");
					
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
	
	
	
	
	
	if(!$("#txtpassword").val()) {
		$("#userpassword-info").html("(required)");
		$("#txtpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtpassword").val().match(/(?=.*\d)(?=.*[a-zA-Z]).{8,}/)) {
		$("#userpassword-info").html("(Password should be alphanumeric)");
		$("#txtpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#txtconfirmpassword").val().match(/(?=.*\d)(?=.*[a-zA-Z]).{8,}/)) {
		$("#userconfirmpasswrd-info").html("(Password should be alphanumeric)");
		$("#txtconfirmpassword").css('background-color','#FFFFDF');
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
  alert("Password and Confirm Password should be same");
}
});
});
</script>

<script>
	$(document).ready(function(){
    $("#hide").click(function(){
        $("#logingform").hide();
        $("#getpasformform").css("display","block");
        
    });
   
});
</script>
<script>
	$(document).ready(function(){
    $("#show").click(function(){
        $("#logingform").show();
        $("#getpasformform").css("display","none");
        
    });
   
});
</script>
      </div>
    </div>
  </body>
</html>
