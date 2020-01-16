<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
header('Location: index.php');	
}
?>


<SCRIPT> 
<!-- 
ScrollSpeed = 200
ScrollChars = 1
function ScrollMarquee() {
window.setTimeout('ScrollMarquee()',ScrollSpeed);

var msg = document.ticker.text.value; 
document.ticker.text.value =
msg.substring(ScrollChars) +
msg.substring(0,ScrollChars); 
} 
ScrollMarquee()
//-->
</SCRIPT>
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<script src="../jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.button.min.js"></script>


    
     
     <tr>
      <td class="logoarea">
				<div class="logo"><IMG src="images/logo_sb.fw.png" ALT="some text" WIDTH=45 HEIGHT=45>
				&nbsp&nbsp
				<IMG SRC="images/logo_SchoolBoogy3.png" ALT="Schoolboogy" WIDTH=177.5 HEIGHT=33.5>
			</div>
			<div class="topbuttons">
				<input class="selectapp" type="button" id="home" value="HOME" onclick="location.href='home.php'"/>
				<input class="selectapp" type="button" id="myclasses" value="MyClasses" onclick="location.href='myclasses.php'"/>
				<input class="selectapp" type="button" id="me" value="Me!" onclick="location.href='me.php'"/><br><br><br>
				<form class="search"> <i class="fa fa-search" aria-hidden="true"></i> <input  type="search" name="site search" ><input type="submit" value="Search"></form>	
			</div>

   </td>
    </tr>
    <tr>
		<td class="menubar">
		<table width="100%" border="0">
  <tbody>
    <tr>
      <td class="school" width=200px>E. L. Meyers Junior/High School</td>
      <center><td class="ticker"><FORM NAME="ticker" > 
<INPUT NAME="text" SIZE=100 class="tick"
VALUE="-- Buses will be delayed 15 minutes. -- Prom tickets are on sale. -- Tomorrow is Picture Day. -- 7th Grade History, Remember to return trip permission slips"
> 
	</FORM></td></center>
      <td class="username" width=200px>Hi <?php echo $_SESSION['student_fname'] ?>!  <a href="./html/logout.php" class="logout">Logout</a></td>
    </tr>
  </tbody>
</table>
   </td>
    </tr>   
    <script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});
    </script>
