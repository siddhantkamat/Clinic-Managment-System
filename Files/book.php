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
        $_SESSION['ha']=$name1["name"];
         ?></h2> <br>
         <br>
         <button type="submit" onclick="window.location.href='book.php';" class="none" target="_self">Book Appointment</button><br><br><br>
            <button type="submit" onclick="window.location.href='manage.php';" target="_self" class="none">Manage your Profile</button><br>
<div class="book"><div class="book1">
Book Appointment
</div><br><br><br>
<form action="book1.php" target="_self" method="post">
  Doctor:&nbsp;&nbsp;<input type="text" name="doctor" onkeypress="return (event.charCode>64 && event.charCode<91) || (event.charCode>96 && event.charCode<123)" required>
  <br><br><br>
  Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date"required><br><br><br>
  Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="time" required><br><br><br>
  Venue:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="venue" onkeypress="return (event.charCode>64 && event.charCode<91) || (event.charCode>96 && event.charCode<123)"required><br><br>
  <span> <button id="yo"  value="submit" type="submit" onclick="submit">SUBMIT</button></span><br>
</form>
</div>
<div class="log1">
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
