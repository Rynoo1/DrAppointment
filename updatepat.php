<?php
    include 'db.php';

    $PatientID = $_POST['PatientID'];
    $Image = $_POST['Image'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Age = $_POST['Age'];
    $Phone = $_POST['Phone']; 
    $Email = $_POST['Email'];

    $sql = "UPDATE Patients SET Name = '$Name', Surname = '$Surname', Age = '$Age', Phone = '$Phone', Email = '$Email',
    Image = '$Image' WHERE PatientID = '$PatientID' ";

    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");

?>

