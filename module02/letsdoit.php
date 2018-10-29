<!DOCTYPE html>
<html>
<head>
<title>Re Form</title>
<!-- Bootstrap Reference Links  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- End of Bootstrap References -->

<script>
.wrapper {
	 overflow: hidden;
}
/*PHONE CSS */
@media screen and (min-width: 10px) and (max-width: 550px), (min-device-width: 10px) and (max-device-width: 550px) {

  	#Div1, #Div2, #Div3, #tblGrid {
		border:2px solid black;
		width:100%;
        float:left;
		font-size: 2em;
	}

		#first_name, #last_name, #telephone {
		width: 100%;
		border: 2px solid black;
	}

	#submit1 {
    background-color: #ffff80;
	}
}

/*TABLET CSS */
@media screen and (min-width: 551px) and (max-width: 900px), (min-device-width: 551px) and (max-device-width: 900px) {

  	#Div1, #Div2, #Div3 {
		border:2px solid black;
		width:100%;
        float:left;
		font-size: 4em;
	}

	#first_name, #last_name, #telephone {
		width: 100%;
		border: 2px solid black;
	}

    #submit1 {
    background-color: #ccb3ff;
	}
}

/*FULL SCREEN CSS */
@media screen and (min-width: 901px), (min-device-width: 901px){

body { background-color: #fff; border-top: solid 10px #000;
         color: #333; font-size: .85em; margin: 20; padding: 20;
         font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
     }
     h1, h2, h3,{ color: #000; margin-bottom: 0; padding-bottom: 0; }
     h1 { font-size: 2em; }
     h2 { font-size: 1.75em; }
     h3 { font-size: 1.2em; }
     table { margin-top: 0.75em; boarder: 2px; }
     th { font-size: 1.2em; text-align: left; border: none; padding-left: 0; }
     td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }

  	#Div2, #Div3 {
		border:2px solid black;
		float:left;
		font-size: 4em;
	}

	#Div1 {
		border:2px solid black;
		float:left;
		font-size: 4em;
		width:100%;
	}
}


</script>
</head>
<body>
<div id="DivHeader" class="wrapper">
<div id="Div1" class="col-sm-4">
<h1>Rasmussen Registration Form</h1>
<p>Fill in your name and telephone, then click <strong>Submit</strong> to register.</p>
 <form method="post" action="index.php" enctype="multipart/form-data" >
       FIRST_NAME  <input type="text" name="first_name" id="first_name"/></br>
       LAST_NAME <input type="text" name="last_name" id="last_name"/></br>
	   TELEPHONE <input type="text" name="telephone" id="telephone"/></br>
       <input type="submit" id="submit1" value="Submit" />
 </form>
<?php
// DB connection info
// Within the PHP tags, add PHP code for connecting to the database.
 $host = "alinefirstapp.centralus.cloudapp.azure.com";
 $user = "John";
 $pwd = "&sasou%02#";
 $db = "jlmaxwtscustomer";

// Connect to database.
 try {
     $conn = new PDO( "mysqli:host=$host;dbname=$db", $user, $pwd);
      }
 catch(Exception $e){
     die(var_dump($e));
 }

//Code for inserting registration information into the tblCSA3315C table in the database
  if(!empty($_POST)) {
 try {
     //retrieve data sent from the web page form fields and place into php variables
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $telephone = $_POST['telephone'];
		 $telephone = $_POST['country'];
		 $telephone = $_POST['subject'];

     // Insert data into the tblCDA3315C table
     $sql_insert = "INSERT INTO contactform(FIRST_NAME, LAST_NAME, TELEPHONE, COUNTRY, SUBJECT)
                    VALUES (?,?,?,?,?)";
     $stmt = $conn->prepare($sql_insert);
     $stmt->bindValue(1, $first_name);
     $stmt->bindValue(2, $last_name);
     $stmt->bindValue(3, $telephone);
		 $stmt->bindValue(4, $country);
		 $stmt->bindValue(5, $subject);
     $stmt->execute();
 }
 catch(Exception $e) {
     die(var_dump($e));
 }
 echo "<h3>You're Registered!</h3>";
 }

//Finally, following the code above, add code for retrieving data from the database.
 $sql_select ="SELECT * FROM contactform";
 $stmt = $conn->query($sql_select);
 $registrants = $stmt->fetchAll();
 if(count($registrants) > 0) {
     echo "<h2>contact list:</h2>";
     echo "<table boarder=2>";
     echo "<tr><th style='width:300px'>FIRST_NAME</th>";
     echo "<th style='width:300px'>LAST_NAME</th>";
		 echo "<th style='width:300px'>TELEPHONE</th>";
		 echo "<th style='width:300px'>COUNTRY</th>";
     echo "<th>SUBJECT</th></tr>";
     foreach($registrants as $registrant) {
         echo "<tr><td>".$registrant['FIRST_NAME']."</td>";
         echo "<td>".$registrant['LAST_NAME']."</td>";
				 echo "<td>".$registrant['TELEPHONE']."</td>";
				 echo "<td>".$registrant['COUNTRY']."</td>";
         echo "<td>".$registrant['SUBJECT']."</td></tr>";
     }
      echo "</table>";
 } else {
     echo "<h3>No one is currently registered.</h3>";
 }
 ?>
</div>
</div>
</body>
</html>
