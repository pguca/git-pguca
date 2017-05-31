<?php

include ('config.php');
date_default_timezone_set('asia/kolkata');
if ($_GET['action'])
{
   if($_GET['action'] == "show")
   
{
			  $user_id= $_POST['dataid'];
			  
			    $info_query=mysqli_query($conn,"SELECT t1.studid,t1.`matricboard`, t1.`matricyear`, t1.`matricgetmarks`, t1.`matrictotalmarks`, t1.`matricpercentage`,t1. `matricrollno`,t2. `address2`,t2. `country2`,t2. `state2`, t2.`city2`, t2.`district2`,t2. `tehsil2`,t2. `pincode2`,t1. `matricfile`, t1.`2board`, t1.`2year`, t1. `2getmarks`,t1. `2totalmarks`,t1. `2percentage`,t1. `2rollno`, t1.`2file`,t1. `gruad`,t1. `gruadpass`,t1. `gruadboard`, t1.`gruadyear`,t1. `gruadcredit`, t1.`gruadgetmarks`,t1. `gruadtotalmarks`,t1. `gruadpercentage`,t1. `gruadrollno`,t1. `gruadfile`,t1. `photo`, t1.`signature`, t1.`character`, t1.`castcertificate`,t1. `singlegirlcertificate`, t1.`sportslcertificate`,t1. `culturalcertificate`,t2.`studentname`,t2. `fathername`,t2. `mothername`,t2. `address`,t2. `country`, t2.`state`,t2. `city`,t2. `district`,t2. `tehsil`,t2. `pincode`,t2. `dob`, t2.`bonafideofup`,t2. `nationality`, t2.`mobileno`, t2.`fatherno`,t2. `landlineno`,t2. `marriedstatus`,t3.`stud_semester`,t3.`stud_choice_course`,t4.`coursename`,t5.`studentuidno`,t5.`studentemail`,t5.studentdate,t6. `category`  FROM `studdocument` t1 INNER JOIN registration t2 on t1.studid=t2.studid INNER JOIN studcourse t3 on t1.studid=t3.stud_id INNER JOIN `course` t4 on t3.stud_choice_course=t4.id INNER JOIN `student` t5 on t1.studid=t5.studentid INNER JOIN category t6 on t2.categorey=t6.category_id where t1.studid ='".$user_id."'");
			  @$info_num=mysqli_num_rows($info_query);
				@$info_row=mysqli_fetch_array($info_query);
			  
		
echo'
<h3>Application Summary</h3>
		  <form  id="idfrm" action="" method="post" enctype="multipart/form-data"> 
		  
		  <div class="container">

<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Name of the Course(पाठ्यक्रम का नाम) </label>
       
      </div>
	  <div class="col-sm-6">
	 <label class="control-label" for="email">:- '.$info_row['coursename'].'('.$info_row['stud_semester'].') </label>
       
      </div>
    </div>
<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Name(IN CAPITAL LETTETRS)नाम </label>
       
      </div>
	  <div class="col-sm-6">
	   <label class="control-label" for="email">:- '.$info_row['studentname'].'  </label>
       
      </div>
    </div>
	
	
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Fathers Name(पिता का नाम) </label>
       
      </div>
	  <div class="col-sm-6">
	     <label class="control-label" for="email">:- '.$info_row['fathername'].' </label>
       </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Mothers Name(मां का नाम) </label>
       
      </div>
	  <div class="col-sm-6">
<label class="control-label" for="email">:- '.$info_row['mothername'].' </label>    
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Address for Correspondence (IN CAPITAL LETTERS)पत्रव्यवहार हेतु पता </label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['address'].','.$info_row['city'].','.$info_row['state'].'('.$info_row['pincode'].')'.$info_row['country'].' </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Mobile No.(मोबाइल नंबर	)</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email"> :- '.$info_row['mobileno'].'  </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Permanent Home Address (IN CAPITAL LETTERS)स्थाई घर का पता  </label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['address2'].','.$info_row['city2'].','.$info_row['state2'].'('.$info_row['pincode2'].')'.$info_row['country'].'</label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Telephone No.(टेलीफ़ोन नंबर) </label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['landlineno'].' </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Father Telephone No.(टेलीफ़ोन नंबर) </label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['fatherno'].' </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Email-Id(ईमेल-आईडी )</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['studentemail'].' </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Date of Birth(जन्म की तारीख)</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['dob'].'  </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Aadhaar No.(आधार संख्या)</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['studentuidno'].' </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Nationality(राष्ट्रीयता) </label>
       
      </div>
	  <div class="col-sm-6">';
	
	            if($info_row['nationality']==1)
	  {
		  echo' <label class="control-label" for="email">:- INDIAN  </label>';
	  }
	  else
	  {
		   echo' <label class="control-label" for="email">:- OTHER </label>';
	  }  
     echo'</div>
    </div>
	
	
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">University/Board from which you have passed Degree/Diploma? 
</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['gruadboard'].' </label>
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Are you Bonafide resident of Himachal Pradesh ? </label>
       
      </div>
	  <div class="col-sm-6">';
	
	  if($info_row['bonafideofup']==1)
	  {
		  echo' <label class="control-label" for="email">:- YES  </label>';
	  }
	  else
	  {
		   echo' <label class="control-label" for="email">:- NO </label>';
	  }  
	 
	
	          
   echo'</div>
    </div>
	
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Category Sponsored?(श्रेणी प्रायोजित?)</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- '.$info_row['category'].' </label>
	           
      </div>
    </div>
<hr>
	          <!--<button type="button"  id="btnnext5" class="btn btn-primary btnstudinfo" href="#tab6" studdata-id='.$info_row['studid'].' data-toggle="tab">Edit</button>
		-->
	
</div>
		  
		  
		   
		   <table class="table table-bordered">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Result Status</th>
      <th>Examination Passed</th>
      <th>Name of The University/Board</th>
      <th>Year</th>
      <th>Credits/Marks Obtained </th>
      <th>Maximum Marks(not for the candidate with CGPA)</th>
      <th>Credits/% Marks </th>
	  <th>Exam Roll No. </th>
      <th>Upload Document </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      
      <td>Passed</td>
      <td>Matric</td>
      <td>'.$info_row['matricboard'].'</td>
        <td>'.$info_row['matricyear'].'</td>
	  <td>'.$info_row['matricgetmarks'].'</td>
	   <td>'.$info_row['matrictotalmarks'].'</td>
	   <td>'.$info_row['matricpercentage'].'</td>
		<td>'.$info_row['matricrollno'].'</td>
	   <td>
	    
	  
	   <a target="_blank" href="upload/'.$user_id.'/'.$info_row['matricfile'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['matricfile'].'"></iframe>
	    <span>'.$info_row['matricfile'].'</span>
		</a>
	   </td>
    </tr>
	 <tr>
      <th scope="row">2</th>
       <td>Passed</td>
      <td>+2</td>
      <td>'.$info_row['2board'].'</td>
          <td>'.$info_row['2year'].'</td>
	  <td>'.$info_row['2getmarks'].'</td>
	   <td>'.$info_row['2totalmarks'].'</td>
	   <td>'.$info_row['2percentage'].'</td>
		<td>'.$info_row['2rollno'].'</td>
	   <td>
	  
	   <a target="_blank" href="upload/'.$user_id.'/'.$info_row['2file'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['2file'].'"></iframe>
	    <span>'.$info_row['2file'].'</span>
		</a>
	   </td>
      
    </tr>
	 <tr>
      <th scope="row">3</th>
	 
	 
			
       <td>'.$info_row['gruadpass'].'</td>
      <td>'.$info_row['coursename'].'</td>
      <td>'.$info_row['gruadboard'].'</td>
      <td>'.$info_row['gruadyear'].'</td>
	  <td>'.$info_row['gruadgetmarks'].'</td>
	   <td>'.$info_row['gruadtotalmarks'].'</td>
	   <td>'.$info_row['gruadpercentage'].'</td>
		<td>'.$info_row['gruadrollno'].'</td>
	   <td>
	   <a target="_blank" href="upload/'.$info_row['gruadfile'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['gruadfile'].'"></iframe>
	    <span>'.$info_row['gruadfile'].'</span>
		</a>
	   </td>
      
    </tr>
	
	
    
  </tbody>
</table>
<div class="container">
<div>Were you ever disqualified/suspended by the University or any other institution from attending classes or appearing in any exam? if yes give Details:
तुम कभी विश्वविद्यालय या किसी अन्य संस्था द्वारा कक्षाओं में भाग लेने या किसी भी परीक्षा में प्रदर्शित होने से निलंबित कर दिया गए? यदि हाँ जानकारी दे </div>
<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Registration Date</label>
       
      </div>
	  <div class="col-sm-6">
	 <label class="control-label" for="email">:- '.$info_row['studentdate'].'  </label>
       
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email"> Your Photograph( अपना तस्वीर डाले ) </label>
       
      </div>
	  <div class="col-sm-6">
	     <label class="control-label" for="email">:- <img style="width: 20%;" src="upload/'.$user_id.'/'.$info_row['photo'].'"/>   <span>'.$info_row['photo'].'</span></label>
       </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Your Your Signature( अपना हस्ताक्षर डाले )</label>
       
      </div>
	  <div class="col-sm-6">
	     <label class="control-label" for="email">:- <img style="width: 20%; ! important" src="upload/'.$user_id.'/'.$info_row['signature'].'"><span>'.$info_row['signature'].'</span> </label>  

			
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Your Your Characters Certificate</label>
       
      </div>
	  <div class="col-sm-6">
	  
	  
	 <label class="control-label" for="email">:- <a target="_blank" href="upload/'.$user_id.'/'.$info_row['character'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['character'].'"></iframe><span>'.$info_row['character'].'</span>
	  </a>
	  </label> 
	           
      </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email"> Your  Cast Certificate</label>
       
      </div>
	  <div class="col-sm-6">
	  	        
		<label class="control-label" for="email">:- <a target="_blank" href="upload/'.$user_id.'/'.$info_row['castcertificate'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['castcertificate'].'"></iframe><span>'.$info_row['castcertificate'].'</span>
	  </a>
	  </label>    			
      </div>
    </div>
	
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Your Single Girl Certificate</label>
       
      </div>
	  <div class="col-sm-6">
	 
	       <label class="control-label" for="email">:- <a target="_blank" href="upload/'.$user_id.'/'.$info_row['singlegirlcertificate'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['singlegirlcertificate'].'"></iframe><span>'.$info_row['singlegirlcertificate'].'</span>
	  </a>
	  </label>    
      </div>
    </div>
	
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Your Sports Certificate</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">:- <a target="_blank" href="upload/'.$user_id.'/'.$info_row['sportslcertificate'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['sportslcertificate'].'"></iframe><span>'.$info_row['sportslcertificate'].'</span>
	  </a>
	  </label>
	           
      </div>
    </div>
	
	
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label as" for="email">Your Cultural Quota Certificate</label>
       
      </div>
	  <div class="col-sm-6">
	        
	<label class="control-label" for="email">:- <a target="_blank" href="upload/'.$user_id.'/'.$info_row['culturalcertificate'].'" ><iframe  style="width: 450;height: 90px;" src="upload/'.$user_id.'/'.$info_row['culturalcertificate'].'"></iframe><span>'.$info_row['culturalcertificate'].'</span>
	  </a>
	  </label>
      </div>
    </div>
	
	
	<div class="form-group">        
      <div class="col-sm-offset-5 col-sm-6">
          <button type="button"  id="btnnext3" class="btn btn-primary" href="#tab4"  data-toggle="tab">Next</button>
		
      </div>
    </div>
</div>
</form>  
<script>
$(document).ready(function() {
$("#btnnext3").click(function () {
    $(".summary").removeClass("btn-primary").addClass("btn-default");
    $(".payment").addClass("active").addClass("btn-primary");; // instead of this do the below 
     	$(".payment").prop("disabled", false)
		
});
});
</script>
<script>
$(document).ready(function() {
$("#btnnext5").click(function () {
    $(".summary").removeClass("btn-primary").addClass("btn-default");
    $(".information").addClass("active").addClass("btn-primary");; // instead of this do the below 
     	
		
});
});
</script>
 <script>
	    $(document).ready(function() {
$(".btnstudinfo").click(function() {
			var studdataid=$(this).attr("studdata-id");
		 		
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
	   
	  
';



}
}
?>