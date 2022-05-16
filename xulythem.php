<?php
require_once('config/db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$feedback = $_POST['feedback'];



$sql = "INSERT INTO `feedback` (id, `name`, `email`, `sdt`, `feedback`, `date`, `status`) 
    VALUES (null,'$name', '$email', '$sdt', '$feedback', current_timestamp(), '0')";
if (mysqli_query($connect, $sql)) {
    echo "Sent feedback succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}