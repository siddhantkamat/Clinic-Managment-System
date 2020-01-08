<?php
$conn=mysqli_connect('localhost','root','','clinic');
$name1=$_POST["name"];
$sql="select name,exp,price from med where name='".$name1."'";
$row=mysqli_query($conn,$sql);
if (mysqli_num_rows($row)>0) {
    echo "<script>alert('Medicine Exists')</script>";
}
else {
  echo "<script>alert('Medicine Doesn't exist')</script>";
}
 ?>
