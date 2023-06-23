<?php
    include 'db.php';

    $ReceptID = $_POST['ReceptID'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Rank = $_POST['Rank'];

    $sql = "UPDATE Receptionists SET Name = '$Name', Surname = '$Surname', Rank = 'Rank' WHERE ReceptID = '$ReceptID'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");

?>