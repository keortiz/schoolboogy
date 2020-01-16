<?php 
include '../includes/db.inc.php';
session_start();
$post=$_POST['post'];
$groupID=$_POST['groupID'];
$lname=$_SESSION['student_lname'];
$fname=$_SESSION['student_fname'];
echo $groupID;
$_SESSION['groupID'] =$groupID;
$uid=intval($_SESSION['studentID']);


$sql="INSERT INTO sb_posts(userID, postitem, is_hidden, user_type, groupID,grouptype, fname, lname) VALUES ($uid, '$post', 0, 'student', $groupID,'study', '$fname', '$lname')";
$result  = $pdo->query($sql);




include '../html/studyclasspost.html.php';