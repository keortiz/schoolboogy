<html>
 <head>
 
 </head>

 
 
   
    <body>
    
    <?php include'fetch.php';?>
        
          <table id="user_data" class="table table-bordered table-striped">
       <tr>
           <th>image</th>
           <th>item</th>
           <th>Description</th>
           <th>url</th>
              </tr>
              <?php
              
              while ($row = $query->fetch())
              {
                  echo "<tr>";
                  echo"<td>" .$row['learn_thumbnail']."</td>";
                  echo "<td>" .$row['item']."</td>";
                  echo"<td>" .$row['learn_description']."</td>";
                    echo"<td>" .$row['learn_url']."</td>";
                  echo"</tr>";
              }
              
              
              
              
              ?>
        </table>
    </body></html>
   
 


