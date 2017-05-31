<?php
ob_start();
session_start();
include ('config.php');
		
if($_SESSION['user_id'] == null){
	header('Location:index.php');
}else{
function display_msg($msg_str,$cls_name="greenfont"){
	$_SESSION['ses_msg_str'] = $msg_str;
	$_SESSION['ses_msg_cls_str'] = $cls_name;
}
$stud_query=mysqli_query($conn,"Select * from student  where studentid=".@$_SESSION['user_id']);
@$stud_num=mysqli_num_rows($stud_query);
@$stud_row=mysqli_fetch_array($stud_query);

if (isset($_POST['submit']))
{
  $txtid                = $_POST['txtid'];
  $studentfirstname     = $_POST['txtstudentfirstname'];
  $studentlastname      = $_POST['txtstudentlastname'];
  $fatherfirstname      = $_POST['txtfatherfirstname'];
  $fatherlastname       = $_POST['txtfatherlastname'];
  $motherfirstname      = $_POST['txtmotherfirstname'];
  $motherlastname       = $_POST['txtmotherlastname'];
  $occupation           = $_POST['txtoccupation'];
  $salary               = $_POST['txtsalary'];
  $address              = $_POST['txtaddress'];
  $ddlcountry           = $_POST['ddlcountry'];
  $state                = $_POST['txtstate'];
  $city                 = $_POST['txtcity'];
  $district             = $_POST['txtdistrict'];
  $tehsil               = $_POST['txttehsil'];
  $pincode              = $_POST['txtpincode'];
  $address2             = $_POST['txtaddress2'];
  $ddlcountry2          = $_POST['ddlcountry2'];
  $state2               = $_POST['txtstate2'];
  $city2                = $_POST['txtcity2'];
  $district2            = $_POST['txtdistrict2'];
  $tehsil2              = $_POST['txttehsil2'];
  $pincode2             = $_POST['txtpincode2'];
  $regdate              = $_POST['regdate'];
  $ddlcategory          = $_POST['ddlcategory'];
  $irdp                 = $_POST['irdp'];
  $sports               = $_POST['sports'];
  $ncc                  = $_POST['ncc'];
  $nss                  = $_POST['nss'];
  $bonafide             = $_POST['bonafide'];
  $nationality          = $_POST['nationality'];
  $mobileno             = $_POST['txtmobileno'];
  $fatherno             = $_POST['txtfatherno'];
  $landlineno           = $_POST['txtlandlineno'];
  $married              = $_POST['married'];
  $gender               = $_POST['gender'];
  $culturalquota        = $_POST['culturalquota'];
  $sportspersonquota    = $_POST['sportspersonquota'];
  $singlegirl           = $_POST['singlegirl'];
    
    $query          = mysqli_query($conn,"Select * from registration where studid='".$txtid."'");
    $num_query      = mysqli_num_rows($query);
    $row_query      = mysqli_fetch_array($query);
	if(!$row_query){
       $student_query = mysqli_query($conn,"INSERT INTO `registration`(`studentname`, `fathername`, `mothername`,`gender`, `occupation`, `annualsalary`, `address`, `country`, `state`, `city`,`district`,`tehsil`, `pincode`, `address2`, `country2`, `state2`, `city2`,`district2`,`tehsil2`,`pincode2`, `dob`, `categorey`, `irdp`, `sports`, `ncc`,`nss`,`bonafideofup`, `nationality`, `mobileno`, `fatherno`, `landlineno`, `marriedstatus`,`studid`,`sportdquotaperson`,`singlegirlperson`,`culturalquotaperson`) VALUES ('".$studentfirstname.' '.$studentlastname."','".$fatherfirstname.' '.$fatherlastname."','".$motherfirstname.' '.$motherlastname."','".$gender."','".$occupation."','".$salary."','".$address."','".$ddlcountry."','".$state."','".$city."','".$district."','".$tehsil."','".$pincode."','".$address2."','".$ddlcountry2."','".$state2."','".$city2."','".$district2."','".$tehsil2."','".$pincode2."','".$regdate."','".$ddlcategory."','".$irdp."','".$sports."','".$ncc."','".$nss."','".$bonafide."','".$nationality."','".$mobileno."','".$fatherno."','".$landlineno."','".$married."','".$txtid."','".$sportspersonquota."','".$singlegirl."','".$culturalquota."')");
		   if($student_query){
                //$_SESSION['user_id']=$txtid;
				echo '<script type="text/javascript">';
				echo 'alert("You have insert personal information Succesfully");';
				echo 'window.location.href="studentform.php";';
				echo '</script>';
			   }else{
				echo "<script type='text/javascript'> alert('You cannot registered');</script>";
			   }
	}else{
	echo "<script type='text/javascript'> alert('You have already registered');</script>";
	}
  }
?>
<!DOCTYPE html>


<html lang="en">
<head>
  <title>Registration|Form</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="form/view.css" media="all">
  <script type="text/javascript" src="form/view.js"></script>
  <script type="text/javascript" src="form/calendar.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="admin/timedate/jquery.datetimepicker.css"/>
  <script src="admin/timedate/build/jquery.datetimepicker.full.js"></script>
  <script>
    function FillBilling(f) {
          if(f.billingtoo.checked == true) {
            f.txtaddress2.value = f.txtaddress.value;
            f.ddlcountry2.value = f.ddlcountry.value;
            f.txtstate2.value = f.txtstate.value;
            f.txtcity2.value = f.txtcity.value;
            f.txtdistrict2.value = f.txtdistrict.value;
            f.txttehsil2.value = f.txttehsil.value;
            f.txtpincode2.value = f.txtpincode.value;

          }else if(f.billingtoo.checked == false){
             f.txtaddress2.value ="" ;
             f.ddlcountry2.value ="" ;
             f.txtdistrict2.value ="" ;
             f.txtcity2.value ="" ;
             f.txtpincode2.value ="" ;
             f.txtstate2.value ="" ;
             f.txttehsil2.value ="" ;
          }
    }
    function myFunction() {
        var x, text;

        // Get the value of the input field with id="numb"
        x = document.getElementById("numb").value;

        // If x is Not a Number or less than one or greater than 10
        if (isNaN(x) || x < 1 || x > 10) {
            text = "Input not valid";
        } else {
            text = "Input OK";
        }
        document.getElementById("demo").innerHTML = text;
    }

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


  function ValidateAlpha(evt) {
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode >32)

    return false;
    return true;

    } 

	$('#datepickers').datetimepicker
	  ({
		    // minDate: 0,
			//yearOffset:0,
			lang:'ch',
			timepicker:false,
			format:"d/m/Y",
			dateFormat:"d/m/Y",// and tommorow is maximum date calendar
	  });
