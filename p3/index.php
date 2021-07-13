<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../static/css/main.css">
    <title>Document</title>
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
                <h1> Practica PHP </h1>
                <?php
                $var1 = 1;
                $var2 = 2;
                $var3 = "hola";
                //$suma=$var1+$var2;
                $suma = ++$var2;
                //$resta=$var2+$var1;
                $resta = --$var2;
                $mult = $var1 * $var2;
                $div = $var1 / $var2;
                $mod = $var1 % $var2;
                //echo $var1."<br>".$var2."<br>".$var3;
                echo "La suma es: " . $suma . "<br>" . "La resta es: " . $resta . "<br>" . "La mult es: " . $mult . "<br>" . "La división es: " . $div . "<br>" . "El módulo es: " . $mod . "<br>";

                if ($var1 >= $var2) {
                    echo "Es mayor";
                } else {
                    echo "Es menor" . "<br>";
                }

                $OP = 1;
                switch ($OP) {
                    case 1:
                        echo "Caso UNO";
                        break;
                    case 2:
                        echo "Caso DOS";
                        break;
                    case 3:
                        echo "Caso TRES";
                        break;
                    default:
                        echo "No existe case";
                        break;
                }
                echo "<br>";
                for ($i = 0; $i < 10; $i++) {
                    echo $i . " ";
                }
                ?>
            </center>
        </div>


    </div>


    <script src="js/main.js"></script>
    </body>

</html>