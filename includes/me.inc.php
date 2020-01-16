<?php 
include 'db.inc.php';

try
{
$sql = "SELECT student_fname, student_lname, student_nickname FROM sb_student WHERE studentID =" . $_SESSION['studentID'];
$students  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($students as $row)
{

	$student[] = array('first_name' => $row['student_fname'], 'last_name' => $row['student_lname'],'nickname' => $row['student_nickname']);

}

try
{
$sql = "SELECT interest_name  FROM sb_interest, sb_student_interest WHERE sb_student_interest.interestID = sb_interest.interestID and sb_student_interest.studentID =" . $_SESSION['studentID'];
$interests  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($interests as $row)
{

	$interest[] = array('interest' => $row['interest_name']);

}
try
{
$sql = "select distinct sb_activity.activity_name from sb_activity, sb_student_activity where sb_student_activity.studentID =" . $_SESSION['studentID'];
$activities  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($activities as $row)
{

	$activity[] = array('activity' => $row['activity_name']);

}

try
{
$sql = "select student_fname, student_lname from sb_student, sb_friend where sb_friend.studentID =" . $_SESSION['studentID'] . " and sb_student.studentID = sb_friend.student_friendID";
$friends  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($friends as $row)
{

	$friend[] = array('first_name' => $row['student_fname'], 'last_name' => $row['student_lname']);

}	

try
{
$sql = "select student_fname, followingID from sb_student, sb_student_following where sb_student_following.studentID =" . $_SESSION['studentID'] . " and sb_student.studentID = sb_student_following.followingID";
$followings  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($followings as $row)
{

	$following[] = array('first_name' => $row['student_fname'], 'following' => $row['followingID']);

}	

try
{
$sql = "select activity_name, sb_activity.activityID from sb_student, sb_student_activity, sb_activity where sb_student_activity.studentID = " . $_SESSION['studentID'] . " and   sb_student.studentID = sb_student_activity.studentID and sb_student_activity.activityID = sb_activity.activityID";
$sactivitys  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($sactivitys as $row)
{

	$sactivity[] = array('name' => $row['activity_name'], 'activityID' => $row['activityID']);

}


include 'html/profile.html.php';
?>