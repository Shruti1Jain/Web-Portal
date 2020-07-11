<?php

$id = $_REQUEST['identity'];
$usrnm = $_REQUEST['usrname'];

// Create connection
$conn=mysqli_connect("localhost","root","","project");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = " DELETE FROM details WHERE id = '$id' and username = '$usrnm' ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);




?>
