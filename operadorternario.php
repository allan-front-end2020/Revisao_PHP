<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //string
    $nome = 'Allan Tavares';

    //int
    $idade = 69;

    //float
    $peso = 48.5;


?>

<h5>Ficha cadastral</h5>
<br/>
<?php
 if($idade >= 16 &&  $idade <= 69 && $peso >= 50){
    echo "Atende os requisitos";
 } else{
    echo "não atende os requisitos";
 }




?>

</body>
</html>
