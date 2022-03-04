<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
include("config.php");
if(isset($_GET["cid"]))
{
     $reg_id=$_GET["cid"];
     $sql=mysqli_query($con,"SELECT * FROM register WHERE reg_id='$reg_id'");
     $row=mysqli_fetch_array($sql);
	 
}
?>
<form action=" " method="POST" enctype="multipart/form-data" >
  <div class="container" style="width:80%;margin-left:10%;margin-bottom: 5%;padding-top:8%" >
  <div class="row">
  <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 14px;">
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;"><u>BOOKING DETAILS..</u></h2>
  <br />
     
        <div class="row">
          <div class="col-md-3" style="text-align:center">
            <label>First Name</label>
          </div>
          <div class="col-md-6" style="text-align:center">
            <input type="text"  name="firstname" class="form-control" style="width:500px;" value="<?php echo $row['firstname'];?>">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3" style="text-align:center">
            <label>Last Name</label>
          </div>
          <div class="col-md-6" style="text-align:center">
            <input type="text" class="form-control" name="lastname" style="width:500px;" value="<?php echo $row['lastname'];?>">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3" style="text-align:center">
            <label>Email</label>
          </div>
          <div class="col-md-6" style="text-align:center">
            <input type="text" class="form-control" name="email" style="width:500px;"  value="<?php echo $row['email'];?>">
          </div>
        </div>
        <br>
      
        <br>
         <div class="row">
          <div class="col-md-3" style="text-align:center">
            <label>Password</label>
          </div>
          <div class="col-md-6" style="text-align:center">
            <input type="password" class="form-control" name="password" style="width:500px;"  value="<?php echo $row['password'];?>">
          </div>
        </div>
        
       
          
  
   <br>
         <div class="row">
          <div class="col-md-3" style="text-align:center">
            <label>Phone Number</label>
          </div>
          <div class="col-md-6" style="text-align:center">
            <input type="number" class="form-control" name="phno" style="width:500px;"  value="<?php echo $row['phno'];?>">
          </div>
        </div>
        
         
   <br>
         <div class="row">
          <div class="col-md-3" style="text-align:center">
            <label>District</label>
          </div>
          <div class="col-md-6" style="text-align:center">
            <input type="text" class="form-control" name="district" style="width:500px;"  value="<?php echo $row['district'];?>">
          </div>
        </div>
     
         
  
        <br>
        <div class="row">
          <input type="submit" name="submit" value="Update" class="btn btn-primary" style="margin-left:63%">
        </div>
        <br>
        <br>
      </div>
    </div>
  </div>
  </div>
  </div>
</form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
	
   
	 $firstname=$_POST["firstname"];
     $lastname=$_POST["lastname"];
	 
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	
	$phno=$_POST["phno"];
		
	$district=$_POST["district"];
	
     $sql=mysqli_query($con,"UPDATE register SET firstname='$firstname',lastname='$lastname',email='$email',password='$password',phno='$phno',district='$district WHERE reg_id='$reg_id'");
	
	
     if($sql)
     {
      echo "<script>alert('Student Details Updated Successfully!!');window.location='view_student.php';</script>";
     }
}

?>

