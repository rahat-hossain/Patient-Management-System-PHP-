

 <?php  
 $connect = mysqli_connect("localhost", "root", "", "pmsdb");  
 if(isset($_POST["insert"]))  
 {  
      $username=$_POST['username'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  

      $query = "update doctorapp set prescription='$file' where username='$username';";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  

 ?>  
 <!DOCTYPE html>

<?php include('15.php');?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PATIENT PRESCRIPTION</title>
</head>
<body>
  
    <div class="card">
    <div class="card-body" style="background-color:#D6EAF8">
      <div class="row">
        <div class="col-md-1">
      <a href="dadmin_panel.php" class="btn btn-light"> Go Back </a>
</div>
    <div class="col-md-11" style="text-align: right">
      <a href="allsignup.php" class="btn btn-light"> LOG OUT </a> 
  </div>
</div>
</div>

  
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
    <div class="list-group">
    
  </div>

</div>
<div class="col-md-8">
  
  <div class="card">

    <div class="card-body" style="background-color:#3498DB;color:#ffffff; text-align:center;">

   <h2>Insert Patient Prescription </h2>
  </div>
    <div class="card-body">

     <div class="container" style="width:500px;">  

                <form method="post" enctype="multipart/form-data"> 
                  


               
                           <label>Patient name: </label>
          <select class="form-control" name="username" required="">

            <?php display_p();?>
          
        </select><br>

           
                  
                     <input type="file" name="image" id="image" />  
                     <br />  <br>
                         
        
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-primary"/>  
                      
  
 

                </form>  </form>
                <br />  
                <br /> 

<table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM doctorapp ORDER BY username DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['prescription'] ).'" height="300" width="300" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  

                
           </div> 

    </div>
</div>


<div class="col-md-1"></div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  