


<?php


include  '../schoolboogys/includes/magicquotes.inc.php';
 include '../schoolboogys/includes/db.inc.php';

if(isset($_post['submit']))

{
$studentID = $_post['studentID']  ;  

    
      try
  {
   
$sql="INSERT INTO sb_studyroom(studentID) VALUES ($studentID)";
$result  = $pdo->query($sql);

    		 
  }
    
  catch (PDOException $e)
  {
       echo $e -> getmessage();
         include '/Applications/XAMPP/xamppfiles/htdocs/schoolboogys/html/error.html.php';
                         exit();
  }
  
include '../schoolboogys/html/studypartner.html.php';

  return;
    
}














if (isset($_POST['action']) and $_POST['action'] == 'add')
{
 include '../schoolboogys/includes/db.inc.php';

   try
  {
     $sql ='SELECT  sb_posts.userID, sb_posts.groupID, sb_student.studentID,sb_student.student_fname,sb_student.student_lname from sb_posts, sb_student group by sb_student.studentID';
    	$result = $pdo->prepare($sql);
    		
    									$result->execute();
  }
  catch (Exception $e)
  {
   		 echo $error = 'error selecting student info';
   				 include '/Applications/XAMPP/xamppfiles/htdocs/schoolboogys/html/error.html.php';

  }

 			foreach($result as $row){

            $lname = $row['student_lname'];
 		 	 $fname = $row['student_fname'];
 			 $studentID = $row['studentID'];
 			 $studyclassID = $row['groupID'];
 			 $studyroomID= $row['userID'];
             $studyroom_name="";
}

  // add the students

}


if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  try
  {
    $sql = 'SELECT studentID, student_fname, email FROM author WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching author details.';
    include '../schoolboogys/html/error.html.php';
    exit();
  }

  $row = $s->fetch();

  $pageTitle = 'Edit Author';
  $action = 'edit';
  $name = $row['name'];
  $email = $row['email'];
  $id = $row['id'];
  $button = 'Update author';


  return;
}

if (isset($_GET['editform']))
{
include '../includes/db.inc.php';

  try
  {
    $sql = 'UPDATE author SET
        name = :name,
        email = :email
        WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->bindValue(':name', $_POST['name']);
    $s->bindValue(':email', $_POST['email']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error updating submitted student.';
    include '/Applications/XAMPP/xamppfiles/htdocs/studyroom/admin/students/error.html.php';
    exit();
  }
    return;
}
//activate button, get student perameter
if (isset($_POST['action']) and $_POST['action'] == 'Delete')
{
 include '../includes/db.inc.php';

   try
  {
    $sql = 'SELECT  sb_posts.userID, sb_posts.groupID, sb_student.studentID,sb_student.student_fname,sb_student.student_lname from sb_posts, sb_student group by sb_student.studentID';
    $s = $pdo->prepare($sql);
    $s->bindValue(':studentID', $_POST['studentID']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error getting list of jokes to delete.';
    include 'error.html.php';
    exit();
  }

  $result = $s->fetchAll();

  // Delete the students
  try
  {
    $sql = 'DELETE FROM sb_studyroom WHERE studentID = :studentID';
    $s = $pdo->prepare($sql);
    $s->bindValue(':studentID', $_POST['studentID']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting author.';
    include 'error.html.php';
    exit();
  }

   header('Location: .');
  exit();
}

// Display student list
include '../schoolboogys/includes/db.inc.php';

try
{
  $sql ='SELECT  sb_posts.userID, sb_posts.groupID, sb_student.studentID,sb_student.student_fname,sb_student.student_lname from sb_posts, sb_student group by sb_student.studentID';
$result = $pdo->query($sql);
$result = $pdo->prepare($sql);
$result -> execute();
}
catch (PDOException $e)
{
   echo $e -> getmessage();
         include 'error.html.php';
                         exit();
}

foreach ($result as $row)
{
  $addstudents[] = array('studentID' => $row['studentID'], 'name' => $row['student_fname'],'lastname' => $row['student_lname'],'studyclassID' => $row['groupID'],'studyroomID' => $row['userID'], 'studyadmin' => '0' );
}

include '/Applications/XAMPP/xamppfiles/htdocs/schoolboogys/html/studypartner.html.php';
return;
?>