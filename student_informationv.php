<?php include_once ('header.php');?> 

<script>
$(document).ready(function(){
	$("#btnsubmit").on("click",function(){
  var studid = $('#studid').val();
  $("#loading1").show();
  var studentfirstname = $('#txtstudentfirstname').val();
  var studentlastname = $('#txtstudentlastname').val();
  var fatherfirstname = $('#txtfatherfirstname').val();
  var fatherlastname = $('#txtfatherlastname').val();
  var motherfirstname = $('#txtmotherfirstname').val();
  var motherlastname = $('#txtmotherlastname').val();
  var occupation = $('#txtoccupation').val();
  var salary = $('#txtsalary').val();
  var address = $('#txtaddress').val();
  var ddlcountry = $('#ddlcountry').val();
  var state = $('#txtstate').val();
  var city = $('#txtcity').val();
  var district = $('#txtdistrict').val();
  var tehsil = $('#txttehsil').val();
  var pincode = $('#txtpincode').val();
  var address2 = $('#txtaddress2').val();
  var ddlcountry2 = $('#ddlcountry2').val();
  var state2 = $('#txtstate2').val();
  var city2 = $('#txtcity2').val();
  var district2 = $('#txtdistrict2').val();
  var tehsil2 = $('#txttehsil2').val();
  var pincode2 = $('#txtpincode2').val();
  var regdate = $('#datepickers').val();
  var ddlcategorys = $('#ddlcategorys').val();
 
  
  var irdp = [];  
           $('.irdp').each(function(){  
                if($(this).is(":checked"))  
                {  
                     irdp.push($(this).val());  
                }  
           });  
		   irdp = irdp.toString(); 
var sports = [];  
           $('.sports').each(function(){  
                if($(this).is(":checked"))  
                {  
                     sports.push($(this).val());  
                }  
           });  
		   sports = sports.toString(); 

var ncc = [];  
           $('.ncc').each(function(){  
                if($(this).is(":checked"))  
                {  
                     ncc.push($(this).val());  
                }  
           });  
		   ncc = ncc.toString();  
 var nss = [];  
           $('.nss').each(function(){  
                if($(this).is(":checked"))  
                {  
                     nss.push($(this).val());  
                }  
           });  
		   nss = nss.toString();
    var bonafide = [];  
           $('.bonafide').each(function(){  
                if($(this).is(":checked"))  
                {  
                     bonafide.push($(this).val());  
                }  
           });  
		   bonafide = bonafide.toString();
 
   var nationality = [];  
           $('.nationality').each(function(){  
                if($(this).is(":checked"))  
                {  
                     nationality.push($(this).val());  
                }  
           });  
		   nationality = nationality.toString();
  var mobileno = $('#txtmobileno').val();
  var fatherno = $('#txtfatherno').val();
  var landlineno = $('#txtlandlineno').val();
 
   var married = [];  
           $('.married').each(function(){  
                if($(this).is(":checked"))  
                {  
                     married.push($(this).val());  
                }  
           });  
		   married = married.toString();
		   
   var gender = [];  
           $('.gender').each(function(){  
                if($(this).is(":checked"))  
                {  
                     gender.push($(this).val());  
                }  
           });  
		   gender = gender.toString();
		   
		 
          var singlegirl = [];  
           $('.singlegirl').each(function(){  
                if($(this).is(":checked"))  
                {  
                     singlegirl.push($(this).val());  
                }  
           });  
		   singlegirl = singlegirl.toString();
		   
		      
          var culturalquota = [];  
           $('.culturalquota').each(function(){  
                if($(this).is(":checked"))  
                {  
                     culturalquota.push($(this).val());  
                }  
           });  
		   culturalquota = culturalquota.toString();
		   
		   
		      
          var sportspersonquota = [];  
           $('.sportspersonquota').each(function(){  
                if($(this).is(":checked"))  
                {  
                     sportspersonquota.push($(this).val());  
                }  
           });  
		   sportspersonquota = sportspersonquota.toString();
		   
		   
		    var dataString = 'gender=' + gender +'&married=' + married +'&landlineno=' + landlineno +'&fatherno=' + fatherno +'&mobileno=' + mobileno +'&nationality='+ nationality +'&bonafide='+ bonafide+'&nss='+ nss +'&ncc='+ ncc +'&sports=' + sports +'&irdp=' + irdp +'&ddlcategorys=' + ddlcategorys +'&regdate=' + regdate +'&pincode2=' + pincode2 +'&tehsil2='+ tehsil2 +'&district2='+ district2 +'&city2='+ city2 +'&state2='+ state2+'&ddlcountry2='+ ddlcountry2+'&address2='+ address2+'&pincode='+ pincode+'&tehsil='+ tehsil+'&district='+ district+'&city='+ city+'&state='+ state+'&ddlcountry='+ ddlcountry+'&address='+ address+'&salary='+ salary+'&occupation='+ occupation+'&motherlastname='+ motherlastname+'&motherfirstname='+ motherfirstname+'&fatherlastname='+ fatherlastname+'&fatherfirstname='+ fatherfirstname+'&studentlastname='+ studentlastname+'&studentfirstname='+ studentfirstname+'&studid='+studid+'&singlegirl='+singlegirl+'&sportspersonquota='+sportspersonquota+'&culturalquota='+culturalquota;
		$.ajax({
		type: "POST",
		url: "update_studinformation.php?action=update",
		data: dataString,
		success: function(data)
			{
				if(data=="Ok")
					{
						$(".succ").css("display","block");
						$("#loading1").hide();
						 jQuery('html,body').animate({ scrollTop: jQuery('.succ').offset().top}, 1000);
					}
					else
					{
						$(".wrng").css("display","block");
						 jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
						$("#loading1").hide();
					}
			}
	});
});
});

