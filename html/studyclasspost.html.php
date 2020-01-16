<?php 

	$post_cnt = 0;   
        
  	foreach ($postings as $pst)  
    	{ 			
					
			$postcontent = $pst['post'];
			$postdate = strtotime($pst['timedate']);
			$postdate = date('l, F j, Y \a\t g:ia', $postdate);
			$fname = $pst['fname'];
			$lname = $pst['lname'];			
			
			$post_cnt++;
			echo '<div id="groupPost" class="pheader">'; 
			echo $fname;
			echo ' '; 
			echo $lname;
			echo ' - '. $postdate .'</div>';	 	 
			echo '<div style="padding-left:15px"><p>' . $postcontent .'</p></div><hr>';								
			echo '<p></p>';	
			echo '</div>';			
			 			
    }
        
		
		
          
    ?>


