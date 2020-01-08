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
      <h3>&nbsp;&nbsp;&nbsp;Welcome<br><br>&nbsp;&nbsp;<?php
        session_start();
        echo $_SESSION['pha'];
         ?></h3> <br>
         <br><br>
         <button type="submit" onclick="window.location.href='bill1.php';" class="none" target="_self">Upload Bills</button><br><br><br>
            <button type="submit" onclick="window.location.href='med1.php';" target="_self" class="none">New Medicine</button><br>
              <div class="sea">
            <form action="sea1.php" target="_self" method="post">
              <input type="text" placeholder="search medicine" name="name" size="80px">&nbsp;&nbsp;
              <button id="but" type="submit"><b>Submit</b></button>
              </div>
            <div class="log6">
          <a href="pha.htm" >Sign out</a></div>
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
