<?php
include '../database/Database.php';
$db = new Database();

$userId = '0';
if(isset($_COOKIE['admin99'])){
    $userId = $_COOKIE['admin99'];
}
if(isset($_POST['usernameupdatesubmit'])){
	$username = $_POST['username'];

	if ($username !== '') {
		$query = "UPDATE `admin` SET `username` = '$username' WHERE `username` = '$userId'";
        $result = $db->update($query);
        setcookie("admin99", ' ', time() - (86400 * 30));
        setcookie("admin99", $username, time() + (86400 * 30));
        echo 'done';
	}else{
	    echo 'Try again !';
	}
}elseif(isset($_POST['passwordupdatesubmit'])){
	$password = $_POST['password'];

	if ($password !== '') {
		$query = "UPDATE `admin` SET `password` = '$password' WHERE `username` = '$userId'";
        $result = $db->update($query);
        echo 'done';
	}else{
	    echo 'Try again !';
	}
}else{
	echo 'Choose photo!';
}
?>