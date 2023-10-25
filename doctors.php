<?php
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Rank'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Doctors</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid bg-primary">
        <header>
            <div class="row flex-nonwrap justiy-content-between align-items-center bg-dark py-2 px-3">
                <div class="col-4">
                    <h2 class="text-white"><a class="link-info link-underline link-underline-opacity-0"
                            href="index.php"> The Office Doctor </a></h2>
                </div>

                <div class="col-2 text-center">
                    <a href="doctors.php"
                        class="link-light fs-5 link-opacity-100 link-opacity-100-hover link-offset-0 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Doctors</a>
                </div>

                <div class="col-2 text-center">
                    <a href="patients.php"
                        class="link-primary fs-5 link-opacity-100 link-opacity-100-hover link-offset-0 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Patients</a>
                </div>

                <div class="col-4 d-flex justify-content-end align-items-center">
                    <button class="btn btn-outline-primary"><a class="link-underline link-underline-opacity-0 text-white" href="login.php"> Log Out </a> </button>
                </div>
            </div>
        </header>
        <!-- Nav Bar -->

        <div col class="mt-3">
            <table class="table table-borderless table-light table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Spec</th>
                        <th>RoomNr</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>ID</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                include 'readdoc.php';
                ?>
            </table>
        </div>


        <div class="row pb-4">
            <div class="accordion" id="docaccordion">
                <div class="accordion-item">
                    <h1 class="accordion-header"><button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            New Doctor Profile
                        </button>
                    </h1>
                    <!-- accordion button -->
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#docaccordion">
                        <div class="accordion-body">
                            <form action="insertdoc.php" method="post">
                                <div class="row">
                                    <div class="col-auto mb-3 ms-auto">
                                        <label for="DocName" class="form-label ms-1">Name</label>
                                        <input type="text" class="form-control" name="newDName" placeholder="Name" required>
                                    </div>
                                    <!-- name input -->

                                    <div class="col-auto  mb-3 me-auto">
                                        <label for="DocSur" class="form-label ms-1">Surname</label>
                                        <input type="text" class="form-control" name="newDSurname" placeholder="Surname" required>
                                    </div>
                                    <!-- surname input -->
                                </div>
                                <!-- two inputs -->

                                <div class="row">
                                    <div class="col-1 mb-3 ms-auto">
                                        <label for="DocAge" class="form-label ms-1">Age</label>
                                        <input type="number" class="form-control" name="newDAge" placeholder="Age" required>
                                    </div>
                                    <!-- age in -->

                                    <div class="col-1 mb-3 me-auto">
                                        <label for="DocGend" class="form-label ms-1"> Gender</label>
                                        <input type="text" class="form-control" name="newDGender" placeholder="M/F/N" required>
                                    </div>
                                    <!-- gend in -->
                                </div>
                                <!-- two inputs -->

                                <div class="row">
                                    <div class="col-auto mb-3 ms-auto">
                                        <label for="DocPhone" class="form-label ms-1">Phone</label>
                                        <input type="text" class="form-control" name="newDPhone" placeholder="0123456789" required>
                                    </div>
                                    <!-- phone in -->

                                    <div class="col-auto mb-3 me-auto">
                                        <label for="DocMail" class="form-label ms-1">Email</label>
                                        <input type="email" class="form-control" name="newDEmail" placeholder="example@mail.com" required>
                                    </div>
                                    <!-- email in -->
                                </div>
                                <!-- two inputs -->

                                <div class="row">
                                    <div class="col-auto mb-3 ms-auto">
                                        <label for="DocPass" class="form-label ms-1">Password</label>
                                        <input type="text" class="form-control" placeholder="Password" required>
                                    </div>
                                    <!-- password in -->

                                    <div class="col-auto mb-3 me-auto">
                                        <label for="DocPass" class="form-label ms-1">Confirm Password</label>
                                        <input type="Password" class="form-control" name="newDPass" placeholder="Password" required>
                                    </div>
                                    <!-- password confirm -->
                                </div>
                                <!-- two inputs -->

                                <div class="row">
                                    <div class="col-auto mb-3 ms-auto">
                                        <label for="DocRoom" class="form-label ms-1">Room Number</label>
                                        <input type="text" class="form-control" name="newRoomNr" placeholder="Room Number" required>
                                    </div>
                                    <!-- doctor room number in -->

                                    <div class="col-auto mb-3 me-auto">
                                        <label for="DocSpec" class="form-label ms-1">Specialisation</label>
                                        <input type="text" class="form-control" name="newSpecialisation" placeholder="Specialisation" required>
                                    </div>
                                    <!-- doctor specialisation in -->
                                </div>
                                <!-- two inputs -->

                                <div class="row">
                                    <div class="col-auto mb-3 me-auto ms-auto">
                                        <label for="DocPic" class="form-label ms-1">Image</label>
                                        <input type="file" class="form-control" name="newPic" accept=".jpg, .jepg, .png" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <button type="submit" class="col-auto btn btn-primary p-auto mx-auto">Submit</button>
                                </div>
                                <!-- submit button -->
                            </form>
                            <!-- form -->
                        </div>
                        <!-- accordion body -->
                    </div>
                    <!-- accordion collapse -->
                </div>
                <!-- accordion item -->
            </div>
            <!-- accordion -->
        </div>
        <!-- row -->

    </div>


</body>

</html>

<?php
}else{
    header("Location: login.php");
    exit();
}
?>