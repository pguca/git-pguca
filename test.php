<?php
include ('config.php');
    $subject_id        = $_GET['subject_id'];
    $course            = $_GET['course'];
    $sem               = $_GET['sem'];
    $subjectids        = explode(",",$_GET['subjectids']);

$output = '';
$q = "select * from subjects where subjects.id not in (SELECT restrict_subject.subject2 FROM subjects inner join restrict_subject on restrict_subject.subject1 = '".$subject_id."') and subjects.course='".$course."' and subjects.semester = '".$sem."' and subjects.tbl_subjectmodifiable = 1 and subjects.type = 1 ";

for($k=0;$k<sizeof($subjectids);$k++) { 
    $q .= " and subjects.id != ".$subjectids[$k];
    
}
$query = mysqli_query($conn,$q);

while($row=mysqli_fetch_array($query)){ 
                
    $output .= "<option value='".$row['id']."'>".$row['subject']."</option>";
    
}	echo $output; ?>
   
