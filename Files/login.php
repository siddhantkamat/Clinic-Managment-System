<html>
<?php
$conn=mysqli_connect("localhost","root","","clinic");
$user=$_POST["mail"];
$user2=$_POST["pass"];
$sql="select pass from pat where mail='".$user."';";
$user1=mysqli_query($conn,$sql);
$user3=mysqli_fetch_assoc($user1);
if(strcmp($user3["pass"],$user2)==0)
{
header('Location:patient.php');
session_start();
$_SESSION['pool']=$user;
}
else {
  echo "failed";
}
?>
</html>
