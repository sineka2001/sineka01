<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="profileform.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
      integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
      integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
      crossorigin="anonymous"
    ></script>
    <title>Profile Form</title>
    <style>
      body{
        background-color: rgb(236, 224, 173);
      }
      .text-center{
        color:darkolivegreen;
      }
    </style>
  </head>
<body>

<div class="container formstyle">
      <div class="text-center"><h3>Enter Your Details Below</h3></div>
      <hr />
      <form action="insertionpart.php" method="post">
        <div class="mb-3">
          <label for="firstName" class="form-label">First Name:</label>
          <input
            type="text"
            class="form-control"
            name="firstName"
            id="firstName"
          />
        </div>
        <div class="mb-3">
          <label for="lastName" class="form-label">Last Name:</label>
          <input
            type="text"
            class="form-control"
            name="lastName"
            id="lastName"
          />
        </div>
        <div class="mb-3">
          <label for="emailId" class="form-label">Email address</label>
          <input
            type="email"
            class="form-control"
            name="emailId"
            id="emailId"
          />
        </div>
        <div class="mb-3">
          <label for="Contact" class="form-label">Contact:</label>
          <input
            type="number"
            name="Contact"
            class="form-control"
            id="Contact"
          />
        </div>
        <div class="mb-3">
          <label for="Message" class="form-label">Message:</label>
          <textarea
            name="Message"
            class="form-control"
            rows="10"
            cols="30"
            id="Message"
          ></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      
    <a for="Contact" href="wherepart2.html">Click the butten to get the details</a>
    </div>

    









    
<?php
$servername="localhost";
$username="root";
$password="";
//Create connection
$conn=new mysqli($servername,$username,$password);
//Check connection
if($conn->connect_error){
    die("unable to connect" . $conn->connect_error);
}
echo "connected successfully!!!";
// Create database
$sql = "CREATE DATABASE Sinekaproject";
if ($conn->query($sql) === TRUE) {//passing the sql here
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();//closing connec
?>


 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sinekaproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE projectDetails(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
contact VARCHAR(10) NOT NULL,
messagetext VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table projectDetails created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>






</body>
</html>