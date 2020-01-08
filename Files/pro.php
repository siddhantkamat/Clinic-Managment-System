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
<div class="app1" >
  <?php
    if(strcmp($_SESSION['super'],'amittyagi234@gmail.com')==0)
    echo "<div id='we'>
  <b>Designation:</b> Chief - Internal Medicine<br>
  Specialty: Internal Medicine <br>Location: Gurgaon<br> Nationality: Indian<br> Languages spoken: Hindi,English<br> Gender: Male<br> <hr>

  <b>Qualifications</b><br>

  M.B.B.S. - Maulana Azad Medical College, Delhi 1987<br>
  M.D.(Medicine) - Delhi University 1993<br>
  Fellow of the American College of Physicians 2013<br><hr>

  <b>Certifications and training</b><br>

  Hospital Management from IIM Ahmedabad   2012<br>

  Enhancement of peak performance at work, Harvard Medical School, Boston 2012<br>

  Comprehensive board review in Internal Medicine, Harvard Medical School, Boston 2010<br>

  HIV Training from San Francisco General Hospital, USA   2006<br>

  Preceptorship from Stanford Medical School, California, USA2005<br>

  Advanced Cardiac Life Support Program from American Heart Association 2007       <br>

  Echocardiography & Color Doppler Training from Indian College of Physicians, Nanavati Hospital, Mumbai, India   1998<br></div>";
  ?>
  <?php
  if (strcmp($_SESSION['super'],'manojtiwari234@gmail.com')==0) {
    echo "<b>Chief Medical Officer</b>
  MD, PhD
  China - Shenzhen<br>
  Raffles Medical Shenzhen<br>
  Family Medicine<br>
  Clinical Interest<br>
  Emergency Medicine<br>
  Sports Medicine<br>
  Addictions<br>
  Pneumology<br>
  Paediatrics<br><br>
  <b>Profile</b><br>
  <p>Dr Gaudeul is a French trained General Practice Family Doctor. He graduated in 1991 from Toulouse Rangueil University of Medicine France and has additional qualifications in ultrasound, additions, emergency medicine, traumatology and pneumology.

  After his military service in the air force, he has worked for more than 15 years in the French countryside and mountainous regions including in some remote places and ski resorts.

  Dr Gaudeul’s has extensive medical experience across general medicine, emergency medicine, radiology, trauma, pneumology, addictions and paediatrics.

  Dr Gaudeul joined our Shenzhen clinic in 2014 and provides quality, compassionate care to all his patients.

  He is fluent in French and English and has professional proficiency in Spanish.</p>";
  }
  ?>
</div>
            <div class="log3">
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
