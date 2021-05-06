<?php
session_start();

session_unset();
//session_destroy();


echo "<h1> Entered Data</h1>";

echo "First Name: ".$_SESSION['Fn']."<br>";
echo "Last Name: ".$_SESSION['Ln']."<br>";
echo "Email: ".$_SESSION['Em']."<br>";
echo "Password: ".$_SESSION['PS']."<br>";
echo "Address: ".$_SESSION['AD']."<br>";




?>