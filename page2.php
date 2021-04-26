<?php

$username = $_POST['UName'];
$radioo = $_POST['marital'];
$hr = $_POST['Reading'];
$hc = $_POST['cGame'];
$ht = $_POST['Trv'];
$se = $_POST['selectt'];
$ds = $_POST["Describe"];


echo "Client Name : ".$username;
echo "<br>";
echo "Marital Status :".$radioo;

echo "<br><br>";


echo "<b>  The Client Likes To  </b>";

echo "<br>";


if (isset ($hr))
echo $hr;

echo "<br>";


if (isset ($hc))
echo  $hc;

echo "<br>";


if(isset ($ht))
echo $ht;

echo "<br>";


echo "<b> The Client Jobs Is </b>";
echo "<br>";


if($se == 1){
echo "Web Designer";
}
if($se == 2){
echo "Web Developer";
}
if ($se == 3){

    echo "Web Manager ";
}




echo "<br><br>";


echo $ds;



?>




