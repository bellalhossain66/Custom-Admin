<?php
include '../database/Database.php';
$db = new Database();

if(isset($_POST['headershowhidebtn'])){
    $headerOption = $_POST['headerOption'];
    $action = $_POST['action'];
    $query = "UPDATE `header` SET `".$headerOption."` = '$action' WHERE `id`='1'";
    $result = $db->update($query);
}
?>