<?php 
include 'includes/db.inc.php';
try
{
$sql = "select DISTINCT(sb_lesson.lessonID), sb_lesson.assetID, sb_lesson.lesson_title, sb_lesson.lesson_number, sb_lesson.lesson_topic, sb_lesson.lesson_sequence, sb_course.courseID, sb_course.course_name from sb_course, sb_class, sb_schedule, sb_student, sb_lesson where sb_lesson.courseID=sb_course.courseID IN (SELECT sb_course.courseID FROM sb_course, sb_class, sb_schedule, sb_student where sb_course.courseID=sb_class.courseID and sb_class.classID=sb_schedule.classID and sb_schedule.studentID=sb_student.studentID and sb_student.studentID =" . $_SESSION['studentID'] . ") order by sb_course.course_name, sb_lesson.lesson_number";
$result  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($result as $row)
{

	$skills[] = array('lessonID' => $row['lessonID'], 'assetID' => $row['assetID'], 'lesson_title' => $row['lesson_title'], 'lesson_number' => $row['lesson_number'], 'lesson_topic' => $row['lesson_topic'], 'lesson_sequence' => $row['lesson_sequence'], 'courseID' => $row['courseID'], 'course_name' => $row['course_name']);

}

include 'html/skills.html.php';

?>

