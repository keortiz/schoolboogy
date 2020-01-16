<?php 

  	foreach ($courses as $course)  
    	{   
				
					
			$subject = $course['course_name'];
			$groupID = $course['courseID'];			
			echo '<button <button class="selectplan" id=' . $groupID . ' onclick=classpostings(' . $groupID . '); getGroup(' . $groupID . ');>' . $subject .'</button>'; 	 
    
			
		
    
    }
    ?>



