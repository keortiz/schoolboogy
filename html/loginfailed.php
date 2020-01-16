
<link rel="stylesheet" type="text/css" href="../styles/login.css">

<?php 
include '../includes/db.inc.php';
session_start();

if(isset($_POST["login"]))
{
	
	try
{
$sql = "select * from sb_student where username = :username and password = :password";	
	$statement = $pdo->prepare($sql);
	$statement -> execute (
		array(
			'username' => $_POST["username"],
			'password' => $_POST["password"]	
		)
	);
	
	$count = $statement->rowCount();
	if($count > 0)
	{
		$_SESSION["username"] = $_POST["username"];
			header('Location: ../html/itworked.php');
		
	} else
		
	{
			header('Location: loginfailed.php');	
		
	}
	
	
}
catch (PDOException $e)
{
  $error = 'Error fetching Lessons: ' . $e->getMessage();
  include 'html/error.html.php';
  exit();
}
	
	

}


?>
 
<div id=mainbody>
 <table width="100%" border="0">
  <tbody>
    <tr>
      <td id=loginheader>
      	<IMG src="../images/logo_sb.fw.png" ALT="some text" WIDTH=45 HEIGHT=45>
		&nbsp;&nbsp;
		<IMG SRC="../images/logo_SchoolBoogy3.png" ALT="Schoolboogy" WIDTH=177.5 HEIGHT=33.5>
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
<form method="post">
  
  <table align="center" border="0">
  <tbody >
    <tr>
      <td align="right" >Username</td>
      <td><input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input type="password" name="password" class="form-control" placeholder="Password"></td>
    </tr>
        <tr>
      <td align="right"></td>
      <td align="center"><input name="login" type="submit" class="btn btn-info" id="login" value="Login"><input type="reset"></td>
    </tr>
  </tbody>
</table>
    	<p align="center" style="color:red">Enter a Valid Username and Password</p>
     	
     	
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