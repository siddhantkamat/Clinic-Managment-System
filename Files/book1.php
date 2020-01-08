
<?php
$conn=mysqli_connect('localhost','root','','clinic');
$name=$_POST['doctor'];
$name1=$_POST['date'];
$name2=$_POST['time'];
$name3=$_POST['venue'];
session_start();
$name4=$_SESSION['ha'];
$sql1="insert into app(name,date,time,location) values ('$name4','$name1','$name2','$name3');";
if (mysqli_query($conn,$sql1)) {
  echo "<script>alert('Your request is taken into account successfully. You will receive confirmation message if the Appointment is booked')</script>";
}
 ?>
