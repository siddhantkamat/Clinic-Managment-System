<?php
$conn=mysqli_connect("localhost","root","","clinic");
if(!$conn)
{
  echo "fail";
}
$name=$_POST["name"];
$add=$_POST["add"];
$no=$_POST["no"];
$ano=$_POST["aadhar"];
$pnp=$_POST["pan"];
$sql="insert into pro (`name`,`add`,`mno`,`ano`,`pno`) values ('$name','$add','$no','$ano','$pnp')";
if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Profile Updated successfully')</script>";
}
else {
  echo "failed";
}

 ?>
