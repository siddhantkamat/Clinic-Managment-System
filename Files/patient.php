<html>
<head>
  <link rel="stylesheet" href="patient.css">
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","clinic");
 ?>
  <div class="top">
        <a href="login1.htm" class="head" style="font-size: 40px;">Advance Clinic</a>
<div class="up">
        <ul>
          <li><a href="login1.htm">Home</a></li>

          <li class="active"><a href="contact.htm">contact</a></li>
        </ul>
      </div>
      </div>
      <center>
<div class="dash" ><br>
      <h2>&nbsp;&nbsp;&nbsp;Welcome<br><br><?php
        session_start();
        $sql="select name from pat where mail='".$_SESSION['pool']."';";
        $name=mysqli_query($conn,$sql);
        $name1=mysqli_fetch_assoc($name);
        echo $name1["name"];
         ?></h2> <br>
         <br>
         <button type="submit" onclick="window.location.href='book.php';" class="none" target="_self">Book Appointment</button><br><br><br>
            <button type="submit" onclick="window.location.href='manage.php';" target="_self" class="none">Manage your Profile</button><br>
            <div class="log">
          <a href="login.htm" >Sign out</a></div>
</div></center><br><br><br><br><br><br><br>
      <footer>
      <div class="footer1">
      <div class="footer">
          <ul>
          <li><a href="login1.htm">Home</a></li>
          <li><a href="contact.htm">contact</a></li>
        </ul>
      </div>
      </div>
      </footer>
</body>
</html>
