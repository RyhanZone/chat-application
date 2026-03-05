<?php
include('confige.php');
    session_start();
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    if(isset($_POST['msg'])){
        $msg = $_POST['msg'];
        mysqli_query($conn , "INSERT INTO msg(sender_id , sender_name , msg) VALUES('$id' , '$name' , '$msg')");
    }
    $result = mysqli_query($conn, "SELECT * FROM msg ORDER BY id ASC");

    $data = [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    echo json_encode($data);
?>