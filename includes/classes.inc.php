<?php 
include 'includes/db.inc.php';
try
{
$sql = "SELECT sb_course.courseID,sb_course.course_name FROM sb_course, sb_class, sb_schedule, sb_student where sb_course.courseID=sb_class.courseID and sb_class.classID=sb_schedule.classID and sb_schedule.studentID=sb_student.studentID and sb_student.studentID =" . $_SESSION['studentID'] . " order by sb_course.course_name";
$result  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching courses: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($result as $row)
{

	$courses[] = array('courseID' => $row['courseID'], 'course_name' => $row['course_name']);

}
	
include 'html/classes.html.php';

?>

