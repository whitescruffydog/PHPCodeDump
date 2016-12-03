<!DOCTYPE html>
<head>
<title> Lab something </title>
</head>
<body>
<?php

for($x = 0; $x < 100; $x ++)
{

  if($x % 5 == 0 && $x % 3 == 0) { echo("FIzzBuzz"); }
  else if ($x % 5 == 0) { echo("Buzz"); }
  else if ($x % 3 == 0) { echo("Fizz"); }
  else { echo("$x"); }

}
?>
</body>
</html>