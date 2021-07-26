<?php
 
 $url  = file_get_contents( 'https://api.giphy.com/v1/gifs/search?q=rick%20and%20morty&limit=10&api_key=zYWKMuWRKOnuDTHLG7WL2evKQisyxcGZ' );
 
 $json = json_decode( $url );
 
 foreach ( $json as $values ) {
 
     foreach ( $values as $value ) {
 
         if ( isset( $value->images->original->url ) ) {
 
             echo "<img src='{$value->images->original->url}' width='100' height='100'>";
         }
     }
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Practica</h1>
</body>
</html>