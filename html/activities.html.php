<div  class="acttext">
<div class="datitles">ALERTS</div>
<div id="alerts">


	<div class="dabody">
	<table>
	<tr>
		<th width="35%">FROM</th>
		<th>MESSAGE</th>
	</tr>

<?php
        
foreach ($alert as $alert1)
{
	echo '<tr>';
	echo '<td>' . $alert1['alert_from'] . '</td>';	
	echo '<td>' . $alert1['alert_message'] . '</td>';
	echo '</tr>';
}
       
?>	

</table>
	</div>
</div>
<div class="datitles">HOMEWORK</div>
<div id="alerts">


	<div class="dabody">
	<table>
	<tr>
		<th width="35%">SUBJECT</th>
		<th>ASSIGNMENT</th>
	</tr>

<?php
     
foreach ($assignment as $assignment1)
{
	echo '<tr>';
	echo '<td>' . $assignment1['hwn_course_name'] . '</td>';	
	echo '<td>' . $assignment1['hwn_assignment'] . '</td>';
	echo '</tr>';
}
        

?>	

</table>
</div>
</div>
<div class="datitles">ACTIVITIES</div>
<div id="alerts">
	<div class="dabody">

	<table>
	<tr >
		<th width="35%">ACTIVITY</th>
		<th>MESSAGE</th>
	</tr>

<?php
  if($activity != "") {    
foreach ($activity as $activity2)
{
	echo '<tr>';
	echo '<td>' . $activity2['activity_name'] . '</td>';	
	echo '<td>' . $activity2['activity_message'] . '</td>';
	echo '</tr>';
    
}
}
      
?>	

</table>
</div>
</div>
<div class="datitles">REMINDERS</div>
<div id="alerts">
	<div class="dabody">
	<table>
	<tr>
		<th width="300px">MESSAGE</th>
	</tr>

<?php

foreach ($reminder as $reminder1)
{
	echo '<tr>';
	echo '<td>' . $reminder1['reminder_message'] . '</td>';	
	echo '</tr>';
}
 $reminder ="";     
?>

</table>

</div>
</div>


