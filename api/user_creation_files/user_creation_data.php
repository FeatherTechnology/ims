<?php
require '../../ajaxconfig.php';

$id = $_POST['id'];

$qry = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$qry->execute([':id' => $id]);

if ($qry->rowCount() > 0) {
    $result = $qry->fetchAll(PDO::FETCH_ASSOC);
}
$pdo = null; //Close connection.
echo json_encode($result);