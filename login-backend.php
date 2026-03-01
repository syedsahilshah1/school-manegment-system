<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     http_response_code(404);
     die();
} else {
    
if (isset($_POST['email']) && isset($_POST['password'])) {
    include("assets/config.php");

    if ($conn) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT id, role, password_hash FROM users WHERE email=?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);

            mysqli_stmt_bind_result($stmt, $db_id, $db_role, $db_password_hash);
            
            if (mysqli_stmt_fetch($stmt)) {
                if (password_verify($password, $db_password_hash)) {
                    $_SESSION['uid'] = $db_id;
                    $response['status'] = 'success';
                    $response['role'] = $db_role;
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Invalid email or password!';
                }
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Invalid email or password!';
            }
            mysqli_stmt_close($stmt);
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error preparing statement: ' . mysqli_error($conn);
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Database connection error';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Both fields are required';
}

// Return the response
header('Content-Type: application/json');
echo json_encode($response);
    
}
