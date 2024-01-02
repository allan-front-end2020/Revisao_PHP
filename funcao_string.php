<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

   $texto = "Curso de Php para o trabalo na B-ling <br/>";
   
   echo $texto;

   echo strtolower ($texto);
   echo '<hr />';
   echo strtoupper ($texto);
   echo '<hr />';
   echo ucfirst ($texto);
   echo '<hr />';
   echo strlen ($texto);
   echo '<hr />';
   echo str_replace ( 'Php ', 'Javascript ', $texto);
   echo substr ($texto, 1,  4 );






?>



</body>
</html>