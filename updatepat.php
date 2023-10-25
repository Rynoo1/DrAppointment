<?php
    include 'db.php';
    ini_set('display_errors', 1);

    $PatientID = $_POST['PatientID'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Age = $_POST['Age'];
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

    $sql = "UPDATE Patients SET Name = '$Name', Surname = '$Surname', Age = '$Age', PhoneNr = '$Phone', Email = '$Email',
    Image = '$Image' WHERE PatientID = '$PatientID' ";

    $result = $conn->query($sql);
    $conn->close();
    header("location: patients.php"); 

?>

