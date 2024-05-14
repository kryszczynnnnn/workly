<?php 

    if (isset($_POST["submit"])) {

        include "connect.php";

        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $findUser = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query($conn, $findUser);

        if (mysqli_num_rows($result) == 1) {
            header("location: dashboard.php");
        } else {
            header("location: login.php");
        }
        $connect->close();
    } else {

        header("location: login.php"); 
    
    }
