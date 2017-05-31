<?php 
include('config.php');

$msgFlag = false;
$form = 1;
/*******************Login************************/
if(isset($_POST['submit'])){
	 $studentnames         = $_POST['txtstudentnames'];
	 $studentpasswords     = md5($_POST['txtstudentpasswords']);
	 $query                = mysqli_query($conn,"Select * from student where (studentemail='".$studentnames."'  and studentpassword='".$studentpasswords."' and status = 1 ) ||  (studentuidno='".$studentnames."'  and studentpassword='".$studentpasswords."' and status = 1)");
	$num_query = mysqli_num_rows($query);
	$row_query = mysqli_fetch_array($query);
    $stud = $row_query['studentid'];
	if($num_query){					
        session_start();
        $_SESSION['user_id']=$row_query['studentid'];
        echo "<script>location.href='studentform.php'</script>";  
	}else{
		$msgFlag = true;
        $msg ='Invalid Username or password';
        $form = 1;
	}
}
/***************** Insert Student***************************/
if(isset($_POST['submit_insert_student'])){
    $txtname               = $_POST['txtname'];
    $email                 = $_POST['txtemail'];
    $txtuid                = $_POST['txtuid'];
    $txtpassword           = md5($_POST['txtpassword']);
    $txtconfirmpassword    = md5($_POST['txtconfirmpassword']);
    
    $exam_query            = mysqli_query($conn,"Select * from student where studentemail='".$email."' or studentuidno='".$txtuid."' "); 
    $exam_num              = mysqli_num_rows($exam_query);
    $exam_row              = @mysqli_fetch_array($exam_query);
    
    if(!$exam_num){
        $insert = "INSERT INTO `student`(`studentname`, `studentemail`, `studentuidno`, `studentpassword`,`status`,`isactive`) VALUES('".$txtname."','".$email."','".$txtuid."','".$txtpassword."',0,0)";
        $query      = mysqli_query($conn,$insert);
        $tablename  = mysqli_insert_id($conn);
         if($query){
             
             $msgFlag = true;
             $form = 3;
             $msg ='student_inserted';
             mkdir('upload/'.$tablename);
             insertuser_mail($email,'edit','Verify my email');
             
         }else{  $msgFlag = true; $msg ='tech_difficulty';  $form = 3; }
    }else{ $msgFlag = true; $msg ='Inserted Credentials have already used.'; $form = 3;	 }
}
/*********************Forgot Password *********************************/
if(isset($_POST['update_passsword'])){
        $email      = $_POST['txtemailes'];
    
        $exam_query = mysqli_query($conn,"Select * from student where studentemail='".$email."'");
        $exam_num   = mysqli_num_rows($exam_query);
        $exam_row   = @mysqli_fetch_array($exam_query);
         if($exam_num){
             $msgFlag = true; $msg ='Email sent with reset link';$form = 2;
             insertuser_mail($email,'update','Reset Password');
         }else{	$msgFlag = true; $msg ='tech_difficulty'; $form = 2; }
}

