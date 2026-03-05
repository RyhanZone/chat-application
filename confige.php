<?php
$conn = mysqli_connect("localhost" , "root" , "root" , "chat-aplication");
if(!$conn){
    die("database can't connect because : ". mysqli_connect_error());
}
?>