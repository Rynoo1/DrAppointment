<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid text-white px-0 vh-100 bg-primary" style="position: fixed;">

        <div class="bg-primary text-center text-light">
            <h1>The Office Doctor</h1>
        </div>


        <div class="row h-100 mx-0">

            <div class="col-6 offset-3 bg-light m-auto rounded-4 text-dark">

                <div class="text-center">
                    <h1>Welcome Back!</h1>
                </div>

                <div class="row">

                    <div class="col border-end border-dark mb-3">
                        <img src='img/tribute-to-doctors.jpeg' class="img-fluid rounded py-4">
                    </div>

                    <div class="col py-2">
                        <form class="my-1" action="loginverif.php" method="post">
                            <?php
                            if (isset($_GET['error'])) { ?>
                                <h5 class="text-danger">
                                    <?php echo $_GET['error'] ?>
                                </h5>
                            <?php }
                            ;
                            ?>
                            <div class="mb-3">
                                <label for="name" class="form-label mb-1">Name</label>
                                <input type="text" class="form-control" id="logname" name="names"
                                    placeholder="Surname, Name">
                            </div>
                            <!-- Name Input -->

                            <div class="mb-3">
                                <label for="emailinput" class="form-label mb-1">Email address</label>
                                <input type="email" class="form-control" id="logmail" name="mail"
                                    placeholder="name@example.com">
                            </div>
                            <!-- Email Input -->

                            <div class="mb-3">
                                <label for="password" class="form-label mb-1">Password</label>
                                <input type="password" class="form-control" id="logpass" name="pass"
                                    placeholder="Password">
                            </div>
                            <!-- Password Input -->

                            <div class="col-3 mx-auto">
                                <button type="submit" class="btn btn-outline-primary">Log In</button>
                            </div>


                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>