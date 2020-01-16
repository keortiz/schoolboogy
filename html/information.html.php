<div id="information">
	<h3>IMPORTANT INFORMATION</h3>
		<div class="roll">
			<p class="roll">
		<?php
			foreach ($information as $information1)
				{
					echo $information1['inforec_link'] . '<br><br>';					
				}
		?>
			</p>	
		</div>
<h3>SCHOOL RESOURCES<h3>
		<div class="roll">
			<p>
		<?php
			foreach ($resource as $resource1)
				{
					echo '<h3 id="fheader">' . $resource1['inforec_headline'] . '</h3><br>';
					echo '<p  id="inforec">';
					echo $resource1['inforec_content'] . '<br>';	
					echo $resource1['inforec_link'] . '<hr>';
					echo '</p>';					
				}
		?>
			</p>	
		</div>
<h3>DIGITAL LIBRARY</h3>
		<div class="roll">
			<p>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">MY BOOKS</a></li>
    <li><a href="#tabs-2">BROWSE</a></li>
  </ul>
  <div id="tabs-1">
  	<hr><div class="books1">BOOKS I AM READING</div><hr>
    <div class="books"><a href>End of the Tether</a href> by <a href>Joseph Conrad</a href><br><a href>The Golden Scorpion</a href> by <a href>Sax Rohmer</a href></div>
    <hr><div class="books1">OVER 4000 VOLUMES    COMING FALL 2017</div>
  </div>
  <div id="tabs-2">
    <hr><div class="books1">SELECT A CATEGORY</div><hr>
    <p class="books"><a href>Fiction</a href>	<br><a href>Shakespeare</a href><br><a href>Non-Fiction</a href>	<br><a href>Short Stories</a href><br><a href>Young Readers</a href>	<br><a href>Drama</a href><br><a href>Poetry</a href>	<br><a href>Classical</a href></p>
  </div>
</div>
			</p>
		</div>
<h3>PERSONAL PROGRESS</h3>
		<div class="roll">

<div>
	<style>
td, th {
    padding: 4px;
}
</style>
	<table id="progress">
	<tr>
		<th>SUBJECT</th>
		<th>SCORE</th>
		<th>ZONE</th>
	</tr>

<?php
foreach ($progress as $progress1)
{
	echo '<tr>';
	echo '<td>' . $progress1['course_name'] . '</td>';	
	echo '<td>' . $progress1['progress_dash_raw'] . '</td>';
	echo '<td class="b' . $progress1['progress_dash_zone'] .'">' . $progress1['progress_dash_zone'] . '</td>';
	echo '</tr>';
}
?>	

</table>
</div>

	
		</div>
<h3>TEAM SCORE BOARDS</h3>
		<div class="roll">
	<table id="progress">
	<tr id="sportheader">
		<th>SPORT</th>
		<th>SCORE</th>
	</tr>

<?php
foreach ($team_score as $team_score1)
{

	echo '<tr>';
	echo '<tr>';	
	echo '<td id="sport">' . $team_score1['sport_name'] . '</td>';
	echo '<td id="sport">' . $team_score1['team_score_result'] . '</td>';		
	echo '<tr>';
	echo '<td>' . $team_score1['team_score_home_name'] . '</td>';
	echo '<td>' . $team_score1['team_score_home'] . '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>' . $team_score1['team_score_opponent_name'] . '</td>';
	echo '<td>' . $team_score1['team_score_opponent'] . '</td>';
	echo '</tr>';
}
?>	

</table>
		</div>
		


				
</div>


<script>
  		 		$( function() 
  		{
    		var icons = 
    			{
      				header: "ui-icon-circle-arrow-e",
      				activeHeader: "ui-icon-circle-arrow-s"
    			};
    	$( ".information" ).accordion
    		({
      			icons: icons
   			 });
    	$( "#toggle" ).button().on( "click", function() 
    		{
      			if ( $( ".information" ).accordion( "option", "icons" ) ) {
        		$( "#information" ).accordion( "option", "icons", null );
      		} 
      	else 
      		{
        		$( ".information" ).accordion( "option", "icons", icons );
      		}
    		});
  		});
	 
</script>