<?php
include 'config.php';

// Insert Data logic
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($con, "INSERT INTO users (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')");
    header("Location: index.php");
    exit();
}

// Update Data logic
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($con, "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id");
    header("Location: index.php");
    exit();
}

// Delete Data logic
if (isset($_GET['id']) && !isset($_POST['update'])) {
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM users WHERE id=$id");
    header("Location: index.php");
    exit();
}
?>