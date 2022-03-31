<?php
include '../database/Database.php';
$db = new Database();
$header = '0';
$query = "SELECT * FROM `header` WHERE `id`='1'";
$result = $db->select($query);
if ($result) {
    $header = $result->fetch_assoc();
}
?>
<tr>
    <td><label>Home</label></td>
    <td>
        <?php
        if ($header['home'] == 0) {
        ?>
            <span class="btn btn-sm btn-success header-show-hide-btn" header-option="home" action="1">Show</span>
        <?php
        } else {
        ?>
            <span class="btn btn-sm btn-danger header-show-hide-btn" header-option="home" action="0">Hide</span>
        <?php
        }
        ?>
    </td>
</tr>
<tr>
    <td><label>About</label></td>
    <td>
        <?php
        if ($header['about'] == 0) {
        ?>
            <span class="btn btn-sm btn-success header-show-hide-btn" header-option="about" action="1">Show</span>
        <?php
        } else {
        ?>
            <span class="btn btn-sm btn-danger header-show-hide-btn" header-option="about" action="0">Hide</span>
        <?php
        }
        ?>
    </td>
</tr>
<tr>
    <td><label>Sector</label></td>
    <td>
        <?php
        if ($header['sector'] == 0) {
        ?>
            <span class="btn btn-sm btn-success header-show-hide-btn" header-option="sector" action="1">Show</span>
        <?php
        } else {
        ?>
            <span class="btn btn-sm btn-danger header-show-hide-btn" header-option="sector" action="0">Hide</span>
        <?php
        }
        ?>
    </td>
</tr>
<tr>
    <td><label>Product</label></td>
    <td>
        <?php
        if ($header['product'] == 0) {
        ?>
            <span class="btn btn-sm btn-success header-show-hide-btn" header-option="product" action="1">Show</span>
        <?php
        } else {
        ?>
            <span class="btn btn-sm btn-danger header-show-hide-btn" header-option="product" action="0">Hide</span>
        <?php
        }
        ?>
    </td>
</tr>
<tr>
    <td><label>Export</label></td>
    <td>
        <?php
        if ($header['export'] == 0) {
        ?>
            <span class="btn btn-sm btn-success header-show-hide-btn" header-option="export" action="1">Show</span>
        <?php
        } else {
        ?>
            <span class="btn btn-sm btn-danger header-show-hide-btn" header-option="export" action="0">Hide</span>
        <?php
        }
        ?>
    </td>
</tr>
<tr>
    <td><label>Import</label></td>
    <td>
        <?php
        if ($header['import'] == 0) {
        ?>
            <span class="btn btn-sm btn-success header-show-hide-btn" header-option="import" action="1">Show</span>
        <?php
        } else {
        ?>
            <span class="btn btn-sm btn-danger header-show-hide-btn" header-option="import" action="0">Hide</span>
        <?php
        }
        ?>
    </td>
</tr>
<tr>
    <td><label>Contact</label></td>
    <td>
        <?php
        if ($header['contact'] == 0) {
        ?>
            <span class="btn btn-sm btn-success header-show-hide-btn" header-option="contact" action="1">Show</span>
        <?php
        } else {
        ?>
            <span class="btn btn-sm btn-danger header-show-hide-btn" header-option="contact" action="0">Hide</span>
        <?php
        }
        ?>
    </td>
</tr>