<?php
    // session_start();
    // $_SESSION['appt'] = 1;

    include 'db.php';

    $sql = "SELECT * FROM Appointments, Patients, Doctors WHERE Appointments.DoctorID = Doctors.DoctorID AND Appointments.PatientID = Patients.PatientID ORDER BY Appointments.Date ASC";

    $result = $conn->query($sql);

    $counter = 0;
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        $newdate = date_create($row["Date"]);
        $newtime = date_create($row["Time"]);

        $month = date_format($newdate, "F");
        $curmonth = date("F");
        

        if ($curmonth == $month) {
            if ($row['AppointID'] == $_GET['AppointID']) {
                echo '<form class="form-inline m-2" action="updateappt.php" method="POST">';

                echo '<td><input type="date" class="form-control" id="Date" name="Date"  value="' . $row['Date'] . '"></td>';
                echo '<td><input type="time" class="form-control" id="Time" name="Time"  value="' . $row['Time'] . '"></td>';
                echo '<td><input type="text" class="form-control" id="patID" name="patID"  value="' . $row['PatientID'] . '"></td>';
                echo '<td><input type="text" class="form-control" id="docID" name="docID"  value="' . $row['DoctorID'] . '"></td>';
                echo '<td>' . $row['AppointID'] . '</td>';
                echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';

                echo '<input type="hidden" id="AppointID" name="AppointID" value="' . $row['AppointID'] . '">';
                echo '</form>';
            } else {
                echo "<td>" . date_format($newdate, "d M Y") . "</td>";
                echo "<td>" . date_format($newtime, "H:i") . "</td>";
                echo "<td>" . $row["Name"] . " " . $row["Surname"] . "</td>";
                echo "<td> Dr. " . $row["DSurname"] . "</td>";

                echo '<td><a class="btn btn-primary" href="index.php?AppointID=' . $row['AppointID'] . '" role="button">Update</a></td>';
                echo '<td><a class="btn btn-danger" href="delete.php?AppointID=' . $row['AppointID'] . '" role="button">Delete</a></td>';
            }
        }

        echo "</tr>";
        $counter++;

    };

    if ($counter == '0') {
        echo "<h4>No appointments this month!<h4/>";
    }

    $conn->close();

?>