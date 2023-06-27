<?php
    include 'db.php';

    $ReceptID = $_POST['ReceptID'];
    $Image = $_POST['Image'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Rank = $_POST['Rank'];

    $sql = "UPDATE Receptionists SET Image = '$Image', Name = '$Name', Surname = '$Surname', Rank = '$Rank' WHERE ReceptID = '$ReceptID'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");

?>