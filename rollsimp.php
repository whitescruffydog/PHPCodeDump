<!DOCTYPE html>

<html>
<head>

<!--  By Jessica Mesler
	MWF 12-12:50 

	I didn't feel an urgent need for functions...  -->

<title> The results are in! </title>

</head>
<body>

<?php

$numdice = $_GET["numdice"];
$guess = $_GET["guess"];
$sum = 0;
else { $prefix = "dice"; }
$suffix = ".png";

for ($x = 1; $x <= $numdice; $x ++)
{
	
	$roll = rand(1, 6);
	echo "<p> <img src = \".\\$prefix" . "$roll$suffix" . "\"> <p>";
        $sum = $sum + $roll;	
}


echo "<h1>You rolled $numdice dice. The sum is $sum.</h1>\n";

echo "<h1>Your guess was $guess.</h1>";
if ($guess == $sum){
  echo "<h1 style= \"color:blue;\"> Congratulations!  You were right! </h1>";
}
else{
  echo "<h1 style = \"color:red;\"> Oh no!  You were wrong! </h1>";
}

?>

<p> <a href = "./rollsimp.txt"> Click here for plain text. </a> <p>
<p> <a href = "./picker.php"> Click here for a more complicated version. </a> </p>

</body>

</html>