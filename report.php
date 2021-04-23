<?php

$Tn = $_POST['tknum'];
$CNA = $_POST['CN'];
$AGA = $_POST['Age'];
$DS = $_POST['DS'];

//////////

$agePrice = 0;
if ($AGA < 6)
    $agePrice = 0;
else if ($AGA>= 6 && $cAge<= 25)
    $agePrice = 10;
else
    $agePrice = 20;

///////////

$desPrice = 0;

if($DS == "Beirut"){

$desPrice  = 200;

}
else if ($DS == "Cairo" )
{
$desPrice = 230;

}

else {

    $desPrice = 250;
}

//////


$Bill_amount = $desPrice + $agePrice ;

$tax = $Bill_amount * 0.16;

$totalPrice = $Bill_amount + $tax;


////////

echo "<h1> Bill Information</h1> <br>";
echo "Ticket ID: ". $Tn . "<br>";
echo "Customer Name: ". $CNA . "<br>";
echo "Age: ". $AGA. "<br>";
echo "Total price: ". $Bill_amount . "<br>";
echo "Tax: ". $tax . "<br>";
echo "Net price: ". $totalPrice . "<br>";





























?>