function insertuser_mail($email,$method,$text){
        $subject2 = "PGCUA";
        $message2 = '<div id=":1ai" class="ii gt adP adO"><div id=":1aj" class="a3s aXjCH m15a550a10a3c5f4c"><u></u>
        <div style="width:100%;margin:0px 0px 0px 0px;background-color:#ffffff;color:#272829;font-family:"Roboto",sans-serif">
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;width:100%;color:#272829;font-family:"Roboto",sans-serif">
            <tbody>
                <tr>
                    <td align="center" valign="top"></td>
                </tr>
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="m_-9167139107518604221tablewrap" style="background-color:#ffffff;margin:20px auto 20px auto;border-color:#eeeeee;border-width:1px;border-style:solid">
                        <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="max-width:578px">
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p style="margin:43px 0px 5px 50px">
                                                    <img src="'.$GLOBALS['mail_logo'].'" width="140" height="36" style="background-color:#ffffff;color:#000000;font-size:14px;text-align:center;height: 47px;margin-left: 25%;width:219px" alt="PGCUA" class="PGCUA">

                                                </p>
                                                <p style="margin:35px 50px 0px 50px;word-break:break-word;font-size:24px;font-weight:bold;max-width:100%;letter-spacing:-1px;box-sizing:border-box;text-align:center">
                                                    Verify your email address
                                                </p>
                                                <p style="margin:36px 50px 45px 50px;word-break:break-word;font-size:15px;font-weight:normal;max-width:100%;box-sizing:border-box;line-height:120%">
                                                    Please click the link below to confirm your email address, after verification you will be able to login to the portal'."
                                                </p>

                                                <p style='margin:0px 50px 43px 50px;text-align:left;max-width:100%;box-sizing:border-box'>
                                                    <a href='".$GLOBALS['siteurl']."/confirm.php?action=".$method."&Id=".base64_encode($email)."' style='color:#fff;font-size:17px;text-align:center;background-color:#20bdc5;text-decoration:none;width:240px;font-weight:bold;display:inline-block;padding:12px 0px 12px 0px;border:0px solid #20bec6;border-radius:24px;margin-left: 25%;' target='_blank' >".$text."</a></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr style='background-color:#ffffff'>
                            <td align='leftr' valign='top'>
                                <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' style='max-width:578px'>
                                    <tbody><tr>
                                        <td align='left'>
                                            <p style='margin:0 0 44px 50px;color:#888888;font-size:12px;line-height:20px;max-width:100%;box-sizing:border-box;text-align: center;'>
                                                Thank for register in PGCUA<br>

                                            </p>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                </tbody>
            </table>
        </td>
    </tr>

        </tbody>
    </table>
        <img src='https://ci4.googleusercontent.com/proxy/h6p5vS8PxsQBOCQJO16MYFLUNoTZI18lzl7MdoVK3D7-OUcP1p9DfWO2DrqzFQ4smkCyBE8wgfdbVKiMbhFwvs_n28OULn7ZiD-sCPnSgzmcsB2KF46s6qb6--CI=s0-d-e1-ft#https://www.pcloud.com/trackopen?p=1rv7ZN0ZMoSPnYjp8ymTkeF7ThRAGmbPTfm7' height='1' width='1' class='CToWUd'></div><div class='yj6qo'></div>
        <div class='adL'></div>

        </div>
    </div>";


    $headers2  = 'MIME-Version: 1.0' . "\r\n";
    $headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers2 .= "From:" . 'www.PGCUA.com';
    mail($email,$subject2,$message2,$headers2); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
#error{background-color:#79EB69;color:#FFFFFF; width: 50%;height: 40px;text-align: center;font-size: 25px;margin-left: 24%;position: absolute;top: 5%;}
#error span{color: #FF0000;}
label{float:left;}	 
.btns{float:left;}
#lgnfrm label{float:left;}
.info{color: red;float: left;margin-left: 11px;}
.infos{color: red;float: left;margin-left: 11px;}
.infoes{color: red;float: left;margin-left: 11px;}
.succ{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}
.wrng{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}
.wrnguid{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}
.wrngpass{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}
.succs{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}
.wrngs{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}	
.succss{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}
.wrngss{width: 48%;margin-left: 23%;margin-top: 2%;display:none;}	
#bk{float: right;color: red;}
</style>
<script type="text/javascript">

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

$(document).ready(function(){
    $("#txtconfirmpassword").blur(function(){
       var first = $("#txtpassword").val();
       var second= $("#txtconfirmpassword").val();
        if(first == second){ }
        else{ alert("Password and Confirm Password should be same"); }
    });
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

    var formshow = function(val){
		$("#logingform, #getpasform, #register").hide();
		$("#"+val).show();
	}
</script>
</head>
<body>
<div id="header" style="min-height:60px; width:100%"> </div>
<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/1.jpg" alt="Image">
          <div class="carousel-caption">
          </div>      
        </div>
        <div class="item">
          <img src="images/10.jpg" alt="Image">
          <div class="carousel-caption">
          </div>      
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
      <?php if($msgFlag){ ?>
      <div class="alert alert-warning">
                    <?php  echo $msg; ?>
                </div>
      <?php } ?>
      <!------------------Login Form----------------------->
            <section id="logingform" <?php if($form == 1){echo 'style= "display:block;"'; }else{ echo 'style= "display:none;"';} ?> >
              <h1>Login Form</h1>
			  <form action="" method="POST"> 
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
				  <div>
					<input type="submit" name="submit" class="btn btn-success" value="Login" >
					<a class="reset_pass" id="hide" href="javascript:formshow('getpasform')">Lost your password?</a>
				  </div>
				</form>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">New to site?
                 <a href="javascript:formshow('register')" class="to_register" style="color: green;font-size: 16px;" > Sign up here </a>
                </p>
                <div class="clearfix"></div>
              </div>
          </section>
      
      
      <!--------------------Update Password--------------------->
		  <section id="getpasform" <?php if($form == 2){echo 'style= "display:block;"'; }else{ echo 'style= "display:none;"'; } ?>>
              <h1>Get Password Form</h1>
              <form action="" method="POST">
			  <div class="form-group">
				<label for="pwd">E-Mail Address:</label>
				<span id="useremail-infoes" class="infoes"></span><br/>
				<input type="email" class="form-control demoInputBoxes" id="txtemailes" placeholder="Enter Valid E-Mail Address" name="txtemailes">
			   </div>
              <div class="">
                  
                <input class="btn btn-warning" type="submit" name="update_passsword" alt="update_passsword" value="Get Password"/>
                 <a class="reset_pass" style="padding-top: 7px;display: inline-block;" id="show" href="javascript:formshow('logingform')">LogIn Form</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">New to site?
                 <a href="javascript:formshow('register')" class="to_register" style="color: green;font-size: 16px;"> Sign up here. </a>
                </p>
                <div class="clearfix"></div>
              </div>
              </form>
          </section>
      <!-----------------Register Student------------------------>
          <section id="register" <?php if($form == 3){echo 'style= "display:block;"'; }else{ echo 'style= "display:none;"'; } ?>>
              <h1>Sign Up Form</h1>
              <form action="" method="POST">
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
						  <input type="text" class="form-control demoInputBox" required maxlength="12" minlength="12" onkeypress="return isNumber(event)" id="txtuid" placeholder="Enter Aadhar Number(UID)" name="txtuid">
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
                          <input type="submit" class="btn btn-success btns" name="submit_insert_student" alt="submit_insert_student" onclick="return validateContact();" value="Sign Up"/>
                          <p class="change_link" style="padding-top: 5px;">Already Registered ?
                          <a href="javascript:formshow('logingform')" class="to_register" style="color: green;font-size: 16px;"> Log in </a>
                        </p>
                      </div>
              </form>
              <div class="clearfix"></div>
          </section>
  </div>
</div>
</div>

<div class="container text-center">    
  <h3>What We Do</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>