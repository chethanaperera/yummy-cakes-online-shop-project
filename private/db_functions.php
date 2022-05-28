<?php 

function db_connect(){
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

    if($conn->connect_errno != 0){
        exit("<h2>Something went wrong when creating the database connection.</h2>");
    }	
    return $conn;
}
?>