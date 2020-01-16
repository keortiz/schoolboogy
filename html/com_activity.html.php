<?php 
	
  	foreach ($activity as $act)  
    	{   
				
					
			$subject = $act['activity_name'];
			$groupID = $act['activityID'];			
			echo '<button <button class="selectplan" id=' . $groupID . ' onclick= activitypostings(' . $groupID . '); getactivity(' . $groupID . ');>' . $subject .'</button>'; 	 
    
			
		
    
    }



    ?>


