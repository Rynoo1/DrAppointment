<?php
    include 'db.php';

    $DoctorID = $_POST['DoctorID'];
    $Image = $_POST['Image'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $RoomNr = $_POST['RoomNr'];
    $Specialisation = $_POST['Specialisation'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];

    $sql = "UPDATE Doctors SET Image = '$Image', DName = '$Name', DSurname = '$Surname', RoomNr = '$RoomNr', Phone = '$Phone', Email = '$Email', Specialisation = '$Specialisation' WHERE DoctorID = '$DoctorID'";

    $result = $conn->query($sql);
    $conn->close();

    header("location: doctors.php");

?>