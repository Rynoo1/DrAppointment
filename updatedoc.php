<?php
    include 'db.php';
    ini_set('display_errors', 1);

    $DoctorID = $_POST['DoctorID'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $RoomNr = $_POST['RoomNr'];
    $Specialisation = $_POST['Specialisation'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];

    if (isset($_POST['Image']) && !empty($_POST['Image'])) {
        $Image = $_POST['Image'];
    
        if (strlen($Image) > 50) {
            echo 'File name is too long.';
            exit;
        }
    } else {
        $Image = $_POST['CurrentImage'];
    }

    $sql = "UPDATE Doctors SET Image = '$Image', DName = '$Name', DSurname = '$Surname', RoomNr = '$RoomNr', PhoneNr = '$Phone', Email = '$Email', Specialisation = '$Specialisation' WHERE DoctorID = '$DoctorID'";

    $result = $conn->query($sql);
    $conn->close();

    header("location: doctors.php");

?>