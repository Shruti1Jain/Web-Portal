<?php
$id = $_GET['id'];
$username= $_GET['username'];
$pswd = $_GET['password'];
$class= $_GET['class'];
$pjt= $_GET['project'];
$tech = $_GET['technologies'];
$mntr= $_GET['mentor'];
$conn=mysqli_connect("localhost","root","","project");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO details(id,username,password,class,project,technologies,mentor) values('$id','$username','$pswd','$class','$pjt','$tech','$mntr') ";
if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
} else {
    echo "Error adding record: " . mysqli_error($conn);
}

?>
