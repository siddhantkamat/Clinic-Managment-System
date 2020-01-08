<html>
<body>
<?php
$conn=mysqli_connect("localhost","root","","clinic");
$user=$_POST["name"];
$user1=$_POST["date"];
$user2=$_POST["qua"];
$user3=$_POST["pri"];
  $sql="insert into med (name,exp,price,qua)
  values ('$user','$user1',$user3,$user2);";
  if(mysqli_query($conn,$sql))
  {
  echo "<script>
  alert('Uploaded successfully!!');
  </script>";
  }
  else {
    echo "not";
  }
?>
</body>
</html>
