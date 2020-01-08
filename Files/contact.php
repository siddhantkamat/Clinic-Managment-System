<?php
$conn=mysqli_connect("localhost","root","","clinic");
$name=$_POST['name'];
$mail=$_POST['mail'];
$no=$_POST['no'];
$sub=$_POST['text'];
$sql="insert into contact(name,mail,no,text) values ('$name','$mail','$no','$sub')";
if(mysqli_query($conn,$sql))
{
  echo "<script> alert('We will conatct you soon!!')</script>";
}
 ?>
