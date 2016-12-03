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
$maxColumn = $_GET["maxColumn"];
$sum = 0;
$isNeg = False;
if ($numdice < 0){	
	$prefix = "negdice"; 
	$isNeg = True; 
	$numdice = $numdice * -1; 
}
else { $prefix = "dice"; }
$suffix = ".png";
$partOf = $numdice - floor($numdice); 
$rolls = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0);

echo "<TABLE>\n";
for ($x = 1; $x <= $numdice; $x ++)
{
	if(($x - 1) % $maxColumn == 0) { echo "<TR> "; }
	
	$roll = rand(1, 6);
	$rolls[$roll] ++;
	echo "<TD> <img src = \".\\$prefix" . "$roll$suffix" . "\"> </TD>";
        $sum = $sum + $roll;	
	if($x == floor($numdice) && $partOf != 0){
		$roll = rand(1, 6);
		$rolls[$roll] ++;
		$percent = floor(237 * $partOf);
		if ($x % $maxColumn == 0) { echo "</TR> \n<TR>"; }
		echo "<TD> <div style = \"overflow: hidden; width: $percent" . "px;\"> <img src = \".\\$prefix" . "$roll$suffix" . "\"> </div> </TD>";
		$sum = $sum + $roll * $partOf;
	}
	if($x % $maxColumn == 0 || $x == floor($numdice)) { echo "</TR>\n"; }
}

echo "</TABLE>\n";

if ($isNeg) { $sum *= -1; echo "<p>Get it?  Negative? Negative image? AHAHAHA</p>";}
if ($partOf != 0) { echo "<p>Where do you even get part of a die?  What would you do with it?  The world may never know.</p>";}
echo "<h1>You rolled $numdice dice. The sum is $sum.</h1>\n";

foreach ($rolls as $value => $times){
	echo "<p>$value was rolled $times times.</p>\n";
}


if ($guess != null) {
  echo "<h1>Your guess was $guess.</h1>";
  if ($guess == $sum){
    echo "<h1 style= \"color:blue;\"> Congratulations!  You were right! </h1>";
  }
  else{
    echo "<h1 style = \"color:red;\"> Oh no!  You were wrong! </h1>";
  }

}

?>

<p> <a href = "./roll.txt"> Click here for plain text. </a> <p>
<p> I went slightly overboard for this assignment.  <a href = "./picksimp.php"> Click here for a version that strictly follows the guidelines. </a> </p>

</body>

</html>