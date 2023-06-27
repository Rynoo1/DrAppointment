<?php
    include 'db.php';

    $AppointID = $_POST['AppointID'];
    $PatientID = $_POST['patID'];
    $DoctorID = $_POST['docID'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];

    $sql = "UPDATE Appointments SET PatientID = '$PatientID', DoctorID = '$DoctorID', Date = '$Date', Time = '$Time' WHERE AppointID = '$AppointID'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");

?>