<?php
require "../../ajaxconfig.php";

$id = $_POST['id'];

$qry = $pdo->prepare("DELETE FROM `bank_creation` WHERE id = :id");
$qry->execute([':id' => $id]);

$result = ($qry) ? '1' : '2';

$pdo = null; //Connection Close.
echo json_encode($result);
