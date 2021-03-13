<!--***-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sinekaproject";
// get the post records
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['emailId'];
$contact=$_POST['Contact'];
$messagetext=$_POST['Message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//inserting data into table created from the form
$sql = "INSERT INTO projectDetails (firstname,lastname, email, contact,messagetext)
VALUES ('$firstname','$lastname', '$email','$contact','$messagetext')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
