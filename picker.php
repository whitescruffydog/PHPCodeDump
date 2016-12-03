<!DOCTYPE html>

<html>

<!--  By Jessica Mesler
	MWF 12-12:50 -->

<head>



<title> Take your guess </title>



</head>



<body>


<form id = "aform" action = "roll.php">

<label for "numdice"> Choose the number of dice to roll: </label>

<input type = "text" name = "numdice"> </input>

<br />

<label for "guess"> Enter your guess for the sum (leave blank for no guess): </label>

<input type = "text" name = "guess"> </input>

<br />

<label for "maxColumn"> Choose the number of columns: </label>

<select name = "maxColumn">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

<br />

<input type = "submit" value = "Roll 'em!"> </input>



</form>



</body>















</html>