<?php
session_start();
if(isset($_SESSION["username"]))
{

 echo "It worked";
 session_destroy();

} else

{
			header('Location: loginfailed.php');

}


?>


