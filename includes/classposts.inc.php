<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
header('Location: index.php');	
}
 
include '../includes/db.inc.php';
$sql = "SELECT sb_posts.groupID from sb_posts" ;
$result1=$pdo->query($sql);

foreach($result1 as $row)
{
	$groupID = $row['groupID'];
	}
try
{
$sql = "SELECT sb_posts.postitem,sb_posts.timedate,sb_posts.groupID,sb_posts.userID,sb_posts.fname,sb_posts.lname,sb_posts.grouptype FROM sb_posts where groupID = $groupID and grouptype = 'classes'order by sb_posts.timedate desc";
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

	$postings[] = array('post' => $row['postitem'],'groupID' => $row['groupID'], 'userID' => $row['userID'], 'timedate' => $row['timedate'], 'fname' => $row['fname'], 'lname' => $row['lname']);

}



include '../html/classposts.html.php';

?>

