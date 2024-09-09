<?php
require_once './functions/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM contacts_table WHERE id = $id";
$contact = findById($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone_number = $_POST['phonenumber'];

    $sql = "UPDATE contacts_table SET name = $name, phonenumber = $phone_number WHERE id = $id";
    update($sql);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit_Contact</title>
</head>
<body>
<h1>Edit Contact</h1>
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $contact['name']; ?>" required>
    <label for="phonenumber">Phone Number:</label>
    <input type="text" name="phonenumber" value="<?php echo $contact['phonenumber']; ?>" required>
    <input type="submit" value="Save">
</form>
</body>
</html>