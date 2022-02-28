<?php
session_start();
echo $_SESSION["username"];
echo $_SESSION["password"];


if(isset($_POST["Submit"]))
{
  
if(isset($_REQUEST["Desig"]))
{   

    echo"You have selected".$_POST["Desig"];
}
else
{
    echo "you haven't selected any radio";
}

echo "<br>";

if(isset($_POST["language"]))
{
    echo"You have selected".$_POST["language"];
}
else
{
    echo "you haven't selected any radio";
}



$pass=$_POST["password"];
if(strlen($pass)>8)
{
    echo "Please enter a valid password";
}
else
{
    echo "Your password is valid";
}


echo "<br>";

if(isset($_POST["c1"]) || isset($_POST["c2"])  )
{
    if(isset($_POST["c1"] ) )

    {
    echo "You have picked one of the ".$_POST["c1"];
    }


echo"<br>";

  if(isset($_POST["c2"]))
   {
     echo"You have picked one of the".$_POST["c2"];
   }
}
else
 {
    echo"You have not picked any Box";
 }
 
 if($haseror==1)
 {   
     
 
     header("location: ../view/page3.php");
 }



}
?>

