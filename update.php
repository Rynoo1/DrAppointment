<?php
include 'db.php';

$ReceptID = $_POST['ReceptID'];
$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Rank = $_POST['Rank'];

if (isset($_POST['Image']) && !empty($_POST['Image'])) {
    $Image = $_POST['Image'];

    if (strlen($Image) > 50) {
        echo 'File name is too long.';
        exit;
    }
} else {
    $Image = $_POST['CurrentImage'];
}

$sql = "UPDATE Receptionists SET Image = '$Image', Name = '$Name', Surname = '$Surname', Rank = '$Rank' WHERE ReceptID = '$ReceptID'";

$result = $conn->query($sql);
$conn->close();
header("location: index.php");

?>