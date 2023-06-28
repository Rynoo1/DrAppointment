<?php
    session_start();
    include 'db.php';

    if (isset($_POST['names']) && isset($_POST['mail']) && isset($_POST['pass'])) {
        function validate($data)
        { 
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $names = validate($_POST['names']);
        $mail = validate($_POST['mail']);
        $pass = validate($_POST['pass']);

        if (empty($names)) {
            header("Location: login.php?error=Name is required");
            exit();
        } else if (empty($mail)) {
            header("Location: login.php?error=Email is required");
            exit();

        } else if (empty($pass)) {
            header("Location: login.php?error=Password is required");
            exit();

        } else {

            for ($i=1; $i < strlen($names); $i++) { 
                if ($names[$i] == ",") {
                    $comma = $i;
                }
            }

            for ($x=0; $x < $comma; $x++) { 
                $surname = $surname . $names[$x];
            }

            for ($y=$comma+2; $y < strlen($names) ; $y++) { 
                $firstname = $firstname . $names[$y];
            }


            $sql = "SELECT * FROM Receptionists WHERE Name = $firstname AND Surname = '$surname' AND Email = '$mail' AND Password = '$pass'";

            $results = $conn->query($sql);

            if (mysqli_num_rows($results) === 1) {
                $row = mysqli_fetch_assoc($results);
                if ($row['Name'] === $firstname && $row['Surname'] === $surname && $row['Email'] === $mail && $row['Password'] === $pass ) {
                    $_SESSION['Name'] = $row['Name'];
                    $_SESSION['Rank'] = $row['Rank'];
                    echo $_SESSION['Rank'];
                    header("Location: index.php");
                    exit();
                } else {
                    header("Location: login.php?error=Incorrect Name or Password");
                    exit();
                }
            } else {
                header("Location: login.php?error=Incorrect Name or Password");
                exit();
            }
        }

    } else {
        header("Location: login.php");
        exit();
    }

?>