</script>

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
   
  }
 else if(f.billingtoo.checked == false) 
 {
    
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

</script>
<?php
  $stud_query=mysqli_query($conn,"SELECT  t1.studid,t1.`studentname`,t1. `fathername`,t1. `mothername`,t1. `gender`,t1. `occupation`,t1. `annualsalary`, t1.`address`, t1.`country`,t1. `state`, t1.`city`,t1. `district`,t1. `tehsil`,t1. `pincode`,t1. `address2`,t1. `country2`,t1. `state2`, t1.`city2`,t1. `district2`,t1. `tehsil2`,t1. `pincode2`,t1. `dob`,t1. `categorey`,t1. `irdp`, t1.`sports`,t1. `ncc`,t1. `nss`,t1. `bonafideofup`,t1. `nationality`,t1. `mobileno`,t1. `fatherno`,t1. `landlineno`,t1. `marriedstatus`,t1. `sportdquotaperson`,t1. `singlegirlperson`,t1. `culturalquotaperson`,t2.category FROM `registration` t1 INNER JOIN category t2 on t1.categorey=t2.category_id  where t1.studid=".@$_SESSION['user_id']);
@$stud_num=mysqli_num_rows($stud_query);
@$stud_row=mysqli_fetch_array($stud_query);

$category_query=mysqli_query($conn,"Select * from category");
@$category_count=mysqli_num_rows($category_query);

?>
<div class="well" style="background: #fff;">
<div class="container">
  <h2>Personal Information</h2>
  <hr style="width: 77%;">
  
      <div class="alert alert-success succ">
	      You have update records sucessfully  .
		</div>
		<div class="alert alert-danger wrng">
		   You have not update records.
		</div>
		<div id='loading1' class="newtop1" >
		<center><img src="photo/loader.gif" style="height: 40%;position: fixed;margin-left: -11%;margin-top: 15%;"></center>
		</div>
	<h3>Student's Name</h3>
	  <hr>
    <div class="form-group">
      <input type="hidden" name="studid" id="studid" value="<?php echo $stud_row['studid'];?>">
      <div class="col-sm-6">
	  <label class="control-label" for="email">First Name:</label><span class="as">*</span>
        <input type="text" class="form-control" onKeyPress="return ValidateAlpha(event);" required maxlength="15" value="<?php echo substr($stud_row['studentname'], 0, strpos($stud_row['studentname'], ' '));?>"  id="txtstudentfirstname"  name="txtstudentfirstname">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">Last Name:</label>
        <input type="text" class="form-control" maxlength="15" onKeyPress="return ValidateAlpha(event);" id="txtstudentlastname" value="<?php echo substr($stud_row['studentname'],strpos($stud_row['studentname'], " ") + 1);?>" name="txtstudentlastname">
      </div>
    </div>
	<h3>Father's Name</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email"> First Name:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">Sh</span>
			 <input type="text" class="form-control " onKeyPress="return ValidateAlpha(event);"  required maxlength="15"  id="txtfatherfirstname" value="<?php echo substr($stud_row['fathername'], 0, strpos($stud_row['fathername'], ' '));?>" name="txtfatherfirstname">
		</div>
     </div>
	 <div class="col-sm-6">
	  <label class="control-label" for="email"> Last Name:</label>
        <input type="text" class="form-control" maxlength="15" onKeyPress="return ValidateAlpha(event);" id="txtfatherlastname" value="<?php echo substr($stud_row['fathername'],strpos($stud_row['fathername'], " ") + 1);?>" name="txtfatherlastname">
      </div>
    </div>
	<h3>Mother's Name</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email"> First Name:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">Smt</span>
			  <input type="text" class="form-control "  required maxlength="15" onKeyPress="return ValidateAlpha(event);" id="txtmotherfirstname" value="<?php echo substr($stud_row['mothername'], 0, strpos($stud_row['mothername'], ' '));?>" name="txtmotherfirstname">
		</div>
     </div>
	 <div class="col-sm-6">
	  <label class="control-label" for="email"> Last Name:</label>
        <input type="text" class="form-control" maxlength="15" onKeyPress="return ValidateAlpha(event);" id="txtmotherlastname" value="<?php echo substr($stud_row['mothername'],strpos($stud_row['mothername'], " ") + 1);?>" name="txtmotherlastname">
      </div>
    </div>
	<h3>Father/Guardian's occupation</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">Occupation:</label><span class="as">*</span>
        <input type="text" class="form-control " required maxlength="30" onKeyPress="return ValidateAlpha(event);" id="txtoccupation" value="<?php echo $stud_row['occupation'];?>" name="txtoccupation">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Annual Salary(In Indian National Rupee):</label><span class="as">*</span>
        <input type="text" class="form-control " required onkeypress="return isNumber(event)" value="<?php echo $stud_row['annualsalary'];?>" maxlength="10" id="txtsalary"  name="txtsalary">
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">Gender:</label>
		
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> 
	  <?php
	  if($stud_row['gender']=="male")
	  {
		  ?>
		  <input type="radio" name="gender" class="gender" value="Female">Female
	     <input type="radio" name="gender" class="gender" value="male" checked>Male
        <?php
		  }
		else
		{
       ?>
     <input type="radio" name="gender" class="gender" value="Female" checked>Female
	 <input type="radio" name="gender" class="gender" value="male" >Male
       <?php
		}
        ?>	
	
		</label>
			  </div>
    </div>
	<h3>Permanent Address</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-12">
	  <label class="control-label" for="email">HouseNo./Landmark</label><span class="as">*</span>
        <textarea class="form-control " required id="txtaddress"  maxlength="250" value="<?php echo $stud_row['address'];?>" name="txtaddress">
		<?php echo $stud_row['address'];?>
		 </textarea>
      </div>
	  
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">City :</label><span class="as">*</span>
        <input type="text" class="form-control " required maxlength="22" onKeyPress="return ValidateAlpha(event);" id="txtcity" value="<?php echo $stud_row['city'];?>" name="txtcity">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Tehsil :</label><span class="as">*</span>
        <input type="text" class="form-control " required id="txttehsil" onKeyPress="return ValidateAlpha(event);" name="txttehsil" value="<?php echo $stud_row['tehsil'];?>" maxlength="22">
      </div>
	  
    </div>
	<div class="form-group">
	
    
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Postal / Zip Code:</label><span class="as">*</span>
        <input type="text" class="form-control "  required id="txtpincode" value="<?php echo $stud_row['pincode'];?>" maxlength="6" onkeypress="return isNumber(event)" name="txtpincode">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> District :</label><span class="as">*</span>
        <input type="text" class="form-control "  required id="txtdistrict" onKeyPress="return ValidateAlpha(event);" name="txtdistrict" value="<?php echo $stud_row['district'];?>" maxlength="22">
      </div>
    </div>
	<div class="form-group">
	
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> State / Province / Region:</label><span class="as">*</span>
        <input type="text" class="form-control " required maxlength="22" onKeyPress="return ValidateAlpha(event);" id="txtstate" value="<?php echo $stud_row['state'];?>" name="txtstate">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">Country:</label><span class="as">*</span>
		
        <input type="text" class="form-control " required maxlength="15" onKeyPress="return ValidateAlpha(event);" id="ddlcountry" value="<?php echo $stud_row['country'];?>" name="ddlcountry">
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
        <textarea class="form-control" maxlength="250" id="txtaddress2" value="<?php echo $stud_row['address2'];?>" name="txtaddress2">
		 <?php echo $stud_row['address2'];?>
		</textarea>
      </div>
	  
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">City:</label>
        <input type="text" class="form-control" maxlength="22" onKeyPress="return ValidateAlpha(event);" id="txtcity2" value="<?php echo $stud_row['city2'];?>" name="txtcity2">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Tehsil :</label>
        <input type="text" class="form-control" id="txttehsil2" onKeyPress="return ValidateAlpha(event);" name="txttehsil2" value="<?php echo $stud_row['tehsil2'];?>" maxlength="22">
      </div>
	  
    </div>
	<div class="form-group">
	
    
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Postal / Zip Code:</label>
        <input type="text" class="form-control" id="txtpincode2" value="<?php echo $stud_row['pincode2'];?>" maxlength="6" onkeypress="return isNumber(event)" name="txtpincode2">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> District :</label>
        <input type="text" class="form-control" id="txtdistrict2" onKeyPress="return ValidateAlpha(event);" name="txtdistrict2" value="<?php echo $stud_row['district2'];?>" maxlength="22">
      </div>
    </div>
	<div class="form-group">
	
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> State / Province / Region:</label>
        <input type="text" class="form-control" id="txtstate2" maxlength="22" onKeyPress="return ValidateAlpha(event);" value="<?php echo $stud_row['state2'];?>" name="txtstate2">
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">Country :</label>
		 <input type="text" class="form-control" id="ddlcountry2" onKeyPress="return ValidateAlpha(event);" maxlength="15" value="<?php echo $stud_row['country2'];?>" name="ddlcountry2">
      </div>
    </div>
	

	<h3>Sub-Category</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-2">
	  <label class="control-label" for="email">IRDP:</label></br>
	  <?php  if($stud_row['irdp']==1){  ?>
	  <input name="irdp" class="irdp" value="1" type="radio" checked>Yes 
	  <input name="irdp" class="irdp" type="radio" value="0" > No 
        <?php  }else{   ?>
		  <input name="irdp" class="irdp" value="1" type="radio">Yes 
	  <input name="irdp" class="irdp" type="radio" value="0" checked> No 
       <?php }  ?>	
        
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">Sports:</label></br>
	  <?php if($stud_row['sports']==1){	  ?>
	    <input name="sports" class="sports" value="1" type="radio" checked>Yes
		<input name="sports" class="sports" type="radio" value="0" > No 
        <?php  }else{   ?>
	   <input name="sports" class="sports" value="1" type="radio" >Yes
		<input name="sports" class="sports" type="radio" value="0" checked> No 
       <?php }  ?>	
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">NCC:</label></br>
	  <?php if($stud_row['ncc']==1) {  ?>
	  <input type="radio" class="ncc"  value="1" name="ncc" checked>Yes
	  <input type="radio" class="ncc"  name="ncc" value="0" > No 
        <?php  }else{    ?>
		 <input type="radio" class="ncc"  value="1" name="ncc" >Yes
	  <input type="radio" class="ncc"  name="ncc" value="0" checked> No
       <?php } ?>	
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">NSS:</label></br>
	   <?php  if($stud_row['nss']==1) {  ?>
	  <input type="radio" class="nss" value="1" name="nss" checked>Yes
	  <input type="radio" class="nss" name="nss" value="0" > No
        <?php  }else{   ?>
		  <input type="radio" class="nss"  value="1" name="nss" >Yes
	      <input type="radio" class="nss" name="nss" value="0" checked> No
       <?php  }   ?>	
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">Bonafide Up:</label></br>
	  <?php if($stud_row['bonafideofup']==1){  ?>
	 <input type="radio" value="1" class="bonafide"  name="bonafide" checked>Yes 
	 <input type="radio" value="0" class="bonafide"  name="bonafide" > No 
        <?php  }else{   ?>
		 <input type="radio" class="bonafide" value="1" name="bonafide" >Yes 
		<input type="radio" class="bonafide" value="0" name="bonafide" checked > No 
       <?php }  ?>	
      </div>
	  <div class="col-sm-2">
	  <label class="control-label" for="email">Nationality:</label></br>
	  <?php  if($stud_row['nationality']==1){  ?>
		 <input type="radio" value="1" class="nationality" name="nationality" checked>India
		 <input name="nationality" class="nationality" value="0" type="radio"> Other 
        <?php  }else{   ?>
		 <input type="radio" value="1" class="nationality" name="nationality" >India
		 <input name="nationality" class="nationality" value="0" type="radio" checked> Other 
       <?php  }  ?>	
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-4">
	  <label class="control-label" for="email">Single Girl Child Person :</label></br>
	  <?php  if($stud_row['singlegirlperson']==1){  ?>
		  <input name="singlegirl" class="singlegirl" value="1" type="radio" checked>Yes
			<input name="singlegirl" class="singlegirl" type="radio" value="0" > No 
        <?php  }else{  ?>
		 <input name="singlegirl" class="singlegirl" value="1" type="radio">Yes
		 <input name="singlegirl" class="singlegirl" type="radio" value="0" checked> No  
       <?php  }   ?>	
       
      </div>
	  <div class="col-sm-4">
	  <label class="control-label" for="email">Cultural Quota :</label></br>
	    <?php if($stud_row['culturalquotaperson']==1) {	  ?>
		    <input name="culturalquota" class="culturalquota" value="1" type="radio" checked>Yes
		<input name="culturalquota" class="culturalquota" type="radio" value="0" > No 
        <?php  }else{   ?>
	   <input name="culturalquota" class="culturalquota" value="1" type="radio">Yes
		<input name="culturalquota" class="culturalquota" type="radio" value="0" checked> No 
       <?php  }   ?>	
      </div>
	  <div class="col-sm-4">
	  <label class="control-label" for="email">Sports Person Quota :</label></br>
	  <?php  if($stud_row['sportdquotaperson']==1){  ?>
		  <input type="radio" value="1" class="sportspersonquota" name="sportspersonquota" checked>Yes
		<input type="radio" class="sportspersonquota" name="sportspersonquota" value="0" > No 
        <?php  }else{   ?>
	   <input type="radio" class="sportspersonquota" value="1" name="sportspersonquota">Yes
		<input type="radio" class="sportspersonquota" name="sportspersonquota" value="0" checked> No 
       <?php  }  ?>	
      </div>
    </div>
	<h3>Personal-Information</h3>
	  <hr>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">DOB:</label>
        <div class= "frmleft">
		<input type="date" class = "form-control" id="datepickers" value="<?php echo $stud_row['dob'];?>" name="regdate" required/>
	
</div>
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> Category:</label><span class="as">*</span>
      <select class="form-control" required name="ddlcategorys" id="ddlcategorys" > 
        <option value="<?php echo $stud_row['categorey'];?>"><?php echo $stud_row['category'];?></option>
            <?php	while(@$category_row=mysqli_fetch_array($category_query)){	?>
                <option value="<?php echo $category_row['category_id'];?>" ><?php echo $category_row['category'];?></option>
            <?php	}	?>
		</select>
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">  Mobile No:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">+91</span>
			<input type="text"  class="form-control" required  id="txtmobileno" value="<?php echo $stud_row['mobileno'];?>" maxlength="10" onkeypress="return isNumber(event)" name="txtmobileno"/>
		</div>
     </div>
	 <div class="col-sm-6">
	  <label class="control-label" for="email"> Father's/Guardian's Mobile No:</label><span class="as">*</span>
	  <div class="input-group">
		  <span class="input-group-addon">+91</span>
			<input type="text"  class="form-control" required  id="txtfatherno"  value="<?php echo $stud_row['fatherno'];?>"  maxlength="10" onkeypress="return isNumber(event)" name="txtfatherno"/>
		</div>
     </div>
	  
    </div>
	<div class="form-group">
	<div class="col-sm-6">
	  <label class="control-label" for="email">Landline No(Optional):</label>
        <input type="text" class="form-control" id="txtlandlineno" value="<?php echo $stud_row['landlineno'];?>" maxlength="10" onkeypress="return isNumber(event)" name="txtlandlineno">
      </div>
	  <div class="col-sm-6" style="margin-top:2%;">
	  <label class="control-label" for="email"> Married Status:</label>
	   <?php  if($stud_row['marriedstatus']==1){  ?>
		<input type="radio" value="1" class="married" name="married" checked >Yes
		<input  value="0" name="married" class="married"  type="radio"> No 
        <?php  }else{   ?>
		<input type="radio" value="1" class="married"  name="married"  >Yes
		<input  value="0" name="married" class="married"  type="radio" checked> No 
       <?php  }   ?>	
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-6">
        <button class="btn btn-primary" id="btnsubmit" style="margin-top:2%;">UPDATE</button>
      </div>
    </div>
</div>
</div>   
 <?php include_once ('footer.php');?>