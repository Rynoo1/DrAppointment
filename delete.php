<?php
    include 'db.php';

    $ReceptID = $_GET['ReceptID'];

    $sql = "DELETE FROM Receptionists WHERE ReceptID = $ReceptID";

    $conn->query($sql);
    $conn->close();

    header("location: index.php");

?>