<!DOCTYPE html>
<html lang = "en">

<head>

<title> Tip Sample </title>

</head>

<body>

<h1> Tip of the Day </h1>

<?php
print "<h3> Here's your tip </h3>";
?>

<div style = "border-color:blue; border=style:groove; border-width=2px;">

<?php
readfile("tips.txt");
?>

</div>

</body>

</html>
