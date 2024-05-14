<?php 

    if (isset($_POST["submit"])) {

        include "connect.php";

        $email = $_POST["email"];
        $username = $_POST["username"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $password = md5($_POST["password"]);

        $findUser = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query($conn, $findUser);

        if (mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO users (`id`, `login`, `email`, `pass`, `name`, `surname`) VALUES (NULL, '$username', '$email', '$password', '$name', '$surname')";
            $createUser = mysqli_query($conn, $sql);
            header("location: ../pages/dashboard.php");
        } else {
            header("location: ../pages/login.php");
        }
        mysqli_close($conn);
    } else {
        header("location: ../pages/login.php"); 
    
    }
