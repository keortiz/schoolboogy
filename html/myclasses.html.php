     <table width="100%" border="0">
  <tbody >
			<?php include 'html/header.html.php';?>	
 		<table width="100%" border="0">
  <tbody>
    <tr >
      <td class="dabordersides">

    		<div class="pheader">LESSON PLAN</div>	

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">My Lessons</a></li>
    <li><a href="#tabs-2">My Skills</a></li>   		
    </ul>
  <div id="tabs-1">  		
    		<div id="accordion">
				<?php include 'includes/lessons.inc.php';?>	
			</div>
			
	</div>		
  <div id="tabs-2">
    		<div id="accordion1">
				<?php include 'includes/skills.inc.php';?>
			</div>
			
</div>			
	
	</div>		
			
			
			  
     </td>
      <td id="content" class="daborder"> 
			<?php include 'html/welcome.html.php';?>	
			
	
     </td>
      <td class="dabordersides">		
	    	<div class="pheader">CURRICULA</div>	
			<?php include 'html/assets.html.php';?>	
		</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td>			<?php	include 'html/footer.html.inc.php'; ?></td>
    </tr>
  </tbody>
</table>

		
