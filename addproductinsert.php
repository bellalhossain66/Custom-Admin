<?php
include '../database/Database.php';
$db = new Database();

$userId = '0';
if(isset($_COOKIE['admin99'])){
    $userId = $_COOKIE['admin99'];
}
if(isset($_FILES['image']['name'])){
	$image = $_FILES['image']['name'];
	$target_file = './image/product/'.$image;
	$message2 = $_FILES['image']['tmp_name'];
	$name = $_POST['name'];
	$description = $_POST['description'];

	if ($name !== '' && $description !== '') {
		if($image){
			if(move_uploaded_file($message2, $target_file)){
				$query = "INSERT INTO `product_ad`(`name`, `description`, `image`) VALUES ('$name','$description','$image')";
                $result = $db->insert($query);
                echo 'done';
		    }else{
			    echo 'Try again!!';
		    }
		}else{
		    $query = "INSERT INTO `product_ad`(`name`, `description`) VALUES ('$name','$description')";
            $result = $db->insert($query);
            echo 'done';
		}
	}else{
	    echo 'Try again !';
	}
}else if(isset($_POST['deleteProduct'])){
	$proId = $_POST['proId'];
	$query = "DELETE FROM `product_ad` WHERE `id`='$proId'";
    $result = $db->delete($query);
}else{
	echo 'Choose photo!';
}
?>