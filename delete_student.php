<?php
include("config.php");
if(isset($_GET["cid"]))
{
	$reg_id=$_GET["cid"];
	mysqli_query($con, "DELETE  FROM `register` where reg_id=$reg_id");
	echo "<script>alert(' user Deleted Successfully!!');window.location='view_student.php'</script>";
}
?>











