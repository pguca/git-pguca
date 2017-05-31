<?php include_once ('header.php');

    $query_cat = mysqli_query($conn,"SELECT t1.stud_id,t1.`stud_choice_course`, t1.`stud_semester`,t2.coursename,t3.categorey,t3.sportdquotaperson,t3.singlegirlperson,t3.culturalquotaperson FROM `studcourse` t1 INNER JOIN course t2 on t1.stud_choice_course=t2.id INNER JOIN registration t3 on t1.stud_id=t3.studid where t1.stud_id='".@$_SESSION['user_id']."'");

    $query_records=mysqli_query($conn,"SELECT * FROM `studdocument` where studid='".@$_SESSION['user_id']."'");

    $query=mysqli_query($conn,"Select * from course ");
    $query_course=mysqli_query($conn,"Select * from course ");
    

    @$num_cat=mysqli_num_rows($query_cat);
    @$row_cat=mysqli_fetch_array($query_cat);

    @$num_records=mysqli_num_rows($query_records);
    @$row_records=mysqli_fetch_array($query_records);
    
    @$count=mysqli_num_rows($query);
    @$count_course=mysqli_num_rows($query_course);
?>

<script>
    var subjectids   = [];
function modicourse(id,value,course,sem){
    var sel         = id.split("-");
    var selid       = parseInt(sel[1]);
    var nxtid       = parseInt(sel[1])+1;
    subjectids.push(value);
    //alert(subjectid);
        var xmlhttp;
           if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          }
          else
          {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }	

          xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
              document.getElementById("modi-"+nxtid).innerHTML = xmlhttp.responseText;
            }
          }
          xmlhttp.open("GET","test.php?subject_id="+value+"&course="+course+"&sem="+sem+"&subjectids="+subjectids, true);
          xmlhttp.send();
}
</script>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
		        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-default categorey"  href="#tab1" data-toggle="tab">
                <div class="hidden-xs">Course</div>
            </button>
        </div>
		
		<?php if($row_records['matricboard']){	?>
        <div class="btn-group" role="group">
            <button type="button"  id="favorites" class="btn btn-default education" href="#tab2" data-toggle="tab">
                <div class="hidden-xs">Education & Document Details</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default btnview summary" data-id="<?php echo $_SESSION['user_id'];?>"  href="#tab3" data-toggle="tab">
                <div class="hidden-xs">Application Summary</div>
            </button>
        </div>
		<?php  }else {	?>
		 <div class="btn-group" role="group">
            <button type="button"  id="favorites" class="btn btn-default education" disabled href="#tab2" data-toggle="tab">
                <div class="hidden-xs">Education & Document Details</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default summary btnview" disabled href="#tab3" data-id="<?php echo $_SESSION['user_id'];?>"   data-toggle="tab">
                <div class="hidden-xs">Application Summary</div>
            </button>
        </div>
		<?php }	?>
    </div>
     <div class="well" style="background:#fff; min-height:650px;">
      <div class="tab-content">
	 
        <div class="tab-pane fade in active" id="tab1">
            <div class="container" style="width: 77%;">
                <div class="alert alert-success succ">
                    You have choice course sucessfully  .
                </div>
                <div class="alert alert-danger wrng">
                    You have not insert course.
                </div>
                <h2>Course &amp; Semester </h2>
                <div class="form-group"> 
                    <div class="col-sm-6">
                        <label class="control-label" for="email"> Select Course :</label>
                        <span id="userName-info" class="info"></span><br/>
                        <input type="hidden" name="txtid1" id="txtid1" value="<?php echo $_SESSION['user_id'];?>">
                        <select class="form-control demoInputBox" name="ddlcategory" id="ddlcategory" onchange="fetch_select(this.value);" > 
                            <option value="<?php echo $row_cat['stud_choice_course'];?>"><?php echo $row_cat['coursename'];?>&nbsp;</option>
                        <?php while(@$row=mysqli_fetch_array($query)){	?>
                            <option value="<?php echo $row['id'];?>" ><?php echo $row['coursename'];?></option>
                        <?php }	?>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label" for="email"> Select Semester :</label>
                        <span id="userSem-info" class="info"></span><br/>
                        <div id="he">
                          <select class="form-control demoInputBox" name="ddlsemester" id="ddlsemester"  > 
                                <option value="<?php echo $row_cat['stud_semester'];?>"><?php echo $row_cat['stud_semester'];?>&nbsp;</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-5 col-sm-6">
                        <?php if($row_cat['stud_choice_course']){	?>
                            <input type="submit" id="btnupdate" name="submit" class="btn btn-warning" style="display:block;margin-top:24px;" value="Update" style="margin-top:24px;" onClick="sendContact()";>
                            <button type="button"  id="btnnext" class="btn btn-primary" href="#tab2" style="display:block;margin-top:24px;" data-toggle="tab">Next</button>
                        <?php	}else{   ?>
                            <input type="submit" id="btnupdate" name="submit" class="btn btn-warning" style="display:none;margin-top:24px;" value="Update" style="margin-top:24px;" onClick="sendContact()";>
                            <button type="button"  id="btnnext" class="btn btn-primary" href="#tab2" style="margin-top:24px;" data-toggle="tab">Next</button>
                            <input type="submit" id="btnsave" name="submit" class="btn btn-success" value="SAVE" style="margin-top:24px;" onClick="sendContact()";>
                        <?php	}	?>
                    </div>
                </div>
            </div>
            <div>
            <?php 
    $totalcorses = 8;
    $compulsory = mysqli_query($conn,"SELECT * FROM subjects where course='".@$row_cat['stud_choice_course']."' and semester = '".@$row_cat['stud_semester']."' and tbl_subjectmodifiable = 0 and type = 1 "); 

