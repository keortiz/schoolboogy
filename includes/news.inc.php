<?php 
include 'db.inc.php';


try
{
$sql = "select * from sb_news where news_type = 'featured'";
$featured  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($featured as $row)
{

	$news[] = array('news_headline' => $row['news_headline'], 'news_content' => $row['news_content']);
}



try
{
$sql = "select * from sb_news where news_type = 'feed'";
$feed  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($feed as $row)
{

	$feeds[] = array('news_headline' => $row['news_headline'], 'news_content' => $row['news_content'], 'news_link' => $row['news_link']);
}


try
{
$sql = "select * from sb_news where news_type = 'highlight'";
$highlight  = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include '../html/error.html.php';
  exit();
}

foreach ($highlight as $row)
{

	$highlights[] = array('news_headline' => $row['news_headline'], 'news_content' => $row['news_content'], 'news_link' => $row['news_link']);
}

include 'html/news.html.php';
?>

