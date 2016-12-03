<!DOCTYPE html>
<head>
<title> Array Months </title>
</head>
<body>
<?php

$myray = array(
    "January"  => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);
echo("<TABLE>\n");
ksort($myray);
foreach ($myray as $month => $number){
  echo("<TR> <TD> $month </TD> <TD> $number </TD> </TR>\n");
}
echo("</TABLE>");

?>

<a href = "midtermcode.txt"> Click here to see the text version. </a>

</body>
</html>