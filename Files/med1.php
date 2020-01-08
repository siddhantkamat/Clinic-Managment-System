<html>
<head>
  <link rel="stylesheet" href="patient.css">
  <script>
  function valid(e)
  {
    var x=e.which||e.keycode;
    if(x==8||x>=37 && x<=40||x==46||x>=48 && x<=57)
    {
      return true;
    }
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
            <button id="but" type="submit"><b>Submit</b></button></form>
            </div>
                <div class="new1">
                <form  action="med.php" target="_self" method="post" >
              Medicine Name:&nbsp;<input type="text"  name="name"size="50" onkeypress="return (event.charCode>64 && event.charCode<91) ||(event.charCode>96 && event.charCode<123)"required><br><br><br>
               &nbsp;&nbsp;Expiry Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date"  name="date" width="190px"required><br><br><br>
               &nbsp;&nbsp;Quantiy:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="qua"size="50" onkeypress="return valid(event)"required><br><br><br>
               &nbsp;&nbsp;Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pri" size="50" onkeypress="return valid(event)"required><br><br>
                             <button id="head2" type="submit" ><b>Save</b></button>
                </form>
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
