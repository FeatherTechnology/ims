<?php
require '../../ajaxconfig.php';

// Prepare the query
$qry = $pdo->prepare("SELECT id, state_name FROM states WHERE status = 1");

// Execute the query
$qry->execute();

if ($qry->rowCount() > 0) {
    $response = $qry->fetchAll(PDO::FETCH_ASSOC);
}
$pdo = null; //Close Connection

echo json_encode($response);
