<?php 
session_start();

if (isset($_POST["submit"])) {

    include "connect.php";

    $last_course_id = "";
    // get last course id 

    $last_course = "SELECT course_id FROM courses ORDER BY course_id DESC LIMIT 1";

    $last_course_result = mysqli_query($conn, $last_course);

    $row = mysqli_fetch_assoc($last_course_result);

    $last_course_id = $row['course_id'] + 1;

    $table_name = "c$last_course_id";

    // Add course to db

    $create_course = "CREATE TABLE `workly`.`$table_name` (`user_id` INT NOT NULL , `username` TEXT NOT NULL , `admin` BOOLEAN NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;";

    $create_course_result = mysqli_query($conn, $create_course);

    // Add admin to course (user who made the course) 

    $user_id = $_SESSION["user_id"];
    $username = $_SESSION["username"];

    $addFisrtUser = "INSERT INTO $table_name (`user_id`, `username`, `admin`) VALUES ($user_id, '$username', '1')";

    $addFirstUser_result = mysqli_query($conn, $addFisrtUser);

    // Adding course to global table with name of the course

    $course_name = $_POST["title"];

    $add_to_global = "INSERT INTO `courses` (`course_id`, `name`, `table_name`) VALUES ('$last_course_id', '$course_name', '$table_name');";

    $add_to_global_result = mysqli_query($conn, $add_to_global);

    header("location: ../pages/courses.php"); 

}
