<?php
try
{
  $pdo = new PDO('mysql:host=184.191.35.156:3306;dbname=schoolboogy', 'root',
    'dogmeat');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'html/error.html.php';
  exit();
}

$connect = new PDO("mysql:host=184.191.35.156:3306;dbname=schoolboogy", "root", "dogmeat");

?>