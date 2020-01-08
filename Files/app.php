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

          <li class="active"><a href="contact.php">contact</a></li>
        </ul>
      </div>
      </div>
      <center>
<div class="dash" ><br>
      <h3>&nbsp;&nbsp;&nbsp;Welcome<br><br><?php
        session_start();
        $sql="select name from doc where mail='".$_SESSION['super']."';";
        $name=mysqli_query($conn,$sql);
        $name1=mysqli_fetch_assoc($name);
        echo $name1["name"];
         ?></h3> <br>
         <br>
         <button type="submit" onclick="window.location.href='app.php';" class="none" target="_self">Manage Appointments</button><br><br><br>
            <button type="submit" onclick="window.location.href='pro.php';" target="_self" class="none">Profile</button><br>
<div class="app">
  <?php
  $sql="select *from app";
  $query=mysqli_query($conn,$sql);
   ?>
    <style>
    table,th,td{
      border: 1px solid black;
    }
    </style>
  </head>
  <body>

  <table width="90%" >
  <tr>
  <th>Patient name</th>
  <th>Date of Appointment</th>
  <th>Time</th>
  <th>Loaction</th>
  <th>Manage</th>
</tr>
  <?php
  while ($row=mysqli_fetch_array($query)) {
    echo "<tr><td>".$row['name']."</td><td>".$row['date']."</td><td>".$row['time']."</td><td>".$row['location']."</td><td>
    <a href='link4.htm'>manage</a>
    </td></tr>";
  }
   ?>

  </table>
</div>
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
