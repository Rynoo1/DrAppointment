<?php

    include 'db.php';
    ini_set('display_errors', 1);

    $Name = $_POST['newname'];
    $Surname = $_POST['newsurname'];
    $Age = $_POST['newage'];
    $Phone = $_POST['newphone'];
    $Email = $_POST['newmail'];
    $Gender = $_POST['newgender'];
    $Pass = $_POST['newpass'];
    $Rank = $_POST['newrank']; 
    $Image = $_POST['newImage'];

    // $targetDirectory = '/Applications/XAMPP/xamppfiles/htdocs/Project/DrAppointment/img/';
    // $targetFile = $targetDirectory . basename($_FILES['newImage']['name']);
    // $uploadOk = 1;

    // if (file_exists($targetFile)) {
    //     echo "already exists";
    //     $uploadOk = 0;
    // }

    // $allowedExtensions = array('jpg', 'jpeg', 'png');
    // $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    // if (!in_array($imageFileType, $allowedExtensions)) {
    //     echo 'wrong type';
    //     $uploadOk = 0;
    // }

    // if ($uploadOk === 0) {
    //     echo 'error';
    // } else {
    //     if (move_uploaded_file($_FILES['newImage']['tmp_name'], $targetFile)) {
    //         $Image = basename($_FILES['newImage']['name']);
    //     }
    // }

    // echo $Image;

    $sql = "INSERT INTO Receptionists (Name, Surname, Age, Gender, PhoneNr, Email, Password, Rank, Image )
    VALUES ('$Name', '$Surname', '$Age', '$Gender', '$Phone', '$Email', '$Pass', '$Rank', '$Image' )";

    $conn->query($sql);

    $conn->close();
    header("location: index.php");

?>