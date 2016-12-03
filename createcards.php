
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>My Store</title>
   	<link rel="stylesheet" type="text/css" href = "finalmenu.css" /> 	
	<link rel="shortcut icon" href="favicon.ico"/>
	<style>
	   body {background-image:url('finalback.png'); background-repeat:repeat; color:white;}
	</style>
	
	  <!--  Jessica Mesler    MWF 12:00 - 1:00 -->

</head>

</script>
<body>
    <div class = "wrap">
	
    <a href = "index.html" > <a href = "index.html" > <a href = "index.html" > <img class = "final" ; src = "work.png"; height = "250px"; alt = "My Store";/> </a> </a> </a>
    <ul style: "position:relative"  class = "finalmenu">
        <li class = "finalmenu"><a href="content.php">Enter Info</a></li>
        <li class = "finalmenu"><a href="findcontent.html">Search Stock</a></li>
        <li class = "finalmenu"><a href="createcards.php">Browse</a></li>
        <li class = "finalmenu"><a href="about.html">About Us</a></li>
    </ul>
	
	<?php
	
	  $db_hostname = 'localhost';
	  $db_database = 'jlm348x1_final';
	  $db_username = 'jlm348x1_enduser';
	  $db_password = ',3TO}JKUUc2B';

	  $db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database) or die("Unable to connect to MySql: " . mysqli_error());
	  $qprefix = "SELECT * FROM `itemdata` ";
	  $myquery = "";
	  
	  if (isset($_POST['Type'])){
		  if (strlen($myquery) != 0){
			  $myquery = $myquery . " AND ";
		  }
		  $myquery = $myquery . "`Type` = '" . $_POST['Type'] . "'";
	  }
	  if (isset($_POST['Gender'])){
		  if (strlen($myquery) != 0){
			  $myquery = $myquery . " AND ";
		  }
		  $myquery = $myquery . "`Gender` = '" . $_POST['Gender'] . "'";
	  }
	  if (isset($_POST['Size'])){
		  if (strlen($myquery) != 0){
			  $myquery = $myquery . " AND ";
		  }
		  $myquery = $myquery . "`Size` = '" . $_POST['Size'] . "'";
	  }
	  if (isset($_POST['Price'])){
		  if (strlen($myquery) != 0){
			  $myquery = $myquery . " AND ";
		  }
		  if ($_POST['Price'] == "E"){
		      $myquery = $myquery . "`Price` = '" . $_POST['PriceNum'] . "'";
		  }
		  if ($_POST['Price'] == "GT"){
		      $myquery = $myquery . "`Price` >= '" . $_POST['PriceNum'] . "'";
		  }
		  		  if ($_POST['Price'] == "LT"){
		      $myquery = $myquery . "`Price` <= '" . $_POST['PriceNum'] . "'";
		  }
	  }	  
	
	  if (strlen($myquery) != 0) { $myquery = "WHERE " . $myquery; }
	
	  $fullq = $qprefix . $myquery ;

      $result = mysqli_query($db_server, $fullq) ;
	  echo "<table> <tr>"  ;
	  
	  $mycount = 1;

      while ($row = mysqli_fetch_array($result)) {
		 if(($mycount - 1) % 4 == 0) { echo "<TR> "; } 
		  
		 echo "<td>" ;
		 echo "<div class = \"showtime\"> \n" ;
         echo "<p> <img class = \"showtime\" src = \"photos/" . $row{'ImgSource'} . "\" alt = \"\" ></p> \n" ;
         echo "<p> " . $row{'Name'} . " </p> <p>  " . $row{'Description'} . "</p> \n";
		 echo "<p> " . $row{'Type'} . " -- " . $row{'Size'} . " -- " . $row{'Gender'} . "</p>\n" ;
		 echo "<p> " . $row{'Price'} . "</p>" ;
		 echo "</div>\n" ;
		 echo "</td>\n" ;
		 
		 if($mycount % 4 == 0) { echo "</TR>\n"; }
		 $mycount ++;
      }
	  if($mycount % 4 != 0 ) {echo "</TR>\n"; }
	  echo "</tr> </table>";
	  
	  mysqli_close($db_server);
	?>
	
    </div>
	
	
</body>
</html>        