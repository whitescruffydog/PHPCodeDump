
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Messenger of Death</title>
   	<link rel="stylesheet" type="text/css" href = "lab8menu.css" /> 	
	<link rel="shortcut icon" href="favicon.ico"/>
	<style>
	   body {background-image:url('lab8back.png'); background-repeat:repeat; color:white;}
	</style>

</head>

<body>
    <div class = "wrap">
	
    
	<?php
	  $title = "sign";
	  if(isset($_POST['firstName']))
      {
        $mybook = fopen("guests.txt", "at");
		$firstName = $_POST['firstName'];
		$lastName = $_POST["lastName"];
		$schoolAttend = $_POST["schoolAttend"];
		$dAddress = $_POST["dAddress"];
		$comments = $_POST["comments"];
		$pad = $_POST["pad"];
		fputs($mybook, "My name is $firstName". "$lastName" .".  I go to school at $schoolAttend" . "And I live at $dAddress" .".");
		if($pad == "Yes") { fputs($mybook, "I do play Puzzle and Dragons!")}
		else { fputs($mybook, "I do not play Puzzle and Dragons.")}
		fputs($mybook, "$comments");
		$title = "thanks";
      }
      
	  echo "<img class = \"lab8\" ; src = \"" . $title .".png\"; height = \"250px\"; alt = \"error\">";
		

	?>
    
	<form action = "lab8page.php"
        method = "post">
      <label>First Name</label>
      <input type = "text"
             name = "firstName"
             value = "Your First Name: " />
             <br/>
      <label>Last Name</label>
      <input type = "text"
             name = "lastName"
             value = "Your Last Name: " />
      <br/>
      <label>School Attending</label>
      <input type = "text"
             name = "schoolAttend"
             value = "School You Attend: " />
         <br/>    
	  <label>Dorm Address</label>
      <input type = "text"
             name = "dAddress"
			 rows = "4"
             value = "Dormatory Address: " />
         <br/>   
	  <p>  Do you play Puzzle & Dragons?  It's an app!  You should check it out if you haven't heard of it. </p>
	  <input type="radio" name="pad" value="yes" checked>Yes
       <br>
      <input type="radio" name="pad" value="no">No
      <textarea name = "comments"
                rows = "10"
                cols = "40">  Tell me about your favorite video games! </textarea>            

      <button type = "submit">
        Submit Information
      </button>
    </fieldset>
  </form><br/>


	
    </div>
	
	
</body>
</html>        