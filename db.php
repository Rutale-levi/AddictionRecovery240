<?php
$conn = new mysqli("localhost", "root", "", "recovery_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Data base connected successfuly";
}
?>