<html>
<body>
<?php
header('Access-Control-Allow-Origin:*');
$servername = "localhost:3306";
$username = "aline";
$password = "dbconnect01#";
$dbname = "jlmaxwtscustomer";
   $conn = new mysqli($servername, $username, $password, $dbname);
//Finally, following the code above, add code for retrieving data from the database.
if ($conn->connect_error)
echo "ERROR: UNEXPECTED CONNECTION ERROR";
else {
  // code..
  $result = $conn->query("SELECT * from contactform");
  if(($result != 0) && ($result->num_rows > 0))
  {

  $row = $result->fetch_assoc();

  $FIRST_NAME = $row['FIRST_NAME'];
  $LAST_NAME = $row['LAST_NAME'];
  $TELEPHONE = $row['TELEPHONE'];
  $COUNTY = $row['COUNTRY'];
  $SUBJECT = $row['SUBJECT'];
  echo $FIRST_NAME;
  echo $LAST_NAME;
  echo $TELEPHONE;
  echo $COUNTRY;
  echo $SUBJECT;
}
  $conn->CLOSE();
 }
?>
</body>
</html>
