<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //sequenciais (numericos)
     $lista_fruta = array('Banana', 'Maça', 'Uva');

     echo '<hr/>';
    // inclui itens no array
     $lista_fruta[] = 'morango';

     echo '<hr/>';
    // recupera item no array
     echo $lista_fruta[0] ;




    echo'<pre>';
     var_dump($lista_fruta);
     echo '<hr/>';

     echo'<pre>';
     print_r($lista_fruta);
    
    
    ?>
     <h1>Array associativo</h1>
    <?php
     $lista_fruta1 = array('a'=> 'Banana','b'=> 'Maça', 'c'=> 'Uva');
     echo'<pre>';
     var_dump($lista_fruta1);


     
    ?>
</body>
</html>