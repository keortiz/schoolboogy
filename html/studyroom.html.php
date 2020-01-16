<?php 
	
  	/*foreach ($studies as $study)  
    	{   
				
					
			$subject = $study['course_name'];
			$studyID = $study['courseID'];			
			echo '<button <button class="selectplan" id=' . $studyID . ' onclick=studyposting(' . $studyID . '); getstudy(' . $studyID . ');>' . $subject .'</button></button>'; 	 
    		
			
		
    
    }*/



 echo '<button class = "selectplan" id = "createStudyroom" style = " margin-top:100%;font-size:12px;height:15px; padding-top:0px;">Create Room</button>';
 
  echo '<button class = "selectplan" id = "deleteRoom"  style = "font-size:12px;height:15px;padding-top:0px">Delete Room </button>';


include '/Applications/XAMPP/xamppfiles/htdocs/schoolboogys/includes/studyindex.php';
 ?>