<?php
require_once './functions/db_connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM contacts_table WHERE id = $id";
$conn->query($sql);

header('Location: index.php');
die()