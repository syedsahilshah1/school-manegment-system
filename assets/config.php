<?php
    $server = "localhost";
    $user = "root";
    $password = ""; 
    $db = "_sms";
    
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        $response = array('status' => 'error', 'message' => 'Database connection failed: ' . mysqli_connect_error());
        echo json_encode($response);
        exit();
    }