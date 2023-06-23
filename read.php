<?php

    include 'db.php';

    $sql = "SELECT * FROM Receptionists";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        if ($row['ReceptID'] == $_GET['ReceptID']) {

            echo '<form class="form-inline m-2" action="update.php" method="POST">';

            echo '<td><input type="text" class="form-control" id="Name" name="Name"  value="' . $row['Name'] . '"></td>';
            echo '<td><input type="text" class="form-control" id="Surname" name="Surname"  value="' . $row['Surname'] . '"></td>';
            echo '<td><input type="number" class="form-control" id="Rank" name="Rank"  value="' . $row['Rank'] . '"></td>';
            echo '<td>' . $row['ReceptID'] . '</td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';

            echo '<input type="hidden" id="ReceptID" name="ReceptID" value="' . $row['ReceptID'] . '">';
            echo '</form>';

        } else {
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Surname'] . "</td>";
            echo "<td>" . $row['Rank'] . "</td>";
            echo "<td>" . $row['ReceptID'] . "</td>";
            echo '<td><a class="btn btn-primary" href="index.php?ReceptID=' . $row['ReceptID'] . '" role="button">Update</a></td>';
        };

        echo '<td><a class="btn btn-danger" href="delete.php?ReceptID=' . $row['ReceptID'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    };

    $conn->close();

?>