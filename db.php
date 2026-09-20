<?php

$conn = mysqli_connect("localhost", "root", "", "appointment_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>