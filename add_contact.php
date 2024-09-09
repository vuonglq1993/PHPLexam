<?php
require_once './functions/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone_number = $_POST['phonenumber'];

    $sql = "INSERT INTO contacts_table (name, phonenumber) VALUES ($name, $phone_number)";
    insert($sql);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add_Contact</title>
</head>
<body>
<h1>Add New Contact</h1>
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="phonenumber">Phone Number:</label>
    <input type="text" name="phonenumber" required>
    <input type="submit" value="Add">
</form>
</body>
</html>