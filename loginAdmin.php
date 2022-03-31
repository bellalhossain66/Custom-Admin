<?php
include '../database/Database.php';
$db = new Database();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST['loginsubmit'])) {

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $query = "select * from `admin` where `userName`='$username' and `password`='$password'";
    $result = $db->select($query);
    if (!$result) {
        echo 'Input incorrect!';
    } else {
        $row = $result->fetch_assoc();
        setcookie("admin99", $row['username'], time() + (86400 * 30));
        setcookie("pass99", $row['password'], time() + (86400 * 30));
        setcookie("adminId", $row['id'], time() + (86400 * 30));
        echo 'done';
    }
} else {
    echo 'Please Login!';
}
?>