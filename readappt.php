<?php
session_start();

    include 'db.php';

    $sql = "SELECT * FROM Appointments, Patients, Doctors 
    WHERE Appointments.DoctorID = Doctors.DoctorID 
    AND Appointments.PatientID = Patients.PatientID 
    AND Appointments.Date >= CURDATE() 
    ORDER BY Appointments.Date, Appointments.Time 
    LIMIT 3";

    $result = $conn->query($sql);

    $conn->close();

?>