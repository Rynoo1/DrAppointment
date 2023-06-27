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


    $sql = "INSERT INTO Patients (Name, Surname, Age, Gender, PhoneNr, Email, Password, MedicalAidNr) VALUES ('$Name', '$Surname', 
    '$Age', '$Gender', '$Phone', '$Email', '$Pass', '$MedicAid' )";

    $conn->query($sql);

    $conn->close();
    header("location: Patients.php");

?>