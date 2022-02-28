<?php
include "../Control/page2check.php";

?>

<!DOCTYPE html>
<html>
<head><title>Registration Form</title>
</head>
<body>
    <h3>Registration Form</h3><br><hr>
<form action="" method="post" enctype="multipart/form-data">
<table>

Designation:</td>
<input type="radio" name="Desig">Junior Programmer
<input type="radio" name="Desig">Senior Programmer
<input type="radio" name="Desig">Project Lead 
<br>
Preferred language:
 <input type="radio"  name="language" value="JAVA">JAVA
<input type="radio"  name="language" value="PHP">PHP
<input type="radio"  name="language" value="C++">C++
<br>

<br>
Select Any Box:
<input type="checkbox" name="c1" value="check1"> Box1
<input type="checkbox" name="c2" value="check1"> Box2
<br>
Please choose a file
<input type="file" id="myFile" name="filename">
  
<br>
<input type="submit" name="submit" value="Submit">

<form>
</body>
</html>
© 2022 GitHub, Inc.
