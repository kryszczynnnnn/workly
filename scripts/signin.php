<?php 

    if (isset($_POST["submit"])) {

        include "connect.php";

        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $findUser = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query($conn, $findUser);
        $rows = mysqli_fetch_array($result);

        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['is_logged'] = true;
            $_SESSION['user_id'] = $rows['id'];
            $_SESSION['name'] = $rows['name'];
            header("location: ../pages/dashboard.php");
        } else {
            header("location: ../pages/login.php");
        }
        $connect->close();
    } else {

        header("location: ../pages/login.php"); 
    
    }
