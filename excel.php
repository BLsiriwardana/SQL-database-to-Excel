<?php   

include 'db_connection.php'; 

$output="";
if(isset($_POST['submit'])){
     $query = "select * from fruits";  
     $result = mysqli_query($conn, $query);
     $i = 1;
     if(mysqli_num_rows($result) > 0) {
          $output .='
          <table class="table table-bordered">  
                          <tr> 
                               <th>No.</th> 
                               <th>Id</th>  
                               <th>fruit name</th>  
                               <th>price</th>  
                          </tr>  
          '; 
          while($row = mysqli_fetch_array($result)){
               $output .= '
                    <tr>
                      <td>'.$i.'</td>
                      <td>'.$row['fruit_id'].'</td>
                      <td>'.$row['fruits_name'].'</td>
                      <td>'.$row['price'].'</td>
                    </tr>
               
               ';
                
        
               header('Content-Type: application/vnd.ms-excel');  
               header('Content-disposition: attachment; filename='.rand().'.xls'); 
              
          }        $output.='</table>';
                   echo $output;
          
        
     } else {
          echo"no data found";
     }

}


 ?>