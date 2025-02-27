<?php
require "../../ajaxconfig.php";
@session_start();
$user_id = $_SESSION['user_id'];
$id = $_POST['id'];

$qry = $pdo->prepare("UPDATE `users` SET `status` = :status, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :id");
$qry->execute([
    ':status' => 2,
    ':user_id' => $user_id,
    ':id' => $id
]);

$result = ($qry) ? '0' : '1';

$pdo = null; //Connection Close.
echo json_encode($result);
