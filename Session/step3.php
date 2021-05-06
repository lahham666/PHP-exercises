<?php

session_start();

$_SESSION['PS']= $_POST['Upass'];
$_SESSION['AD']= $_POST ['Uadd'];



echo "<h1>The Stored Data Are  </h1>";

echo "<br>";


echo "First Name: ".$_SESSION['Fn']."<br>";
echo "Last Name: ".$_SESSION['Ln']."<br>";
echo "Email: ".$_SESSION['Em']."<br>";
echo "Password: ".$_SESSION['PS']."<br>";
echo "Address: ".$_SESSION['AD']."<br>";



echo "<a href=clear.php>Click to Clear Session</a>";





?>