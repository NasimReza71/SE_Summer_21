<?php
session_start();


if(isset($_POST["Submit"]))
{
  if(empty($_POST["uname"]))
  {
     echo"username can not be empty";
  }
else{}
if(empty($_POST["password"]))

{
    echo"password ca not be empty";
}
else{
    $haseror=1;
}
if($haseror==1)
{   
    $_SESSION["username"]=$_POST["uname"];
    $_SESSION["password"]=$_POST["password"];

    header("location: ../view/page2.php");
}

}


?>