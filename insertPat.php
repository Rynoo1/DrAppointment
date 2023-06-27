<?php

    include 'db.php';

    $Name = $_POST['newName'];
    $Surname = $_POST['newSurname'];
    $Age = $_POST['newAge'];
    $Phone = $_POST['newPhone'];
    $Email = $_POST['newEmail'];
    $Gender = $_POST['newGend'];
    $Pass = $_POST['newPass'];
    $MedicAid = $_POST['newMedicAid'];
    $Image = $_POST['newImg'];


    $sql = "INSERT INTO Patients (Name, Surname, Age, Gender, PhoneNr, Email, Password, MedicalAidNr, Image) VALUES ('$Name', '$Surname', 
    '$Age', '$Gender', '$Phone', '$Email', '$Pass', '$MedicAid', '$Image' )";

    $conn->query($sql);

    $conn->close();
    header("location: patients.php");

?>