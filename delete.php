<?php
    session_start();
    require "include/dbconfig.php";
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $conn->query("DELETE FROM user_table WHERE id='$id'");
        $_SESSION['msg']="User info deleted!";
        $_SESSION['msgClass']="alert-danger";
        header("Location:display.php");
        
    };