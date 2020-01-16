
<!DOCTYPE html>
<html lang="en">
  <head>

	 

    <script src="jquery-ui/jquery-ui.js"></script>  
    <script src="js/script.js"></script> 
	  
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>	  

	  
	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
   	<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css"> 
	<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.structure.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.theme.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script src="jquery-ui/jquery-ui.js"></script>  
    <script src="js/script.js"></script>  
    <?php
    
    
	 function getGroup($x) 
{

echo $x;

};	

?>
 
 <?php
    
    
	 function getactivity($y) 
{

echo $y;

};	

?>
 
    <meta charset="utf-8">
    
    <title>Schoolboogy Student</title>


  </head>

  <body>
	<?php
		include 'includes/db.inc.php';
		include 'html/me.html.php';

	?>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
			
			isableDragAndDrop: true
});
    });
  </script>
  </body>
  
</html>

