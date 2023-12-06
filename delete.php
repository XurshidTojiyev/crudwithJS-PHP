<?php

    include "connect.php";

    if($_GET['id']) {
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = '$id'";
        $connect->query($sql);
        header("Location: /");
    }
?>