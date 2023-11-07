<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>The Office Doctor</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row flex-nonwrap justiy-content-between align-items-center bg-dark py-2 px-3">
                <div class="col-4">
                    <h2 class="text-white"><a class="link-light link-underline link-underline-opacity-0"
                            href="index.php"> The Office Doctor </a>
                    </h2>
                </div>

                <div class="col-2 text-center">
                    <a href="doctors.php"
                        class="fs-5 link-opacity-100 link-opacity-100-hover link-offset-0 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Doctors</a>
                </div>

                <div class="col-2 text-center">
                    <a href="patients.php"
                        class="fs-5 link-opacity-100 link-opacity-100-hover link-offset-0 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Patients</a>
                </div>

                <div class="col-4 d-flex justify-content-end align-items-center">
                    <button class="btn btn-outline-primary"><a
                            class="link-underline link-underline-opacity-0 text-white" href="login.php"> Log Out </a>
                    </button>
                    <h1 class="text-white">
                        <?php //echo $_SESSION['Rank'] ?>
                    </h1>
                </div>
            </div>
        </header>
    </div>
</body>

</html>