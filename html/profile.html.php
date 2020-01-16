<div id="alerts1">
<div>
<?php
foreach ($student as $student1)
{
	echo '<div class="metitle">NAME<br></div>';
	echo '<div class="metext">' . $student1['first_name'] . " " . $student1['last_name'] . " aka " .$student1['nickname'] . '</div>';	
	}
	echo '<div class="metitle">INTERESTS<br></div>';
	echo '<div class="metext">';
	
foreach ($interest as $interest1)
{
	echo $interest1['interest']. ', ';
	
	}
		echo '</div>';
	echo '<div class="metitle">ACTIVITIES<br></div>';
	echo '<div class="metext">';
	foreach ($activity as $activity1)
{


	echo $activity1['activity']. ', ';
	
	}
	echo '</div>';
	echo '<div class="metitle">CLOSEST FRIENDS<br></div>';	
	echo '<div class="metext">';
	foreach ($friend as $friend1)
{


	echo  $friend1['first_name'] . ' ' . $friend1['last_name'] . ', ';
	
	}	
	echo '</div>';
	
?>
</div>

</div>
<div id="alerts1">
<div class="pheader">FOLLOWING</div>
<div id="follow">
<?php
foreach ($following as $following1)
{

	echo  '<img src="./users/students/' . $following1['following'] . '/profile/' . $following1['following'] .'.jpg" height="80" width="81" id="pic">';	
	
	}	
?>

</div>

<div id="interest"><?php
foreach ($sactivity as $sactivity1)
{

	echo  '<img src="images/activities/' . $sactivity1['activityID'] .'.png" height="80" width="80" id="pic">';	
	
	}	
?></div>
</div>








<div id="alerts1">
<div class="pheader">PHOTOS</div>
<?php
$dir = "users/students/1/";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    $extension = substr($file, -3);
    				if ($extension == 'jpg'){ // list only jpgs
					echo '<img src="users/students/' . $_SESSION['studentID'] . '/' . $file . '" height="67" width="120" id="pic"/> ';
    }
    }
    closedir($dh);
  }
}

?>
</div>

<div id="alerts1">


</div>


