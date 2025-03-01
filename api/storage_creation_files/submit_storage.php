<?php
require "../../ajaxconfig.php";
@session_start();
$user_id = $_SESSION['user_id'];
$storage = $_POST['storage'];
$id = $_POST['id'];

// Check if the storage already exists, ignoring spaces
$qry = $pdo->prepare("SELECT id FROM `storage_location_modal` WHERE REPLACE(TRIM(storage), ' ', '') = REPLACE(TRIM(:storage), ' ', '')");
$qry->execute([':storage' => $storage]);

if ($qry->rowCount() > 0) {
    $result = 0; // Already exists
} else {
    // Check if it's an update or insert
    if ($id != '0' && $id != '') {
        // Update query
        $qry = $pdo->prepare("UPDATE `storage_location_modal` SET `storage` = :storage, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :id");
        $qry->execute([':storage' => $storage, ':user_id' => $user_id, ':id' => $id]);
        $result = 1; // Update
    } else {
        // Insert query
        $qry = $pdo->prepare("INSERT INTO `storage_location_modal` (`storage`, `insert_login_id`, `created_on`) VALUES (:storage, :user_id, NOW())");
        $qry->execute([':storage' => $storage, ':user_id' => $user_id]);
        $result = 2; // Insert
    }
}

$pdo = null; //Close connection.
echo json_encode($result);
