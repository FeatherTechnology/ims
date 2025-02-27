<?php
require '../../ajaxconfig.php';

$id = $_POST['id'];

// Prepare the query with a placeholder
$qry = $pdo->prepare("SELECT * FROM `staff_creation` WHERE id = :id");

// Execute the query with the actual value for the placeholder
$qry->execute([':id' => $id]);

if ($qry->rowCount() > 0) {
    $result = $qry->fetchAll(PDO::FETCH_ASSOC);
}
$pdo = null; //Close connection.
echo json_encode($result);