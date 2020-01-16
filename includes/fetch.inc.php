<?php
//fetch.php
  include_once 'db.inc.php'; 
if(isset($_POST['action']))
{
 

 $output = '';

 if($_POST["action"] == 'class')
 {
  $query = 'SELECT  sb_posts.userID, sb_posts.groupID, sb_student.studentID,sb_student.student_fname,sb_student.student_lname from sb_posts, sb_student group by sb_student.studentID';

  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':class'  => $_POST["query"]
   )
  );
  $result = $statement->fetchAll();
  $output .= '<option value="">Select students</option>';
  foreach($result as $row)
  {
   $output .= '<option value="'.$row["studentID"].'">'.$row["student_fname"].'&nbsp;'.$row["student_lname"].'</option>';
  }
 }

  
 echo $output;
}

?>
