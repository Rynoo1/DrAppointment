<?php

    include 'db.php';

    $sql = "SELECT * FROM Doctors";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        if ($row['DoctorID'] == $_GET['DoctorID']) {

            echo '<form class="form-inline m-2" action="updatedoc.php" method="POST">';
            echo '<input type="hidden" name="CurrentImage" id="CurrentImage" value="' . $row['Image'] . '" />';

            echo '<td><input type="file" class="form-control" name="Image" id="image" accept=".jpg, .jpeg, .png"></td>';
            echo '<td><input type="text" class="form-control" name="Name" value="' . $row['DName'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="Surname" value="' . $row['DSurname'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="Specialisation" value="' . $row['Specialisation'] . '"></td>';
            echo '<td><input type="number" class="form-control" name="RoomNr" value="' . $row['RoomNr'] . '"></td>';
            echo '<td><input type="number" class="form-control" name="Phone" value="' . $row['PhoneNr'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="Email" value="' . $row['Email'] . '"></td>';
            echo "<td>" . $row['DoctorID'] . "</td>";
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';

            echo '<input type="hidden" name="DoctorID" value="' . $row['DoctorID'] . '">';
            echo '</form>';

        } else {
            echo "<td> <img src=' img/" . $row['Image'] . "' style='height: 150px; width: 150px;'> </td>";
            echo "<td>" . $row['DName'] . "</td>";
            echo "<td>" . $row['DSurname'] . "</td>";
            echo "<td>" . $row['Specialisation'] . "</td>";
            echo "<td>" . $row['RoomNr'] . "</td>";
            echo "<td>" . $row['PhoneNr'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['DoctorID'] . "</td>";
            echo '<td><a class="btn btn-primary" href="doctors.php?DoctorID='. $row['DoctorID'] .'" role="button">Update</a></td>';
            echo '<td><a class="btn btn-primary" href="indivdoc.php?DoctorID='. $row['DoctorID'] .'" role="button">View</a></td>';
        };

        echo '<td><a class="btn btn-danger" href="deletedoc.php?DoctorID='. $row['DoctorID'] .'" role="button">Delete</a></td>';
        echo "</tr>";
    };

?>