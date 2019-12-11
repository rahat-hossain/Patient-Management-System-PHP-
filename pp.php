

 <?php  
 $connect = mysqli_connect("localhost", "root", "", "pmsdb");  
 if(isset($_POST["insert"]))  
 {  
      $contact=$_POST['contact'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  

      $query = "update doctorapp set prescription='$file' where contact='$contact';";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  

 ?>  
 <!DOCTYPE html>
<?php include('1.php');?>
<?php include('11.php');?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>INSERT YOUR PRESCRIPTION</title>
</head>
<body>
  
    <div class="card">
    <div class="card-body" style="background-color:#D6EAF8">
      <div class="row">
        <div class="col-md-1">
      <a href="padmin-panel.php" class="btn btn-light"> Go Back </a>
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
   <h2>Insert Your Prescription </h2>
  </div>
    <div class="card-body">

     <div class="container" style="width:500px;">  

                <form method="post" enctype="multipart/form-data"> 
                        <label><h4>Select Your Contact Number </h4></label>

                        <input type="text" name="contact" required="" /> 
           
                  
                     <input type="file" name="image" id="image" />  
                     <br />  <br>
                         
        
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-primary"/>  
                      
  
 

                </form>  </form>
                <br />  
                <br /> 


                
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