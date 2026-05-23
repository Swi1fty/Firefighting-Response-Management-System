<?php
$con = mysqli_connect("localhost", "root", "", "firefighting_response_management_system_db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>