<?php
include 'config.php';
$query = mysqli_query($con, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Firefighting Response Management System.com</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="container">
        <h1 align="center">Firefighting Response Management System</h1>
        <br>
        <br>
        <a href="add.php">Add User</a>

        <table>
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone#</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php
            $no = 1;
            while ($user = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['address']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
                        <a href="action.php?id=<?php echo $user['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>
</html>