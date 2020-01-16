<?php include '../schoolboogys/includes/db.inc.php'; 
$class = '';
 
$query = "SELECT sb_course.courseID,sb_course.course_name FROM sb_course, sb_class, sb_schedule, sb_student where sb_course.courseID=sb_class.courseID and sb_class.classID=sb_schedule.classID and sb_schedule.studentID=sb_student.studentID and sb_student.studentID =" . $_SESSION['studentID'] . " order by sb_course.course_name";
$statement=$connect-> prepare($query);
$statement->execute();
    $result = $statement->fetchall();


foreach ($result as $row)
{

	$class .='<option value ="' .$row["courseID"].'">' .$row["course_name"].'</option>';

}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name= "viewport" content = "width=device-width,initial-scale=1">
   


     
      <script src ="../schoolboogys/js/jquery.lwMultiSelect.js"></script>
      <link rel ="stylesheet" href ="../schoolboogys/styles/jquery.lwMultiSelect.css"/>
<style>

.modal {
     display:none;
    position: fixed;
  z-index:1;

  padding-top:25%;
 
  left:0;
  top:0;
  width:100%;
  height:100%;

  background-color:rgb(#4291d7);
  background-color:rgba(0,0,0,0.4);
}
.modal-header{
border: 1px solid #888;

height: 100px;
}

/* Modal Content/Box */
.modal-content{
background-color: #fefefe;
    margin:auto;
    padding:20px;
    border:1px solid #888;
    width:80%;
    text-align: left;
    animation-name:modalopen;
    animation :duration 1s;
}


/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;


}


.close:hover,
.close:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
}







</style>  

    <meta charset="utf-8">
      <title>change study partners</title>
     </head> 
     <body>
  <div>
    <div id= "myModal" class= "modal">
   				<div class="modal-content">
                	<div class = "modal-header"> 
                       
      <span class="close">&times;</span>
                        <h1 alighn ="center">Create your studyroom</h1>
   					 
   	 
      </div>
      <div>
           
   	 </div>
 
         
  <div class="listbox-area">
    <div class=left-area>
      
     <div class="container" style="width:600px;">
   <br /><br />
   <form method="post" id="insert_data">
      
       
    <select name="class" id="class" class="form-control action">
     <option value="">Select Class</option>
     <?php echo $class; ?>
    </select>
    <br />
     <label for="name"> Name your study room: <input type="text" name="name"
            id="name" value=""></label>
       
    
    <select name="students" id="students" multiple class="form-control">
    </select>
    <br />
    <input type="hidden" name="hidden_students" id="hidden_students" />
    <input type="submit" name="insert" id="action" class="btn btn-info" value="Insert" />
   </form>
  </div>
 
         
         
      </div></div></div></div>
       
         </div>
         
         
         
         
         
         
         
         
         <script>
$(document).ready(function(){

 $('#students').lwMultiSelect();

 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == 'class')
   {
    result = 'students';
   }
   
   $.ajax({
    url:'../schoolboogys/includes/fetch.inc.php',
    method:"POST",
    data:{action:action, query:query},
    success:function(data)
    {
     $('#'+result).html(data);
     if(result == 'students')
     {
      $('#students').data('plugin_lwMultiSelect').updateList();
     }
    }
   })
  }
 });

 $('#insert_data').on('submit', function(){
  
  if($('#class').val() == '')
  {
   alert("Please Select a class");
   return false;
  }
  else if($('#students').val() == '')
  {
   alert("Please Select some students for your study room");
   return false;
  }
 
  else
  {
   $('#hidden_students').val($('#students').val());
   
   var form_data = $(this).serialize();
   $.ajax({
    url:"../schoolboogys/includes/createstudyroom.inc.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#action').attr("disabled", "disabled");
     if(data == 'done')
     {
      $('#students').html('');
      $('#students').data('plugin_lwMultiSelect').updateList();
      $('#students').data('plugin_lwMultiSelect').removeAll();
      $('#insert_data')[0].reset();
      alert('Data Inserted');
     }
    }
   });
  }
 });

});
</script>

         
       <script>
             
             
         var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("createStudyroom");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function(openModal) {
  modal.style.display = "block";
console.log(onclick);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
         </script>
         </body>
 
</html>    