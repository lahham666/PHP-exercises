<!DOCTYPE html>
<html>
<head>

<title> Welcome </title>
</head>
<body>


<form method="POST"   action="page2.php">
<label> USER NAME </label>
<input type="text"  name="UName">
<br>

<label> Marital State : </label> <br>

Single :
<input type="radio" name="marital" value="Single" > <br>
Married :
<input type="radio" name="marital" value="Married" > <br>
Widow :
<input type="radio" name="marital" value="Widow" > <br>


<label> Hobbies </label> <br>
<input type="checkbox"  value="Reading Books" name="Reading" > Reading Books <br>
<input type="checkbox"  value="Computer Games" name="cGame" > Computer Game <br>
<input type="checkbox"  value="Travel"   name="Trv"  > Traveling Around The World <br>

<label>Job Title :  </label> <br>
<select name="selectt">
<option value = 1 >Web Designer </option>
<option  value = 2  > Web Developer </option>
<option  value = 3 >Web Manager </option>
</select>

<br>
<br>

<b> Describe Your Self Withing 400 words : </b>
<br>

<textarea cols=80 rows=15 name="Describe" >
</textarea>
<br>
<input type="submit" value="Go" >
 







</form>


</body>








</html>