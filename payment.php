<?php 
include('header.php');

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
<div class="tab-pane fade in" id="tab4">
<!--
		<div class="alert alert-success challan_success">
	      You have upload challan sucessfully  .
		</div>
		<div class="alert alert-danger challan_error">
		   You have not upload challan.
		</div>
		<div id='loadinges' class="newtop" >
			<center><img src="photo/loader.gif" style="height: 40%;position: fixed;margin-left: -11%;margin-top: 15%;"></center>
		</div>
          <h3 style="text-align:center;"><input type="radio" name="pay" value="Offline" >Offline<input type="radio" value="Online" name="pay">Online</h3>
		  <div id="reference_id" style="display:none";>
		  <div class="text-center">
                <i class="fa fa-search-plus pull-left icon"></i>
                <h2>Offline Fee deposit Mode</h2>
            </div>
			<hr>
		<p style="color: blue;">Please download the challan and deposit the fee in bank,in case you have already downloaded the challan and deposited the fees in bank, please enter the Journal number in the text box below, and click Submit button and deposit your challan at college office.</p>
		<form  id="form" action="" method="post" enctype="multipart/form-data"> 
			<input type="hidden" name="txtidss" id="txtidss" value="<?php echo $_SESSION['user_id'];?>">
			<input type="hidden" name="reg_no" id="reg_no" value="<?php echo $set_challanstart.''.$_SESSION['user_id'].''.date("Y").''.$row_cat['coursename'].'00'.$row_cat['stud_semester'];?>">
			
			
			<div class="container" style="width:77%;">
			<div class="form-group">
			  <div class="col-sm-6">
				  <label class="control-label" for="email"> Bank reference Number:</label>
				   <input type="text"  class="form-control" onkeypress="return isNumber(event)" name="txtbankreferenceno" required placeholder="Please enter Bank reference Number">
			  </div>
			  <div class="col-sm-6">
					<input type="submit"  name="submit"  class="btn btn-success" style="margin-top: 5%;" value="Submit">
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-5 col-sm-6">
			 </div>
			</div>
		</div>
		</form>
		</div>
		  <button  id="btnpayments" style="display:none;" class="btn btn-success">PayTym</button>
		  <div class="container" id="btnpayment" style="display:none;">
		  <hr>
