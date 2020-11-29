<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Linux</title>

    <link rel="stylesheet" href="/LinuxDashboard/assets/css/style.css">
    <link rel="stylesheet" href="/LinuxDashboard/assets/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>


    <?php
    include './partials/navigation.php';
    ?>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
               
            </tr>
        </thead>
        <tbody>


            <?php

            exec('/bin/bash -c "getent passwd {1000..2000}"', $salida);

            $i = 1;
            foreach ($salida as $linea) {

                $salida = explode(":", $linea)[0];
                echo '<tr>
                <th scope="row">'.$i.'</th>
                <td>'.$salida.'</td>
                </tr>';
                $i += 10;
            }
            ?>

        </tbody>
    </table>
</body>

</html>