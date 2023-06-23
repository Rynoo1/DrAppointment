<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/index.global.min.js'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });

    </script>
    <title>test</title>
</head>

<body>
    <!-- <div id="calendar">

    </div> -->

    <!-- <div class="container bg-danger">
                    <div>
                        June
                    </div>
                    <div class="pb-2">
                        <table>
                            <tr>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </table>

                        <div class="row">
                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>


                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                        </div>
                        <!-- row -->

    <!-- <div class="row">
                            <div class="bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                        </div>
                        <!-- row

                        <div class="row">
                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient  </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>


                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                        </div>
                        <!-- row 

                        <div class="row">
                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>


                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                        </div>
                        <!-- row 

                        <div class="row">
                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>


                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                            <div class="col bg-light rounded p-2">
                                <div class="bg-primary">
                                    <h5>1</h5>
                                </div>
                                <p>9 Dr Patient <br /> 9 Dr Patient <br /> 9 Dr Patient </p>
                            </div>

                        </div> 
                        <!-- row 

                    </div>


                </div> -->


    <form class="form" id="form" action="" enctype="multipart/form-data" method="post">

        <div class="upload">
            <?php
                $id = $patient['id'];
                $name = $patient['name'];
                $image = $patient['image'];
            ?>
            <img src="img/<?php echo $image; ?>" alt="">
            <div class="round">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">

            </div>
        </div>

    </form>


</body>

</html>