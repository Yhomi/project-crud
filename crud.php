<?php
    session_start();
    require "include/dbconfig.php";
    if(isset($_POST['name'], $_POST['email'], $_POST['pwd'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        $hasspwd=password_hash($pwd,PASSWORD_DEFAULT);
        $sql=$conn->query("INSERT INTO user_table(Name,Email,Password) VALUES ('$name','$email','$hasspwd')");
        // header("Location:display.php");
        echo '<div class="alert alert-success">User Saved Successfully</div>';
        
    };
?>
