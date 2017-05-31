<?php 
if (isset($_POST['submit_document'])){
 $txtid     = $_SESSION['user_id'];
 $res       = mysqli_query($conn,"SELECT * FROM studdocument WHERE studid='".$txtid."'");
 @$count    = mysqli_num_rows($res); 
 @$userRow  = mysqli_fetch_array($res);

/***********Files ************/
    
    @$userphoto        = $_FILES["userphoto"]["name"];    
    @$signature        = $_FILES["signature"]["name"];
    @$graduation       = $_FILES["graduation"]["name"];
	@$intermeetsheet   = $_FILES["intermeetsheet"]["name"];
	@$matricsheet      = $_FILES["matricsheet"]["name"];
	@$chacter          = $_FILES["chacter"]["name"];
	@$cast             = $_FILES["cast"]["name"];
	@$girl             = $_FILES["girl"]["name"];
	@$sports           = $_FILES["sports"]["name"];
	@$cultural         = $_FILES["cultural"]["name"];

/***************Files End***********/
	@$txtboard         = $_POST['txtboard'];
	@$ddlpassoutyear   = $_POST['ddlpassoutyear'];
	@$txtcredit        = $_POST['txtcredit'];
	@$txtgetmarks      = $_POST['txtgetmarks'];
	@$txtoutoffmarks   = $_POST['txtoutoffmarks'];
	@$txtpercentage    = $_POST['matricpercentage'];
	@$txtrollno        = $_POST['txtrollno'];
	
	@$txtboard2        = $_POST['txtboard2'];
	@$ddlpassoutyear2  = $_POST['ddlpassoutyear2'];
	@$txtcredit2       = $_POST['txtcredit2'];
	@$txtgetmarks2     = $_POST['txtgetmarks2'];
	@$txtoutoffmarks2  = $_POST['txtoutoffmarks2'];
	@$txtpercentage2   = $_POST['txtpercentage2'];
	@$txtrollno2       = $_POST['txtrollno2'];
	
	@$ddlpassstatus    = $_POST['ddlpassstatus'];
	@$ddlboard         = $_POST['ddlboard'];
	@$txtboard3        = $_POST['txtboard3'];
	@$ddlpassoutyear3  = $_POST['ddlpassoutyear3'];
	@$txtcredit3       = $_POST['txtcredit3'];
	@$txtgetmarks3     = $_POST['txtgetmarks3'];
	@$txtoutoffmarks3  = $_POST['txtoutoffmarks3'];
	@$txtpercentage3   = $_POST['txtpercentage3'];
	@$txtrollno3       = $_POST['txtrollno3'];
	@$txtradio         = $_POST['txtradio'];
	
		  if($count > 0){
              $updateQuery = "Update  `studdocument` Set 
              `matricboard`='".$txtboard."', 
              `matricyear`='".$ddlpassoutyear."', 
              `matricredit`='".$txtcredit."', 
              `matricgetmarks`='".$txtgetmarks."', 
              `matrictotalmarks`='".$txtoutoffmarks."', 
              `matricpercentage`='".$txtpercentage."', 
              `matricrollno`='".$txtrollno."', 
              `matricfile`='".$matricsheet."', 
              `2board`='".$txtboard2."', 
              `2year`='".$ddlpassoutyear2."', 
              `2credit`='".$txtcredit2."', 
              `2getmarks`='".$txtgetmarks2."', 
              `2totalmarks`='".$txtoutoffmarks2."', 
              `2percentage`='".$txtpercentage2."', 
              `2rollno`='".$txtrollno2."', 
              `2file`='".$intermeetsheet."', 
              `gruad`='".$ddlboard."', 
              `gruadpass`='".$ddlpassstatus."', 
              `gruadboard`='".$txtboard3."', 
              `gruadyear`='".$ddlpassoutyear3."', 
              `gruadcredit`='".$txtcredit3."',
              `gruadgetmarks`='".$txtgetmarks3."', 
              `gruadtotalmarks`='".$txtoutoffmarks3."', 
              `gruadpercentage`='".$txtpercentage3."',
              `gruadrollno`='".$txtrollno3."', 
              `gruadfile`='".$graduation."', 
              `regingrate`='".$txtradio."', 
              
              `photo`='".$userphoto."', 
              `signature`='".$signature."', 
              `character`='".$chacter."',
              `castcertificate`='".$cast."',
              `singlegirlcertificate`='".$girl."',
              `sportslcertificate`='".$sports."', 
              `culturalcertificate`='".$cultural."',
              
               where `studid`='".$txtid."'";
			$query_docq = mysqli_query($conn,$updateQuery);
		
		}else{ 
		    $query_docq = mysqli_query($conn,"INSERT INTO `studdocument`(`matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`,`castcertificate`,`singlegirlcertificate`,`sportslcertificate`,`culturalcertificate`,`studid`,`status`) VALUES ('".$txtboard."','".$ddlpassoutyear."','".$txtcredit."','".$txtgetmarks."','".$txtoutoffmarks."','".$txtpercentage."','".$txtrollno."','".$matricsheet."','".$txtboard2."','".$ddlpassoutyear2."','".$txtcredit2."','".$txtgetmarks2."','".$txtoutoffmarks2."','".$txtpercentage2."','".$txtrollno2."','".$intermeetsheet."','".$ddlboard."','".$ddlpassstatus."','".$txtboard3."','".$ddlpassoutyear3."','".$txtcredit3."','".$txtgetmarks3."','".$txtoutoffmarks3."','".$txtpercentage3."','".$txtrollno3."','".$graduation."','".$txtradio."','".$userphoto."','".$signature."','".$chacter."','".$cast."','".$girl."','".$sports."','".$cultural."','".$txtid."',0)");
		} 

        $student_folder = "upload/".$_SESSION['user_id']."/";

		$sourcePath  = $_FILES['userphoto']['tmp_name']; // Storing source path of the file in a variable
        $targetPath  = $student_folder.$_FILES['userphoto']['name']; // Target path where file is to be stored
		move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

        $sourcePath2 = $_FILES['signature']['tmp_name']; // Storing source path of the file in a variable
        $targetPath2 = $student_folder.$_FILES['signature']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath2,$targetPath2) ; // Moving Uploaded file

        $sourcePath3 = $_FILES['graduation']['tmp_name']; // Storing source path of the file in a variable
        $targetPath3 = $student_folder.$_FILES['graduation']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath3,$targetPath3) ; // Moving Uploaded file

		$sourcePath4 = $_FILES['intermeetsheet']['tmp_name']; // Storing source path of the file in a variable
        $targetPath4 = $student_folder.$_FILES['intermeetsheet']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath4,$targetPath4) ; // Moving Uploaded file

		$sourcePath5 = $_FILES['matricsheet']['tmp_name']; // Storing source path of the file in a variable
        $targetPath5 = $student_folder.$_FILES['matricsheet']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath5,$targetPath5) ; // Moving Uploaded file

        $sourcePath6 = $_FILES['chacter']['tmp_name']; // Storing source path of the file in a variable
        $targetPath6 = $student_folder.$_FILES['chacter']['name']; // Target path where file is to be stored
	    move_uploaded_file($sourcePath6,$targetPath6) ; // Moving Uploaded file
    
    
        if($_FILES["cast"]){
            $sourcePath7 = $_FILES['cast']['tmp_name']; // Storing source path of the file in a variable
            $targetPath7 = $student_folder.$_FILES['cast']['name']; // Target path where file is to be stored
	        move_uploaded_file($sourcePath7,$targetPath7) ; // Moving Uploaded file
        }
        if($_FILES["girl"]){
                $sourcePath8 = $_FILES['girl']['tmp_name']; // Storing source path of the file in a variable
                $targetPath8 = $student_folder.$_FILES['girl']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath8,$targetPath8); // Moving Uploaded file
            }
        if($_FILES["sports"]){
                $sourcePath9 = $_FILES['sports']['tmp_name']; // Storing source path of the file in a variable
                $targetPath9 = $student_folder.$_FILES['sports']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath9,$targetPath9) ; // Moving Uploaded file
            }
        if($_FILES["cultural"]){
                $sourcePath10 = $_FILES['cultural']['tmp_name']; // Storing source path of the file in a variable
                $targetPath10 = $student_folder.$_FILES['cultural']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath10,$targetPath10) ; // Moving Uploaded file
            }    
}
?>

