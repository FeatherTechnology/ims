<?php
require "../../ajaxconfig.php";
@session_start();
$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$role = $_POST['role'];
$email = $_POST['email'];
$employee_name = $_POST['employee_name'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$submenus = implode(',', $_POST['submenus']);
$id = $_POST['id'];

// First, check if the username already exists for another user
$qry = $pdo->prepare("SELECT * FROM users WHERE REPLACE(TRIM(user_name), ' ', '') = REPLACE(TRIM(:user_name), ' ', '') AND id != :id AND status = 1");
$qry->execute([':user_name' => $user_name, ':id' => $id]);

// If the username already exists, handle that situation
if ($qry->rowCount() > 0) {
    $status = '3'; // Username already exists
    $last_id = '0';
    // You can set a response or return to the user at this point, if needed
} else {
    // Prepare the base parameters for the query
    $params = [
        ':name' => $name,
        ':role' => $role,
        ':email' => $email,
        ':employee_name' => $employee_name,
        ':user_name' => $user_name,
        ':password' => $password,
        ':confirm_password' => $confirm_password,
        ':screens' => $submenus,
        ':user_id' => $user_id
    ];

    if ($id != '0' && $id != '') {
        // Update existing user
        $qry = $pdo->prepare("UPDATE users
            SET name = :name, role = :role, email = :email, employee_name = :employee_name, user_name = :user_name, 
                password = :password, confirm_password = :confirm_password, status = 1, screens = :screens, 
                update_login_id = :user_id, updated_on = NOW()
            WHERE id = :id");
        // Bind the ID for the update
        $params[':id'] = $id;

        $qry->execute($params);

        if ($qry->rowCount() > 0) {
            $status = '1'; // Update success
            $last_id = $id;
        } else {
            $status = '0'; // Update failed (no rows affected)
            $last_id = '0';
        }
    } else {
        // Insert new user
        $qry = $pdo->prepare("INSERT INTO users (name, role, email, employee_name, user_name, password, confirm_password, status, screens, insert_login_id, created_on)
            VALUES (:name, :role, :email, :employee_name, :user_name, :password, :confirm_password, 1, :screens, :user_id, NOW())");

        $qry->execute($params);

        if ($qry) {
            $status = '2'; // Insert success
            $last_id = $pdo->lastInsertId(); // Get the last inserted ID
        } else {
            $status = '0'; // Insert failed
            $last_id = '0';
        }
    }
}

// Return result
$result = ['status' => $status, 'last_id' => $last_id];
$pdo = null; //Connection Close.
echo json_encode($result);
