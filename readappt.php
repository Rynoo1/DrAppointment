<?php
// session_start();
// $_SESSION['appt'] = 1;

    include 'db.php';

    $sql = "SELECT * FROM Appointments, Patients, Doctors WHERE Appointments.DoctorID = Doctors.DoctorID AND Appointments.PatientID = Patients.PatientID AND Appointments.AppointID = '1'";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $newdate = date_create($row["Date"]); 
        $newtime = date_create($row["Time"]);
        echo '<h4>' . date_format($newdate, "D, d M Y") . " at " . date_format($newtime, "H:i") . '</h4>';
        echo '<h4>' . $row["Name"] . " " . $row["Surname"] . '</h4>';
        echo '<h4> Dr. ' . $row["DName"] . " " . $row["DSurname"] . '</h4>';
    };

    $conn->close();

?>