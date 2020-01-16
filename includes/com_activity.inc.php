<?php 
include 'includes/db.inc.php';


try
{

$sql = "SELECT Distinct sb_activity.activityID,sb_activity.activity_name FROM sb_activity, sb_student_activity, sb_student where sb_activity.activityID=sb_student_activity.activityID  and sb_student_activity.studentID =" . $_SESSION['studentID'] . " order by sb_activity.activity_name asc";
$activity = $pdo->query($sql);
}
    catch (PDOException $e)
    
{
  $error = 'Error fetching courses: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}





foreach ($result as $row)
{

	$activity[] = array('activityID' => $row['activityID'], 'activity_name' => $row['activity_name']);

}

include 'html/com_activity.html.php';

?>