-->
		  
    <div class="row">
        <div class="col-xs-12">
           <hr>
			<div class="container">
			  <div class="row">
				<div class="col-sm-4">
				  <h4>Student's Copy</h4>
				 <table class="table table-bordered ace">
					<thead>
					  <tr>
						<th colspan="4">College<!--<img alt="" src="<?php echo $college_logo ;?>" style="max-width: 100px;">--></th>
						<th style="font-size: 8px;" colspan="2">PAY-IN-SLIP<br>Branch Copy <br>Addmission Fee</th>
						<th colspan="3"><img alt="" src="<?php echo $bank_logo ;?>" style="height: 53px;"></th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td colspan="9"> <strong>Note:1</strong><small> Challan to be deposited two days after th generation pf challan</small></td>
					  </tr>
					  <tr>
						<td colspan="4">Challan No</td>
						<td colspan="5"><?php echo $set_challanstart.''.$_SESSION['user_id'].''.date("Y").''.$row_cat['coursename'].'00'.$row_cat['stud_semester'];?></td>
					  </tr>
					  <tr>
						<td colspan="4">Course</td>
						<td colspan="5"><?php echo $row_cat['coursename'].'-'.$row_cat['stud_semester'];?></td>
						
					  </tr>
					  <tr>
						<td colspan="4">Candidate's Name</td>
						<td colspan="5"><?php echo $row_records['studentname'];?></td>
						
					  </tr>
					  <tr>
						<td colspan="4">Father' Name</td>
						<td colspan="5"><?php echo $row_records['fathername'];?></td>
						
					  </tr>
					  <tr>
						<td colspan="3"> DOB </td>
						<td><?php echo $row_records['dob'];?></td>
						<td colspan="2">PNB Branch <br>	Name </td>
						<td colspan="3">UNA </td>
					  </tr>
					  <tr>
						<td colspan="3"> Fee Type </td>
						<td> Addmission Fee	</td>
						<td colspan="2">PNB Branch <br>Code	</td>
						<td colspan="3">.........<br></td>
					  </tr>
					  <tr>
						<td colspan="3">Application Fee:<br>Challan Date:</td>
						<td>15000<br><?php echo date("d/m/y");?></td>
						<td colspan="2">Desposit Date<br>Journal No<br></td>
						<td colspan="3">.........<br>.........<br></td>
					  </tr>
					   <tr class="abc">
						<td  colspan="4" class="abctd">Candidate's Signature</td>
						<td  colspan="5" class="abctd">Authorized Bank Signatory</td>

					  </tr>
					  <tr class="text">
						<td colspan="9" class="footer"><strong>Note:1</strong><small> Bank will collect Rs.20 as their charges. 2. Fee receiving branch is advised to write the Date,Journal Number and Branch Code above. 3. Bank official please go to screen 8888</small></td>
					  </tr>
					</tbody>
				  </table>
				</div>
				<div class="col-sm-4">
				  <h4>College's Copy</h4>
				  <table class="table table-bordered ace">
					<thead>
					  <tr>
					<th colspan="4">College<!--<img alt="" src="<?php echo $college_logo ;?>" style="max-width: 100px;">--></th>
						<th style="font-size: 8px;" colspan="2">PAY-IN-SLIP<br>Branch Copy <br>Addmission Fee</th>
						<th colspan="3"><img alt="" src="<?php echo $bank_logo ;?>" style="height: 53px;"></th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td colspan="9"> <strong>Note:1</strong><small> Challan to be deposited two days after th generation pf challan</small></td>
					  </tr>
					  <tr>
						<td colspan="4">Challan No</td>
						<td colspan="5"><?php echo $set_challanstart.''.$_SESSION['user_id'].''.date("Y").''.$row_cat['coursename'].'00'.$row_cat['stud_semester'];?></td>
					  </tr>
					  <tr>
						<td colspan="4">Course</td>
						<td colspan="5"><?php echo $row_cat['coursename'].'-'.$row_cat['stud_semester'];?></td>
					  </tr>
					  <tr>
						<td colspan="4">Candidate's Name</td>
						<td colspan="5"><?php echo $row_records['studentname'];?></td>
					  </tr>
					  <tr>
						<td colspan="4">Father' Name</td>
						<td colspan="5"><?php echo $row_records['fathername'];?></td>
					  </tr>
					  <tr>
						<td colspan="3">
						  DOB
						</td>
						<td>
						<?php echo $row_records['dob'];?>
						</td>
						<td colspan="2">
						PNB Branch <br>
						Name	
						</td colspan="2">
						<td colspan="3">
						UNA 
						</td>
					  </tr>
					  <tr>
						<td colspan="3">
						  Fee Type
						</td>
						<td>
						  Addmission Fee
						</td>
						<td colspan="2">
						PNB Branch <br>
						Code	
						</td>
						<td colspan="3">
						.........<br>
					
						
						</td>
					  </tr>
					  <tr>
						<td colspan="3">
						Apllication Fee:<br>
						Challan Date:
						</td>
						<td>
						15000<br>
						<?php echo date("d/m/y");?>
						
						</td>
						<td colspan="2">
						Desposit Date<br>
						Journal No<br>
						
						</td>
						<td colspan="3">
						.........<br>
						.........<br>
						
						</td>
					  </tr>
					   <tr class="abc">
						<td  colspan="4" class="abctd">Candidate's Signature</td>
						<td  colspan="5" class="abctd">Authorized Bank Signatory</td>

					  </tr>
					  <tr class="text">
						<td colspan="9" class="footer"><strong>Note:1</strong><small> Bank will collect Rs.20 as their charges. 2. Fee receiving branch is advised to write the Date,Journal Number and Branch Code above. 3. Bank official please go to screen 8888</small></td>
					   
					  </tr>
					</tbody>
				  </table>
				</div>
				<div class="col-sm-4">
				  <h4>Bank's Copy</h4>        
				  <table class="table table-bordered ace">
					<thead>
					  <tr>
						<th colspan="4">College<!--<img alt="" src="<?php echo $college_logo ;?>" style="max-width: 100px;">--></th>
					   
						<th style="font-size: 8px;" colspan="2">PAY-IN-SLIP<br>Branch Copy<br>Addmission Fee</th>
						<th colspan="3"><img alt="" src="<?php echo $bank_logo ;?>" style="height: 53px;"></th>
					  
						
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td colspan="9"> <strong>Note:1</strong><small> Challan to be deposited two days after th generation pf challan</small></td>
					   
					  </tr>
					  <tr>
						<td colspan="4">Challan No</td>
						<td colspan="5"><?php echo $set_challanstart.''.$_SESSION['user_id'].''.date("Y").''.$row_cat['coursename'].'00'.$row_cat['stud_semester'];?></td>
						
					  </tr>
					  <tr>
						<td colspan="4">Course</td>
						<td colspan="5"><?php echo $row_cat['coursename'].'-'.$row_cat['stud_semester'];?></td>
						
					  </tr>
					  <tr>
						<td colspan="4">Candidate's Name</td>
						<td colspan="5"><?php echo $row_records['studentname'];?></td>
						
					  </tr>
					  <tr>
						<td colspan="4">Father' Name</td>
						<td colspan="5"><?php echo $row_records['fathername'];?></td>
						
					  </tr>
					  <tr>
						<td colspan="3">
						  DOB
						</td>
						<td>
						<?php echo $row_records['dob'];?>
						</td>
						<td colspan="2">
						PNB Branch <br>
						Name	
						</td colspan="2">
						<td colspan="3">
						UNA 
						</td>
					  </tr>
					  <tr>
						<td colspan="3">
						  Fee Type
						</td>
						<td>
						  Addmission Fee
						</td>
						<td colspan="2">
						PNB Branch <br>
						Code	
						</td>
						<td colspan="3">
						.........<br>
					
						
						</td>
					  </tr>
					  <tr>
						<td colspan="3">
						Apllication Fee:<br>
						Challan Date:
						</td>
						<td>
						15000<br>
						<?php echo date("d/m/y");?>
						
						</td>
						<td colspan="2">
						Desposit Date<br>
						Journal No<br>
						
						</td>
						<td colspan="3">
						.........<br>
						.........<br>
						
						</td>
					  </tr>
					   <tr class="abc">
						<td  colspan="4" class="abctd">Candidate's Signature</td>
						<td  colspan="5" class="abctd">Authorized Bank Signatory</td>

					  </tr>
					  <tr class="text">
						<td colspan="9" class="footer"><strong>Note:1</strong><small> Bank will collect Rs.20 as their charges. 2. Fee receiving branch is advised to write the Date,Journal Number and Branch Code above. 3. Bank official please go to screen 8888</small></td>
					   
					  </tr>
					</tbody>
				  </table>
				</div>
			  </div>
			</div>
            
        </div>
    </div>
    
