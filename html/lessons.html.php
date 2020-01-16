<?php 
	$course_cnt = 0;
    $count = 0;
    $subject = $lessons[0]['course_name'];
	echo '<h3>' . $subject .'</h3>'; 
	echo '<div id="lessons">';	
	echo '<button id="0/0" class="selectplan" onclick=setSummary("' . $lessons[0]['courseID'] . '")>Course Summary</button>';
  	foreach ($lessons as $lesson)  
    	{   
				if ($subject == $lesson['course_name']) 
					{		
					echo '<button <button id="' . $lesson['courseID'] . '/' . $lesson['lessonID'] . '" class="selectplan" onclick=setAsset("' . $lesson['courseID'] . '/' . $lesson['lessonID'] . '")>' . $lesson['lesson_number'];
					echo '<br>';						
					echo $lesson['lesson_title'];
					echo '<br>';
					echo $lesson['lesson_topic']. '</button>';		
					}
					else 
					{
					
					$subject = $lesson['course_name'];
				    echo '</div>';
					echo '<h3>' . $subject .'</h3>'; 	 
					echo '<div id="lessons">';
					echo '<button <button class="selectplan" onclick=setAsset("' . $lesson['courseID'] . '/' . $lesson['lessonID'] . '")>Course Summary</button>';
					echo '<button <button id="' . $lesson['courseID'] . '/' . $lesson['lessonID'] . '" class="selectplan" onclick=setAsset("' . $lesson['courseID'] . '/' . $lesson['lessonID'] . '")>' . $lesson['lesson_number'];
					echo '<br>';						
					echo $lesson['lesson_title'];
					echo '<br>';
					echo $lesson['lesson_topic']. '</button>';		
					}
		
			}
	    echo '</div>';	
    ?>