$compulsory_number = mysqli_num_rows($compulsory); 

$remaining_corses = $totalcorses - $compulsory_number;

    $subjectmodifiable = mysqli_query($conn,"SELECT * FROM subjects where course='".@$row_cat['stud_choice_course']."' and semester = '".@$row_cat['stud_semester']."' and tbl_subjectmodifiable = 1 and type = 1 "); 

$subjectmodifiable_number = mysqli_num_rows($subjectmodifiable); 


     $sec = mysqli_query($conn,"SELECT * FROM subjects where course='".@$row_cat['stud_choice_course']."' and semester = '".@$row_cat['stud_semester']."' and type = 2  "); 
     $ace = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM subjects where course='".@$row_cat['stud_choice_course']."' and semester = '".@$row_cat['stud_semester']."' and type = 3 ")); 

//var_dump($subjectmodifiable);exit;
            ?>
                <p>Compulsory </p>
                <?php $i=1;
                while ($row = mysqli_fetch_array($compulsory)) {
                        echo'<li>'.$i.'-'.$row['subject'].'</li>';
                        $i++;
                    }
                ?>
                <p>opptional </p>
                        <select class="test" id="modi-1" onchange="modicourse(this.id,this.value,<?php echo $row_cat['stud_choice_course']?>, <?php echo $row_cat['stud_semester'] ?>)">
                          <?php  
                            for($k=0;$k<$subjectmodifiable_number;$k++) { 
                                while($row = mysqli_fetch_array($subjectmodifiable)){ ?>
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['subject'] ?></option>
                        <?php    }
                            } 
                        ?>
                        </select>
                <p id="demo"></p>

                          <?php  if($remaining_corses > 1) {
                                $modid = 2;
                            for($k=0;$k<$remaining_corses-1;$k++) { ?>
                                <select class="test" id="modi-<?php echo $modid ?>" onchange="modicourse(this.id,this.value,<?php echo $row_cat['stud_choice_course']?>, <?php echo $row_cat['stud_semester'] ?>)">
                                    <option value="">Select</option>
                                    <option value="<?php echo $modid ?>"><?php echo $modid ?></option>
                                </select>    
                        <?php  $modid++; } } ?>
                        
                
                
                
                <p>SEC</p>
                <select>
                    <?php while($row = mysqli_fetch_array($sec)){ ?>
                        <option value="<?php echo $row['id'] ?>" onchange=""><?php echo $row['subject'] ?></option>
                    <?php    }    ?>
                </select>
                
                <p>ACE</p>
                <select>
                  <?php while($row = mysqli_fetch_array($ace)){ ?>
                        <option value="<?php echo $row['id'] ?>" onchange=""><?php echo $row['subject'] ?></option>
                    <?php    }    ?>
                </select>
                
            </div>
        </div>
		
        <div class="tab-pane fade in" id="tab2">
            <div id='loading' class="newtop" >
                <center><img src="photo/loader.gif" style="height: 25%;position: fixed;margin-left: -4%;margin-top: 15%;"></center>
            </div>
             <div class="alert alert-danger succs">
                You have not upload document .
            </div>
             <div class="alert alert-success wrn">
                You have upload document sucessfully.
            </div>
              <h3>Academic Qualifications/शैक्षणिक योग्यता</h3>
                <?php include_once('education_document.php');?>
        </div>
		<div class="tab-pane fade in" id="tab3">
		  <div id="studinfo"></div>
		</div>
      </div>
    </div>   
 <?php include_once ('footer.php');?>