<?php
//Allow Headers
header('Access-Control-Allow-Origin: *');
//$servername = "localhost:3306";
$servername = "alinefirstapp.centralus.cloudapp.azure.com:3306";
$username = "aline";
$password = "dbconnect01#";
$dbname = "jlmaxwtscustomer";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
    echo "Error: Unexpected connection error. Please retry the operation.";
else
 {
    $result = $conn->query("SELECT * FROM contactform");
    if (($result != 0) && ($result->num_rows > 0))
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
    $conn->close();
}
?>
