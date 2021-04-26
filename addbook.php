<?php

include "config.php";


$BK = $_POST['Bkno'];
$TI = $_POST['Tit'];
$AT = $_POST['Aut'];
$DT = $_POST['EDY'];


$sql = "insert into book values(" . $BK . ",'" . $TI . "'," . $AT . ",'" . $DT . "')";




 






/*

$sql = "INSERT  INTO book (Title)  VALUES ('".$TI."')";
$sql = "INSERT  INTO book (Author) VALUES ('".$AT."')";
$sql = "INSERT  INTO book (EditonYear) VALUES ('".$DT."')";
*/



if ($conn->query($sql) === TRUE)
echo "1 Row Added";
else
 echo "0 Row Added";

$conn->close();

?>

















?>