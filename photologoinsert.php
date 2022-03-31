<?php
include '../database/Database.php';
$db = new Database();

if(isset($_FILES['image']['name'])){
	$image = $_FILES['image']['name'];
	$target_file = './image/banner/'.$image;
	$message2 = $_FILES['image']['tmp_name'];
    $action = $_POST['action'];

	if ($image !== '' && $action !== '') {
		if(move_uploaded_file($message2, $target_file)){
			$query = "UPDATE `photos` SET `".$action."` = '$image' WHERE `id` = '1'";
            $result = $db->insert($query);
            echo 'done';
		}else{
			echo 'Try again!!';
		}
	}else{
	    echo 'Try again !';
	}
}else{
	echo 'Choose photo!';
}
