<?php

//include "dbConn.php"; // Using database connection file here
$conn = new mysqli("localhost","root","","registration");
$id = $_POST['id']; // get id through query string
$userid = $_POST['uid'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "hello"

/*$del = mysqli_query($db,"delete from bookapp where AppoID = '$id' AND patientID=('$userid') "; // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:all_records.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}*/
$sql1 = "DELETE FROM bookapp WHERE '$id' = AppoID and patientID = '$userid' "
print $sql1;

if ($conn->query($sql1) === TRUE) {
    echo "Deleted successfully";
	header("view.php");
	exit;	
} 

else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();

?>