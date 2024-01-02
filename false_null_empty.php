<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Null- False - empty</h1>


   <?php
    $funcionario1 = null;
    $funcionario2 = '';

   if(is_null($funcionario1)){
      echo  'sim e null';
   }else{
    echo  'não e null';
   }
   echo  '<br />';

   if(is_null($funcionario2)){
    echo  'sim e null';
   }else{
      echo  'não e null';
 }
   echo  '<br />';

   if(empty($funcionario1)){
    echo  'sim e vazia';
   }else{
      echo  'não esta vazia';
 }



   ?>
   
</body>
</html>
