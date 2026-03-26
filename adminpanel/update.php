<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "html_pages";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

session_start();

if (!isset($_SESSION['AdminLogin']) || $_SESSION['AdminLogin'] !== 'admin') {
    header("location: login.php");
    exit();
}

if (isset($_POST['update'])) {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];

    $sql = "UPDATE `login` SET `username`='$newUsername', `password`='$newPassword'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location:company_particular.php");

    } else {
        echo "Error updating username and password: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Admin Credentials</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
            margin-top: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Admin Credentials</h2>
        <form method="post">
            <div class="form-group">
                <label for="new_username">New Username:</label>
                <input type="text" class="form-control" id="new_username" name="new_username" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" class="form-control" id="new_password" name="new_password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>
</html>
