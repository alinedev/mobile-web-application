
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Contact us</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="webtech.css">
  <style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}



/* Style the header */
header {
    background-color: #666;
    padding: 40px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Style the navigation menu */
.navbar img.logo {
  font-size: 20px;
  font-weight: bold;
  float: left;
  background-color: #666;
}
.navbar {
    overflow: hidden;
    background-color: none;
}

.navbar a {
    float: right;
    font-size: 20px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.subnav {
    float: left;
    overflow: hidden;
}

.subnav .subnavbtn {
    font-size: 20px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
    background-color: #00cccc;
}

.subnav-content {
    display: none;
    position: absolute;
    left: 0;
    background-color: #7a7a52;
    width: 100%;
    z-index: 1;
}

.subnav-content a {
    float: left;
    color: white;
    text-decoration: none;
}

.subnav-content a:hover {
    background-color: #eee;
    color: black;
}

.subnav:hover .subnav-content {
    display: block;
  }
    /* Add a color to the active/current link */


  .content .div1 {
    position: absolute;
    top: 30%;
    align-self: top;
    right: 25%;
    width: 300px;
    height: 200px;
    padding: 50px;
    border: 3px solid Gray;
      }
  .content {
    max-width: 1000px;
    margin: auto;
    background: white;
    padding: 10px;
    background-color: LightGray;

}
input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 40%;

    }
h2{
  border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 40%;
   color: darkblue;
   }

     h3{
      text-align: right;
      color: #cc6600;
      font-size: 16px;
      text-decoration: white;
     }


  .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color:#393939 ;
      color: white;
      text-align: center;

             }

</style>
</head>
  <header>

      <h3> Phone Number:239-333-3333</h3>

         <div class="navbar">
           <img src="rightlogo.png" class="logo" alt="JLmax Web_tech Solutions">

  <a href="#home">Contact</a>
  <div class="subnav">

    <button class="subnavbtn">About Us<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Company</a>
      <a href="#team">Team</a>
      <a href="#careers">Careers</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">Web Development</a>
      <a href="#deliver">Web Design</a>
      <a href="#package">Cloud Services</a>
      <a href="#package">Site repair and maintenance</a>
      <a href="#package">Custom site design</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <a href="#contact">Home</a>
</div>
  </header>
          <div style="background-color:Dark grey">
          </div>


<body>
 <div class="content">
   <div class="div1"> JLmax Web_tech solution
                     Phone: 233-333-3333<br>

                     Email: jlamxwts@gmail.com
   </div>

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
       $output = 'table data <BR>'
     $row = $result->fetch_assoc();

     $FIRST_NAME ="<tr><td>".$row['FIRST_NAME']."</td>";
     $LAST_NAME = "<td>".$row['LAST_NAME']."</td>";
     $TELEPHONE = "<td>".$row['TELEPHONE']."</td>";
     $COUNTY = "<td>".$row['COUNTRY']."</td>";
     $SUBJECT = "<td>".$row['SUBJECT']."</td></tr>";
          echo $FIRST_NAME;
          echo $LAST_NAME;
          echo $TELEPHONE;
          echo $COUNTRY;
          echo $SUBJECT;

   }

     $conn->CLOSE();
    }
   ?>

   </div>


  <div class="footer">
          <p> 2018 Copyright &copy; www.jlmaxwts.com </p>
  </div>




  </body>
  </html>
