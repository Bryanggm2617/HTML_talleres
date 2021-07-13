<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../static/css/main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="../index.html" style="font-Size:30px">Comunicaciones</br>Avanzadas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../p2/index.html">Practica Js</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../p3/">Practica PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../p4/">Practica</br>Formulario GET</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../p5/">Practica</br>Formulario POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../p6/">Practica GET</br>NodeMCU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../p7/">Practica POST</br>NodeMCU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../p8/">Practica MQTT</br>NodeMCU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../p9/">Practica Tabla</br>Dinámica</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container p-4">


        <div class="jumbotron" id="opac1">
            <center>
                <?php
                echo "<h3>Tabla Dinámica</h3>";
                ?>
                <br>
                <div>
                <a href="nuevo.php"><button type="button" class="btn btn-outline-primary">Ingresar Datos</button></a>

                </div>
                <br>
                <div>
                    <table border="4">
                        <tr>
                            <td>Id</td>
                            <td>Temperatura (°C)</td>
                            <td>Voltaje (V)</td>
                            <td>Humedad (%)</td>
                            <td>Opciones</td>

                        </tr>
                        <?php
                        $cnx = mysqli_connect("localhost", "user1", "toortoor", "practicas");
                        $sql = "SELECT Id, Temperatura, Voltaje, Humedad FROM sensores3 order by Id desc";
                        $rta = mysqli_query($cnx, $sql);
                        while ($mostrar = mysqli_fetch_row($rta)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['0'] ?></td>
                                <td><?php echo $mostrar['1'] ?></td>
                                <td><?php echo $mostrar['2'] ?></td>
                                <td><?php echo $mostrar['3'] ?></td>
                                <td>
                                    <a href="editar.php?
                            id=<?php echo $mostrar['0'] ?> &
                            tem=<?php echo $mostrar['1'] ?> &
                            volt=<?php echo $mostrar['2'] ?> &
                            hum=<?php echo $mostrar['3'] ?>
                            "><button type="button" class="btn btn-outline-primary">Editar</button></a>
                                    <a href="speliminar.php? id=<?php echo $mostrar['0'] ?>">
                                    <button type="button" class="btn btn-outline-primary">Eliminar</button></a>


                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </center>


        </div>


    </div>


    <script src="js/main.js"></script>
</body>

</html>