</div>
<input type="button" class="btn btn-warning" id="btnprint" style="display:none;" onclick="printDiv('btnpayment')" value="PRINT">
<?php
if(isset($_POST['submit'])){
		
	@$txtidss = $_POST['txtidss'];
	@$txtbankreferenceno = $_POST['txtbankreferenceno'];
	$res=mysqli_query($conn,"Select * from student where studentid='".$txtidss."'");
	$count = mysqli_num_rows($res);
	$row = mysqli_fetch_array($res);
	@$email = $row['studentemail'];
	$reg_no = $_POST['reg_no'];
	$dat =date('d-m-Y H:i:m');
	
    $query = mysqli_query($conn,"Insert into challan(studid,bankreferenceno,challan,date) VALUES('".$txtidss."','".$txtbankreferenceno."','".$reg_no."','".$dat."')");
        if($query){   
            echo "<script type='text/javascript'> alert('Challan submitted successfully, kindly submit the challan college copy at college office');</script>";
					  $subject2 = "Scholastic Admin";
    
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
												<img src="'.$mail_logo.'" width="140" height="36" style="background-color:#ffffff;color:#000000;font-size:14px;text-align:center;height: 75px;margin-left: 31%;" alt="Examrobo" class="Examrobo">
								
											</p>
											<p style="margin:35px 50px 0px 50px;word-break:break-word;font-size:24px;font-weight:bold;max-width:100%;letter-spacing:-1px;box-sizing:border-box;text-align:center">
												You have submit successfully challan and your regiration id 
											</p>
											<p style="margin:36px 50px 45px 50px;word-break:break-word;font-size:15px;font-weight:normal;max-width:100%;box-sizing:border-box;line-height:120%">
												'.$reg_no.' <br>
												<span style="margin-left: 9%;">'."</span>
											</p>

											
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
											Thank for register in Scholastic <br>
											
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
	<div class='adL'></div>
	
	</div>
</div>";


$headers2  = 'MIME-Version: 1.0' . "\r\n";
//$headers2  = "CC: testexam@gmail.com \r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //$headers .= "From:" . $from;
    $headers2 .= "From:" . 'www.ScholasticAdmin.com';
    
    mail($email,$subject2,$message2,$headers2); 
				}
	    	else
				{
					echo "<script type='text/javascript'> alert('You can not not submit');</script>";
				}
 
	}  
?>
		
    </div>