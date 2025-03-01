<?php
require '../../ajaxconfig.php';
@session_start();
$user_id = $_SESSION['user_id'];

$storage_location = $_POST['storage_location'];
$rack = $_POST['rack'];
$compartment = $_POST['compartment'];
$palette = $_POST['palette'];
$pal_ette = $_POST['pal_ette'];
$storage_creation_id = $_POST['storage_creation_id'];

// Common parameters array
$params = [
    ':storage_location' => $storage_location,
    ':rack' => $rack,
    ':compartment' => $compartment,
    ':palette' => $palette,
    ':pal_ette' => $pal_ette,
    ':user_id' => $user_id
];

// Check if we are updating or inserting
if ($storage_creation_id !== '') {
    // Update query with placeholders
    $qry = $pdo->prepare("UPDATE `storage_location` SET `storage_location` = :storage_location, `rack` = :rack, `compartment` = :compartment, `palette` = :palette, `pal_ette` = :pal_ette, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :storage_creation_id");

    // Add storage_creation_id to the parameters array for update query
    $params[':storage_creation_id'] = $storage_creation_id;
    $result = $qry->execute($params) ? 1 : 2;
} else {
    // Insert query with placeholders
    $qry = $pdo->prepare("INSERT INTO `storage_location` (`storage_location`, `rack`, `compartment`, `palette`, `pal_ette`,`insert_login_id`, `created_on`) VALUES (:storage_location, :rack, :compartment, :palette, :pal_ette, :user_id, NOW())");

    $result = $qry->execute($params) ? 3 : 2;
}



echo json_encode($result);

