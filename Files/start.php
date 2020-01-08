<html>
<body>
<?php
$conn=mysqli_connect("localhost","root","","clinic");
$user=$_POST["name"];
$user1=$_POST["mail"];
$user2=$_POST["pass"];
$user3=$_POST["cpass"];
$user4=$_POST["add"];
$user5=$_POST["gen"];
if(strcmp($user2,$user3)==0)
{
  $sql="insert into pat (name,mail,pass,address,gender)
  values ('$user','$user1','$user2','$user4','$user5');";
  if(mysqli_query($conn,$sql))
  {
  echo "<script>
  alert('Registered successfully!!');
  </script>";
  }
  else {
    echo "not";
  }
}
else {
  echo "failed";
}
?>
</body>
</html>
