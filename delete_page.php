<?php include('dbconn.php'); ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "delete from `student` where `id` = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed");
    } else {
        header('location:index.php?delete_msg=You have deleted successfully');
    }
}

?>
