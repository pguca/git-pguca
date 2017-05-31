<link rel="stylesheet" href="css/bootstraps.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	if(!$("#txtpassword").val().match(/(?=.*\d)(?=.*[a-zA-Z]).{8,15}/)) {
		$("#userpassword-info").html("(Please chose alphanumeric)");
		$("#txtpassword").css('background-color','#FFFFDF');
		valid = false;
	}
	return valid;
} 
</script>
<?php
include ('config.php');
if(@$_REQUEST['action']){
if(@$_REQUEST["action"] == "edit"){
    $email = base64_decode($_REQUEST["Id"]);
    $query =mysqli_query($conn,"Update  `student` SET status='1' WHERE studentemail = '".$email."'");
  if($query){
				echo '<script type="text/javascript">';
                echo 'alert("Your account has been confirmed, you can now login to PGCUA portal with your Email ID and Password");';
                echo 'window.close()';
                echo '</script>';
			//header('location:loginemployer.php');
	    }else{
            echo "<script type='text/javascript'> alert(' Can not activate your account');</script>";
            echo '<script type="text/javascript">';
            echo 'alert("Can not activate your account ?");';
            echo 'window.close()';
            echo '</script>';
	   }
	}
    
if(@$_REQUEST["action"] == "update"){ ?>
    <?php 
	if(isset($_POST['updatepassword'])){
	 $password         = md5($_POST['txtpassword']);
     $email            = base64_decode($_REQUEST["Id"]);
	 $query            = mysqli_query($conn,"Update  `student` SET studentpassword='".$password."' WHERE studentemail = '".$email."'");
	if($query){					
        echo '<script type="text/javascript">';
                echo 'alert("Password Succesfully reset");';
                echo 'window.close()';
                echo '</script>';
	}else{
		echo "<script type='text/javascript'> alert(' Can not reset password contact admin');</script>";
            echo '<script type="text/javascript">';
            echo 'alert("Can not activate your account ?");';
            echo 'window.close()';
            echo '</script>';
	}
}
	?>
    <form method="post" action="" style="width: 100%;text-align: center;margin-top: 50px;">
        <h1>Reset Your Password</h1>
                <div class="form-group">
                  <label for="pwd">Password :</label>
                  <span id="userpassword-info" class="info"></span><br/>
                  <input type="password" class="form-control demoInputBox" required id="txtpassword" placeholder="Enter Password" name="txtpassword" style="
    width: 200px;margin: 0 auto;">
                </div>
                    <div style="margin-top: 18px;">
                    <input type="submit" onclick="return validateContact();" class="btn btn-success btns" name="updatepassword" alt="updatepassword" value="Update Password"/>
                    </div>
        </form>
<?php    }
}
?>