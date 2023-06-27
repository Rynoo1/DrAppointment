<?php
    include 'db.php';

    $DName = $_POST['newDName'];
    $DSurname = $_POST['newDSurname'];
    $Age = $_POST['newDAge'];
    $Phone = $_POST['newDPhone'];
    $Email = $_POST['newDEmail'];
    $Gender = $_POST['newDGender'];
    $Pass = $_POST['newDPass'];
    $Specialisation = $_POST['newSpecialisation']; 
    $RoomNr = $_POST['newRoomNr'];


    $sql = "INSERT INTO Doctors (DName, DSurname, Age, Gender, PhoneNr, Email, Password, Specialisation, RoomNr) VALUES ('$DName', '$DSurname', 
    '$Age', '$Gender', '$Phone', '$Email', '$Pass', '$Specialisation', '$RoomNr' )";

    $conn->query($sql);

    $conn->close();
    header("location: doctors.php");

?>