<?php
   
           
   if(isset($_POST['get_option']))
   {
     include "config.php";
      

     $state = $_POST['get_option'];
     $query_sem = mysqli_query($conn,"select *  from course  where id='$state' ");
      $num_query = mysqli_num_rows($query_sem);
      $rowes=mysqli_fetch_array($query_sem);
      $str = $rowes['duration'];
	   //$array =  (explode(",",$str));
	  // $i = sizeof($array);
	  
	   
	    echo '<select class="form-control demoInputBox" name="ddlsemester" id="ddlsemester"  > 
					<option selected disabled >Select Semester </option>';
									for ($row = 1; $row <= $str; $row++)
	  {
								   echo'<option value="'.$row.'">'.$row.' </option>';
	  }
												echo' </select>
							
'; 
      
     
     exit;
   }

?>