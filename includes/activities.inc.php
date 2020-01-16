<?php 
include 'db.inc.php';
try
{
$sql = "select * from sb_alerts where studentID =" . $_SESSION['studentID'];
$alerts  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($alerts as $row)
{

	$alert[] = array('alert_from' => $row['alert_from'], 'alert_message' => $row['alert_message']);

}

try
{
$sql = "select * from sb_homework_notice where studentID =" . $_SESSION['studentID'];
$assignements  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($assignements as $row)
{

	$assignment[] = array('hwn_course_name' => $row['hwn_course_name'], 'hwn_assignment' => $row['hwn_assignment']);

}



try
{
$sql = "SELECT distinct sb_activity.activity_name, sb_activity_message.activity_message, sb_activity_message.activity_start_date, sb_activity_message.activity_end_date FROM schoolboogy.sb_student_activity, schoolboogy.sb_activity_message, schoolboogy.sb_activity where sb_student_activity.studentID =" . $_SESSION['studentID'] . " and schoolboogy.sb_student_activity.studentID = schoolboogy.sb_activity_message.studentID and schoolboogy.sb_activity_message.activityID = schoolboogy.sb_activity.activityID";
$activities  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($activities as $row)
{

	$activity[] = array('activity_name' => $row['activity_name'], 'activity_message' => $row['activity_message']);

}
$activity="";
try
{
$sql = "select * from sb_reminders where studentID =" . $_SESSION['studentID'];
$reminders  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($reminders as $row)
{

	$reminder[] = array('studentID' => $row['studentID'], 'reminderID' => $row['reminderID'], 'reminder_message' => $row['reminder_message'], 'reminder_start_date' => $row['reminder_start_date'], 'reminder_end_date' => $row['reminder_end_date']);

}
$reminders ="";


include 'html/activities.html.php';

?>

