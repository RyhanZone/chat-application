<?php
error_reporting(0);
ini_set('display_errors', 0);

$usernameerror = [];
include('confige.php');

if(isset($_POST['username'])){
    $username = trim($_POST['username']); // trim() দাও

    if(empty($username)){
        $usernameerror['statuse'] = "error";
        $usernameerror['username'] = "Username is required";
    } else {
        $query = mysqli_query($conn, "SELECT id FROM users WHERE username='$username'");
        $userquiry = mysqli_fetch_assoc($query);

        if($userquiry){
            $usernameerror['statuse'] = "error";
            $usernameerror['username'] = "This username is already taken";
        } else {
            $usernameerror['statuse'] = "ok";
            $usernameerror['username'] = "Available username ✓";
        }
    }
}

echo json_encode($usernameerror);
?>