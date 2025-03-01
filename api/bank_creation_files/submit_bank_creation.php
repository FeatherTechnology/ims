<?php
require '../../ajaxconfig.php';
@session_start();
$user_id = $_SESSION['user_id'];

$bank_id = $_POST['bank_id'];
$bank_name = $_POST['bank_name'];
$branch = $_POST['branch'];
$account_type = $_POST['account_type'];
$account_No = $_POST['account_No'];
$account_holder = $_POST['account_holder'];
$ifsc_code = $_POST['ifsc_code'];
$ad_code = $_POST['ad_code'];
$swift_code = $_POST['swift_code'];
$bank_creation_id = $_POST['bank_creation_id'];

// Common parameters array
$params = [
    ':bank_id' => $bank_id,
    ':bank_name' => $bank_name,
    ':branch' => $branch,
    ':account_type' => $account_type,
    ':account_No' => $account_No,
    ':account_holder' => $account_holder,
    ':ifsc_code' => $ifsc_code,
    ':ad_code' => $ad_code,
    ':swift_code' => $swift_code,
    ':user_id' => $user_id
];

// Check if we are updating or inserting
if ($bank_creation_id !== '') {
    // Update query with placeholders
    $qry = $pdo->prepare("UPDATE `bank_creation` SET `bank_id` = :bank_id, `bank_name` = :bank_name, `branch` = :branch, `account_type` = :account_type, `account_No` = :account_No,`account_holder` = :account_holder, `ifsc_code` = :ifsc_code, `ad_code` = :ad_code, `swift_code` = :swift_code, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :bank_creation_id");

    // Add bank_creation_id to the parameters array for update query
    $params[':bank_creation_id'] = $bank_creation_id;
    $result = $qry->execute($params) ? 1 : 2;
} else {
    // Insert query with placeholders
    $qry = $pdo->prepare("INSERT INTO `bank_creation` (`bank_id`, `bank_name`, `branch`, `account_type`, `account_No`,`account_holder`, `ifsc_code`, `ad_code`, `swift_code`, `insert_login_id`, `created_on`) VALUES (:bank_id, :bank_name, :branch, :account_type, :account_No,:account_holder, :ifsc_code, :ad_code, :swift_code, :user_id, NOW())");

    $result = $qry->execute($params) ? 3 : 2;
}



echo json_encode($result);