<form id="uploadimage" action="" method="post" enctype="multipart/form-data"> 
		  <table class="table table-bordered" style="font-size: 13px; ! important">
		  <span>Note :  * Correct upto two decimal places.</br>
            * All Fields are mandatory.</br>
            # if you got Credit in Examination Passed then Check the Box.</br>
            ** Exam Roll No. of Qualifying Examination must be Given. </br></span>
               <span style="color:red;">  Document Should be in .pdf format and Size max 1 MB</span>
  <thead>
    <tr>
      <th>S.No</th>
      <th>Result Status</th>
      <th>Examination Passed</th>
      <th>UName of The University/Board</th>
      <th>Year</th>
      <th>Check If Grades</th>
      <th>Grades/Marks Obtained </th>
      <th>Maximum Marks(not for the candidate with CGPA)</th>
      <th>% Marks </th>
	  <th>Exam ** Roll No. </th>
      <th>Upload Document </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
		  <td></td>
		  <td>Matric or Equivalent</td>
		  <td><input type="text" name="txtboard" required value="<?php echo $row_records['matricboard'];?>"></td>
		  <td><select name="ddlpassoutyear"  required>
					<option value="<?php echo $row_records['matricyear'];?>"><?php echo $row_records['matricyear'];?></option>
					<?php for($i=$start_date;$i<$end_date;$i++){
						echo'<option value="'.$i.'">'.$i.'</option>';
					} ?>
			</select>
			</td>
			
			<td>
				<input id="chkmartric" type="checkbox" name="txtcredit" value="1"  >
			</td>
			<td>
				<input type="text"  id="txtgetmarks" required class="number" value="<?php echo $row_records['matricgetmarks'];?>" name="txtgetmarks" style="width: 100% ! important;" >
			</td>
			<td>
				<input type="text" name="txtoutoffmarks" id="txtoutoffmarks" required value="<?php echo $row_records['matrictotalmarks'];?>" onkeypress="return isNumber(event)" style="width: 100% ! important;">
			</td>
			<td>
				<input type="text" name="matricpercentage" id="matricpercentage" readonly  value="<?php echo number_format($row_records['matricpercentage'],2,".","");?>"  style="width: 100% ! important;background-color: rgb(176, 176, 176);">
			</td>
			<td>
				<input type="text" name="txtrollno" required  value="<?php echo $row_records['matricrollno'];?>" onkeypress="return isNumber(event)" style="width: 100% ! important;">
			 
			</td>
			<td>
			  <input type="file" id="matricsheet" name="matricsheet" value="" required style="width: 114%;margin-left: -9px; ! important">
			 <div id="message5"></div> 
			 </td>
    </tr>
	 <tr>
      <th scope="row">2</th>
      
      <td></td>
      <td>+2 or Equivalent</td>
      <td><input type="text" name="txtboard2" required value="<?php echo $row_records['2board'];?>"></td>
      <td><select name="ddlpassoutyear2" required>
				<option value="<?php echo $row_records['2year'];?>"><?php echo $row_records['2year'];?></option>
				<?php for($i=$start_date;$i<$end_date;$i++){
				        echo'<option value="'.$i.'">'.$i.'</option>';
				}	?>
			</select></td>
			
			<td>
				<input type="checkbox" name="txtcredit2" id="txtcredit2" value="1"  >
			</td>
			<td>
				<input type="text" name="txtgetmarks2" id="txtgetmarks2" required   value="<?php echo $row_records['2getmarks'];?>" class="number" style="width: 100% ! important;" >
			</td>
			<td>
				<input type="text" name="txtoutoffmarks2" id="txtoutoffmarks2" required value="<?php echo $row_records['2totalmarks'];?>"  onkeypress="return isNumber(event)" style="width: 100% ! important;">
			</td>
			<td>
				<input type="text" name="txtpercentage2" id="txtpercentage2" readonly value="<?php echo number_format($row_records['2percentage'],2,".","");?>"  style="width: 100% ! important;background-color: rgb(176, 176, 176);">
			</td>
			<td>
				<input type="text" name="txtrollno2" value="<?php echo $row_records['2rollno'];?>" required onkeypress="return isNumber(event)" style="width: 100% ! important;">
			</td>
			<td>
			 <input type="file" id="intermeetsheet" name="intermeetsheet" value="" required style="width: 114%;margin-left: -9px; % important">
			  <div id="message4"></div>
			 </td>
    </tr>
	<tr id="demo">
      <th scope="row">3</th>
      <td><select name="ddlpassstatus" id="ddlpassstatus">
				<option selected="selected" value="Passed" >Passed</option>
				<option value="Awaited">Awaited</option>
				<option value="Not_Applicable">Not Applicable</option>

			</select></td>

      <td>
         <p style="width: 50%;display: inline-block;float: left;">BA/ B.Com/ BCA/ BBA/ B.Sc/ B.Tech etc</p>
	 
	  <select class="dropdown1 demo1" name="ddlboard" required style="width: 50%;float: left;">
				<option value="<?php echo $row_records['gruad'];?>"><?php echo $row_records['coursename'];?></option>
				<?php  while(@$row=mysqli_fetch_array($query_course)){	?>
				<option value="<?php echo $row['id'];?>" ><?php echo $row['coursename'];?></option>
				<?php  }  ?>
		</select>
	  </td>
      <td><input type="text" name="txtboard3" class="demo2" required value="<?php echo $row_records['gruadboard'];?>"></td>
      <td><select name="ddlpassoutyear3" class="demo3" required>
				<option value="<?php echo $row_records['gruadyear'];?>"><?php echo $row_records['gruadyear'];?></option>
				<?php for($i=$start_date;$i<$end_date;$i++){
				        echo'<option value="'.$i.'">'.$i.'</option>';
				}	?>

			</select></td>
			
			<td>
			 <input type="checkbox" class="demo4" id="txtcredit3" name="txtcredit3" value="1"  >
			 </td>
			<td>
			<input type="text" class="demo5 number"  name="txtgetmarks3" id="txtgetmarks3" required  value="<?php echo $row_records['gruadgetmarks'];?>" onkeypress="return isNumberdot(event)"  style="width: 100% ! important;" >
			</td>
			<td>
			<input type="text" class="demo6" name="txtoutoffmarks3"  id="txtoutoffmarks3" required value="<?php echo $row_records['gruadtotalmarks'];?>" onkeypress="return isNumber(event)" style="width: 100% ! important;">
			</td>
			<td>
			<input type="text" class="demo7" name="txtpercentage3" id="txtpercentage3" readonly value="<?php echo number_format($row_records['gruadpercentage'],2,".","");?>"  style="width: 100% ! important;background-color: rgb(176, 176, 176);">
			</td>
			<td>
			<input type="text" class="demo8 " name="txtrollno3" required value="<?php echo $row_records['gruadrollno'];?>" onkeypress="return isNumber(event)" style="width: 100% ! important;">
			</td>
			<td>
			<input type="file" id="graduation" class="demo9" name="graduation" required value="" style="width: 114%;margin-left: -9px; % important">
			 <div id="message3"></div>
			</td>
    </tr>
  </tbody>
