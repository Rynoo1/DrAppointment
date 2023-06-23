<?php
    include 'db.php';

    $PatientID = $_GET['PatientID'];

    $sql = "DELETE FROM Patients WHERE PatientID = $PatientID";

    $conn->query($sql);
    $conn->close(); 

    header("location: patients.php");

?>