     <table width="100%" border="0">
  <tbody >
			<?php include 'html/header.html.php';?>	
 		<table width="100%" border="0">
  <tbody>
    <tr >
      <td class="dabordersides">

    		<div class="pheader">LESSONS</div>	



 

		
    		<div id="accordion">
				<?php include 'includes/lessons.inc.php';?>	
			</div>
			
	

			
</div>			
	

			  
     </td>
      <td id="content" class="daborder"> 
<script>
	 	function getLearning() {
	 	
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/welcome.inc.php", true);
    xhr.send();
    xhr.onreadystatechange = function() {
	    if(xhr.readyState == 4 && xhr.status == 200) {
	    document.getElementById("content").innerHTML=xhr.responseText;
	    
	      		  		$( function() {
    		$( "#learningPlan" ).tabs();
  		} );
	    
	    
	 }}}
	 
	  	getLearning();
	  	
	  	
	  		      		  		$( function() {
    		$( "#learningPlan" ).tabs();
  		} );
</script>
			
	
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

		
