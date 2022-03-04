
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="reg.html" method="post">
  <div class="container" style="width:70%;height:100%;margin-left:15%;margin-bottom: 150%;padding-top:7%" >
  
  <div class="row">
  <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 20px;">
  <div class="row" style="margin-left: -160%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="AddNew" class="btn btn-primary" style="margin-left:63%">
    </div>
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">STUDENT DETAILS</h2>
  <div class="form-horizontal" style="margin-left:10px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
  
    <th> #</th>
    <th>Student Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Gender</th>
    <th>Date of birth</th>
    <th>Address</th>
    <th>Pin</th>
    <th>State</th>
    <th>District</th>
    <th>Course</th>
    
   
 
    <?php
include("config.php");
$s=1;
$sql=mysqli_query($conn,"SELECT * FROM tblstudent");
   while($display=mysqli_fetch_array($sql))
   {
	echo "<tr>";
	echo"<td>".$s++."</td>";
	echo "<td>".$display["firstname"]."</td>";
	echo "<td>".$display["email"]."</td>";
	echo "<td>".$display["contactno"]."</td>";
	echo "<td>".$display["gender"]."</td>";
	echo "<td>".$display["dob"]."</td>";
	echo "<td>".$display["address"]."</td>";
	echo "<td>".$display["pin"]."</td>";
	echo "<td>".$display["state"]."</td>";
	echo "<td>".$display["district"]."</td>";
	echo "<td>".$display["course"]."</td>";
	echo "<td><a style='color:#090' href='edit_student.php?cid=".$display['studentid']."'>Edit</a> </td>";
	echo "<td><a style='color:#090' href='delete_student.php?cid=".$display['studentid']."'>Delete</a> </td>";
	echo "</tr>";
	
  }
echo "</table>";

?>
  </div>
  </div>
  <div> </div>
  </div>
  </div>
</form>
</body>
</html>
