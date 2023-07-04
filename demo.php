<?php   
 include 'db_connection.php';   
 $query = "select * from fruits";  
 $result = mysqli_query($conn, $query);
?> 

 <!DOCTYPE html>  
 <html>  
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 class="text-center">Export HTML table to Excel File using Jquery with PHP</h3><br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="10%">Id</th>  
                               <th width="30%">fruit name</th>  
                               <th width="10%">price</th>  
                          </tr>  
                          <?php   
                          while($row = mysqli_fetch_assoc($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row['fruit_id']; ?></td>  
                               <td><?php echo $row['fruits_name']; ?></td>  
                               <td><?php echo $row['price']; ?></td>  
                          </tr>  
                          <?php                           
                          }  
                          ?>  
                     </table>  
                </div>  
                <div align="center">  
                    <form action="excel.php" method="post">
                     <button name="submit" id="create_excel" class="btn btn-success">Create Excel File</button>  
                         </form>
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
