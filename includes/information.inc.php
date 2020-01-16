<?php 
include 'db.inc.php';


try
{
$sql = "select * from sb_inforec where inforec_type = 'information'";
$info  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($info as $row)
{

	$information[] = array('inforec_headline' => $row['inforec_headline'], 'inforec_content' => $row['inforec_content'], 'inforec_link' => $row['inforec_link']);
}

try
{
$sql = "select * from sb_inforec where inforec_type = 'resource'";
$rec  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($rec as $row)
{

	$resource[] = array('inforec_headline' => $row['inforec_headline'], 'inforec_content' => $row['inforec_content'], 'inforec_link' => $row['inforec_link']);
}


try
{
$sql = "select * from sb_progress_dash where studentID =" . $_SESSION['studentID'];
$dash  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($dash as $row)
{

	$progress[] = array('course_name' => $row['course_name'], 'progress_dash_raw' => $row['progress_dash_raw'], 'progress_dash_zone' => $row['progress_dash_zone']);
}

try
{
$sql = "select * from sb_team_score";
$score  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}

foreach ($score as $row)
{

	$team_score[] = array('sport_name' => $row['sport_name'], 'sport_lvl' => $row['sport_lvl'], 'team_score_result' => $row['team_score_result'], 'team_score_home' => $row['team_score_home'], 'team_score_home_name' => $row['team_score_home_name'], 'team_score_opponent_name' => $row['team_score_opponent_name'], 'team_score_opponent' => $row['team_score_opponent']);
}


include 'html/information.html.php';
?>

