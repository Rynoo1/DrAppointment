<?php
    include 'db.php';

    $DoctorID = $_GET['DoctorID'];

    $sql = "DELETE FROM Doctors WHERE DoctorID = $DoctorID";

    $conn->query($sql);
    $conn->close();

    header("location: doctors.php");

?>