</table>
<div>

            <div class="form-group">
                  <div class="col-sm-6" style="margin-top:2%;">
                  <label class="control-label" for="email">Upload Your Characters Certificate:</label>

                  </div>
                  <div class="col-sm-6" style="margin-top:2%;">
                   <div id="image_preview3"><img id="previewing6" style="width: 26%;height: 10%;" /></div>

                   <input type="file" id="chacter" required name="chacter"  value="Choose">
                    <div id="message6"></div>
                  </div>
                </div>
                <?php if($row_cat['categorey'] == 3 ){	?>
                <div class="form-group">

                  <div class="col-sm-6" style="margin-top:2%;">
                  <label class="control-label" for="email">Upload Your Cast Certificate:</label>

                  </div>
                  <div class="col-sm-6" style="margin-top:2%;">
                  <div id="image_preview3"><img id="previewing6" style="width: 26%;height: 10%;" /></div>
                    <input type="file" id="cast" name="cast" required  value="Choose">
                    <div id="message10"></div>
                  </div>
                </div>
                <?php }	
                if($row_cat['singlegirlperson'] == 1 )	{	?>
                <div class="form-group">

                  <div class="col-sm-6" style="margin-top:2%;">
                  <label class="control-label" for="email">Upload Single Girl Certificate:</label>

                  </div>
                  <div class="col-sm-6" style="margin-top:2%;">
                   <div id="image_preview3"><img id="previewing6" style="width: 26%;height: 10%;" /></div>
                 <input type="file" id="girl" name="girl" required value="Choose">
                   <div id="message11"></div>
                  </div>
                </div>
                <?php	}
                    if($row_cat['sportdquotaperson'] == 1 ){
                    ?>
                <div class="form-group">

                  <div class="col-sm-6" style="margin-top:2%;">
                  <label class="control-label" for="email">Upload Sports Certificate:</label>

                  </div>
                  <div class="col-sm-6" style="margin-top:2%;">
                   <div id="image_preview3"><img id="previewing6" style="width: 26%;height: 10%;" /></div>
                 <input type="file" id="sports" required  name="sports"  value="Choose">
                    <div id="message12"></div>
                  </div>
                </div>
                <?php	}
                    if($row_cat['culturalquotaperson'] ==1 ){
                    ?>
                <div class="form-group">

                  <div class="col-sm-6" style="margin-top:2%;">
                  <label class="control-label" for="email">Upload Cultural Quota Certificate:</label>

                  </div>
                  <div class="col-sm-6" style="margin-top:2%;">
                   <div id="image_preview3"><img id="previewing6" style="width: 26%;height: 10%;" /></div>
                 <input type="file" id="cultural" name="cultural" required value="Choose">
                   <div id="message13"></div>
                  </div>
                </div>
                <?php	}	?>
                <hr>

