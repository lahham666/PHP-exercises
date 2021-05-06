<?php

session_start();

$_SESSION['Fn'] = $_POST['Fname'];
$_SESSION['Ln'] = $_POST['Lname'];
$_SESSION['Em'] = $_POST['EMail'];


?>


<h1>Sign Up Step 2  </h1>
<br>
<form   method="post"  action="step3.php">

<label>Password :</label>
<input type="text" name="Upass" >

<br>

<label>Address :</label>
<br>
<textarea  rows=10  cols=35     name="Uadd"></textarea>
<br>

<input type="submit" value="Review">





</form>



