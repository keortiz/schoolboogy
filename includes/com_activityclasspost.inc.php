<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
header('Location: index.php');	
}
 
include '../includes/db.inc.php';
$groupID =$_GET['activityID'];
//$grouptype = $_GET['grouptype'];

try
{
$sql = "SELECT sb_posts.postitem,sb_posts.timedate,sb_posts.groupID,sb_posts.grouptype,sb_posts.userID,sb_posts.fname,sb_posts.lname FROM sb_posts where sb_posts.groupID = $groupID and sb_posts.grouptype ='activity' order by sb_posts.timedate desc";
$result  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching courses: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($result as $row)
{

	$postings[] = array('post' => $row['postitem'],'groupID' => $row['groupID'],'userID' => $row['userID'], 'timedate' => $row['timedate'], 'fname' => $row['fname'], 'lname' => $row['lname']);

}



include '../html/com_activityclasspost.html.php';

?>
