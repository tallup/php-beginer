<?php  
 $connect = mysqli_connect("localhost", "root", "", "record_mgt");  
 if(mysqli_connect_error()){
     echo "Failed to connect";
     exit();
 }
 echo "connection Success";

  $query ="SELECT * FROM appointm";  
  $result = mysqli_query($connect, $query); 
  echo $result
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
           <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		    <!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>   -->
           <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />   -->
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>apno</td>  
                                    <td>vno</td>  
                                    <td>offic</td>  
                                    <td>items</td>  
                                    <td>vdate</td>
                                    <td>intime</td>
                                    <td>outtime</td>
                                    <td>usr</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              //  echo '  
                              //  <tr>  
                              //       <td>'.$row["apno"].'</td>  
                              //       <td>'.$row["vno"].'</td>  
                              //       <td>'.$row["offic"].'</td>  
                              //       <td>'.$row["items"].'</td>  
                              //       <td>'.$row["vdate"].'</td>
                              //       <td>'.$row["intime"].'</td>
                              //       <td>'.$row["outtime"].'</td> 
                              //       <td>'.$row["usr"].'</td>  
                              //  </tr>  
                              //  ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  