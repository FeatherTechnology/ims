<?php
require "../../ajaxconfig.php"; // Ensure database connection

try {
    // Prepare and execute the query
    $stmt = $pdo->prepare("SELECT id, employee_name FROM staff_creation WHERE status = 1");
    $stmt->execute();
    
    // Fetch results
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Debug: Check if data is retrieved
    if (empty($response)) {
        echo json_encode(["message" => "No employees found with status = 1"]);
    } else {
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} catch (PDOException $e) {
    // Debug: Return database error
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}

// Close connection
$pdo = null;
?>
