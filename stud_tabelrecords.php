<?php
include "dbconnect.php";
f ($_GET['action'])
{
   if($_GET['action'] == "course")
{
	
    $course_id= $_POST['course_id'];
    $query="Select t1.studid,t1.studentname,t1.fathername,t1.bonafideofup,t1.landlineno,t1.fatherno,t1.categorey,t2.stud_semester,t3.studentuidno,t4.coursename from registration t1 INNER JOIN studcourse t2 ON t1.studid = t2.stud_id INNER JOIN student t3 on t1.studid=t3.studentid INNER JOIN course t4 on t2.stud_choice_course=t4.id tb2.stud_choice_course='".$course_id."'";
    $result= mysqli_query($conn, $query);
                   $i=1;
                   foreach($result as $key=>$val)
                   {
					   echo'<tr role="row" class="odd">
                  <td class="">'$i.'</td>
				  <td class="">'.$val['studentname'].'</td>
                  <td class="">'.$val['fathername'].'</td>
                  <td class="">'.$val['studid'].'</td>
                  <td class="">'.$val['coursename'].'</td>
                  <td class="">'.$val['stud_semester'].'</td>
                  <td class="">'.$val['studentuidno'].'</td>
                  <td class="">'.$val['landlineno'].'</td>
                  <td class="">'.$val['fatherno'].'</td>
                  <td class="">'.$val['bonafideofup'].'</td>
                  <td class="">'.$val['categorey'].'</td>
                  <td>
				
				  <a  onClick="popp('"newdiv"')" Custeditid="'.$val['studid'].'" class="btn btn-success btnstyle btn-xs btn-message" >Message</a>
				  <a  onClick="popp('"newdiv1"')" Custeditid="'.$val['studid'].'" class="btn btn-primary btnstyle btn-xs btn-migrate" >Migrate</a>
				  <a  onClick="popp('"newdiv2"')" Custeditid="'.$val['studid'].'" class="btn btn-warning btnstyle btn-xs btn-terminate" >Terminate</a><br/>
				  <a style="margin: 0 5px;"  class="btn btn-warning btnstyle btn-xs" href="viewinfo.php?action=show&dataid='.$val['id'].'&name='.$val['studentname'].'&father='.$val['fathername'].'&time='.$val['date'].'">Student Form</a>
				  
				  </td>';
				 $i++;
				   }
				  
}
}

?>