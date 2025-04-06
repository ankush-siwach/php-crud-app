<?php
include('bcon.php');

if (isset($_GET['Student_ID'])) {
    $id = $_GET['Student_ID'];

    $query = "DELETE FROM `students` WHERE `Student ID` = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Failed to delete: " . mysqli_error($connection));
    } else {
        header("Location: home.php?d_msg=Data deleted");
        exit();
    }
} else {
    echo "No Student_ID provided in URL.";
}
?>
