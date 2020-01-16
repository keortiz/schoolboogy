<?php 


$studentinfo = "";
if(isset($_POST["login"])){
	
	$UserID = $_POST["username"];	
	$PW = $_POST["password"];


require_once('includes/db.inc.php');	
$sql = "select * FROM schoolboogy.sb_student WHERE username = '" . $UserID . "' and password = '" . $PW . "'";	
$result = $pdo->query($sql);
	
	
foreach ($result as $row)
{

	$studentinfo[] = array('student_fname' => $row['student_fname'], 'student_lname' => $row['student_lname'], 'studentID' => $row['studentID'], 'username' => $row['username'], 'password' => $row['password']);		
}  

if($studentinfo != ""){
  
foreach ($studentinfo as $student)
{
session_start();
	$_SESSION['student_fname'] = $student['student_fname'];
	$_SESSION['student_lname'] = $student['student_lname'];	
	$_SESSION['username'] = $student['username'];
	$_SESSION['studentID'] = $student['studentID'];
	$_SESSION['groupID'] =	"";
	header('Location: home.php');
} 

}
else{
	echo'please enter valid username or password' ;
	}		

}	




?>

<div id=mainbody>
 <table width="100%" border="0">
  <tbody>
    <tr>
      <td id=loginheader>
      	<IMG src="images/logo_sb.fw.png" ALT="some text" WIDTH=45 HEIGHT=45>
		&nbsp;&nbsp;
		<IMG SRC="images/logo_SchoolBoogy3.png" ALT="Schoolboogy" WIDTH=177.5 HEIGHT=33.5>
		<div id=edition>STUDENT</div>
   </td>
    </tr>
    <tr>
      <td><table width="100%" border="0">
  <tbody>
    <tr>
      <td id=leftpanel>
      	
      	
      	
      </td>
      
      <td id=centerpanel>
		<div id=welcome>Welcome to SchoolBoogy</div><br>
		<div id=tagline>The Proven Way to Learn</div>
		<hr>
<form name="login" method="post">
  
  <table align="center" border="0">
  <tbody >
    <tr>
      <td align="right">Username: </td>
      <td><input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus></td>
    </tr>
    <tr>
      <td align="right">Password: </td>
      <td><input type="password" name="password" class="form-control" placeholder="Password"></td>
    </tr>
        <tr>
      <td align="right"></td>
      <td align="center"><input name="login" type="submit" class="btn btn-info" id="login" value="Login"</td>
    </tr>
  </tbody>
</table>
    	
     	
     	
   </form>
     
     
     
     
     </td>
      
      <td id=rightpanel></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td id=loginfooter>&nbsp;</td>
    </tr>
  </tbody>
</table>
</div>