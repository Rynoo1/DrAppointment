<?php
    include 'db.php';
    ini_set('display_errors', 1);

    $ReceptID = $_POST['newrecid'];
    $Date = $_POST['newdate'];
    $Time = $_POST['newtime'];
    $DocID = $_POST['newdocid'];
    $PatID = $_POST['newpatid'];

    $sql = "INSERT INTO Appointments (DoctorID, PatientID, Date, Time, ReceptID) VALUES ( '$DocID', '$PatID', '$Date', '$Time', '$ReceptID' )";

    $conn->query($sql);
    $conn->close();

    header("location: index.php");

?>