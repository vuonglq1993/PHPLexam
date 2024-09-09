<?php
require_once './functions/db.php';

$sql = "SELECT * FROM contacts_table";
$contacts = select($sql);

// Display contact list and add new contact link
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
<h1 class="text-center">Phone Book</h1>
<a href="add_contact.php">Add New Contact</a>
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($contacts as $contact) { ?>
    <tr>
        <td><?php echo $contact['id']; ?></td>
        <td><?php echo $contact['name']; ?></td>
        <td><?php echo $contact['phonenumber']; ?></td>
        <td>
            <a href="edit_contact.php?id=<?php echo $contact['id']; ?>">Edit</a>
            <a href="delete_contact.php?id=<?php echo $contact['id']; ?>">Delete</a>
        </td>
    </tr>
    </tbody>

    <?php } ?>
</table>
</body>
</html>