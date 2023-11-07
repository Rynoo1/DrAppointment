<?php

    include 'db.php';

    $sql = "SELECT * FROM Patients";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        if ($row['PatientID'] == $_GET['PatientID']) {

            echo '<form class="form-inline m-2" action="updatepat.php" method="POST">';
            echo '<input type="hidden" name="CurrentImage" id="CurrentImage" value="' . $row['Image'] . '" />';

            echo '<td><input type="file" class="form-control" name="Image" id="image" accept=".jpg, .jpeg, .png"></td>';
            echo '<td><input type="text" class="form-control" name="Name" value="' . $row['Name'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="Surname" value="' . $row['Surname'] . '"></td>';
            echo '<td><input type="number" class="form-control" name="Age" value="' . $row['Age'] . '"></td>';
            echo '<td><input type="number" class="form-control" name="Phone" value="' . $row['PhoneNr'] . '"></td>';
            echo '<td><input type="text" class="form-control" name="Email" value="' . $row['Email'] . '"></td>';
            echo "<td>" . $row['PatientID'] . "</td>";
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
 
            echo '<input type="hidden" name="PatientID" value="' . $row['PatientID'] . '">';
            echo '</form>';

        } else {
            echo "<td> <img src=' img/" . $row['Image'] . "' style='height: 150px; width: 150px;'> </td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Surname'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['PhoneNr'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['PatientID'] . "</td>";
            echo '<td><a class="btn btn-primary" href="patients.php?PatientID=' . $row['PatientID'] . '" role="button">Update</a></td>';
            echo '<td><a class="btn btn-primary" href="indiv.php?PatientID=' . $row['PatientID'] . '" role="button">View</a></td>';
        };

        echo '<td><a class="btn btn-danger" href="deletepat.php?PatientID=' . $row['PatientID'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    };

    $conn->close();

?>