</script>
<style>

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
.input-group-addon
	{
			background-color:#FFF;
	}
.as
	{
		color:red;
	}
</style>
</head>
<body>
<div class="container">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <h2>Student Personal Information form</h2>
  <h3 style="float:right;">
    <i class="fa fa-user-o" aria-hidden="true"></i>
    <?php echo $stud_row['studentname'];?>
	&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i>
     <a href="logout.php">Logout</a></h3>
  <hr style="width: 77%;">
  
  <form class="form-horizontal" action="" method="post" id="frm">
	<h3>Student's Name</h3>
	  <hr>
    <div class="form-group">
      <input type="hidden" name="txtid" value="<?php echo $stud_row['studentid'];?>">
      <div class="col-sm-6">
	  <label class="control-label" for="email">First Name:</label><span class="as">*</span>
        <input type="text" class="form-control alphaonly" onKeyPress="return ValidateAlpha(event);" required maxlength="15"  id="txtFirstName" placeholder="Enter First Name" name="txtstudentfirstname">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">Last Name:</label>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" maxlength="15" id="email" placeholder="Enter Last Name" name="txtstudentlastname">
      </div>
    </div>
	<h3>Father's Name</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">First Name:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">Sh</span>
			 <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);"  required maxlength="15"  id="email" placeholder="Enter First Name" name="txtfatherfirstname">
		</div>
     </div>
	 <div class="col-sm-6">
	  <label class="control-label" for="email"> Last Name:</label>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" maxlength="15" id="email" placeholder="Enter Last Name" name="txtfatherlastname">
      </div>
    </div>
	<h3>Mother's Name</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">First Name:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">Smt</span>
			<input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" required maxlength="15"  id="email" placeholder="Enter First Name" name="txtmotherfirstname">
		</div>
     </div>
	 <div class="col-sm-6">
	  <label class="control-label" for="email"> Last Name:</label>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" maxlength="15" id="email" placeholder="Enter Last Name" name="txtmotherlastname">
      </div>
    </div>
	<h3>Father/Guardian's occupation</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">Occupation:</label><span class="as">*</span>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" required maxlength="30" id="email"  placeholder="Enter Last Name" name="txtoccupation">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Annual Salary(In Indian National Rupee):</label><span class="as">*</span>
        <input type="text" class="form-control" required onkeypress="return isNumber(event)" maxlength="10" id="email" placeholder="Enter Last Name" name="txtsalary">
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">Gender:</label>
		
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> <input type="radio" name="gender" value="male" checked>Male<input type="radio" name="gender" value="Female">Female</label>
              </div>
    </div>
	<h3>Permanent Address</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-12">
	  <label class="control-label" for="email">HouseNo./Landmark</label><span class="as">*</span>
        <textarea class="form-control " required id="email"  maxlength="250" placeholder="Enter Street Address" name="txtaddress"></textarea>
      </div>
	  
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">City :</label><span class="as">*</span>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" required maxlength="22" id="email" placeholder="Enter City" name="txtcity">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Tehsil :</label><span class="as">*</span>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" required id="email" name="txttehsil" placeholder="Enter Tehsil" maxlength="22">
      </div>
	  
    </div>
	<div class="form-group">
	
    
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Postal / Zip Code:</label><span class="as">*</span>
        <input type="text" class="form-control "  required id="email" placeholder="Enter Postal / Zip Code" maxlength="6" onkeypress="return isNumber(event)" name="txtpincode">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> District :</label><span class="as">*</span>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" required id="email" name="txtdistrict" placeholder="Enter District" maxlength="22">
      </div>
    </div>
	<div class="form-group">
	
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> State / Province / Region:</label><span class="as">*</span>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" required maxlength="22" id="email" placeholder="Enter State / Province / Region" name="txtstate">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">Country:</label><span class="as">*</span>
		
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" required maxlength="15" id="email" placeholder="Enter Country" name="ddlcountry">
      </div>
    </div>
	
	
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label> <input type="checkbox" name="billingtoo" id="checker" onclick="FillBilling(this.form)"/>Same As Above</label>
        </div>
      </div>
    </div>
	<h3>Correspondence Address</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-12">
	  <label class="control-label" for="email">HouseNo./Landmark :</label>
        <textarea class="form-control" maxlength="250" id="email" placeholder="Enter Street Address" name="txtaddress2"></textarea>
      </div>
	  
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">City:</label>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" maxlength="22" id="email" placeholder="Enter City" name="txtcity2">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Tehsil :</label>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" id="email" name="txttehsil2" placeholder="Enter Tehsil" maxlength="22">
      </div>
	  
    </div>
	<div class="form-group">
	
    
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Postal / Zip Code:</label>
        <input type="text" class="form-control " id="email" placeholder="Enter Postal / Zip Code" maxlength="6" onkeypress="return isNumber(event)" name="txtpincode2">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> District :</label>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" id="email" name="txtdistrict2" placeholder="Enter District" maxlength="22">
      </div>
    </div>
	<div class="form-group">
	
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> State / Province / Region:</label>
        <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" id="email" maxlength="22" placeholder="Enter State / Province / Region" name="txtstate2">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">Country :</label>
		 <input type="text" class="form-control alphaonly" onkeypress="return ValidateAlpha(event);" id="email" maxlength="15" placeholder="Enter Country Name" name="ddlcountry2">
      </div>
    </div>
	
	
	
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">DOB:</label>
        <div class= "frmleft">
		<input type="date" class="form-control" required id="datepickers" name="regdate" maxlength = "22"/>
	</div>
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Category:</label><span class="as">*</span>
      <select class="form-control" required name="ddlcategory" id="ddlcategory" > 
			<option selected disabled value=" ">Select category</option>
			<?php
				$category_query=mysqli_query($conn,"Select * from category");
				@$category_count=mysqli_num_rows($category_query);
				while(@$category_row=mysqli_fetch_array($category_query))
			{
			?>
			  <option value="<?php echo $category_row['category_id'];?>" ><?php echo $category_row['category'];?></option>
			<?php
			}
			?>

		</select>
      </div>
    </div>
	

	

	<h3>Sub-Category</h3>
	  <hr/>
	<div class="form-group">
	<div class="col-sm-2">
	  <label class="control-label" for="email">IRDP:</label></br>
        <input name="irdp" value="1" type="radio">Yes <input name="irdp" type="radio" value="0" checked> No 
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">Sports:</label></br>
        <input name="sports" value="1" type="radio">Yes <input name="sports" type="radio" value="0" checked> No 
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">NCC:</label></br>
        <input type="radio" value="1" name="ncc">Yes <input type="radio" name="ncc" value="0" checked> No 
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">NSS:</label></br>
        <input type="radio" value="1" name="nss">Yes <input type="radio" name="nss" value="0" checked> No 
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">Bonafide Up:</label></br>
        <input type="radio" value="1" name="bonafide">Yes <input type="radio" value="0" name="bonafide" checked> No 
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">Nationality:</label></br>
        <input type="radio" value="1" name="nationality" checked>India <input name="nationality" value="0" type="radio"> Other 
      </div>
	  
    </div>
	<div class="form-group">
	<div class="col-sm-4">
	  <label class="control-label" for="email">Single Girl Child Person :</label></br>
        <input name="singlegirl" value="1" type="radio">Yes <input name="singlegirl" type="radio" value="0" checked> No 
      </div>
	  <div class="col-sm-4">
	  <label class="control-label" for="email">Cultural Quota :</label></br>
        <input name="culturalquota" value="1" type="radio">Yes <input name="culturalquota" type="radio" value="0" checked> No 
      </div>
	  <div class="col-sm-4">
	  <label class="control-label" for="email">Sports Person Quota :</label></br>
        <input type="radio" value="1" name="sportspersonquota">Yes <input type="radio" name="sportspersonquota" value="0" checked> No 
      </div>
	 
	  
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">Landline No(Optional):</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Landline No(Optional)" maxlength="10" onkeypress="return isNumber(event)" name="txtlandlineno">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Married Status:</label>
          <input type="radio" value="1" name="married">Yes <input type="radio" name="married" value="0" checked> No 
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">  Mobile No:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">+91</span>
			<input type="text"  class="form-control" required placeholder="Enter  Mobile No" maxlength="10" onkeypress="return isNumber(event)" name="txtmobileno"/>
		</div>
     </div>
	 <div class="col-sm-6">
	  <label class="control-label" for="email"> Father's/Guardian's Mobile No:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">+91</span>
			<input type="text"  class="form-control" required placeholder="Enter  Father's Mobile No" maxlength="10" onkeypress="return isNumber(event)" name="txtfatherno"/>
		</div>
     </div>
	  
    </div>
	
	
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-6">
        <input type="submit" name="submit" id="btnSubmit" class="btn btn-success btns" value="SAVE">
      </div>
    </div>
  </form>
</div>
 
</body>
</html>
<?php
}
?>