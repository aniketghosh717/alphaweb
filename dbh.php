<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project2";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Not Connected";
} 