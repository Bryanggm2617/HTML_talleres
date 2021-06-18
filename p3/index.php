<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1> hola Lucho </h1>
    <?php
        $var1=1;
        $var2=2;
        $var3="hola";
        //$suma=$var1+$var2;
        $suma=++$var2;
        //$resta=$var2+$var1;
        $resta=--$var2;
        $mult=$var1*$var2;
        $div=$var1/$var2;
        $mod=$var1%$var2;
        //echo $var1."<br>".$var2."<br>".$var3;
        echo "La suma es: ".$suma."<br>"."La resta es: ".$resta."<br>"."La mult es: ".$mult."<br>"."La división es: ".$div."<br>"."El módulo es: ".$mod."<br>";
    
        if($var1>=$var2){
            echo "Es mayor";
        }else{
            echo "Es menor"."<br>";
        }

        $OP=1;
        switch($OP){
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
        for ($i=0;$i<10;$i++){
            echo $i." ";
        }
    ?>
</body>
</html>