</div>
<div class="container">
<div>Were you ever disqualified/suspended by the University or any other institution from attending classes or appearing in any exam? if yes give Details:
तुम कभी विश्वविद्यालय या किसी अन्य संस्था द्वारा कक्षाओं में भाग लेने या किसी भी परीक्षा में प्रदर्शित होने से निलंबित कर दिया गए? यदि हाँ जानकारी दे </div>
<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label" for="email">Yes/No हाॅ/ नही :</label>
       
      </div>
	  <div class="col-sm-6">
	  <label class="control-label" for="email">Yes<input value="Yes" name="txtradio" type="radio" id="enable"></label>
	  <label class="control-label" for="email">No <input value="No" name="txtradio" checked="checked"  type="radio"></label>
       
      </div>
    </div>
<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label" for="email">Details/विवरण  :</label>
       
      </div>
	  <div class="col-sm-6">
	  <textarea  rows="2" cols="20"  name="txtdetails" disabled="disabled" ></textarea>
       
      </div>
    </div>
	
	<div class="form-group">
      
      <div class="col-sm-12">
	  <label class="control-label" for="email">Note :Photograph,Signature and Father/Guardian signature should be in .jpg or .Jpeg format and max size 100KB allowed. Filename max 10 Characters Allowed.</label>
      </div>
    </div>
	
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label" for="email">Upload Your Photograph( अपना तस्वीर डाले ) :</label>
       
      </div>
	  <div class="col-sm-6">
	     <div id="image_preview"><img id="previewing" src="photo/user.jpg" /></div>
		 
		<input type="file" name="userphoto" id="userphoto" required />
		<div id="message"></div>
       </div>
    </div>
	<div class="form-group">
      
      <div class="col-sm-6">
	  <label class="control-label" for="email">Upload Your Signature( अपना हस्ताक्षर डाले ):</label>
       
      </div>
	  <div class="col-sm-6">
	   <div id="image_preview2"><img id="previewing2" style="width:26%;height: 10%; ! important" src="photo/signature.jpg" /></div>
		 <div id="message2"></div>
	 <input type="file" id="signature" name="signature" required value="Choose photo">
       
      </div>
    </div>
	
	</div>
