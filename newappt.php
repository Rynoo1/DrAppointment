<?php
    include 'db.php';

    $ReceptID = $_POST['newrecid'];
    $Date = $_POST['newdate'];
    $Time = $_POST['newtime'];
    $DocID = $_POST['newdocid'];
    $PatID = $_POST['newpatid'];

    $sql = "INSERT INTO Appointments VALUES ( '$DocID', '$PatID', '$Date', '$Time', '$ReceptID' )";

    $conn->query($sql);
    $conn->close();

    header("location: index.php");

?>