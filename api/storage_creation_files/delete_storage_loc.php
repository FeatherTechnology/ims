<?php
require "../../ajaxconfig.php";
@session_start();
$user_id = $_SESSION['user_id'];
$id = $_POST['id'];

$qry = $pdo->prepare("DELETE FROM `storage_location` WHERE id = :id");
$qry->execute([':id' => $id]);

$result = ($qry) ? '1' : '2';


$pdo = null; //Connection Close.
echo json_encode($result);
