
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>My Store</title>
   	<link rel="stylesheet" type="text/css" href = "..\finalmenu.css" /> 	
	<link rel="shortcut icon" href="favicon.ico"/>
	<style>
	   body {background-image:url('../finalback.png'); background-repeat:repeat; color:white;}
	</style>

</head>

</script>
<body>
    <div class = "wrap">
	
    <a href = "..\index.html"> <img class = "final" ; src = "..\work.png"; height = "250px"; alt = "My Store";/> </a>
    <ul style: "position:relative"  class = "finalmenu">
        <li class = "finalmenu"><a href="../content.php">Enter Info</a></li>
        <li class = "finalmenu"><a href="../findcontent.html">Search Stock</a></li>
        <li class = "finalmenu"><a href="../createcards.php">Browse</a></li>
        <li class = "finalmenu"><a href="../about.html">About Us</a></li>
    </ul>
	
	<p>  Logging into the database, please wait...  </p>
	
	<?php
	   if ( isset($_POST['first_name']) )
       {
		$db_hostname = 'localhost';
		$db_database = 'jlm348x1_final';
		$db_username = 'jlm348x1_enduser';
		$db_password = ',3TO}JKUUc2B';

		$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database) or die("Unable to connect to MySql: " . mysqli_error());
        echo "<p> Login successful, entering data... </p> ";

		$Fname       = $_POST['first_name'];
		$Lname       = $_POST['last_name'];
		$add1       = $_POST['add1'];	
		$add2       = $_POST['add2'];
		$city       = $_POST['city'];
		$state       = $_POST['state'];
		$zip = $_POST['zip'];
		$country       = $_POST['country'];
		$phone       = $_POST['phone'];
		$fburl      = $_POST['fburl'];
		$cell       = $_POST['cell'];
		$username       = $_POST['username'];
		$email       = $_POST['email'];
		$password    = $_POST['password']; 

		$result = mysqli_query($db_server, "SELECT firstName,lastName, add1, add2, city, state, zip, country, email, phone, fbookurl, cell, username, password FROM customers;");
  
        $count = 0;
        while ($row = mysqli_fetch_array($result)) {
           $count = $count + 1;
       	}
		$awisql = "INSERT INTO jlm348x1_final.customers VALUES ('$count', '$Fname', '$Lname', '$add1', '$add2', '$city','$state','$zip', '$country','$email','$phone','$fburl','$cell','$username', '$password');";

	    $result = mysqli_query($db_server, $awisql); 

		if($result){
			
			echo "<p>  Your data has been successfully added to our database!  Thank you! </p>";
		}		
		
		echo "<p>  Signing out of the database... </p>" ;
		
		mysqli_close($db_server);
		
		echo "<p>  Signed out successfully.  </p>" ;
	   }
 
	?>
	
    </div>
	
	
</body>
</html>        