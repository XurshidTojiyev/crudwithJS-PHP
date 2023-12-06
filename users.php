<?php

    include "connect.php";

    $users = array();
    $result = $connect->query("SELECT * FROM users");
    foreach($result as $user) {
        array_push($users, $user);
    }
    echo json_encode($users);

?>