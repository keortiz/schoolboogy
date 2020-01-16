<?php
//insert.php

if(isset($_POST['class']))
{
include 'db.inc.php'; 
 

    
 
    $query = "
 INSERT INTO sb_studyroom(studyclassID, studentID,studyroom_name) 
 VALUES(:class, :students, :name) ";

 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':class'  => $_POST['class'],
 ':students'   => $_POST['students'],
    'name' =>$_POST['name']
  )
 );
 $result = $statement->fetchAll();
  }
 if(isset($result))
 {
  echo 'done';
 }



?>
 