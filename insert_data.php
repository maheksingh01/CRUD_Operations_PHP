<?php

if (isset($_POST['add_students'])) {

    include('dbconn.php');

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    if ($fname == "" || empty($fname)) {
        header('location:index.php?message=You need to fill in the first name!');
    } else {
        // $sql = "insert into `student` (`id`,`first_name`, `last_name`, `age`) values (NULL,'$fname', '$lname', '$age')";
        $query = "INSERT INTO `student` (`id`, `first_name`, `last_name`, `age`) VALUES (NULL, '$fname', '$lname', '$age')";

        // $result = mysqli_query($query);
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Failed");
        } else {
            header('location:index.php?insert_msg=Your data has been added successfully');
        }
    }
}
