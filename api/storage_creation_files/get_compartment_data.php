<?php
require '../../ajaxconfig.php';

$id = $_POST['id'];

// Prepare the query with a placeholder for the id
$qry = $pdo->prepare("SELECT compartment FROM `compartment` WHERE id = :id");

// Execute the query, binding the actual value of $id to the :id placeholder
$qry->execute([':id' => $id]);

if ($qry->rowCount() > 0) {
    $result = $qry->fetchAll(PDO::FETCH_ASSOC);
}
$pdo = null; //Close connection.

echo json_encode($result);
