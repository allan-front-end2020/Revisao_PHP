<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array Funções nativas</h1>
   <?php

   echo '<h1>is_array</h1>';
   echo '<h5>verifica se é um array</h5>';

   $array = 'string';

   $retorn = is_array($array);
   if($retorn){
    echo 'Sim, é array';
   }else{
    echo 'Não, é array'; 
   }










      
   ?>
</body>
</html>
