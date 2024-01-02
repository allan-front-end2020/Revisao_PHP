<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array Multidimensional - ARRAY DENTRO DE OUTRO ARRAY</h1>
   <?php
      
      $lista_coisas = [
          'frutas' => [1 =>'Banana', 2=>'Maçã',  3=>'Morango',  4=>'Uva'],
          'pessoas' => [ 1=>'João',  2=>'Maria', 3=>'Carlos', 4=>'Ana']
      ];

      // Exibindo o array
      echo '<pre>';
      print_r($lista_coisas);
      echo '</pre>';
      echo '<hr/>';


     // recuperando item expecifico
     echo '<h1> recuperando item expecifico <h1/>';
     echo '<pre>';
     echo $lista_coisas['frutas'] [3];
     echo '<pre>';
     echo $lista_coisas['pessoas'] [2];
      echo '</pre>';
   ?>
</body>
</html>
