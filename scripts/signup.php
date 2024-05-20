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
            // getting last user id
            $last_user = "SELECT id FROM users ORDER BY id DESC LIMIT 1";

            $last_user_result = mysqli_query($conn, $last_user);

            $row = mysqli_fetch_assoc($last_user_result);

            // user id of a new user
            $last_user_id = $row['id'] + 1;
            //

            $sql = "INSERT INTO users (`id`, `login`, `email`, `pass`, `name`, `surname`) VALUES (NULL, '$username', '$email', '$password', '$name', '$surname')";
            $createUser = mysqli_query($conn, $sql);

            $table_name = "u$last_user_id";
            $sql = "CREATE TABLE `workly`.`$table_name` (`course_id` INT NOT NULL , `course_name` TEXT NOT NULL )";

            $result = mysqli_query($conn, $sql);
            header("location: ../pages/dashboard.php");
        } else {
            header("location: ../pages/login.php");
        }
        mysqli_close($conn);
    } else {
        header("location: ../pages/login.php"); 
    
    }