<hr>
<div class="form-group">        
                  <div class="col-sm-offset-5 col-sm-6">

                   <?php   if(!$row_records['matricboard']){   ?>
                    <input type="submit" id="btnsavedoc" name="submit_document" style="float: left;" class="btn btn-success" value="SAVE">
                    <?php   }else{	?>
                    <input type="submit" id="btndocupdate" name="submit_document" style="display:block;" class="btn btn-warning" value="Update" >
                    <input type="button"  id="btnnext2" class="btn btn-primary btnview" href="#tab3" data-id="<?php echo $_SESSION['user_id'];?>"  data-toggle="tab" value="Next">
                      <?php   }   ?>
                  </div>
                </div>
	</form>  


<script type="text/javascript">
    $(function () {
        $("#chkmartric").click(function (){
            if ($(this).is(":checked")) {
                $("#txtgetmarks").removeAttr("disabled");
                $("#txtoutoffmarks").attr("disabled","disabled");
                $("#txtoutoffmarks, #txtgetmarks, #matricpercentage").val(" ");
            }else{
               
				$("#txtoutoffmarks").removeAttr("disabled");
				$("#txtgetmarks").val(" ");
				$("#matricpercentage").val(" ");
            }
        });
		 $("#txtcredit2").click(function (){
            if ($(this).is(":checked")) {
                $("#txtgetmarks2").removeAttr("disabled");
                $("#txtoutoffmarks2").attr("disabled","disabled");
              	$("#txtoutoffmarks2").val(" ");
				$("#txtpercentage2").val(" ");
            }else{
                $("#txtoutoffmarks2").removeAttr("disabled");
				$("#txtgetmarks2").val(" ");
				$("#txtpercentage2").val(" ");
            }
        });
		$("#txtcredit3").click(function (){
            if ($(this).is(":checked")) {
                $("#txtgetmarks3").removeAttr("disabled");
                $("#txtoutoffmarks3").attr("disabled","disabled");
               	$("#txtoutoffmarks3").val(" ");
				$("#txtpercentage3").val(" ");
            }else{
                $("#txtoutoffmarks3").removeAttr("disabled");
				$("#txtgetmarks3").val(" ");
				$("#txtpercentage3").val(" ");
            }
        });
		
		 $("#txtgetmarks, #txtoutoffmarks").on("keyup",function(){
			var txts = $("#txtgetmarks").val();
			if($("#chkmartric").is(":checked")) {
				var percentsavings = (txts) * 9.5;
				$("#matricpercentage").val(percentsavings);
			}else{
				var totalmarks = $("#txtoutoffmarks").val();
				if(totalmarks != null || totalmarks != ''){
					var percentsavings = ((txts)/(totalmarks)) * 100;
					$("#matricpercentage").val(percentsavings);
				}
				if(totalmarks == null || totalmarks == '' || totalmarks == 0){
					$("#matricpercentage").val('insert out of marks');
				}
			}
		});
		 $("#txtgetmarks2, #txtoutoffmarks2").on("keyup",function(){
			var txts = $("#txtgetmarks2").val();
			if($("#txtcredit2").is(":checked")) {
				var percentsavings = (txts) * 9.5;
				$("#txtpercentage2").val(percentsavings);
			}else{
				var totalmarks = $("#txtoutoffmarks2").val();
				if(totalmarks != null || totalmarks != ''){
					var percentsavings = ((txts)/(totalmarks)) * 100;
					$("#txtpercentage2").val(percentsavings);
				}
				if(totalmarks == null || totalmarks == '' || totalmarks == 0){
					$("#txtpercentage2").val('insert out of marks');
				}
			}
		});
		 $("#txtgetmarks3, #txtoutoffmarks3").on("keyup",function(){
			var txts = $("#txtgetmarks3").val();
			if($("#chkmartric").is(":checked")) {
				var percentsavings = (txts) * 9.5;
				$("#txtpercentage3").val(percentsavings);
			}else{
				var totalmarks = $("#txtoutoffmarks3").val();
				if(totalmarks != null || totalmarks != ''){
					var percentsavings = ((txts)/(totalmarks)) * 100;
					$("#txtpercentage3").val(percentsavings);
				}
				if(totalmarks == null || totalmarks == '' || totalmarks == 0){
					$("#txtpercentage3").val('insert out of marks');
				}
			}
		});
    });
	
	$("#txtgetmarks").blur(function(){
		var getmarks = $(this).val();
		var outoffmarks = $("#txtoutoffmarks").val();
			if(outoffmarks){
				if(getmarks>outoffmarks){
					alert("Get marks should be less than Out of marks");
					$("#txtgetmarks").css("border","1px solid red");
				}else{
					$("#txtgetmarks").css("border","1px solid  rgb(191, 191, 191)");
				}
				
			}else{
				$("#txtgetmarks").css("border","1px solid  rgb(191, 191, 191)");
			}
		});
		$("#txtoutoffmarks").blur(function(){
		var outoffmarks = $(this).val();
		var getmarks = $("#txtgetmarks").val();
			if(outoffmarks){
				if(outoffmarks<getmarks){
					alert("Out of marks should be more than get marks");
					$("#txtoutoffmarks").css("border","1px solid red");
				}else{
					$("#txtoutoffmarks").css("border","1px solid  rgb(191, 191, 191)");
				}
			}else{
				$("#txtoutoffmarks").css("border","1px solid  rgb(191, 191, 191)");
			}
		});
		
		$("#txtgetmarks2").blur(function(){
		var getmarks2 = $(this).val();
		var outoffmarks2 = $("#txtoutoffmarks2").val();
			if(outoffmarks2){
				if(getmarks2>outoffmarks2){
					alert("Get marks should be less than Out of marks");
					$("#txtgetmarks2").css("border","1px solid red");
				}else{
					$("#txtgetmarks2").css("border","1px solid  rgb(191, 191, 191)");
				}
			}else{
				$("#txtgetmarks2").css("border","1px solid  rgb(191, 191, 191)");
			}
		});
		
		$("#txtoutoffmarks2").blur(function(){
		var outoffmarks2 = $(this).val();
		var getmarks2 = $("#txtgetmarks2").val();
			if(outoffmarks2){
				if(outoffmarks2<getmarks2){
					alert("Out of marks should be more than get marks");
					$("#txtoutoffmarks2").css("border","1px solid red");
				}else{
					$("#txtoutoffmarks2").css("border","1px solid  rgb(191, 191, 191)");
				}
			}else{
				$("#txtoutoffmarks2").css("border","1px solid  rgb(191, 191, 191)");
			}
		
		});
		$("#txtgetmarks3").blur(function(){
		var getmarks3 = $(this).val();
		var outoffmarks3 = $("#txtoutoffmarks3").val();
			if(outoffmarks3){
				if(getmarks3>outoffmarks3){
					alert("Get marks should be less than Out of marks");
					$("#txtgetmarks3").css("border","1px solid red");
				}else{
					$("#txtgetmarks3").css("border","1px solid  rgb(191, 191, 191)");
				}
			}else{
				$("#txtgetmarks3").css("border","1px solid  rgb(191, 191, 191)");
			}
		});
			$("#txtoutoffmarks3").blur(function(){
		var outoffmarks3 = $(this).val();
		var getmarks3 = $("#txtgetmarks3").val();
			if(outoffmarks3){
				if(outoffmarks3<getmarks3){
					alert("Out of marks should be more than get marks");
					$("#txtoutoffmarks3").css("border","1px solid red");
				}else{
					$("#txtoutoffmarks3").css("border","1px solid  rgb(191, 191, 191)");
				}
			}else{
				$("#txtoutoffmarks3").css("border","1px solid  rgb(191, 191, 191)");
			}
		});	  
</script>