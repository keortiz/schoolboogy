 <?php 
include '../includes/db.inc.php';
session_start();
$post=$_POST['post'];
$uid=intval($_SESSION['studentID']);
$sql="INSERT INTO sb_posts(userID, postitem, is_hidden, user_type) VALUES ($uid, '$post', 0, 'student')";
$result  = $pdo->query($sql);
?>

