<?php
include 'config.php';

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Edit User</h1>
            <form method="post" action="action.php?id=<?php echo $id; ?>">
                <input type="text" name="name" value="<?php echo $user['name']; ?>" placeholder="Name" required />
                <input type="email" name="email" value="<?php echo $user['email']; ?>" placeholder="Email" required />
                <input type="text" name="phone" value="<?php echo $user['phone']; ?>" placeholder="Phone" required />
                <textarea name="address" placeholder="Address" required><?php echo $user['address']; ?></textarea>
                <div class="btn-box">
                    <button type="submit" class="btn" name="update">Update</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>