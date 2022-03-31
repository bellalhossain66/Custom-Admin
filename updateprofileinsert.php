<?php
include '../database/Database.php';
$db = new Database();

$userId = '0';
if(isset($_COOKIE['admin99'])){
    $userId = $_COOKIE['admin99'];
}
if(isset($_FILES['image']['name'])){
	$image = $_FILES['image']['name'];
	$target_file = './image/'.$image;
	$message2 = $_FILES['image']['tmp_name'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	if ($name !== '' && $phone !== '' && $email !== '' && $address !== '') {
		if($image){
			if(move_uploaded_file($message2, $target_file)){
				$query = "UPDATE `admin` SET `name` = '$name', `phone`= '$phone', `email` = '$email', `address` = '$address', `image` = '$image' WHERE `username` = '$userId'";
                $result = $db->update($query);
                echo 'done';
		    }else{
			    echo 'Try again!!';
		    }
		}else{
		    $query = "UPDATE `admin` SET `name` = '$name', `phone`= '$phone', `email` = '$email', `address` = '$address' WHERE `username` = '$userId'";
            $result = $db->update($query);
            echo 'done';
		}
	}else{
	    echo 'Try again !';
	}
}else{
	echo 'Choose photo!';
}
?>