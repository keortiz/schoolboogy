
 <script src="js/script.js"></script>
<script>

function classposting(x){
var subject=x;
var input=$('#summernote').summernote('code');
$('#postings').prepend('<div class="pheader" id='+subject+'><?php echo $_SESSION['student_fname']; ?> <?php echo $_SESSION['student_lname'];?> - <?php date_default_timezone_set('America/New_York'); ?><?php echo date('l, F j, Y \a\t g:ia'); ?></div><br>'+input+'<hr>');
	

 
    

    $.post('includes/addposts.inc.php', {post:input, groupID:subject});
	

	
$('#summernote').summernote('reset');
};



function activityposting(y){
var subject=y;
var input=$('#summernote').summernote('code');
$('#postings').prepend('<div class="pheader" id='+subject+'><?php echo $_SESSION['student_fname']; ?> <?php echo $_SESSION['student_lname'];?> - <?php date_default_timezone_set('America/New_York'); ?><?php echo date('l, F j, Y \a\t g:ia'); ?></div><br>'+input+'<hr>');
	

 
    

    $.post('includes/com_addactivitypost.inc.php', {post:input, groupID:subject});
	

	
$('#summernote').summernote('reset');
};


function studypostings(s){
var subject=s;
var input=$('#summernote').summernote('code');
$('#postings').prepend('<div class="pheader" id='+subject+'><?php echo $_SESSION['student_fname']; ?> <?php echo $_SESSION['student_lname'];?> - <?php date_default_timezone_set('America/New_York'); ?><?php echo date('l, F j, Y \a\t g:ia'); ?></div><br>'+input+'<hr>');
	

 
    

    $.post('includes/studyaddpost.inc.php', {post:input, groupID:subject});
	

	
$('#summernote').summernote('reset');
};</script>

	


<div id="groupPost" class="pheader"><h4>SHARE YOUR KNOWLEDGE, PHOTOS, AND VIDEOS.</h4></div>	
<form name="frm">
  <div id="summernote" name="summernote"></div>

<div id="groupPst" class="pheader">SELECT A CLASS TO MAKE A POST.</div><hr>

</form>





<div id="postings">
	

</div>

