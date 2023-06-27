<?php
    include 'db.php';

    $AppointID = $_GET['AppointID'];

    $sql = "DELETE FROM Appointments WHERE AppointID = $AppointID";

    $conn->query($sql);
    $conn->close();

    header("location: index.php");

?>