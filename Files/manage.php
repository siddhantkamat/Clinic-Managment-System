<html>
<head>
  <title>Profile Manager</title>
  <link rel="stylesheet" href="patient.css">
  <script>
  function valid(e){
  var x=e.which||e.keycode;
  if(x==8||x>=48 && x<=57||x==46||x>=35 && x<=40)
  return true;
  else {
    return false;
  }
}
  </script>
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
  <div class="Profile">
    <h2>Profile Manager</h2>
      <form method="post" name="form1" action="manage1.php" target="_self">
        <div>
          <span><label> FULL NAME</label></span>&nbsp;&nbsp;
          <span><input type="text" value="" name="name" size="50" onkeypress="return (event.charCode>64 && event.charCode<91) ||(event.charCode>96 && event.charCode<123)"required></span>
        </div><br><br>
        <div>
          <span><label>ADDRESS</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <span><input type="text" value="" name="add" size="50" required></span>
        </div><br><br>
        <div>
          <span><label>MOBILE.NO</label></span>&nbsp;&nbsp;
          <span><input type="text" value="" name="no" maxlength="10" size="50" onkeypress="return valid(event)"required></span>
        </div><br><br>
        <div>
          <span><label>AADHAR ID</label></span>&nbsp;&nbsp;&nbsp;
          <span><input type="text" value="" name="aadhar" maxlength="12" size="50" onkeypress="return valid(event)" required></span>
        </div><br><br>
        <div>
          <span><label>PAN NUMBER</label></span>&nbsp;
          <span><input type="text" value="" name="pan" maxlength="10" size="50" required></span>
        </div><br><br>
       <div>
          <span><input type="submit" value="Submit" onclick="submit" size="40"></span>
      </div><br><br>
      </form>
      <div class="log2">


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
