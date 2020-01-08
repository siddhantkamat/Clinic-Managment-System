<html>
<?php
$conn=mysqli_connect("localhost","root","","clinic");
$user=$_POST["mail"];

   session_start();
   $_SESSION['super'] = $user;

?>
<?php
$user2=$_POST["pass"];
$sql="select pass from doc where mail='".$user."';";
$user1=mysqli_query($conn,$sql);
$user3=mysqli_fetch_assoc($user1);
if(strcmp($user3["pass"],$user2)==0)
{
header('Location:doctor.php');
}
else {
  echo "failed";
}
?>
</html>
