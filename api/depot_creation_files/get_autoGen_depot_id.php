<?php
require '../../ajaxconfig.php';

$id = $_POST['id'];
if ($id != '') {
    // Secure query with prepared statement
    $qry = $pdo->prepare("SELECT depot_id FROM depot_creation WHERE id = :id");
    $qry->execute([':id' => $id]);
    $qry_info = $qry->fetch();
    $cus_ID_final = $qry_info['depot_id'];
} else {
    // Secure query to fetch the last depot_id
    $qry = $pdo->query("SELECT depot_id FROM depot_creation WHERE depot_id !='' ORDER BY id DESC LIMIT 1");
    
    if ($qry->rowCount() > 0) {
        $qry_info = $qry->fetch();
        // Extract and increment the number part
        $l_no = ltrim(strstr($qry_info['depot_id'], 'D'), 'D');
        $l_no = (int)$l_no + 1;
        $cus_ID_final = "D" . sprintf('%03d', $l_no);  // Add leading zeros
    } else {
        $cus_ID_final = "D100";  // Start with EXC001
    }
}

echo json_encode($cus_ID_final);
?>
