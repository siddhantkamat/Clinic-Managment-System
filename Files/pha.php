<html>
<?php
$conn=mysqli_connect("localhost","root","","clinic");
$user=$_POST["mail"];
$user2=$_POST["pass"];
session_start();
$sql1="select name from pha where mail='".$user."';";
$user6=mysqli_query($conn,$sql1);
$user7=mysqli_fetch_assoc($user6);
$_SESSION['pha']=$user7["name"];
$sql="select pass from pha where mail='".$user."';";
$user1=mysqli_query($conn,$sql);
$user3=mysqli_fetch_assoc($user1);
if(strcmp($user3["pass"],$user2)==0)
{
header('Location:phadash.php');
}
else {
  echo "failed";
}
?>
</html>
