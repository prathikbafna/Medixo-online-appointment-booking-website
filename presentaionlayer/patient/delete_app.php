<?php
	$name=$_REQUEST['name'];
	$pass=$_REQUEST['password'];
	$email=$_REQUEST['email'];
	$number=$_REQUEST['number'];
	$adress=$_REQUEST['adress'];
	$id=$_REQUEST['id'];
	$servername = "localhost";
	$username = "root";
	$password ="";
	$dbname = "wefast`";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (name, pass, email, adress, phno) 
		VALUES ('$name', '$pass', '$email', '$adress', '$number')";

$sql1 = "DELETE FROM bookapp WHERE $id = AppoID and $userid = userprofile"
print $sql;

if ($conn->query($sql1) === TRUE) {
    echo "Deleted successfully";
	header("bookapp.php");
	exit;	
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>